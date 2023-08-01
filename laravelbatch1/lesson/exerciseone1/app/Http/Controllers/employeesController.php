<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function index(){

        $data['employeedata'] = [
            'name'=>'Aung Ko Ko',
            'email'=>'aungkoko@gmail.com',
            'phone'=>'0912345'
        ];

        // dd($data);   ( => it's kana like ->  console.log)

        return view('employees/index',$data);
    }

    public function passingdataone(){
        $fullname = "Honey Nway Oo";
        $city = "Mandalay";

        // return view('employees/dataone',["fullname"=>$fullname]);
        return view('employees/dataone',["fullname"=>$fullname,"city"=>$city]);
    }

    public function passingdatatwo(){

        $greeting = "Have a nice day";

        $students = [
            "Honey Nway Oo",
            "Mandalay",
            "011111"
        ];

        // dd($students);

        return view('employees/datatwo',["greeting"=>$greeting,"students"=>$students]);
    }


    public function passingdatathree(){

        $greeting = "Have a nice day";

        $students = [
            "Honey Nway Oo",
            "Mandalay",
            "011111"
        ];

        return view('employees/datathree')->with("greeting",$greeting)->with("students",$students);
    }


    public function passingdatafour(){

        $greeting = "Have a nice day";

        $students = [
            "Honey Nway Oo",
            "Mandalay",
            "011111"
        ];

        // return view('employees/datafour',compact("greeting"),compact("students"));
        // return view('employees/datafour',compact("greeting"))->with("students",$students);
        // return view('employees/datafour')->with(compact("greeting","students"));
        // return view('employees/datafour')->with(compact("greeting"))->with(compact("students"));
        return view('employees/datafour',compact("greeting","students"));
    }


    public function show(){

        $data['employeedata'] = [
            'name'=>'Aung Ko Ko',
            'email'=>'aungkoko@gmail.com',
            'phone'=>'0912345'
        ];

        return view('employees/show',$data);

    }


    public function edit(){

        $data['employeedata'] = [
            'name'=>'Aung Ko Ko',
            'email'=>'aungkoko@gmail.com',
            'phone'=>'0912345'
        ];

        return view('employees/edit',compact("data"));

    }



    public function update(){

        $data['employeedata'] = [
            'name'=>'Aung Ko Ko',
            'email'=>'aungkoko@gmail.com',
            'phone'=>'0912345'
        ];

        return view('employees/update',['employee'=>$data['employeedata']]);

    }



}


// 4CP