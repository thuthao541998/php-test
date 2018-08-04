<?php

namespace App\Http\Controllers;

use App\Apartment;
use Illuminate\Support\Facades\Input;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Apartment::all();
        return view('admin.apartment.list')->with('list_obj', $list_obj);
    }
    public function indexUser()
    {
        $list_obj = Apartment::all();
        return view('user.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.apartment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $obj = new Apartment();
        $obj->name = Input::get('name');
        $obj->address = Input::get('address');
        $obj->price = Input::get('price');
        $obj->overView = Input::get('overView');
        $obj->detail = Input::get('detail');
        $obj->images = Input::get('images');
        $obj->save();
        return redirect('/admin/apartment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Apartment::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.apartment.show')
            ->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Apartment::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.apartment.edit')
            ->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $obj = Apartment::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->address = Input::get('address');
        $obj->price = Input::get('price');
        $obj->overView = Input::get('overView');
        $obj->detail = Input::get('detail');
        $obj->images = Input::get('images');
        return redirect('/admin/apartment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Apartment::find($id);
        if ($obj == null) {
            return response('apartment not found or has been deleted!', 404);
        }
        $obj->delete();
        return response('Deleted', 200);
    }
}
