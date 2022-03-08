<!DOCTYPE html>
<html lang="en">
<head>
  <title>navbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img id="img_logo" src="images/logo.png" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">SHOP</a>
        </li>
      </ul>
      <li class="nav-item dropdown">
          <a class="  navbar-brand" href="#" role="button" data-bs-toggle="dropdown">
          <img class="icon" src="images/accont.png"></a>
            <!-- <a class="navbar-brand" href="javascript:void(0)"></a> -->
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item text-white" href="#">Sign In</a></li>
            <li><a class="dropdown-item text-white" href="#">Create Compte</a></li>
            <!-- <li><a class="dropdown-item" href="#"></a></li> -->
          </ul>
        </li>
      <a class="navbar-brand" href="javascript:void(0)"><img class="icon" src="images/panier1.png" ></a>

    </div>
  </div>
</nav>

</body>
</html>