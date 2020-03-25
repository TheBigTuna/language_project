<?php
 include('navbar.php');
?>
<link href="/style/lesson.css" rel="stylesheet">
<script src="/script/stripe.js"></script>


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
                <li class="list-group-item listHeader">Introduction <button class="btn startCourseButton">Start</button></li>
                <li class="list-group-item listContent">Greetings <button class="btn startCourseButton">Start</button></li>
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
          
        </div>
        <div id="PaymentInformationBG">
          <h2 id="paymentInformationTitle">Payment Information</h2>
          
        </div>
      </div>
    </div>
  </div>
</div>
