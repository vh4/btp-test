<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Learningactivity;
use Illuminate\Support\Facades\Validator;

class LearningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Learningactivity::all();
        return response()->json(
            $data,
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = [
            'metode' => 'required|min:5',
        ];

        if($request->januari == null){
            $request['januari']= 'x';
        }
        if($request->februari == null){
            $request['februari'] = '';
        }
        if($request->maret == null){
            $request['maret'] = '';
        }
        if($request->april == null){
            $request['april'] = '';
        }
        if($request->mei == null){
            $request['mei'] = '';
        }
        if($request->juni == null){
            $request['juni'] = '';
        }

        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        Learningactivity::create($request->all());

        $number = Learningactivity::all()->count();
        $request['nomor'] = $number;
        return response()->json($request->all(), 200);

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
        //
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
}
