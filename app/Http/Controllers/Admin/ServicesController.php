<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $request = request();
        $filters = $request->query();
        $services = Services::when($request->query('name') ,function($query ,$name){
            $query->where('name','LIKE', '%' . $name . '%');
        })->paginate();

        return view('admin.services.index',[
            'services' =>  $services,
            'filters' => $filters,
            'contact_us' => Contact::first(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create', [
            'service' => new Services(),
            'contact_us' => Contact::first(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|max:220',
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png|max:1024000',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $data['image'] = $image->store('Services', 'images');
        }



        $service = Services::create($data);

        return redirect()
            ->route('admin.services.index')->with('success',"Service ($service->name) Created!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service =Services::findOrFail($id);

        return view('admin.services.edit', [
        'service' => $service,
        'contact_us' => Contact::first(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Services::find($id);

        $request->validate([
            'name' =>'required|max:220',
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png|max:1024000',
        ]);
        $old_image = $service->image;

        $data = $request->except('image');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $data['image'] = $image->store('Services', 'images');
        }


        $service->update ($data);



        if($old_image && isset($data['image'])){
        Storage::disk('public')->delete($old_image);

    }
        return redirect()
            ->route('admin.services.index')->with('success',"Service ($service->name) Updated!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Services::findOrFail($id);
        $service->delete();
        if ($service->image) {
            Storage::disk('images')->delete($service->image);
        }

        return redirect()
            ->route('admin.services.index')->with('success',"Service ($service->name) Deleted!!");
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("services")->whereIn('id',explode(",",$ids))->delete();

        return response()->json(['success'=>"Deleted successfully."]);
    }
}
