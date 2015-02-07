@extends('layouts.default')
@section('pageTitle')
	About Us
@stop
@section('sidebar-menu')
    <h5>About Us Menu</h5>
    <ul id="sidebarMenu">
        <li><a href="/about-us">About Us</a></li>
        <li><a href="#">Founders</a>
            <ul>
                <li><a href="/founders/william-hawfield">William Hawfield</a></li>
                <li><a href="/founders/john-zaepfel">John Zaepfel</a></li>
            </ul>
        </li>
        <li><a class="active" href="/executive-director">Executive Director</a></li>
        <li><a href="/board-of-advisors">Board of Advisors</a></li>
        <li><a href="/our-partners">TBG Partners</a></li>
        <li><a href="/about-us/our-book">Our Book:</a><br><span class="book">Game-Changing Advisory Boards</span></li>
    </ul>
@stop
@section('content')
	<div class="col-sm-3">
        <img src="../images/ken-ude.png" alt="Ken Ude" class="img-responsive" />
    </div>
    <div class="col-sm-9">
        <h1 class="founderName">Ken Ude</h1>
        <p>Ken Ude has served as President / CEO of several different private equity backed companies in various industries that were facing a variety of critical business challenges. What they had in common was the need to create stability in the organization, grow the top line and trim expenses to drive profitability. His approach is to build high performing Teams and use metrics that can drive change, directly impacting productivity and the bottom line. Over the past 25 years, he has built a structured approach for companies facing change, growing pains, or market stress. The method utilizes a “toolkit” of due diligence, planning, managing, reporting and team building techniques to improve operational efficiency and drive the top line.  He stands on the mantra: “If it can be measured, it can be improved”.</p>
         <p>His industry experience includes consumer brands, consumer products, building products, irrigation, agriculture, professional services, and even an open-wheel racing school. I have strong operational experience and have an instinctive understanding of marketing and selling through stepped distribution channels.</p>
    </div>
@stop