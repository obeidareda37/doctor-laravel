<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointments;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentsController extends Controller
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
        $appointments = Appointments::when($request->query('name') ,function($query ,$name){
            $query->where('name','LIKE', '%' . $name . '%');
        })->paginate();

        return view('admin.appointments.index',[
            'appointments' =>  $appointments,
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
            'gender' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'reason' =>'required|max:220',
        ]);

        Appointments::create( $request->all() );
        return redirect()->back()->with('appointment',"Appointment Sent..");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sender = Appointments::findOrFail($id);
        return view('admin.appointments.show',[
            'sender' => $sender,
            'contact_us' => Contact::first(),

        ]);
    }
    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("appointments")->whereIn('id',explode(",",$ids))->delete();

        return response()->json(['success'=>"Deleted successfully."]);
    }

}
