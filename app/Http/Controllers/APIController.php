<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donate;
use App\Appointment;

class APIController extends Controller
{
    public function donateBloodDetails(Request $request){
//        $donate = new Donate;
//        $donate->name = $request->name;
//        $donate->blood_group = $request->blood_group;
//        $donate->email = $request->email;
//        $donate->phone = $request->phone;
//        $donate->address = $request->address;
//        $donate->weight = $request->weight;
//        $donate->age = $request->age;
//        $donate->gender = $request->gender;
//        $donate->save();

        $id = DB::table('donates')->insertGetId([
            'name' =>  $request->name,
            'blood_group' => $request->blood_group,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'weight' => $request->weight,
            'age' => $request->age,
            'gender' => $request->gender
        ]);
        $reference = $this->createAppointment($request->place,$request->location,$id,$request->date,"donor");
        return $reference;
    }

    public function createAppointment($place,$location,$user,$date,$type){
        $appointment = new Appointment;
        $appointment->type = $type;
        $appointment->u_id = $user;
        $appointment->place_id = $place;
        $appointment->loc_id = $location;
        $appointment->date = $date;
        $appointment->reference = "BLOOD-".$user;
        $appointment->save();

        return "BLOOD-".$user;
     }

    public function recieveBlood(Request $request){
        $id = DB::table('recievers')->insertGetId([
            'name' =>  $request->name,
            'blood_group' => $request->blood_group,
            'email' => $request->email,
            'phone' => $request->phone,
            'age' => $request->age,
            'gender' => $request->gender,
            'amount' => $request->amount
        ]);
        $reference = $this->createAppointment($request->place,$request->location,$id,$request->date,"donor");
        return $reference;
    }
}
