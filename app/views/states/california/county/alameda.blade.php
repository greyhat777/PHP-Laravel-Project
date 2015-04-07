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
     <a href="{{URL::to('/states/california/city/alameda/alameda')}}"><i class="glyphicon glyphicon-unchecked"></i>Alameda</a><br/>
     <a href="{{URL::to('/states/california/city/alameda/albany')}}"><i class="glyphicon glyphicon-unchecked"></i>Albany</a><br/>
     <a href="{{URL::to('/states/california/city/alameda/berkeley')}}"><i class="glyphicon glyphicon-unchecked"></i>Berkeley</a><br/>
     <a href="{{URL::to('/states/california/city/alameda/dublin')}}"><i class="glyphicon glyphicon-unchecked"></i>Dublin</a><br/>
     <a href="{{URL::to('/states/california/city/alameda/emeryville')}}"><i class="glyphicon glyphicon-unchecked"></i>Emeryville</a><br/>
     <a href="{{URL::to('/states/california/city/alameda/fremont')}}"><i class="glyphicon glyphicon-unchecked"></i>Fremont</a><br/>
     <a href="{{URL::to('/states/california/city/alameda/hayward')}}"><i class="glyphicon glyphicon-unchecked"></i>Hayward</a><br/>
     <a href="{{URL::to('/states/california/city/alameda/livermore')}}"><i class="glyphicon glyphicon-unchecked"></i>livermore</a><br/>
     <a href="{{URL::to('/states/california/city/alameda/newark')}}"><i class="glyphicon glyphicon-unchecked"></i>Newark</a><br/>
</ul>
<ul style="float:left">
     <a href="{{URL::to('/states/california/city/alameda/oakland')}}"><i class="glyphicon glyphicon-unchecked"></i>Oakland</a><br/>
     <a href="{{URL::to('/states/california/city/alameda/piedmont')}}"><i class="glyphicon glyphicon-unchecked"></i>Piedmont</a><br/>
     <a href="{{URL::to('/states/california/city/alameda/sanleandro')}}"><i class="glyphicon glyphicon-unchecked"></i>San Leandro</a><br/>
     <a href="{{URL::to('/states/california/city/alameda/unioncity')}}"><i class="glyphicon glyphicon-unchecked"></i>Union City</a><br/>

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
