<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.index');
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
        //first check the ID
        $user = User::find($id);
        $data=array();
        if($user){
            //show the form and edit
            $data['user'] = $user;
        }else{
            $data['message'] = 'User Not Found!';
        }
        return view('user.edit', $data);
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
        //
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
    /**
     * Show the the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDownline($id)
    {
        $user = User::find($id);
        $data = array();
        if($user){  
            if($user['sponsor_id'] == 0 ){
                $downline = User::all();
                // array_push($data, $downline);
                $data['user'] = $downline;
            }else{
                $newDownline = array();
                array_push($newDownline, $user);
                $downline = User::where('sponsor_id', $id)
                    ->get();
                if (count($downline) != 0) {
                    foreach($downline as $line){
                        array_push($newDownline, $line);
                    }
                }
                $data['user'] = $newDownline;
            }
            
        }else{
            if (!(int)$id) {
                $data['error'] = 'User ID is NOT Valid';
            } else {
                $data['error'] = 'User Not Found';
            }
        }
        
        return response()->json(['data'=>$data], 200);
    }

    function exer1(){
        return view('user.exer1');
    }
}
