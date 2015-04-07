
<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{URL::to('/')}}">CloutCartel.com</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>{{ HTML::link('register', 'Register') }}</li> 
                <li>{{ HTML::link('login', 'Login') }}</li>  
                <li class="dropdown">
                </li>

            </ul>

            <div class="container">
                @if(Session::has('message'))
                <p class="alert">{{ Session::get('message') }}</p>
                @endif
            </div>
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{URL::to('/')}}"><i class="glyphicon glyphicon-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/tunos')}}"><i class="glyphicon glyphicon-hand-right"></i> How-To-Tunos</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/safety')}}"><i class="glyphicon glyphicon-hand-right"></i> Safety</a>
                    </li>
                                       
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

