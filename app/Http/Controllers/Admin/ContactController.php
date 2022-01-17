<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts =  DB::table('contacts')->count();
        if($contacts == 0){
            $contacts = new Contact();
            $contacts->save();
        }

        $contact = Contact::findOrFail($id);

        return view('admin.contact.edit',[
            'contact' => $contact,
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
        $contact = Contact::findOrfail($id);

        $data = $request->except('bg_image' , 'logo');
        $old_bg_image = $contact->bg_image;
        $old_logo = $contact->logo;
        $request->validate([
            'country' => 'required|max:220',
            'city' => 'required|max:220',
            'email' => 'required|email',
            'postal_code' => 'required|numeric',
            'phone' => 'required|numeric',
            'first_time' => 'required',
            'last_time' => 'required',
            'facebook_account' => 'required',
            'twitter_account' => 'required',
            'instagram_account' => 'required',
            'bg_image' => 'nullable|mimes:jpg,jpeg,bmp,png|max:1024000',
            'logo' => 'nullable|mimes:jpg,jpeg,bmp,png|max:1024000',
        ]);

        if ($request->hasFile('bg_image') && $request->file('bg_image')->isValid()) {
            $image = $request->file('bg_image');
            $data['bg_image'] = $image->store('Contacts', 'images');
        }
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $image = $request->file('logo');
            $data['logo'] = $image->store('Contacts', 'images');
        }

        $contact->update($data);

        if ($old_bg_image && isset($data['bg_image'])) {
            Storage::disk('images')->delete($old_bg_image);
        }
        if ($old_logo && isset($data['logo'])) {
            Storage::disk('images')->delete($old_logo);
        }

        return redirect()
        ->route('admin.contact.edit',1)->with('success' , "Information Saved");

        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
