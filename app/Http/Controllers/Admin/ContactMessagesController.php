<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactMessagesController extends Controller
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
        $contact_message = ContactMessage::
        when($request->query('name') ,function($query ,$name){
            $query->where('name','LIKE', '%' . $name . '%');
        })->paginate();

        return view('admin.contact_message.index',[
            'contact_message' =>  $contact_message,
            'filters' =>  $filters,
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
            'name' => 'required|max:220',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' =>'required',
        ]);


        ContactMessage::create( $request->all() );
        return redirect()->back()->with('success',"Message Sent..");

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sender = ContactMessage::findOrFail($id);
        return view('admin.contact_message.show',[
            'sender' => $sender,
            'contact_us' => Contact::first(),

        ]);
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("contact_messages")->whereIn('id',explode(",",$ids))->delete();

        return response()->json(['success'=>"Deleted successfully."]);
    }
}
