<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ClientsController extends Controller
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
        $clients = Clients::when($request->query('name') ,function($query ,$name){
            $query->where('name','LIKE', '%' . $name . '%');
        })->paginate();

        return view('admin.clients.index',[
            'clients' =>  $clients,
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

        return view('admin.clients.create',[
            'client' =>  new Clients(),
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
            'country' => 'required|max:220',
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png|max:1024000',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $data['image'] = $image->store('Clients', 'images');
        }

        $data['user_id'] = Auth::id();


        $client = Clients::create($data);

        return redirect()
            ->route('admin.clients.index')->with('success',"Client ($client->name) Created!!");

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
        $client = Clients::findOrFail($id);

        return view('admin.clients.edit' ,[
            'client' => $client,
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
        $client = Clients::find($id);

        $request->validate([
            'name' =>'required|max:220',
            'country' => 'required|max:220',
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png|max:1024000',
        ]);
        $old_image = $client->image;
        $data = $request->except('image');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $data['image'] = $image->store('Clients', 'images');
        }

        $client->update($data);

        if($old_image && isset($data['image'])){
            Storage::disk('public')->delete($old_image);

        }
        return redirect()
            ->route('admin.clients.index')->with('success',"Client ($client->name) Updated !!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Clients::findOrfail($id);
        $client->delete();
        if ($client->image) {
            Storage::disk('images')->delete($client->image);
        }

        return redirect()->route('admin.clients.index')->with('success' , "Client ($client->name) Deleted !!");
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        DB::table("clients")->whereIn('id',explode(",",$ids))->delete();

        return response()->json(['success'=>"Deleted successfully."]);
    }
}
