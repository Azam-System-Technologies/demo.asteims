<?php

namespace App\Http\Controllers\Auth;
use App\Models\Studentatt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentattController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $studentatts =Studentatt::all();
        
        return view ('markattendance.index')->with('studentatts', $studentatts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('markattendance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'file_path' => 'required|mimes:jpg,png,jpeg,svg|max:5048'
        // ]);
        
        $input = $request->all();
        // if($request->hasFile('file_path'))
        // {
        //     $destination_path = 'public/images/markattendanceimages';
        //     $image = $request->file('file_path');
        //     $image_name = $image->getClientOriginalName();
        //     $path = $request->file('file_path')->storeAs($destination_path,$image_name);
    
        //     $input['file_path'] = $image_name;
      
        //  }



        Studentatt::create($input);
        return redirect('studentatts')->with('flash_message', 'Student Attendance Addedd!');
         
    }
       
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentatt = Studentatt::find($id);
        return view('markattendance.show')->with('studentatts', $studentatt);
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
    public function destroy(Request $request)
    {
       //
    }
}
