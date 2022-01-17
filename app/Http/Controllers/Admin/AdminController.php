<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $contacts =  DB::table('contacts')->count();
        if($contacts == 0){
            $contacts = new Contact();
            $contacts->save();
        }
        return view('admin.Admin_dashboard',[
            'contact_us' => Contact::first(),
        ]);
    }
}
