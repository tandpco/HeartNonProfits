@extends('layouts.default')
@section('pageTitle')
	About Us
@stop
@section('sidebar-menu')
    <h5>About Us Menu</h5>
    <ul id="sidebarMenu">
        <li><a class="active" href="/about-us/about">About Us</a></li>
        <li><a href="#">Founders</a>
            <ul>
                <li><a href="/founders/william-hawfield">William Hawfield</a></li>
                <li><a href="/founders/john-zaepfel">John Zaepfel</a></li>
            </ul>
        </li>
        <li><a href="/executive-director">Executive Director</a></li>
        <li><a href="/board-of-advisors">Board of Advisors</a></li>
        <li><a href="/our-partners">TBG Partners</a></li>
        <li><a href="/about-us/our-book">Our Book:</a><br><span class="book">Game-Changing Advisory Boards</span></li>
    </ul>
@stop
@section('content')
	<div class="lead">
        <p>The Board Group™ is an extensive network of CEOs and C-Level executives who have created and served on more than 150 Advisory, Fiduciary and Public Boards and have created more than $1.8 billion in Company value.</p>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <img src="../images/about-building.png" alt="The Board Group Network" class="img-responsive" style="float: left; width: 280px; " />
            <p>The Board Group draws on an extensive network of CEO's and other C-level executives who collectively have created and served on more than 150 advisory, fiduciary and public boards. They have created more than $1.8 billion in additional value for those companies.</p>
            <p>Members of The Board Group™ network of Advisors are also members of two management organizations that are international leaders in management development and group process: Vistage International and Young Presidents’ Organization (YPO).</p>
            <p>The Board Group was founded by John Zaepfel and William Hawfield, leaders in advisory, fiduciary and public board formation and management for private and family companies.</p>
            <p>The Board Group™ and its founders have strong alliances with other business service providers, such as investment bankers, accounting firms, attorneys and wealth management professionals. Together with the advisory board they work to create sustainable value.</p>
        </div>
    </div>
    <section class="border-top">
        <h4>The Board Group™ Accomplishments</h4>
        <ul>
            <li>Provided Board leadership that created over $1.8 billion in value for Owners when their companies sold</li>
            <li>Created more than 150 Boards for privately owned companies over the past 15 years</li>
            <li>Members of TBG are currently serving on more than 50 Boards</li>
            <li>Supported the orderly transitions of family owned businesses to the next generation</li>
            <li>Documented processes and practices that create, manage and evaluate highly effective and efficient Boards</li>
            <li>Presented seminars on how to create strong companies and transferable value through excellent Board processes</li>
        </ul>
    </section>
@stop