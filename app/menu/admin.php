<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-th-large"></i>
              <p>
                HOME
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                MASTER
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=data_cdb" class="nav-link active">
                  <i class="nav-icon fas fa-database"></i>
                  <p>CBD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=data_unit" class="nav-link">
                  <i class="nav-icon fas fa-motorcycle"></i>
                  <p>UNIT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=report" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>REPORT</p>
                </a>
              </li>
            </ul>
          </li>
          <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off text-red"></i>
              <p>
                Log Out
              </p>
            </a>
        </ul>
      </nav>