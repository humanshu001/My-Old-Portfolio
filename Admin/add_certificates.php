<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <h1 class="main-heading">Add New Certificate</h1>
    </div>
    <div class="row">
        <form action="callback/certificate.php" method="post" class="col-md-5 m-auto" enctype="multipart/form-data" >
            <label for="title">Title</label>
            <input class="form-control mb-3 admin-input" type="text" name="title" id="title" placeholder="Enter Title">
            <label for="domain">Domain</label>
            <select class="form-select mb-3 admin-input" name="domain" id="domain">
                <option value="participation">Participation</option>
                <option value="winner">Winner</option>
                <option value="appreciation">Appreciation</option>
                <option value="certification">Certification</option>
                <option value="badge">Badge</option>
            </select>
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