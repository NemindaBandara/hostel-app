<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Hostel Allocation System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- ms-auto pushes it to the right -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Add Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Room Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark text-white" style="width: 250px; height: 100vh;">
    
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link text-white active">
                Home
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                Dashboard
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                Rooms
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                Students
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                Settings
            </a>
        </li>
    </ul>
    <hr>
    <div>
        <a href="#" class="nav-link text-white">
            Logout
        </a>
    </div>
</div>


</body>
</html>