<header class="main-header">
  <a href="index.php?route=dashboard" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">
      <img src="view/img/template/logomini.png"
      class="img-responsive" style="padding:10px">
    </span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">
      <img src="view/img/template/logolong.png"
      class="img-responsive" style="padding:10px 0px">
    </span>
  </a>
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- navigation buttons -->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <!-- user photo profile -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php echo '<img src="'.$_SESSION["picture"].'" class="user-image">'; ?>
            <span class="hidden-xs"><?php echo "Hello: ".$_SESSION['fullname']; ?></span>
          </a>

              <!-- dropdown -->
              <ul class="dropdown-menu">
                <li class="user-body">
                  <div class="pull-right">
                    <a href="index.php?route=logout" class="btn btn-default btn-flat">Keluar Akun</a>
                  </div>
                </li>
              </ul>
        </li>
      </ul>
    </div>

  </nav>
</header>
