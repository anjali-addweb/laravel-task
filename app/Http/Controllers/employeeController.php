<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = employee::all();
        return view('view',compact('data')); 
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

        //dd($request);
      //    $validator = Validator::make($request->all(), [

      //   'name' => 'required',

      //   'image' => 'required|image|mimes:jpeg,png,jpg',

      // ]);
      //    $error=Validator::make($request->all(),$validator);
      //    if($error->fails()){
      //       return response()->json(['errors'=>$error->error()->all()]);
      //    }
        $image = $request->file('image');
        
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $employee=array([

        'image'=>$new_name,
        'name' =>$request->name,
        'email'=>$request->email,
        'contact_no'=>$request->contact
        ]
);
        employee::create($employee);
        
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
         $data = employee::findOrFail($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request);

        $employee = employee::find ($request->id);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $employee->name = $request->name;
        $employee->contact_no = $request->contact;
         $employee->email = $request->email;
        $employee->save();
        return response()->json($employee);
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {

        $employee = employee::find ($request->id)->delete();
  return response()->json();
    }
}
