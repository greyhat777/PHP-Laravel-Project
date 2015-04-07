@extends('layouts.default')
@section('content')
	<div id="wrapper">

        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Pick Your County</h2>
<ul style="float:left">
     <a href="{{URL::to('/states/california/county/alameda')}}"><i class="glyphicon glyphicon-unchecked"></i>Alameda</a><br/>
     <a href="{{URL::to('/states/california/county/alpine')}}"><i class="glyphicon glyphicon-unchecked"></i>Alpine</a><br/>
     <a href="{{URL::to('/states/california/county/amador')}}"><i class="glyphicon glyphicon-unchecked"></i>Amador</a><br/>
     <a href="{{URL::to('/states/california/county/butte')}}"><i class="glyphicon glyphicon-unchecked"></i>Butte</a><br/>
     <a href="{{URL::to('/states/california/county/calaveras')}}"><i class="glyphicon glyphicon-unchecked"></i>Calaveras</a><br/>
     <a href="{{URL::to('/states/california/county/colusa')}}"><i class="glyphicon glyphicon-unchecked"></i>Colusa</a><br/>
     <a href="{{URL::to('/states/california/county/contracosta')}}"><i class="glyphicon glyphicon-unchecked"></i>Contra Costa</a><br/>
     <a href="{{URL::to('/states/california/county/delnorte')}}"><i class="glyphicon glyphicon-unchecked"></i>Del Norte</a><br/>
     <a href="{{URL::to('/states/california/county/eldorado')}}"><i class="glyphicon glyphicon-unchecked"></i>El Dorado</a><br/>
     <a href="{{URL::to('/states/california/county/fresno')}}"><i class="glyphicon glyphicon-unchecked"></i>Fresno</a><br/>
</ul>
<ul style="float:left">
     <a href="{{URL::to('/states/california/county/glenn')}}"><i class="glyphicon glyphicon-unchecked"></i>Glenn</a><br/>
     <a href="{{URL::to('/states/california/county/humboldt')}}"><i class="glyphicon glyphicon-unchecked"></i>Humboldt</a><br/>
     <a href="{{URL::to('/states/california/county/imperial')}}"><i class="glyphicon glyphicon-unchecked"></i>Imperial</a><br/>
     <a href="{{URL::to('/states/california/county/inyo')}}"><i class="glyphicon glyphicon-unchecked"></i>Inyo</a><br/>
     <a href="{{URL::to('/states/california/county/kern')}}"><i class="glyphicon glyphicon-unchecked"></i>Kern</a><br/>
     <a href="{{URL::to('/states/california/county/kings')}}"><i class="glyphicon glyphicon-unchecked"></i>Kings</a><br/>
     <a href="{{URL::to('/states/california/county/lake')}}"><i class="glyphicon glyphicon-unchecked"></i>Lake</a><br/>
     <a href="{{URL::to('/states/california/county/lassen')}}"><i class="glyphicon glyphicon-unchecked"></i>Lassen</a><br/>
     <a href="{{URL::to('/states/california/county/losangeles')}}"><i class="glyphicon glyphicon-unchecked"></i>Los Angeles</a><br/>
     <a href="{{URL::to('/states/california/county/madera')}}"><i class="glyphicon glyphicon-unchecked"></i>Madera</a><br/>
</ul>
<ul style="float:left">
     <a href="{{URL::to('/states/california/county/marin')}}"><i class="glyphicon glyphicon-unchecked"></i>Marin</a><br/>
     <a href="{{URL::to('/states/california/county/mariposa')}}"><i class="glyphicon glyphicon-unchecked"></i>Mariposa</a><br/>
     <a href="{{URL::to('/states/california/county/mendocino')}}"><i class="glyphicon glyphicon-unchecked"></i>Mendocino</a><br/>
     <a href="{{URL::to('/states/california/county/merced')}}"><i class="glyphicon glyphicon-unchecked"></i>Merced</a><br/>
     <a href="{{URL::to('/states/california/county/modoc')}}"><i class="glyphicon glyphicon-unchecked"></i>Modoc</a><br/>
     <a href="{{URL::to('/states/california/county/mono')}}"><i class="glyphicon glyphicon-unchecked"></i>Mono</a><br/>
     <a href="{{URL::to('/states/california/county/monterey')}}"><i class="glyphicon glyphicon-unchecked"></i>Monterey</a><br/>
     <a href="{{URL::to('/states/california/county/napa')}}"><i class="glyphicon glyphicon-unchecked"></i>Napa</a><br/>
     <a href="{{URL::to('/states/california/county/nevada')}}"><i class="glyphicon glyphicon-unchecked"></i>Nevada</a><br/>
     <a href="{{URL::to('/states/california/county/orange')}}"><i class="glyphicon glyphicon-unchecked"></i>Orange</a><br/>
