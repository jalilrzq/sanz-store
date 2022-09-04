<!-- <nav class="sb-topnav navbar navbar-expand-lg navbar-dark bg-dark fixed-top visually-hidden"> -->
<nav class="sb-topnav navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand ps-3" href="dashboard2.php"><b>SANZ STORE</b></a>
    <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end align-item-lg-center" id="navbarNavAltMarkup">
      <div class="navbar-nav me-5">
        <ul class="d-flex justify-content-end navbar-nav ms-md-0 me-3 me-lg-4">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['username'] ?> <i class="fas fa-user fa-fw"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>