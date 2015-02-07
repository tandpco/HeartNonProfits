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
                <li><a class="active" href="/founders/john-zaepfel">John Zaepfel</a></li>
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
        <img src="../images/john-zaepfel.png" alt="John Zaepfel" class="img-responsive" />
    </div>
    <div class="col-sm-9">
        <h1 class="founderName">John Zaepfel</h1>
        <p>Mr. Zaepfel spent 15 years as a CEO, founding CPG International in 1985 as an outgrowth of a LBO. Companies in the group included Chartpak, Pickett Industries, Clearprint Paper, Planhold and Grumbacher. This $90 million operating company manufactured and marketed fine art, graphic art, engineering, drafting and media supplies through 13 domestic and international facilities. CPG was sold in May of 1989 to financial buyers.</p>

        <p>Before forming CPG, Zaepfel was CEO of Chartpak and Pickett Industries, wholly-owned subsidiaries of Times Mirror. Zaepfel started his career with Crown Zellerbach in marketing and pursued his career in this functional discipline with Western Kraft and Sealed Air Corporation prior to joining Avery International.</p>

        <p>Zaepfel has served as a public company director for Ideal School Supply, headquartered in Chicago; Varitronics, located in Minneapolis; The Troy Group, located in Santa Ana, California; RemedyTemp, Inc. in Aliso Viejo, California; and served as Chairman of the Board of Accordia in Southern California. He has assisted as a board member in four public offerings and has chaired two public Audit Committees installing Sarbanes-Oxley requirements.</p>

        <p>He has served on 45 public and private companies and currently serves on 20 public, private statutory and advisory boards, chairing 12 as a non-executive chairman.</p>

        <p>Zaepfel is a past member of the Young Presidents Organization and served as chairman of the Southern California Chapter. He is currently a member of the Chief Executives Organization. Zaepfel is a graduate of the University of Washington and holds an MBA from the Marshall School of Business at the University of Southern California.</p>
    </div>
@stop