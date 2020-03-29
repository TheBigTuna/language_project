<?php
 include('navbar.php');
?>

<link href="/style/contact.css" rel="stylesheet">

<div id="contactContainer">  
  <form id="contact" action="" method="post">
    <h3>Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" maxlength="50" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" maxlength="50" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" maxlength="12" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Enter Subject" type="text" maxlength="50" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." maxlength="800" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>