<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="dashboard.php">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Dashboard
        </a>
        <a class="nav-link" href="data-product.php">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Products
        </a>
        
        <div class="sb-sidenav-menu-heading">Feature</div>
        <a class="nav-link" href="data-order-custom.php">
          <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
          Order Custom
        </a>
        <a class="nav-link" href="data-order-regular.php">
          <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
          Order Regular
        </a>
        
      </div>    
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        <?php echo strtoupper($_SESSION['username'])?>
    </div>
  </nav>
</div>