<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <h1 class="main-heading">Add New Project</h1>
    </div>
    <div class="row">
        <form action="callback/project.php" method="post" enctype="multipart/form-data" class="col-md-5 m-auto" >
            <label for="title">Title</label>
            <input class="form-control mb-3 admin-input" type="text" name="title" id="title" placeholder="Enter Title">
            <label for="description">Description</label>
            <textarea class="form-control mb-3 admin-input" name="description" id="description" cols="30" rows="5" placeholder="Enter Description"></textarea>
            <label for="image">Image</label>
            <input class="form-control mb-3 admin-input" type="file" name="image" id="image">
            <div class="d-grid">
                <button class="btn border" name="submit" type="submit" >Add</button>
            </div>
        </form>
    </div>
</div>
<?php
include 'footer.php';
?>