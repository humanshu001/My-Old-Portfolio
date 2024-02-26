<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <h1 class="main-heading">Change About Section Text</h1>
    </div>
    <div class="row">
        <form action="" class="col-md-5 m-auto" >
            <label for="about">About Text</label>
            <textarea class="form-control mb-3 admin-input" name="about" id="about" cols="30" rows="5" placeholder="Enter About Yourself"></textarea>
            <div class="d-grid">
                <button class="btn border" type="submit" >Change</button>
            </div>
        </form>
    </div>
</div>


<?php
include 'footer.php';
?>