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
		<div class="banner">
	        <div class="container-fluid clearfix">
	            <div class="col-sm-12">
	                <h4>@yield('pageTitle')</h4>
	                <a href="https://www.linkedin.com/company/the-board-group" id="connect"><h3>Connect | <i class="fa fa-linkedin"></i></h3></a>
	            </div>
	        </div>
	    </div>
	</header>
	<!-- END HEADER | BEGIN CONTENT WRAPPER -->
	<div id="contentWrapper" class="row">
		<!-- EXTEND CONTENT WRAPPER | BEGIN SIDEBAR -->
		<div class="col-sm-4" id="sidebar">
			@yield('sidebar-menu')
	        <!-- <div class="module module-sidebar">
	            <h3>Sustainable Value Wheel</h3>
	            <p>The Sustainable Value Wheel™ is a tool that allows Management and the Board to rank how important each of the key performance metrics are to a specific business and then to rank the Company’s performance against each metric.</p>
	            <a class="btn btn-burgundy">Learn more</a>
	        </div> -->
	    </div>
	    <!-- END SIDEBAR | BEGIN CONTENT -->
	    <div class="col-sm-8" id="content">
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