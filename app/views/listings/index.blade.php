

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
                        <h2>List of <u>Jewelrey</u> Clout's</h2>

                        <!-- will be used to show any messages -->
                        @if (Session::has('message'))
                       <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                   <td><strong>Date of Clout</strong></td>
                                   <td><strong>Title</strong></td>
                                </tr>
                            </thead>
                        <tbody>
                        @foreach($listings as $key => $value)
                        <tr>
                            <td>{{$value->date}}</td>
                            <td>{{ link_to("/listings/{$value->id}", $value->title) }}</td>
                            <!-- we will also add show, edit, and delete buttons -->
                        </tr>
                        @endforeach
                       </tbody>
                       </table>
                       <?php echo $listings->links(); ?>
                       <br/>
                       <nav class="navbar navbar-inverse">
                       <ul class="nav navbar-nav">
                        <li><a href="{{ URL::to('listings/create') }}"><button type="button" class="btn btn-primary">Create a Clout</button></a></li>
                       </nav>
            </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
@stop
