@extends('layouts.default')
@section('content')
  <div id="wrapper">

        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Pick Your City</h2>
<ul style="float:left">
     <a href="{{URL::to('/states/california/city/butte/biggs')}}"><i class="glyphicon glyphicon-unchecked"></i>Biggs</a><br/>
     <a href="{{URL::to('/states/california/city/butte/chico')}}"><i class="glyphicon glyphicon-unchecked"></i>Chico</a><br/>
     <a href="{{URL::to('/states/california/city/butte/gridley')}}"><i class="glyphicon glyphicon-unchecked"></i>Gridley</a><br/>
     <a href="{{URL::to('/states/california/city/butte/oroville')}}"><i class="glyphicon glyphicon-unchecked"></i>Oroville</a><br/>
     <a href="{{URL::to('/states/california/city/butte/paradise')}}"><i class="glyphicon glyphicon-unchecked"></i>Paradise</a><br/>
</ul>

                    </div>
                </div>
                <!-- /.row -->

          

            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- /#page-wrapper -->

    </div>
@stop
sc