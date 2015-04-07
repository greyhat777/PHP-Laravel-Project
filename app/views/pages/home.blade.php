@extends('layouts.default')
@section('content')
	<div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Caution!!!
                        </h1>
       				<p>
       					Common Sense is not so common, please <span style="color:#ff0000"><u><strong>Do Not</strong></u></span>:<br/>
       				<ol>
       					<li>
       						Get yourself or anyone else hurt or killed
       					</li>
       					<li>
       						Meet someone at a non-public place
       					</li>
       					<li>
       						Exchange more information than you feel comfortable sharing
       					</li>
       					<li>
       						 Bring negative vibes, attitudes, and/or situations
       					</li>
       					<li>
       						See #1 again...
       					</li>
       				</ol>
       				<br/>
       				<a href="{{URL::to('/states')}}"><button type="button" class="btn btn-primary">I Agree</button></a>
       				<button type="button" class="btn btn-danger">I do not Agree</button>
       				</p>
                    </div>
                </div>
                <!-- /.row -->

          

            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- /#page-wrapper -->

    </div>
@stop
