@extends('layouts.default')
@section('content')
    <div id="wrapper">
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                  
                        
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Please Sign In:</h1>
            <div class="account-wall">
               <div align="center"> <img  src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt=""></div>
                    <br/>
                


            {{ Form::open(['url'=>'login']) }}

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}        







            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>




                  
                </div>
                <!-- /.row -->

          

            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- /#page-wrapper -->

    </div>
    @stop



