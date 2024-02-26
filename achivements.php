<?php
include 'include/header.php';
include 'config/config.php';
?>
    <section class="sec2">
        <h1>My Badge: </h1>
        <div class="badge">
            <?php
                $query = "SELECT * FROM `certificates` where domain = 'badge' ";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)){
                    echo '<img src="Assets/Images/certificates/'.$row['image'].'" alt="">';
                }
            ?>
        </div>
        <h1>Certfication in My Domain: </h1>
        <div class="domain">
            <?php
                $query = "SELECT * FROM `certificates` where domain = 'certification' ";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)){
                    echo '<img src="Assets/Images/certificates/'.$row['image'].'" alt="">';
                }
            ?>
        </div>
        <h1>My Participation Certificates: </h1>
        <div class="participation">
            <?php
                $query = "SELECT * FROM `certificates` where domain = 'participation' ";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)){
                    echo '<img src="Assets/Images/certificates/'.$row['image'].'" alt="">';
                }
            ?>
        </div>
        <h1>My Appreciation Letter: </h1>
        <div class="appreciation">
            <?php
                $query = "SELECT * FROM `certificates` where domain = 'appreciation' ";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)){
                    echo '<img src="Assets/Images/certificates/'.$row['image'].'" alt="">';
                }
            ?>
        </div>
    </section>
    <?php
include 'include/footer.php';
?>