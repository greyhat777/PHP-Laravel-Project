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
     <a href="{{URL::to('/states/california/city/amador/amadorcity')}}"><i class="glyphicon glyphicon-unchecked"></i>Amador City</a><br/>
     <a href="{{URL::to('/states/california/city/amador/ione')}}"><i class="glyphicon glyphicon-unchecked"></i>Ione</a><br/>
     <a href="{{URL::to('/states/california/city/amador/jackson')}}"><i class="glyphicon glyphicon-unchecked"></i>Jackson</a><br/>
     <a href="{{URL::to('/states/california/city/amador/plymouth')}}"><i class="glyphicon glyphicon-unchecked"></i>Plymouth</a><br/>
     <a href="{{URL::to('/states/california/city/amador/suttercreek')}}"><i class="glyphicon glyphicon-unchecked"></i>Sutter Creek</a><br/>
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
