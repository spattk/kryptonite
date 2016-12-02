<header class="main-header">

    <!-- Logo -->
    <a href="<?php echo SITE_ROOT . 'dashboard' ?>" class="logo">
      
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">AASRA</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
                    
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo ASSETS_URL_ADMIN ?>img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Sitesh Pattanaik</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo ASSETS_URL_ADMIN ?>img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Sitesh Pattanaik - Web Developer
                  <small>Member since Nov. 2019</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo SITE_ROOT . 'admin/logout/' ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul> 
      </div>
    </nav>
  </header>