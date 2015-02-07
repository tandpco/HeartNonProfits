<!--This is a blade template that goes in email message to site administrator-->
<?php
$first_name = Input::get('first_name');
$last_name = Input::get ('last_name');
$company = Input::get ('company');
$email = Input::get ('email');
$phone_number = Input::get('phone_number');
$date_time = date("F j, Y, g:i a");
?> 

<h2><?php echo ($first_name) ?> <?php echo ($last_name) ?> contacted us:</h2>

<p>
<span style="text-transform: uppercase; font-weight: bold;">First name:</span> <?php echo ($first_name); ?> <br>
<span style="text-transform: uppercase; font-weight: bold;">Last name:</span> <?php echo($last_name);?> <br>
<span style="text-transform: uppercase; font-weight: bold;">Phone number:</span> <?php echo($phone_number);?><br>
<span style="text-transform: uppercase; font-weight: bold;">Email address:</span> <?php echo ($email);?> <br><br>
<span style="text-transform: uppercase; font-weight: bold;">Date:</span> <?php echo($date_time);?><br>
</p>