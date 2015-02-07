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
        <li><a class="active" href="/our-partners">TBG Partners</a></li>
        <li><a href="/about-us/our-book">Our Book:</a><br><span class="book">Game-Changing Advisory Boards</span></li>
    </ul>
@stop
@section('content')
	<div class="lead">
        <h1>The Board Group Partners</h1>
    </div>
    <section>
        <p>The Board Group has a network of service providers that help in the process of creating sustainable value to client companies and then to help the company through its desired transition, whether that be creating or transferring value.</p>
        <ul>
            <li>Investment Banking</li>
            <li>Finance and Accounting</li>
            <li>Legal</li>
            <li>Strategic and Operational Planning</li>
            <li>Executive Recruiting</li>
            <li>Personnel Assessments and Employee Engagement</li>
            <li>Sales Improvement Training</li>
            <li>Marketing and Brand Development</li>
            <li>Insurance and Risk Management</li>
        </ul>
    </section>
@stop