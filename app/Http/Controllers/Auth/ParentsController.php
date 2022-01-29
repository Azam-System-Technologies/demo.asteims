<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    function index()
    {
        $parents['parent'] = DB::table('parents')->get();
        return view('parents.index',  $parents);
    }


    function insert(Request $req)
    {
        if($req->hasFile('photo'))
        {
            // $path = $req->file('photo')->store('public/images');

            $req->validate([
                'photo' => 'image | mimes:jpeg,png,jpg',
            ]);

            $distination_path = 'public/images';
            $image = $req->file('photo');
            $image_name= $image->getClientOriginalName();
            $path = $req->file('photo')->storeAs($distination_path , $image_name);

        }
        DB::table('parents')->insertGetId([

            'father_name'=>$req->father_name,
            'father_profession'=>$req->father_profession,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'address'=>$req->address,
            'father_cnic'=>$req->father_cnic,
            'father_qualification'=>$req->father_qualification,
            'father_office_addresss'=>$req->father_office_addresss,
            'father_nationality'=>$req->father_nationality,
            'mother_name'=>$req->mother_name,
            'mother_profession'=>$req->mother_profession,
            'mother_phone'=>$req->mother_phone,
            'mother_address'=>$req->mother_address,
            'mother_cnic'=>$req->mother_cnic,
            'mother_qualification'=>$req->mother_qualification,
            'mother_office_addresss'=>$req->mother_office_addresss,
            'mother_nationality'=>$req->mother_nationality,
            'name'=>$req->name,
            'guardian_profession'=>$req->guardian_profession,
            'guardian_phone'=>$req->guardian_phone,
            'guardian_address'=>$req->guardian_address,
            'guardian_cnic'=>$req->guardian_cnic,
            'guardian_qualification'=>$req->guardian_qualification,
            'guardian_office_addresss'=>$req->guardian_office_addresss,
            'guardian_nationality'=>$req->guardian_nationality,
            'guardian_realation_with_child'=>$req->guardian_realation_with_child,
            'username'=>$req->username,
            'password'=>$req->password,
            'photo'=>$req->file('photo')->getClientOriginalName(),
        ]);

        return redirect(route('index'));
    }

    function show($parentsID)
    {

        $parents = DB::table('parents')->find($parentsID);
        return view('parents.show' , ['parent'=> $parents]);
    }

    function edit($id)
    {

        $parents = DB::table('parents')->find($id);
        return view('parents.edit')->with('parent', $parents);
    }

    function update(Request $req)
    {
        if($req->hasFile('photo'))
        {
            // $path = $req->file('photo')->store('public/images');

            $req->validate([
                'photo' => 'image | mimes:jpeg,png,jpg',
            ]);

            $distination_path = 'public/images';
            $image = $req->file('photo');
            $image_name= $image->getClientOriginalName();
            $path = $req->file('photo')->storeAs($distination_path , $image_name);

        }

        DB::table('parents')->where('id' , $req->pid)->update([
            'father_name'=>$req->father_name,
            'father_profession'=>$req->father_profession,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'address'=>$req->address,
            'father_cnic'=>$req->father_cnic,
            'father_qualification'=>$req->father_qualification,
            'father_office_addresss'=>$req->father_office_addresss,
            'father_nationality'=>$req->father_nationality,
            'mother_name'=>$req->mother_name,
            'mother_profession'=>$req->mother_profession,
            'mother_phone'=>$req->mother_phone,
            'mother_address'=>$req->mother_address,
            'mother_cnic'=>$req->mother_cnic,
            'mother_qualification'=>$req->mother_qualification,
            'mother_office_addresss'=>$req->mother_office_addresss,
            'mother_nationality'=>$req->mother_nationality,
            'name'=>$req->name,
            'guardian_profession'=>$req->guardian_profession,
            'guardian_phone'=>$req->guardian_phone,
            'guardian_address'=>$req->guardian_address,
            'guardian_cnic'=>$req->guardian_cnic,
            'guardian_qualification'=>$req->guardian_qualification,
            'guardian_office_addresss'=>$req->guardian_office_addresss,
            'guardian_nationality'=>$req->guardian_nationality,
            'guardian_realation_with_child'=>$req->guardian_realation_with_child,
            'username'=>$req->username,
            'password'=>$req->password,
        ]);


        return redirect('parents');
    }

    function delete($id)
    {
        DB::table('parents')->where('id' , $id)->delete();
        return redirect('parents');
    }
}
