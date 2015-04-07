

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
                        <h4>Event for {{ $listing->date }}</h4>
    <div class="jumbotron text-left">
        
           <strong>Title:</strong> {{ $listing->title }}<br><br/>
           <strong>Description:</strong> {{ $listing->description }}
        
    </div>
                       <nav class="navbar navbar-inverse">
                       <ul class="nav navbar-nav">
                        <li><a href="{{ URL::to('listings') }}"><button type="button" class="btn btn-primary">View all Listings</button></a></li>
                        <li><a href="{{ URL::to('listings/create') }}"><button type="button" class="btn btn-primary">Create a Listing</button></a></li>
                        <li><a href="#"><button type="button" class="btn btn-primary">I want to go!</button></a></li>
                       </nav>
            </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
@stop
