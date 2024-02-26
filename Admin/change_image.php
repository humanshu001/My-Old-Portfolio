<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <h1 class="main-heading">Change Image</h1>
    </div>
    <div class="row">
        <form action="" class="col-md-5 m-auto" >
            <label for="which">Which Image</label>
            <select class="admin-input mb-3 form-select" name="which" id="which">
                <option value="my_image">My Image</option>
                <option value="side_image">Side Image</option>
            </select>
            <label for="image">Image</label>
            <input class="form-control mb-3 admin-input" type="file" name="image" id="image">
            <div class="d-grid">
                <button class="btn border" type="submit" >Change</button>
            </div>
        </form>
    </div>
</div>


<?php
include 'footer.php';
?>