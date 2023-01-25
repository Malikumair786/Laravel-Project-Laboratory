<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\User;
use App\models\Doctor;
use App\models\Services;
use App\models\Appointment;

use function GuzzleHttp\Promise\all;

class homeController extends Controller

{
    //
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctor = doctor::all();
            $service = Services::all();
            return view('user.home', compact('doctor', 'service'));
        }
    }
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->userType == '0') {
                $doctor = doctor::all();
                $service = Services::all();
                return view('user.home', compact('doctor', 'service'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }
    public function appointment(Request $requests)
    {
        $data = new appointment;
        $data->name = $requests->name;
        $data->email = $requests->email;
        $data->date = $requests->date;
        $data->phone = $requests->number;
        $data->message = $requests->message;
        $data->doctor = $requests->doctor;
        $data->status = 'in progress';
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message', 'Appointment Request successfully, we will contact you soon.');
    }
    public function my_appointment()
    {

        if (Auth::id()) {
            $user_id = Auth::user()->id;
            $appoint = appointment::where('user_id', $user_id)->get();
            return view('user.my_appointment', compact('appoint'));
        } else {
            return redirect()->back();
        }
    }
    public function cancel_appoint($id){
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Appointment deleted successfully');
    }
}
