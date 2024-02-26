<?php
include 'include/header.php';
include 'config/config.php';
?>
    <section class="sec2">
        <h1>My Resume:</h1>
        <div class="resume-body">
            <?php
                $query = "SELECT * FROM `resume` where type = 'pdf' ";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)){
                    echo '<a target="_blank" href="Assets/files/'.$row['resume'].'" >';
                    $q1 = "SELECT * FROM `resume` where type = 'image' ";
                    $r1 = mysqli_query($conn, $q1);
                    while($r = mysqli_fetch_assoc($r1)){
                        echo '<img src="Assets/Images/'.$r['resume'].'" alt="" class="resume">';
                    }
                    echo '</a>';
                }
            ?>
        </div>
    </section>
    <?php
include 'include/footer.php';
?>