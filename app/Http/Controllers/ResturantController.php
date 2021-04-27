<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\resturant;
use Illuminate\Support\Facades\Redirect;

class ResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {

       $restuantList = resturant::all();

        return view('Resturant.index', ['user' => $restuantList ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   
      //  echo "fvd";
    //  return Redirect('Restuant');
     return view('Resturant.resturantcreate');
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $res = new resturant();

        $res->resturname = $req->namess;
        $res->category  = $req->category;
        $res->location = $req->location;

        $res->save();
        return Redirect('Resturant');

        
     
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
      $data = resturant::where('id', $id)->first();
    return view ('Resturant.resturantupdate',['id'=>$data->id,'category'=>$data->category,'location' => $data->location,'resturantname'=>$data->resturname]);

        
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
        
        $res = new resturant();

       $res = resturant::find($id);

        $res->resturname = $request->namess;
        $res->category  = $request->category;
        $res->location = $request->location;

        $res->save();

        return Redirect("Resturant"); 


   

     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $res=resturant::find($id);
          
          $res->delete();

          return Redirect('Resturant');

    }
}
