<?php
 include('navbar.php');
?>
<link href="/style/home.css" rel="stylesheet">

<div id="videoBG" class="d-none d-md-block">
    <div id="headWrapper">
        <h2 id="headText">Learn Anywhere</h2>
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
            <a href="lessons.php?Type=Spanish"><li class="list-group-item"><h4 class="text-center">Spanish</h4></li></a>
            
            <!-- <li class="list-group-item"><h4 class="text-center">Dapibus ac facilisis in</h4></li>
            <li class="list-group-item"><h4 class="text-center">Morbi leo risus</h4></li>
            <li class="list-group-item"><h4 class="text-center">Porta ac consectetur ac</h4></li>
            <li class="list-group-item"><h4 class="text-center">Vestibulum at eros</h4></li> -->
            </ul>
        </div>
    </div>
    <div class="col-0 col-sm-3"></div>
</div>

