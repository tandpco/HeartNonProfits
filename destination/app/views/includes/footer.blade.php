<div class="sign-up" id="subscribe">
    <div class="container-fluid">
        <p class="col-md-6">Get the latest on building valuable boards right in your inbox.</p>
        {{ Form:: open(array('url' => 'subscribe-post')) }}
        <div class="col-md-2">{{ Form:: text ('first_name', '', array('class' => 'form-control', 'placeholder' => 'First Name') )}}</div>
        <div class="col-md-2">{{ Form:: email ('email', '', array('placeholder' => 'Email Address', 'class' => 'form-control')) }}</div>
        <div class="col-md-2">
        {{ Form::submit('SUBMIT', array('class' => 'btn-secondary btn btn-lg')) }}
        </div>
        {{ Form:: close() }}
    </div>
</div>
<div class="footer" id="footer">
    <div class="container-fluid clearfix">
        <div class="col-md-2">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/what-we-do">What We Do</a></li>
                <li><a href="/board-services/services">Board Services</a></li>
                <li><a href="/clients">Clients / Case Studies</a></li>
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h4>Other Links</h4>
            <ul>
                <li><a href="/board-services/sustainable-value-wheel">Sustainable Value Wheel</a></li>
                <li><a href="/about-us/our-book">Game-Changing Advisory Boards</a></li>
                <li><a href="/board-services/client-companies">For Client Companies</a></li>
                <li><a href="/board-services/advisors">For Advisors</a></li>
                <li><a href="/board-services/learning-center">Learning Center</a></li>
                <li><a href="/our-partners">TBG Partners</a></li>
            </ul>
        </div>
        <div class="col-md-3 col-md-offset-3">
            <h4>Contact Information</h4>
            <address>
                Ken Ude, Executive Director<br />
                The Board Group<br />
                2304 Huntington Drive, Suite 220<br />
                San Marino, CA 91108<br />
                323-365-3787<br />
                <a href="mailto:kude@theboardgroup.com">kude@theboardgroup.com</a>
            </address>
        </div>
        <div id="credits" class="clearfix">
            <div class="col-xs-6">
                &copy; Copyright 2014 The Board Group. All Rights Reserved
             </div>
             <div class="col-xs-6 credit-right">
                Designed + Developed By: <a href="http://www.theoryandpractice.co" id="logo">Theory+Practice</a>
             </div>
         </div>
    </div>
</div>