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
        <li><a href="/executive-director">Executive Director</a></li>
        <li><a href="/board-of-advisors">Board of Advisors</a></li>
        <li><a href="/our-partners">TBG Partners</a></li>
        <li><a class="active" href="/about-us/our-book">Our Book:</a><br><span class="book">Game-Changing Advisory Boards</span></li>
    </ul>
@stop
@section('content')
    <h1 class="founderName italic">Game-Changing Advisory Boards: Leveraging Outside Wisdom to Deliver Sustainable Value</h1>
    <div class="row">
    	<div class="col-sm-3">
            <img src="../images/our-book.png" alt="John Zaepfel" class="img-responsive" />
            <a href="http://www.amazon.com/Game-Changing-Advisory-Boards-Leveraging-Sustainable/dp/1478221135/ref=sr_1_1?ie=UTF8&qid=1365202280&sr=8-1&keywords=game+changing+advisory+boards" alt="Game Changing Advisory Boards" class="btn buy-now" />Buy Now</a>
        </div>
        <div class="col-sm-9">        
            <p>This book offers a proven process for creating a powerful company. William Hawfield and John Zaepfel, who have served on over 100 boards, provide step-by-step board processes for building exceptional long-term value in privately owned companies. Inside are stories from 21 owners who leveraged advisory boards to help them build the companies they wanted. Some still operate independently. The owners who sold received over $1.8 billion in combined value.</p>
            <p>More information at www.gamechangingadvisoryboards.com</p>
        </div>
    </div>
@stop