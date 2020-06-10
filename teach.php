<?php
 include('navbar.php');
?>
<link href="/style/teach.css" rel="stylesheet">


<div id="teachContainer">
    <div class="row">
        <div class="col-12 col-xl-3">

            <h3 class="mt-4" style="font-weight: 700; text-align: center;"><?= $Course ?></h3>
            <div id="lessonCourseOverview">
                <ul class="list-group">
                        <li class="list-group-item listContent">Introduction <a href="Courses/<?= $_GET['Type']; ?>/introduction.php"></a></li>
                    <?php
                        $CourseType = mysqli_real_escape_string($conn, $Course);

                        $FetchTasks = "
                        SELECT 
                        DISTINCT 
                        A.ID, A.CourseName, B.OrderNumber, B.TaskName
                        FROM omoore94_growthbook.courselist AS A 
                        INNER JOIN omoore94_growthbook.tasklist AS B 
                        ON B.CourseID = A.ID
                        WHERE CourseName = '$CourseType'
                        ";        
                        $FetchTasksResult = mysqli_query($conn, $FetchTasks);
                        while($row = mysqli_fetch_assoc($FetchTasksResult)){
                    ?>
                        <li class="list-group-item listContent"><?= $row['TaskName']; ?><a href="Courses/<?= $row['CourseName']; ?>/<?= $row['TaskName']; ?>"></a></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>

        </div>
        <div class="col-12 col-xl-9">
            <div id="lessonPreviewVideoBG">
              <video controls class="wrapper__video">
                <source src="video/headerVideo.mp4">
              </video>
            </div>
        </div>
    </div>
</div>