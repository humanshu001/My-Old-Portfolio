<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../Assets/Images/favicon.jpeg" type="image/x-icon">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/css/admin.css">
</head>

<body>
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
        aria-controls="offcanvasScrolling">
        <hr class="line-1">
        <hr class="line-1">
        <hr class="line-1">
    </button>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel"><a class="nav-link" href="index.php">Hello, Humanshu</a></h5>
            <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <td>
                            <a class="nav-link" href="add_certificates.php">Add New Certificate</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="nav-link" href="change_text.php">Change Text</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="nav-link" href="add_projects.php">Add New Project</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="nav-link" href="change_image.php">Change Image</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="nav-link" href="add_skills.php">Add New Skills</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>