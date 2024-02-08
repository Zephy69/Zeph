<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ecom;

class EcomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ecoms=Ecom::all();
        return view('admin.pages.product.index',compact('ecoms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ecom=new Ecom();
        $ecom->Name=$request->name;
        $ecom->Price=$request->price;
        $ecom->Description=$request->desc;
        $ecom->Code=$request->code;
        $ecom->Phone=$request->phone;
        if($request->img){
            $request->validate([
                'img'=>'image|mimes:jpg,jpeg,png,webp,gif|max:50000000'
            ]);
            $image=$request->img;
            $imageextension=$image->getClientOriginalExtension();
            $imgfilename=time().".".$imageextension;
            $image->move(('Images'),$imgfilename);
            $ecom->Image=$imgfilename;
        }
        $ecom->save();
        return redirect('/admin/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ecom=Ecom::find($id);
        return view('admin.pages.product.edit',compact('ecom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ecom=Ecom::find($id);
        if($request->img){
            $request->validate([
                'img'=>'image|mimes:jpg,jpeg,png,webp,gif|max:50000000'
            ]);
            $image=$request->img;
            $imageextension=$image->getClientOriginalExtension();
            $imgfilename=time().".".$imageextension;
            $image->move(('Images'),$imgfilename);
            $ecom->Image=$imgfilename;
        }
        $ecom->Name=$request->name;
        $ecom->Price=$request->price;
        $ecom->Description=$request->desc;
        $ecom->Code=$request->code;
        $ecom->Phone=$request->phone;
        $ecom->save();
        return redirect('/admin/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodelete=Ecom::find($id);
        $prodelete->destroy($id);
        return redirect('/admin/dashboard');
    }
}
