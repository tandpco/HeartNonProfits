@extends('layouts.index')
@section('pageTitle')
	Home
@stop
@section('content')
<div class="row">
    <div class="col-sm-9">
    	<div id="home-feat" class="clearfix">
    		<div class="content">
	    		<h3>Better Boards. Better Decisions.</h3>
	    		<h3>Greater Value.</h3>
	    		<a href="/" class="btn btn-lg btn-feat">Learn More Now</a>
	    	</div>
    	</div>
    </div>
    <div class="col-sm-3">
    	<div class="border">
	       	<a href="/board-services/sustainable-value-wheel"><img src="images/svw-home.png" alt="Game Changing Advisory Boards" class="img-responsive" /></a>
	       	<p style="margin: 15px; font-size: 12px;">Sustainable Value Wheel. Click for a <a href="http://reports.epiphanyanalytics.com/?qz=410824929" target="_blank" title="Start Your Free Assessment">Free Assessment.</a></p>
       </div>
       <div class="border" style="text-align: center;">
			<a href="/about-us/our-book"><img src="images/book-small.png" alt="Our Book" class="second-img img-responsive" style="margin: 0 auto; height: auto;"/></a>
		</div>
    </div>
</div>
<div class="row icons">
	<div class="col-sm-4">
		<div class="center">
			<i class="icon one"></i>
			<p>Advisory Board <br>Creation</p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="center">
			<i class="icon two"></i>
			<p>Board Management <br>and Improvement</p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="center">
			<i class="icon three"></i>
			<p>Better Board <br>Practice Learning</p>
		</div>
	</div>
	<div class="col-sm-5 col-sm-offset-1">
		<div class="center">
			<i class="icon four"></i>
			<p>Lead Board Processes that <br>Deliver High Quality Earnings</p>
		</div>
	</div>
	<div class="col-sm-5">
		<div class="center">
			<i class="icon five"></i>
			<p>Provide Referrals <br>To Other Value Adders</p>
		</div>
	</div>
</div>
<div class="module clearfix">
	<div class="col-sm-4">
		<h3>About The Board Group</h3>
		<p>The Board Group™ is an extensive network of CEOs and C-Level executives who have created and served on more than 150 Advisory Boards, Fiduciary Boards and Public Boards and have created more than $1.8 billion in company value.</p>

		<p>The Board Group™, TBG, focuses and building sustainable value in small to mid-sized companies by creating strong Advisory Boards to provide strategic and practical guidance to its Client Companies.  The result is greater sustainable value.</p>
	</div>
	<div class="col-sm-6 col-sm-offset-2" id="grid">
		<div class="col-md-6">
			<a href="/board-services/client-companies"><div class="square">
				<h4>FOR TBG CLIENT COMPANIES</h4>
				<p>Enter to see the special resources that are available to TBG Community.</p>
			</div></a>
		</div>
		<div class="col-md-6">
			<a href="/board-services/advisors"><div class="square">
				<h4>FOR TBG ADVISORS</h4>
				<p>Resources for TBG Advisors to stay in touch and learn to create sustainable value.</p>
			</div></a>
		</div>
		<div class="col-md-6">
			<a href="/board-services/learning-center"><div class="square">
				<h4>TBG LEARNING CENTER</h4>
				<p>A library of resources for TBG Community including past speeches and learning aids.</p>
			</div></a>
		</div>
		<div class="col-md-6">
			<a class="disabled"><div class="square">
				<h4>JOIN TBG COMMUNITY</h4>
				<p>Become a member of TBG Community and qualify to become an Advisor.</p>
				<p>(Coming Soon)</p>
			</div></a>
		</div>
	</div>
</div>
<div class="row" id="caseStudies">
	<div class="col-sm-12">
		<h3>Case Studies</h3>
		<p>The power of Advisory Boards in creating sustainable value and helping to guide Companies through transitions can be found in case studies of the work of The Board Group. More studies can be found in the book: <span style="font-style: italic; font-weight: 700;">Game-Changing Advisory Boards, Leveraging Outside Wisdom to Deliver Sustainable Value.</span></p>
		<div class="seperate">
		</div>
		<div class="row">
			<div class="col-sm-3">
				<div class="square">
					<img src="images/metagenics.png" class="img-responsive">
				</div>
				<a href="/case-studies/metagenics"><h4>Metagenics</a><br><small>Grow the CEO, Grow the company</small></h4>
			</div>
			<div class="col-sm-3">
				<div class="square">
					<img src="images/caseswayne.png" class="img-responsive">
				</div>
				<a href="/case-studies/case-swayne"><h4>Case Swayne</a><br><small>Owner and Board Member Perspective</small></h4>
			</div>
			<div class="col-sm-3">
				<div class="square">
					<img src="images/industrial.png" class="img-responsive">
				</div>
				<a href="/case-studies/industrial-metal-supply"><h4>Industrial Metal Supply</a><br><small>Inside Culture and Security</small></h4>
			</div>
			<div class="col-sm-3">
				<div class="square">
					<img src="images/trojan.png" class="img-responsive">
				</div>
				<a href="/case-studies/trojan-battery"><h4>Trojan Battery</a><br><small>Batteries and a Company that Last</small></h4>
			</div>
		</div>
	</div>
</div>
@stop