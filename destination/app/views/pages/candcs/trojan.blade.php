@extends('layouts.default')
@section('pageTitle')
	Clients &amp; Case Studies
@stop
@section('sidebar-menu')
    <h5>Menu</h4>
    <ul>
        <li><a href="/clients">Clients</a></li>
        <li><a href="/case-studies/metagenics">Case Studies</a>
            <ul>
                <li><a href="/case-studies/metagenics">Metagenics</a></li>
                <li><a href="/case-studies/case-swayne">Case Swayne</a></li>
                <li><a href="/case-studies/industrial-metal-supply">Industrial Metal Supply</a></li>
                <li><a class="active" href="/case-studies/trojan-battery">Trojan Battery</a></li>
                <li><a href="/case-studies/sunrise-growers">Sunrise Growers and Frozsun Foods</a></li>
                <li><a href="/case-studies/us-container-corp">United States Container Corporation</a></li>
            </ul>
        </li>
    </ul>
@stop
@section('content')
    <div class="lead" style="padding-bottom: 0;">
        <h1>Batteries and a Company that Lasts</h1>
    </div>
    <section class="case-study">
        <p>Trojan Batteries is an 87 year old family owned business with a governing board made up entirely of family members.  We felt an Advisory Board with outside members could provide a way for the owners to reach outside this family circle for a broad spectrum of knowledge and experience.  We wanted to create a Board that looked to the future, forcing ownership and management to consider challenges and opportunities ahead and react accordingly.</p>
        <p>For the past 12 years we have utilized an advisory Board made up of 3 outside advisors and member of management.  Because of their experience and knowledge, the management team has been challenged along the way in all phases of the business and been suported where needed when presenting key strategic opportunities to the outside shareholders.</p>
        <p>With a lot of help from the Advisory Board, the Company finds itself today moving in a new strategic direction.  We are globally focused.  The company operations are performing at a record level.  And, we have relatively new leadership team proving to be capable of implementing this new strategy.</p>
        <br>
        <h5 class="author">Rick Godber, Chairman and CEO of Trojan Battery</h5>
    </section>
@stop