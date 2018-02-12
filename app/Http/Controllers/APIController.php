<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donate;
use App\Appointment;
use App\Place;
use App\Blood;
use Illuminate\Support\Facades\Mail;
use DB;

class APIController extends Controller
{
    public function donateBlood(Request $request){
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

        $blood = new Blood;
        $blood->hymoglobin = 17;
        $blood->doner_id = $id;
        $blood->assured = 1;
        $blood->rbc = 2;
        $blood->wbc = 3;
        $blood->patelets = 4;
        $blood->hiv = 0;
        $blood->blood_groop = $request->blood_group;
        $blood->place_id = 1;
        $blood->loc_id = 1;
        $blood->save();

        // $ref = $this->createAppointment(1,1,$id,$request->date,"donor");
        // $title = "Blood donation Information";
        // $email = $request->email;
        // $content = "this is a blood donation details. Please Reach at Red Cross Blood Bank (Unit 6, Capital Hospital Campus, Bhubaneswar, Odisha 751001) at 10:00 AM IST. Your reference no is :".$ref;
        //
        // Mail::send('email.template', ['title' => $title, 'content' => $content], function ($message) use($email)
        // {
        //     $message->to($email);
        //     $message->subject("Appointment fixed");
        // });
        return redirect(url('/'));
    }

    public function createAppointment($place,$location,$user,$time,$type){
        $appointment = new Appointment;
        $appointment->type = $type;
        $appointment->u_id = $user;
        $appointment->place_id = $place;
        $appointment->loc_id = $location;
        $appointment->appm_time = $time;
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
        //redirect file to set appointment
        $reference = $this->createAppointment($request->place,$request->location,$id,$request->date,"donor");
        return $reference;
    }

    public function getPlace(){
        $place = Place::all();

        return $place;
    }

    public function getLocation($id){
        $loc = DB::table('locations')->where('place_id',$id)->get();

        return $loc;
    }

    public function getBloodDetails(Request $request){
      $details = Blood::where('blood_groop',$request->blood_groop)->get();
      return view('recieve.details',['details'=> $details]);
    }

    public function getBlood($id) {
      $details = Blood::find($id);

      return true;
    }
}