</ul>
<ul style="float:left">
     <a href="{{URL::to('/states/california/county/placer')}}"><i class="glyphicon glyphicon-unchecked"></i>Placer</a><br/>
     <a href="{{URL::to('/states/california/county/plumas')}}"><i class="glyphicon glyphicon-unchecked"></i>Plumas</a><br/>
     <a href="{{URL::to('/states/california/county/riverside')}}"><i class="glyphicon glyphicon-unchecked"></i>Riverside</a><br/>
     <a href="{{URL::to('/states/california/county/sacramento')}}"><i class="glyphicon glyphicon-unchecked"></i>Sacramento</a><br/>
     <a href="{{URL::to('/states/california/county/sanbenito')}}"><i class="glyphicon glyphicon-unchecked"></i>San Benito</a><br/>
     <a href="{{URL::to('/states/california/county/sanbernardino')}}"><i class="glyphicon glyphicon-unchecked"></i>San Bernardino</a><br/>
     <a href="{{URL::to('/states/california/county/sandiego')}}"><i class="glyphicon glyphicon-unchecked"></i>San Diego</a><br/>
     <a href="{{URL::to('/states/california/county/sanfrancisco')}}"><i class="glyphicon glyphicon-unchecked"></i>San Francisco</a><br/>
     <a href="{{URL::to('/states/california/county/sanjoaquin')}}"><i class="glyphicon glyphicon-unchecked"></i>San Joaquin</a><br/>
     <a href="{{URL::to('/states/california/county/sanluisobispo')}}"><i class="glyphicon glyphicon-unchecked"></i>San Luis Obispo</a><br/>
</ul>
<ul style="float:left">
     <a href="{{URL::to('/states/california/county/sanmateo')}}"><i class="glyphicon glyphicon-unchecked"></i>San Mateo</a><br/>
     <a href="{{URL::to('/states/california/county/santabarbara')}}"><i class="glyphicon glyphicon-unchecked"></i>Santa Barbara</a><br/>
     <a href="{{URL::to('/states/california/county/santaclara')}}"><i class="glyphicon glyphicon-unchecked"></i>Santa Clara</a><br/>
     <a href="{{URL::to('/states/california/county/santacruz')}}"><i class="glyphicon glyphicon-unchecked"></i>Santa Cruz</a><br/>
     <a href="{{URL::to('/states/california/county/shasta')}}"><i class="glyphicon glyphicon-unchecked"></i>Shasta</a><br/>
     <a href="{{URL::to('/states/california/county/sierra')}}"><i class="glyphicon glyphicon-unchecked"></i>Sierra</a><br/>
     <a href="{{URL::to('/states/california/county/siskiyou')}}"><i class="glyphicon glyphicon-unchecked"></i>Siskiyou</a><br/>
     <a href="{{URL::to('/states/california/county/solano')}}"><i class="glyphicon glyphicon-unchecked"></i>Solano</a><br/>
     <a href="{{URL::to('/states/california/county/sonoma')}}"><i class="glyphicon glyphicon-unchecked"></i>Sonoma</a><br/>
     <a href="{{URL::to('/states/california/county/stanislaus')}}"><i class="glyphicon glyphicon-unchecked"></i>Stanislaus</a><br/>
</ul>
<ul style="float:left">
     <a href="{{URL::to('/states/california/county/sutter')}}"><i class="glyphicon glyphicon-unchecked"></i>Sutter</a><br/>
     <a href="{{URL::to('/states/california/county/tehama')}}"><i class="glyphicon glyphicon-unchecked"></i>Tehama</a><br/>
     <a href="{{URL::to('/states/california/county/trinity')}}"><i class="glyphicon glyphicon-unchecked"></i>Trinity</a><br/>
     <a href="{{URL::to('/states/california/county/tulare')}}"><i class="glyphicon glyphicon-unchecked"></i>Tulare</a><br/>
     <a href="{{URL::to('/states/california/county/tuolumne')}}"><i class="glyphicon glyphicon-unchecked"></i>Tuolumne</a><br/>
     <a href="{{URL::to('/states/california/county/ventura')}}"><i class="glyphicon glyphicon-unchecked"></i>Ventura</a><br/>
     <a href="{{URL::to('/states/california/county/yolo')}}"><i class="glyphicon glyphicon-unchecked"></i>Yolo</a><br/>
     <a href="{{URL::to('/states/california/county/yuba')}}"><i class="glyphicon glyphicon-unchecked"></i>Yuba</a><br/>
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
