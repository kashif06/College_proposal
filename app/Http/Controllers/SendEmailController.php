<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Markdown;
use Auth;
use App\SendEmail;
use App\Mail\SendProposalOfficial;

class SendEmailController extends Controller
{
    public function index(){
      $mails = SendEmail::orderBy('created_at','desc')->get();

      return view('email.index',compact('mails'));
    }

    public function create(){
      return view('email.create');
    }

    public function store(Request $request){
      $this->validate($request,[
        'address_to'=>'required',
        'college_name'=>'required',
        'college_address'=>'required',
        'college_email'=>'required',
        'subject'=>'required',
      ]);

      $send = new SendEmail;
      $send->user_id = Auth::user()->id;
      $send->address_to = $request->get('address_to');
      $send->college_name = $request->get('college_name');
      $send->college_address = $request->get('college_address');
      $send->college_email = $request->get('college_email');
      $send->subject = $request->get('subject');
      $send->save();

      return redirect('index');

    }

    public function edit($id){
      $user = SendEmail::find($id);

      return view('email.edit',compact('user'));
    }

    public function update(Request $request,$id){
      $this->validate($request,[
        'address_to'=>'required',
        'college_name'=>'required',
        'college_address'=>'required',
        'college_email'=>'required',
        'subject'=>'required',
      ]);

      $send = SendEmail::find($id);
      $send->user_id = Auth::user()->id;
      $send->address_to = $request->get('address_to');
      $send->college_name = $request->get('college_name');
      $send->college_address = $request->get('college_address');
      $send->college_email = $request->get('college_email');
      $send->subject = $request->get('subject');
      $send->save();

      return redirect('index');
    }

    public function sendMail($id){
      $user = SendEmail::find($id);
      \Mail::to($user->college_email)->send(new SendProposalOfficial($user));
    }

    public function preview($id){
      $user = SendEmail::find($id);
      $u = new SendProposalOfficial($user);
      return $u;
      // $pre = $u->build();
      // return view('email.index',compact('pre'));

    }


}
