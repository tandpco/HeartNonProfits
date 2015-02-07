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
                <li><a href="/case-studies/trojan-battery">Trojan Battery</a></li>
                <li><a href="/case-studies/sunrise-growers">Sunrise Growers and Frozsun Foods</a></li>
                <li><a href="/case-studies/us-container-corp">United States Container Corporation</a></li>
            </ul>
        </li>
    </ul>
@stop
@section('content')
    <div class="lead" style="padding-bottom: 0;">
        <h1>Partial Client List</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
        <tr>
            <th>CLIENT</th>
            <th>SERVICE</th>
            <th>TBG FUNCTION</th>
        </tr>
        <tr><td>ORCO Construction</td><td>Building supply</td><td><small>Board Creation, Management, Assessment, Member</small></td></tr>
        <tr><td>Menemsha Construction</td><td>Commercial design, build, mng.</td><td>Board Creation, Member</td></tr>
        <tr><td>Universal Services of America</td><td>Building security, janitorial</td><td>Board Creation, Management, Member</td></tr>
        <tr><td>Industrial Metal Supply</td><td>Specialty metal distributor and retailer</td><td>Board Creation, Member</td></tr>
        <tr><td>Kravitz</td><td>Financial advisors for retirement plans</td><td>Board Creation, Member</td></tr>
        <tr><td>Mann Packing</td><td>Vegetable packers and marketers</td><td>Board Creation, Member</td></tr>
        <tr><td>Two Chefs on a Roll</td><td>Food manufacturers, retail &amp; food service</td><td>Board Creation, Member, Assessment</td></tr>
        <tr><td>McBride Electric</td><td>Mission critical commercial electric</td><td>Board Creation, Member</td></tr>
        <tr><td>Plannet</td><td>Communications systems design</td><td>Board Member</td></tr>
        <tr><td>Monrovia Growers</td><td>Growers of landscape plants</td><td>Board Member</td></tr>
        <tr><td>BDS Marketing</td><td>Advertising agency</td><td>Board Creation, Assesment, Member</td></tr>
        <tr><td>Creative Teaching Press</td><td>School supplies and publisher</td><td>Board Creation, Member</td></tr>
        <tr><td>Ruby’s Diners</td><td>Restaurant operator and franchisor</td><td>Board Creation, Member</td></tr>
        <tr><td>Dacor Appliances</td><td>Kitchen appliance manufacturer</td><td>Board Member</td></tr>
        <tr><td>MPS</td><td>Document management</td><td>Board Creation, Member</td></tr>
        <tr><td>United Ad Label</td><td>Hospital label manufacturer</td><td>Board Creation, Member</td></tr>
        <tr><td>United Green Mark</td><td>Irrigation supply</td><td>Board Member</td></tr>
        <tr><td>Guggenheim Dental</td><td>Dental supply distributor</td><td>Board Member</td></tr>
        <tr><td>ONTIC</td><td>Aerospace parts manufacturer</td><td>Board Creation, Member, Assessment</td></tr>
        <tr><td>Storm Management</td><td>Valve manufacturing, real estate</td><td>Board Assessment</td></tr>
        <tr><td>Scripps Institute</td><td>Hospital and medical research</td><td>Board Assessment</td></tr>
        <tr><td>Sunrise Gardens</td><td>Agriculture</td><td>Board Creation, Member</td></tr>
        <tr><td>Rogers Gardens</td><td>Retail nursery</td><td>Board Creation, Member</td></tr>
        <tr><td>Power Plus</td><td>Temporary power</td><td>Board Creation, Member</td></tr>
        <tr><td>Leighton Group Engineering</td><td>Consulting</td><td>Board Creation, Member</td></tr>
        <tr><td>Bal Seal Engineering</td><td>Medical products</td><td>Board member</td></tr>
        <tr><td>Pick Your Part</td><td>Salvage yards</td><td>Board Creation</td></tr>
        <tr><td>Friedas</td><td>Wholesale produce</td><td>Board Member, Creation</td></tr>
        <tr><td>Hi-Shear Technology</td><td>Pyrotechnic and electrical products</td><td>Board Member</td></tr>
        <tr><td>Mitchell Rubber</td><td>Industrial rubber products</td><td>Board Creation, Member</td></tr>
        <tr><td>Associated Ready Mix</td><td>Concrete products</td><td>Board Creation, Member</td></tr>
        <tr><td>Alumco</td><td>Window screens</td><td>Board Creation, Member</td></tr>
        <tr><td>Aero Net</td><td>Freight forwarder</td><td>Board Creation, Member</td></tr>
        <tr><td>Bivar</td><td>Optoelectronics</td><td>Board Creation, Member</td></tr>
        <tr><td>Dos Gringos</td><td>Flower growers</td><td>Board Creation, Member</td></tr>
        <tr><td>Linsey Manufacturing</td><td>Electrical grid management</td><td>Board Member</td></tr>
        <tr><td>Metagenics</td><td>Nutritional products</td><td>Board Creation, Member</td></tr>
        <tr><td>R. W. smith</td><td>Restaurant supplies</td><td>Board Creation, Member</td></tr>
        <tr><td>Raymond Group</td><td>Contractor</td><td>Board Member</td></tr>
        <tr><td>Trojan</td><td>Battery manufacturer</td><td>Board Creation, Member</td></tr>
        <tr><td>Hoffman Southwest</td><td>Plumbing</td><td>Board Member</td></tr>
        <tr><td>The Reliable Company</td><td>Laundry Services</td><td>Board Member</td></tr>
        <tr><td>Bell Racing Company</td><td>Helmet Manufacturer</td><td>Board Member</td></tr>
        <tr><td>Jim Russell Racing Drivers School</td><td>Drivers school</td><td>Board Member</td></tr>
        <tr><td>Nailite International</td><td>Building Products</td><td>Board Member</td></tr>
        <tr><td>Storage Mobility, LLC</td><td>Moving &amp; Storage</td><td>Board Member</td></tr>
        <tr><td>Stila Cosmetics</td><td>Beauty Products</td><td>Board Member</td></tr>
        <tr><td>Baby Time! By Episencial</td><td>Skincare</td><td>Board Member</td></tr>
        <tr><td>Josie Maran Cosmetics</td><td>Beauty Products</td><td>Board Member</td></tr>
        <tr><td>Twigtale</td><td>Child development</td><td>Board Member</td></tr>

        </table>
    </div>
@stop