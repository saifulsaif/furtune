<?php

namespace App\Http\Controllers;

use DB;
use App\doctors;
use App\appointment;
use App\Mail\sendmail;
use App\listAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(appointment $appointment)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(appointment $appointment)
    {
        //
    }

    protected $notification = array();
    public function getDoctor()
    {
        $doctors = doctors::with('times')->orderBy('id', 'DESC')->get();
        $site_infos= first_row_date('site_infos');
        $notification = $this->notification;
        return view('fontend.appoinment.appointment',compact('doctors','site_infos', 'notification'));
    }


    public function getAppoinmet($id)
    {
       $doctors = doctors::with('times')->orderBy('id', 'DESC')->where('id',$id)->first();
       $site_infos= first_row_date('site_infos');
       return view('fontend.appoinment.appointment_form',compact('doctors','site_infos'));
    }
    public function sendAppointment(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'email' => 'required|email',
            'dateOfAppoinment' => 'required',
            'timeAppoinment' => 'required',
            'phoneNumber' => 'required',
        ]);
        $email = Config::get('mail.from.address');
            // dd($email);
        $subject = 'Appointment Request For ' . doctors::findOrFail($request->doctor_id)->doctor_name;
        $mail_data = array(
            'name' => $request->firstName,
            'age' => $request->lastName,
            'date' => $request->dateOfAppoinment,
            'time' => $request->timeAppoinment,
            'number' =>  $request->phoneNumber,
            'about' => $request->diseaseTopic,
            'email' => $request->email,
            'app_name' => config('app.name'),
        );
        $appointment = new listAppointment;
        $appointment->doctor_id = $request->doctor_id;
        $appointment->firstName = $request->firstName;
        $appointment->lastName = $request->lastName;
        $appointment->email = $request->email;
        $appointment->dateOfAppoinment = $request->dateOfAppoinment;
        $appointment->timeAppoinment = $request->timeAppoinment;
        $appointment->phoneNumber = $request->phoneNumber;
        $appointment->diseaseTopic = $request->diseaseTopic;

        if($appointment->save()) {
            #Mail Send
            Mail::send('mail.mailtemplate', $mail_data, function ($mail) use ($mail_data, $email, $subject) {
                $mail->from($mail_data['email'], $mail_data['name'])
                ->to('sajib155@gmail.com')
                ->subject($subject);
            });
            return Redirect::back()->withErrors(['success', 'We have received your mail.Thank You!!']);
        }
        else {

            return Redirect::back()->withErrors(['warning', 'There might be a problem !!!']);
        }

    }
    function contact_us(Request $req){
        $req->validate([
            'Uname' => 'required',
            'email' => 'required|email',
            'complaint' => 'required'
        ]);
        $data = array(
            'user_name' => $req->Uname,
            'email' => $req->email,
            'mobile' => $req->mob,
            'compliment' => $req->complaint
        );
        $data_save = array(
            'user_name' => $req->Uname,
            'email' => $req->email,
            'mobile' => $req->mob,
            'message' => $req->complaint,
            'created_at' => date("Y-m-d H:i:s")
        );
        DB::table('contact_us')->insert($data_save);
        // dd($data);
        Mail::send('mail.contact_us_mail', $data, function ($mail) use ($data) {
            $mail->from($data['email'], $data['user_name'])
                ->to('sajib155@gmail.com')
                ->subject("Message From ". $data['user_name']);
        });

        return Redirect::back()->withErrors(['success', 'We received your mail . Thanks for Your valueable openion!!!']);
    }




}
