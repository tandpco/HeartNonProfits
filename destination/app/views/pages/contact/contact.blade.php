@extends('layouts.noModule')
@section('pageTitle')
	Contact Us
@stop
@section('sidebar-menu')
    <h5>Offices</h5>
    <div class="founders">
        <address>
            <h4>Pasadena Area</h4>
            Ken Ude, Executive Director<br>
            The Board Group<br>
            2304 Huntington Drive, Suite 220<br>
            San Marino, CA 91108<br>
            323-365-3787<br>
            <a href="mailto:kude@theboardgroup.com">kude@theboardgroup.com</a>
        </address>

        <address>
            <h4>Los Angeles Area</h4>
            William D. Hawfield, Founder<br>
            The Board Group<br>
            3075 E. Thousand Oaks Blvd, Suite 300<br>
            Westlake Village, CA 91362<br>
            805-207-0448<br>
            <a href="mailto:whawfield@theboardgroup.com">whawfield@theboardgroup.com</a>
        </address>
        
        <address>
            <h4>Orange County</h4>
            John Zaepfel, Founder<br>
            The Board Group<br>
            239 Heliotrope Drive<br>
            Corona Del Mar, CA 92625<br>
            949-723-1391<br>
            <a href="mailto:jzaepfel@theboardgroup.com">jzaepfel@theboardgroup.com</a>
        </address>
    </div>
@stop
@section('content')
    <section style="line-height:30px;">
        <h1 class="founderName">Contact Us</h1>
        <p>There are more than 150 Companies and 50 CEOs affiliated with The Board Group who are experienced Board members. We are dedicated to building stronger companies and exceptional, transferable value by creating and managing highly effective advisory and fiduciary Boards.</p>
        <p>If you would like to know more about our group or our services, please make fill out the following form.</p>
    </section>
    <!-- Blade Template engine -->
    {{ Form:: open(array('url' => 'contact-request')) }}
    <div class="col-sm-8 row">
        @if (count($errors) > 0)
        <ul class="errors">
            @if (count($errors) > 0)
                @if (count($errors) === 1)
                    There was an error processing your form. Please address it and try again.
                @elseif (count($errors) > 1)
                    There were errors processing your form. Please address them and try again.
                @endif
            @endif
            @foreach($errors->all('<li>:message</li>') as $message)
            {{ $message }}
            @endforeach
        </ul>
        @endif
        <div class="form-group row">
            <div class="col-sm-4">{{ Form:: label ('first_name', 'First Name*' )}}</div>
            <div class="col-sm-8">{{ Form:: text ('first_name', '', array('class' => 'form-control') )}}</div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">{{ Form:: label ('last_name', 'Last Name*' )}}</div>
            <div class="col-sm-8">{{ Form:: text ('last_name', '', array('class' => 'form-control') )}}</div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">{{ Form:: label ('company', 'Company*' )}}</div>
            <div class="col-sm-8">{{ Form:: text ('company', '', array('class' => 'form-control') )}}</div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">{{ Form:: label ('email', 'E-mail Address*') }}</div>
            <div class="col-sm-8">{{ Form:: email ('email', '', array('placeholder' => 'me@example.com', 'class' => 'form-control')) }}</div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">{{ Form:: label ('phone_number', 'Phone Number' )}}</div>
            <div class="col-sm-8">{{ Form:: text ('phone_number', '', array('placeholder' => '0280021xx', 'class' => 'form-control')) }}</div>
        </div>
        <div class="form-group">
        {{ Form::submit('SUBMIT', array('class' => 'btn-secondary btn btn-lg')) }}
        </div>
        {{ Form:: close() }}
    </div>
    <html>
<body>
@stop