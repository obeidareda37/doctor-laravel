<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Gallerys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GallerysController extends Controller
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
        $gallery = Gallerys::when($request->query('date_form') , function($query ,$date){
            $query->where('gallerys.created_at', 'Like', '%' . $date . '%');})
            ->paginate();

            return view('admin.gallerys.index',[
            'gallerys' =>  $gallery,
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
        return view('admin.gallerys.create', [
            'gallery' => new Gallerys(),
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
            $data['image'] = $image->store('gallerys', 'images');
        }



        $gallery = Gallerys::create($data);

        return redirect()
            ->route('admin.gallerys.index')->with('success',"Gallery ($gallery->id) Created!!");

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
        $gallery = Gallerys::findOrFail($id);

        return view('admin.gallerys.edit', [
            'gallery' => $gallery,
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
        $gallery = Gallerys::findOrFail($id);

        $request->validate([
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png|max:1024000',
        ]);

        $old_image = $gallery->image;

        $data = $request->except('image');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $data['image'] = $image->store('gallerys', 'images');
        }

        $gallery->update($data);

        if ($old_image && isset($data['image'])) {
            Storage::disk('images')->delete($old_image);
        }


        return redirect()->route('admin.gallerys.index')->with('success',"Gallery ($gallery->id) Updated!!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallerys::findOrFail($id);
        $gallery->delete();
        if ($gallery->image) {
            Storage::disk('images')->delete($gallery->image);
        }

        return redirect()
            ->route('admin.gallerys.index')->with('success',"Gallery ($gallery->id) Deleted!!");
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("gallerys")->whereIn('id',explode(",",$ids))->delete();

        return response()->json(['success'=>"Deleted successfully."]);
    }
}
