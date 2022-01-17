<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Contact;
use App\Models\Doctors;
use App\Models\Gallerys;
use App\Models\Services;
use App\Models\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$doctors=Doctors::orderByDesc('id')->paginate(3); //Paginate

       $doctors= Doctors::orderByDesc('id')
       ->where('doctors.status' , '=' , 'Active')
       ->limit(4)
       ->get(); //Limit
       $services = Services::orderByDesc('id')
       ->where('services.status' , '=' , 'Active')
       ->limit(4)
       ->get();
       $gallerys = Gallerys::orderByDesc('id')
       ->where('gallerys.status' , '=' , 'Active')
       ->limit(4)
       ->get();
       $doctorsAppoint = Doctors::orderByDesc('id')
       ->limit(3)->
       get();
       $contact_us=Contact::first();

       $sliders = Sliders::orderByDesc('id')
       ->where('sliders.status' , '=' , 'Active')
       ->limit(5)
       ->get();

       $clients = Clients::orderByDesc('id')
       ->where('clients.status' , '=' , 'Active')
       ->get();

       $contacts =  DB::table('contacts')->count();
        if($contacts == 0){
            $contacts = new Contact();
            $contacts->save();
        }
       return view('app.home',[
            'sliders' => $sliders,
            'services'=> $services,
            'doctors' => $doctors,
            'doctorsAppoint' => $doctorsAppoint,
            'clients' => $clients,
            'gallerys' => $gallerys,
            'contact_us' => $contact_us,
        ]);
    }

    public function services($id)
    {

        $services = Services::findOrFail($id);

        $gallerys = Gallerys::orderByDesc('id')->limit(4)->get();
        $contact_us=Contact::first();
        $doctorsAppoint = Doctors::orderByDesc('id')->limit(3)->get();

        $contacts =  DB::table('contacts')->count();
        if($contacts == 0){
            $contacts = new Contact();
            $contacts->save();
        }
        return view('app.services',[
            'contact_us' => $contact_us,
            'doctorsAppoint' => $doctorsAppoint,
            'gallerys' => $gallerys,
            'services'=> $services,
        ]);
    }
    public function contact()
    {

        $gallerys = Gallerys::orderByDesc('id')
        ->where('gallerys.status' , '=' , 'Active')
        ->limit(4)
        ->get();
        $contact_us=Contact::first();
        $doctorsAppoint = Doctors::orderByDesc('id')->limit(3)->get();

        $contacts =  DB::table('contacts')->count();
        if($contacts == 0){
            $contacts = new Contact();
            $contacts->save();
        }
        return view('app.contact' , [
            'contact_us' => $contact_us,
            'doctorsAppoint' => $doctorsAppoint,
            'gallerys' => $gallerys,

        ]);
    }
}
