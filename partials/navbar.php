

<!-- Modal -->
<div class="modal fade" id="loginmod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="partials/action.php" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uemail">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
          </div>

          <button type="submit" class="btn btn-primary" name="loginbutton">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Signup Modal -->
<div class="modal fade" id="signupmod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Sign up for free</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="partials/action.php" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uemail">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="uname" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="cpass">
          </div>

          <button type="submit" class="btn btn-primary" name="signupbutton">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E-COM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Explore
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Products</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex" role="search">

        <?php
        if (isset($_SESSION['loginSuccessfull'])) {
          echo '
                <h6>Welcome, ' . $_SESSION['userFullName'] . ' </h6>
                &ensp;
                <a type="button" href="partials/logout.php" class="btn btn-danger">
                logout
              </a>';
        } else {
          echo '
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginmod">
            login
          </button>
          &ensp;
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupmod">
            Sign up
          </button>
          ';
        }

        ?>





      </form>
    </div>
  </div>
</nav>