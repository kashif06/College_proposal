@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('address_to') ? ' has-error' : '' }}">
                            <label for="address_to" class="col-md-4 control-label">Address Mail To</label>

                            <div class="col-md-6">
                                <input id="address_to" type="text" class="form-control" name="address_to" value="{{ old('address_to') }}" required autofocus>

                                @if ($errors->has('address_to'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_to') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('college_name') ? ' has-error' : '' }}">
                            <label for="college_name" class="col-md-4 control-label">College Name</label>

                            <div class="col-md-6">
                                <input id="college_name" type="text" class="form-control" name="college_name" value="{{ old('college_name') }}" required autofocus>

                                @if ($errors->has('college_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('college_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('college_address') ? ' has-error' : '' }}">
                            <label for="college_address" class="col-md-4 control-label">College Address</label>

                            <div class="col-md-6">
                                <input id="college_address" type="text" class="form-control" name="college_address" value="{{ old('college_address') }}" required autofocus>

                                @if ($errors->has('college_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('college_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('college_email') ? ' has-error' : '' }}">
                            <label for="college_email" class="col-md-4 control-label">College Email</label>

                            <div class="col-md-6">
                                <input id="college_email" type="text" class="form-control" name="college_email" value="{{ old('college_email') }}" required autofocus>

                                @if ($errors->has('college_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('college_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label for="subject" class="col-md-4 control-label">Subject</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}" required autofocus>

                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Proceed
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
