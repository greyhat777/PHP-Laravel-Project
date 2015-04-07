

@extends('layouts.default')
@section('content')
  <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h5 style="float:right" class="glyphicon glyphicon-globe">Clovis,CA</h5>
                        <br/>
                        <h1>Create a Clout</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'listings')) }}

    <div class="form-group">
        {{ Form::label('date', 'Date of Clout') }}
         {{ Form::text('date', Input::old('date'), array('class' => 'form')) }}
     </div>

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>

    



    {{ Form::submit('Post Clout', array('class' => 'btn btn-primary')) }}
    <br/>
    <br/>
   <div><a href="{{ URL::to('listings') }}"><button type="button" class="btn btn-primary">View all Listings</button></a></div>

{{ Form::close() }}





 <script type="text/javascript">

    $('#calendar').datepicker({
    dateFormat : 'yyyy-mm-dd'
    });
    
  </script>
            </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
@stop
