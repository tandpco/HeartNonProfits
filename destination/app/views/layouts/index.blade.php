<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body id="body">
<div class="container" id="main-container">
	<!-- BEGIN MAIN CONTAINER | BEGIN HEADER -->
	<header class="row">
		@include('includes.header')
	</header>
	<div class="banner-home row">
        <div class="container-fluid clearfix">
            <div class="col-sm-12">
                <h2>Building Strong Companies with Sustainable and Transferable Value</h2>
            </div>
        </div>
    </div>
	<!-- END HEADER | BEGIN CONTENT WRAPPER -->
	<div id="contentWrapper">
		<!-- EXTEND CONTENT WRAPPER | BEGIN CONTENT -->
	    <div class="col-sm-12" id="content">
	        @yield('content')
	    </div>
	    <!-- END CONTENT | EXTEND CONTENT WRAPPER -->
	</div>
    <!-- END CONTENT WRAPPER | BEGIN FOOTER -->
	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
</body>
</html>