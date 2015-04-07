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
     <a href="{{URL::to('/states/california/city/colusa/colusa')}}"><i class="glyphicon glyphicon-unchecked"></i>Colusa</a><br/>
     <a href="{{URL::to('/states/california/city/colusa/williams')}}"><i class="glyphicon glyphicon-unchecked"></i>Williams</a><br/>
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