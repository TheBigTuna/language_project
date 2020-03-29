<?php
 include('navbar.php');
?>
<link href="/style/index.css" rel="stylesheet">

<div id="homeContainer">
    <div id="videoBG" class="d-none d-md-block">
        <div id="headWrapper">
            <h2 id="headText">GrowthBook</h2>
            <h2 id="subText">Join a young global community of learners</h2>
        </div>
        <video autoplay loop muted class="wrapper__video">
            <source src="video/headerVideo.mp4">
        </video>
    </div>

    <div class="row">
        <div class="col-0 col-sm-3"></div>
        <div class="col-12 col-sm-6">
            <div id="lessons">
                <ul class="list-group">
                <h2 id="lessonsText">Courses Available</h2>
                <a href="lessons.php?Type=HTML"><li class="list-group-item"><h4 class="text-center">HTML</h4></li></a>
                <a href="lessons.php?Type=CSS"><li class="list-group-item"><h4 class="text-center">CSS</h4></li></a>
                </ul>
            </div>
        </div>
        <div class="col-0 col-sm-3"></div>
    </div>
</div>

