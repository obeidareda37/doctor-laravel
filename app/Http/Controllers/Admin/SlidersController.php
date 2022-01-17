<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request= request();
        $filters= $request->query();
        $slider = Sliders::when($request->query('date_form') , function($query ,$date){
            $query->where('sliders.created_at', 'Like', '%' . $date . '%');})
            ->paginate(5);

            return view('admin.sliders.index',[
            'sliders' =>  $slider,
            'filters' =>  $filters,
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
        return view('admin.sliders.create', [
            'slider' => new Sliders(),
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
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png|max:1024000',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $data['image'] = $image->store('sliders', 'images');
        }



        $slider = Sliders::create($data);

        return redirect()
            ->route('admin.sliders.index')->with('success',"Slider ($slider->id) Created!!");

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
        $slider = Sliders::findOrFail($id);

        return view('admin.sliders.edit', [
            'slider' => $slider,
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
        $slider = Sliders::findOrFail($id);

        $request->validate([
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png|max:1024000',
        ]);

        $old_image = $slider->image;

        $data = $request->except('image');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $data['image'] = $image->store('sliders', 'images');
        }

        $slider->update($data);

        if ($old_image && isset($data['image'])) {
            Storage::disk('images')->delete($old_image);
        }

        return redirect()->route('admin.sliders.index')->with('success',"Slider ($slider->id) Updated!!");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Sliders::findOrFail($id);
        $slider->delete();
        if ($slider->image) {
            Storage::disk('images')->delete($slider->image);
        }

        return redirect()
            ->route('admin.sliders.index')->with('success',"Slider ($slider->id) Deleted!!");
    }

    public function deleteAll(Request $request)
    {

        $ids = $request->ids;
        DB::table("sliders")->whereIn('id',explode(",",$ids))->delete();

        return response()->json(['success'=>"Deleted successfully."]);
    }
}
