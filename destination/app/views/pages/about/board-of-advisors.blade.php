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
        <li><a class="active" href="/board-of-advisors">Board of Advisors</a></li>
        <li><a href="/our-partners">TBG Partners</a></li>
        <li><a href="/about-us/our-book">Our Book:</a><br><span class="book">Game-Changing Advisory Boards</span></li>
    </ul>
@stop
@section('content')
	<div class="lead">
        <h1>Board of Advisors</h1>
    </div>
    <section>
        <p>The Board Group has its own Advisory Board that includes:</p>
        <ul>
            <li>Phillip D Matthews</li>
            <li>Pete Lakey</li>
        </ul>
    </section>
@stop