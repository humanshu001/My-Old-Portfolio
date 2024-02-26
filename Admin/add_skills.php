<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <h1 class="main-heading">Add New Skill</h1>
    </div>
    <div class="row">
        <form action="" class="col-md-5 m-auto" >
            <label for="name">Skill Name</label>
            <input class="form-control mb-3 admin-input" type="text" name="name" id="name" placeholder="Enter Skill Name">
            <label for="outoften">Out Of 10</label>
            <input class="form-control mb-3 admin-input" type="number" name="outoften" id="outoften" max="10" placeholder="Enter Out Of 10">
            <label for="outoffive">Out Of 5</label>
            <input class="form-control mb-3 admin-input" type="number" name="outoffive" id="outoffive" max="5" placeholder="Enter Out Of 5">

            <div class="d-grid">
                <button class="btn border" type="submit" >Add</button>
            </div>
        </form>
    </div>
</div>


<?php
include 'footer.php';
?>