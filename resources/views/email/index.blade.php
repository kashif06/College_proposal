@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                  <a href="{{url('create')}}" class="btn btn-success">Create</a>
                </div>

                <div class="panel-body">
                  <table class="table">
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-block">
                      <strong>{{Session::get('success')}}</strong>
                    </div>
                    @endif
                    @if($errors->any())
                    <ul>
                    @foreach($errors->all() as $error)
                    <li class="alert alert-danger alert-block">{{$error}}</li>
                    @endforeach
                    <ul>
                    <div class="alert alert-success alert-block">
                      <strong>{{Session::get('success')}}</strong>
                    </div>
                    @endif
                    <thead>
                      <tr>
                        <th scope="col">College Name</th>
                        <th scope="col">College Address</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                      <tbody>
                        @foreach($mails as $mail)
                        <tr>
                          <td>{{$mail->college_name}}</td>
                          <td>{{$mail->college_address}}</td>
                          <td>
                            <a href="preview/{{$mail->id}}" class="btn btn-primary">Preview</a>
                            <a href="edit/{{$mail->id}}" class="btn btn-info">Edit</a>
                            <a href="send_mail/{{$mail->id}}" class="btn btn-danger">Send</a>

                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                  <div class="modal fade" id="lauchModal{{$mail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
