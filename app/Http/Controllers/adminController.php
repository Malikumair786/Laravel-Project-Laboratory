<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Services;
use App\Models\Appointment;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function add_doc_view(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request){
        $doctor = new doctor;
        $image = $request->file;
        $imageName = time().".".$image->getClientOriginalExtension();
        
        $request->file->move('doctorImage',$imageName);
        $doctor->image = $imageName;
        
        $doctor->name = $request->DoctorName;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $doctor->save();
        return redirect()->back()->with('message',"Doctor added successfully");
    }

    public function add_new_services(){
        return view('admin.add_services');
    }
    
    public function upload_services(Request $request){
        $services = new services;
        $image = $request->file;
        $ServImageName = time().".".$image->getClientOriginalExtension();

        $request->file->move('serviceImage',$ServImageName);
        $services->image = $ServImageName;

        $services->TestName = $request->testName;
        $services->type = $request->type;
        $services->price = $request->price;
        $services->save();
        return redirect()->back()->with('message',"Test Added Successfully");
    }

    public function show_appoinmtent(){

        $data = appointment::all();

        return view('admin.show_appoinmtent', compact('data'));
    }

    public function approved($id){
        $data = appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();

    }
    public function cancelled($id){
        $data = appointment::find($id);
        $data->status = 'cancelled';
        $data->save();
        return redirect()->back();

    }

    public function our_doctors(){
        $doctor = doctor::all();
        return view('admin.our_doctors', compact('doctor'));
    }
    public function updateDoctor($id){
        $doctor = doctor::find($id);
        // $doctor = doctor::find($id)->get()->all();
        return view('admin.updateDoctor',compact('doctor'));
    }

    public function edit_doctor(Request $request,$id){
        $doctor = doctor::find($id);

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;


        $image = $request->file;
        if($image){
        $imageName = time().".".$image->getClientOriginalExtension();

        $request->file->move('doctorImage',$imageName);
        $doctor->image = $imageName;
        }
        $doctor->save();
        return redirect()->back()->with('message',"Doctor data Updated Successfully");
    }

    public function deleteDoctor($id){
        $doctor = doctor::find($id);

        $doctor->delete();
        return redirect()->back();
    }

    
}
