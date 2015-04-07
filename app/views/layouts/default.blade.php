<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
<div class="container">

	<header class="row">
		@include('includes.header')
	</header>

	<div id="main" class="row">
			@yield('content')
	</div>

	<footer class="row">
		<br/>
		@include('includes.footer')
	</footer>

</div>

<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>