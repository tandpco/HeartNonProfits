@extends('layouts.default')
@section('pageTitle')
	About Us
@stop
@section('sidebar-menu')
    <h5>About Us Menu</h5>
    <ul id="sidebarMenu">
        <li><a href="/about-us">About Us</a></li>
        <li><a href="/about-us/founders">Founders</a>
            <ul>
                <li><a class="active" href="/founders/william-hawfield">William Hawfield</a></li>
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
    <div class="col-sm-3">
        <img src="../images/will-hawfield.png" alt="William Hawfield" class="img-responsive" />
    </div>
    <div class="col-sm-9">
        <h1 class="founderName">William Hawfield</h1>
        <p> Mr. Hawfield is a professional manager, international speaker and private Board process expert. During his 20 years as a professional manager, he was a division president at General Mills. After leaving General Mills, he started the Penguin's frozen yogurt franchise company. The retail chain grew rapidly to 130 stores and was sold to a French company.</p>

        <p>Since selling Penquin’s, Hawfield has served on 31 Boards and currently sits on four advisory and two fiduciary boards of privately-owned companies. He is a faculty member for the Los Angeles Chapter of the National Association of Corporate Directors, Family Business forum.</p>

        <p>He is the co-author of Game-Changing Advisory Boards, a book that defines governance processes that have helped create extraordinary, sustainable value in privately-owned companies. The owners mentioned in this book that sold while Hawfield was a member of their board received more than $500M collectively for their companies.</p>

        <p>Bill is a speaker for Vistage International, an organization comprising 14,000 CEOs worldwide. His topics are Strategic Planning, Business Success and Getting to Your End Game through Highly Performing Boards. He is one of Vistage's resources on board creation and implementation.</p>

        <p>Hawfield's formal educational includes an undergraduate degree in Physics, an MBA in Management from the University of Virginia, and 25 years of Vistage membership.</p>
    </div>
@stop