<?php
 include('navbar.php');
?>
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
<link href="/style/courses.css" rel="stylesheet">

<div class="row" style="margin-top: 6rem;">
        <div class="col-0 col-sm-1"></div>
        <div class="col-12 col-sm-10">
            <div id="courses">
                <h2 id="lessonsText">Courses Available</h2>
                <?php
                    $FetchCourses = "SELECT DISTINCT * FROM omoore94_growthbook.courselist";        
                    $FetchCoursesResult = mysqli_query($conn, $FetchCourses);
                    while($row = mysqli_fetch_assoc($FetchCoursesResult)){
                        if($row['CourseName'] == "HTML"){
                            $Icon = "<i class='devicon-html5-plain-wordmark colored'></i>";    
                        }
                        elseif($row['CourseName'] == "CSS"){
                            $Icon = "<i class='devicon-css3-plain-wordmark colored'></i>";
                        }
                ?>
                <a href="lessons.php?Type=<?= $row['CourseName']; ?>">
                    <div class="card">
                        <div class="row">
                            <div class="col-4">
                                <?= $Icon; ?> 
                            </div>
                            <div class="col-8">
                                <h4><?= $row['CourseName']; ?></h4>
                            </div>
                        </div>
                        <div class="answer"></div>
                    </div>
                </a>
            <?php
                }
            ?>
        </div>
        <div class="col-0 col-sm-1"></div>
    </div>
</div>