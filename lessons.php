<?php
 include('navbar.php');
?>
<link href="/style/lesson.css" rel="stylesheet">
<link href="/style/stripe.css" rel="stylesheet">
<script src="https://js.stripe.com/v3/"></script>

<div id="lessonContainer">
  <div class="row">
    <div class="col-12 col-sm-6">
      <div id="lessonPreview">
        <div class="container">
          <div id="lessonPreviewBG">
            <div id="lessonPreviewHeader">
              <h1 id="lessonPreviewHeaderTitle"><?= $_GET['Type']; ?></h1>
              <h5 id="lessonPreviewHeaderSubtitle">Lesson Preview Header</h5>
            </div>
            <div id="lessonPreviewVideoBG">
              <video controls class="wrapper__video">
                <source src="video/headerVideo.mp4">
              </video>
            </div>
            <div id="lessonCourseOverviewBG">
              <h3>Course Overview</h3>
              <div id="lessonCourseOverview">
                <ul class="list-group">
                  <li class="list-group-item listHeader">Introduction <a href="teach.php"><button class="btn startCourseButton">Start</button></a></li>
                  <li class="list-group-item listContent">Greetings <a href="teach.php"><button class="btn startCourseButton">Start</button></a></li>
                  <li class="list-group-item listContent">Formalities <button class="btn startCourseButton">Start</button></li>
                  <li class="list-group-item listContent">Morbi leo risus <button class="btn startCourseButton">Start</button></li>
                  <li class="list-group-item listContent">Porta ac consectetur ac <button class="btn startCourseButton">Start</button></li>
                  <li class="list-group-item listContent">Vestibulum at eros <button class="btn startCourseButton">Start</button></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6">
      <div class="container">
        <div id="UserInformationBG">
          <div id="AccountInformationBG">
          <h2 id="paymentInformationTitle">Account Information</h2>

            <div class="wrapper">
              <div id="formContent">
               <h2 id="selectLogin" class="active">Sign In</h2>
                <h2 id="selectSignUp" class="underlineHover">Sign Up</h2>
                <!-- <div class="first">
                  <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
                </div> -->
                <form id="LoginFields">
                  <input type="text" id="login" class="second" name="login" placeholder="Email Address" maxlength="50" required>
                  <input type="password" id="password" class="third" name="password" placeholder="Password" maxlength="20" required>
                  <input type="submit" class="fourth" value="Log In">
                </form>
                <form id="SignupFields" class="d-none">
                  <input type="text" id="login" class="second" name="Email" placeholder="Email Address" maxlength="50" required>
                  <input type="password" id="password" class="third" name="Password" placeholder="Enter Password" maxlength="20" required>
                  <input type="password" id="password" class="third" name="ConfirmPassword" placeholder="Confirm Password" maxlength="20" required>
                  <input type="submit" class="fourth" value="Sign Up">
                </form>
                <!-- Remind Passowrd -->
                <div id="formFooter">
                  <a class="underlineHover" href="#">Forgot Password?</a>
                </div>

              </div>
            </div>

          </div>
          <div id="PaymentInformationBG">
            <h2 id="paymentInformationTitle">Payment Information</h2>
            


            
  


            <form action="//httpbin.org/post" method="POST">
            <input type="hidden" name="token" />
            <div class="group">
              <label>
                <span>Card</span>
                <div id="card-element" class="field"></div>
              </label>
            </div>
            <div class="group">
              <label>
                <span>First name</span>
                <input id="first-name" name="first-name" class="field" placeholder="" />
              </label>
              <label>
                <span>Last name</span>
                <input id="last-name" name="last-name" class="field" placeholder="" />
              </label>
            </div>
            <div class="group">
              <label>
                <span>Address</span>
                <input id="address-line1" name="address_line1" class="field" placeholder="" />
              </label>
              <label>
                <span>Address (cont.)</span>
                <input id="address-line2" name="address_line2" class="field" placeholder="" />
              </label>
              <label>
                <span>City</span>
                <input id="address-city" name="address_city" class="field" placeholder="" />
              </label>
              <label>
                <span>State</span>
                <input id="address-state" name="address_state" class="field" placeholder="" />
              </label>
              <label>
                <span>ZIP</span>
                <input id="address-zip" name="address_zip" class="field" placeholder="" />
              </label>
              <label>
                <span>Country</span>
                <select name="address_country" id="address-country" class="field">
                  <option value="IN">India</option>
                  <option value="SG" selected>Singapore</option>
                </select>
              </label>
            </div>
            <button type="submit">Pay $25</button>
            <div class="outcome">
              <div class="error"></div>
              <div class="success">
                Success! Your Stripe token is <span class="token"></span>
              </div>
            </div>
          </form>
            


          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="/script/lesson.js"></script>
<script src="/script/stripe.js"></script>
