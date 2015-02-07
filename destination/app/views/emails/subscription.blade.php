<!--This is a blade template that goes in email message to site administrator-->
<?php
$first_name = Input::get('first_name');
$email = Input::get ('email');
$date_time = date("F j, Y, g:i a");

?> 

<h2><?php echo ($first_name) ?> just subscribed!</h2>

<p>
<span style="text-transform: uppercase; font-weight: bold;">First name:</span> <?php echo ($first_name); ?> <br>
<span style="text-transform: uppercase; font-weight: bold;">Email address:</span> <?php echo ($email);?> <br><br>
<span style="text-transform: uppercase; font-weight: bold;">Date:</span> <?php echo($date_time);?><br>
<a href="theboardgroup.com/form-completions-<?php echo date('m-y') ?>.csv">Download CSV</a>
</p>