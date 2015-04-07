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
     <a href="{{URL::to('/states/california/city/fresno/clovis')}}"><i class="glyphicon glyphicon-unchecked"></i>Clovis</a><br/>
     <a href="{{URL::to('/states/california/city/fresno/coalinga')}}"><i class="glyphicon glyphicon-unchecked"></i>Coalinga</a><br/>
     <a href="{{URL::to('/states/california/city/fresno/firebaugh')}}"><i class="glyphicon glyphicon-unchecked"></i>Firebaugh</a><br/>
     <a href="{{URL::to('/states/california/city/fresno/fowler')}}"><i class="glyphicon glyphicon-unchecked"></i>Fowler</a><br/>
     <a href="{{URL::to('/states/california/city/fresno/fresno')}}"><i class="glyphicon glyphicon-unchecked"></i>Fresno</a><br/>
     <a href="{{URL::to('/states/california/city/fresno/huron')}}"><i class="glyphicon glyphicon-unchecked"></i>Huron</a><br/>
     <a href="{{URL::to('/states/california/city/fresno/kerman')}}"><i class="glyphicon glyphicon-unchecked"></i>Kerman</a><br/>
     <a href="{{URL::to('/states/california/city/fresno/kingsburg')}}"><i class="glyphicon glyphicon-unchecked"></i>Kingsburg</a><br/>
     <a href="{{URL::to('/states/california/city/fresno/mendota')}}"><i class="glyphicon glyphicon-unchecked"></i>Mendota</a><br/>
</ul>
<ul style="float:left">
     <a href="{{URL::to('/states/california/city/fresno/orangecove')}}"><i class="glyphicon glyphicon-unchecked"></i>Orangecove</a><br/>
     <a href="{{URL::to('/states/california/city/fresno/parlier')}}"><i class="glyphicon glyphicon-unchecked"></i>Parlier</a><br/>
     <a href="{{URL::to('/states/california/city/fresno/reedley')}}"><i class="glyphicon glyphicon-unchecked"></i>Reedley</a><br/>
     <a href="{{URL::to('/states/california/city/fresno/sanger')}}"><i class="glyphicon glyphicon-unchecked"></i>Sanger</a><br/>
     <a href="{{URL::to('/states/california/city/fresno/sanjoaquin')}}"><i class="glyphicon glyphicon-unchecked"></i>San Joaquin</a><br/>
     <a href="{{URL::to('/states/california/city/fresno/selma')}}"><i class="glyphicon glyphicon-unchecked"></i>Selma</a><br/>

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
