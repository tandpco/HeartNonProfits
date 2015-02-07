@extends('layouts.default')
@section('pageTitle')
	Board Services
@stop
@section('sidebar-menu')
    <h5>Board Services Menu</h5>
    <ul id="sidebarMenu">
        <li><a href="/board-services/services">Board Services</a></li>
        <li><a href="/board-services/client-companies">For Client Companies</a></li>
        <li><a href="/board-services/advisors">For Advisors</a></li>
        <li><a class="active" href="/board-services/sustainable-value-wheel">Sustainable Value Wheel</a></li>
        <li><a href="/board-services/learning-center">Learning Center</a></li>
    </ul>
@stop
@section('content')
    <div class="lead">
    	<h1>Sustainable Value Wheel</h1>
        <p>TBG uses the principle of creating Sustainable Value in its processes to identify the critical needs of the Company, establish the goals for the Board and to make the Advisor assignments.</p>
    </div>
    <section>
        <h4>TBG Sustainable Value Wheel™</h4>
        <p>Creating long term and sustainable value can be accomplished by focusing on the key performance metrics that investors seek. The Sustainable Value Wheel™ is a tool that allows Management and the Board to rank how important each of the key performance metrics are to a specific business and then to rank the Company’s performance against each metric. The Sustainable Value Wheel™ does this in an interactive and graphic way. The Sustainable Value Wheel™ comes in both a ‘light’ and a ‘heavy’ version. The light version is for quick reviews of performance. The ‘heavy’ version dives deeply into the guts of the Company’s performance and value.</p>

        <p>The Sustainable Value Wheel™ focuses on 15 key operating metrics:</p>

        <div class="principles clearfix">
            <ul class="col-sm-4">
                <li>CEO</li>
                <li>Business Disciplines</li>
                <li>Company Culture</li>
                <li>Product Offering</li>
                <li>Earnings Size</li>
            </ul>
            <ul class="col-sm-4">
                <li>Management Team</li>
                <li>Industry Attractiveness</li>
                <li>Customer Base</li>
                <li>Intellectual Property</li>
                <li>Gross Margin</li>
            </ul>
            <ul class="col-sm-4">
                <li>Management Information</li>
                <li>A “Must Have” Company</li>
                <li>Customer Relationships</li>
                <li>Information Technology</li>
                <li>EBITDA</li>
            </ul>
        </div>
    </section>
    <h4>TBG Sustainable Value Wheel&trade; Example</h4>
    <img src="../../images/svw-preview.png" class="img-responsive" />
@stop