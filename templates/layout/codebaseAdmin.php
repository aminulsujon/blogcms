<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>BlogCMS Admin</title>
    <link rel="icon" href="<?= $siteoptions['web_resource'] ?>/favicon-admin.ico" type="image/ico">

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="<?= $siteoptions['web_url']?>/codebase/js/plugins/slick/slick.css">
    <link rel="stylesheet" href="<?= $siteoptions['web_url']?>/codebase/js/plugins/slick/slick-theme.css">

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="<?= $siteoptions['web_url']?>/codebase/css/codebase.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
    <style>
      i{font-style:normal}
      .input{margin-bottom:16px}
      select{width: 100%;padding: 10px 0;border: 1px solid #ddd;}
      .input label{margin-bottom:8px;display:block}
      .radio label{display: inline-block;border: 1px solid #ddd;padding: 5px 10px;margin-right: 10px}
      .input input,.input textarea{display:block;padding:10px;width:100%;border:1px solid #ddd;}
      .radio input{display:inline-block;width:20px}
      .hidden{display:none}
      .pagination li{padding:10px 0;margin-right:10px}
      .pagination li a{padding:10px;border:1px solid #ddd;border-radius:10px;text-transform:capitalize;}
      .pagination li.disabled a{color:#ddd}
      .message{text-align:center}
      .message.success{color:green}
      .message.error{color:red}
      .block-content {background:#fff}

      /*pagination*/
      .pagination {
          display: -ms-flexbox;
          display: flex;
          padding-left: 0;
          list-style: none;
          border-radius: 0.25rem
      }
      .pagination li a {
            position: relative;
            display: block;
            padding: 0.57142857rem 0.71428571rem;
            margin-left: -1px;
            line-height: 1.2;
            color: #171717;
            background-color: #f0f2f5;
            border: 1px solid #f0f2f5;
            border-radius: 0
        }
      .pagination li.active a {
          z-index: 3;
          color: #fff;
          background-color: #3f9ce8;
          border-color: #3f9ce8;
      }
      .ck-editor__editable{min-height:400px}
      .ck-file-dialog-button{display:none}
    </style>
  </head>
  <body>
    
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
      <!-- Side Overlay-->
      <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow">
          <div class="content-header-section align-parent">
            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
              <i class="fa fa-times text-danger"></i>
            </button>
            <!-- END Close Side Overlay -->

            <!-- User Info -->
            <div class="content-header-item">
              <a class="img-link mr-5" href="be_pages_generic_profile.html">
                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
              </a>
              <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
            </div>
            <!-- END User Info -->
          </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
        
          <!-- Search -->
          <div class="block pull-t pull-r-l">
            <div class="block-content block-content-full block-content-sm bg-body-light">
              <form action="be_pages_generic_search.html" method="post">
                <div class="input-group">
                  <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary px-10">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END Search -->
        </div>
        <!-- END Side Content -->
      </aside>
      
      <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
          <!-- Side Header -->
          <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
              <!-- Logo -->
              <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
              </span>
              <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times text-danger"></i>
              </button>
              <!-- END Close Sidebar -->

              <!-- Logo -->
              <div class="content-header-item">
                <a class="link-effect font-w700" href="<?= $siteoptions['web_url'] ?>/users/dashboard">
                  <img width="150" src="<?= $siteoptions['web_url']?>/newsbd/img/logo.png">
                </a>
              </div>
              <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
          </div>
          <!-- END Side Header -->

          <!-- Sidebar Scrolling -->
          <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side content-side-full">
              <ul class="nav-main">
                <li>
                  <a class="active" href="<?= $siteoptions['web_url'] ?>/users/dashboard"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                </li>
                <li class="">
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-energy"></i><span class="sidebar-mini-hide">News</span></a>
                  <ul>
                    <li>
                      <a href="<?= $siteoptions['web_url'] ?>/products/add">News Entry</a>
                    </li>
                    <li>
                      <a href="<?= $siteoptions['web_url'] ?>/products/index">News List</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="<?= $siteoptions['web_url'] ?>/uploads/inner"><i class="si si-film"></i> Media Library</a>
                </li>
                <li class="">
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-social-youtube"></i><span class="sidebar-mini-hide">Video</span></a>
                  <ul>
                    <li>
                      <a href="<?= $siteoptions['web_url'] ?>/upvideos/add">Video Entry</a>
                    </li>
                    <li>
                      <a href="<?= $siteoptions['web_url'] ?>/upvideos/index">Video List</a>
                    </li>
                  </ul>
                  <li class="">
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-camera"></i><span class="sidebar-mini-hide">Photo</span></a>
                  <ul>
                    <li>
                      <a href="<?= $siteoptions['web_url'] ?>/products/album">Create Album</a>
                    </li>
                    <li>
                      <a href="<?= $siteoptions['web_url'] ?>/products/photo">Album List</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="<?= $siteoptions['web_url'] ?>/tags"><i class="si si-bag"></i><span class="sidebar-mini-hide">Category</span></a>
                </li>
                <li>
                  <a href="<?= $siteoptions['web_url'] ?>/users"><i class="si si-users"></i><span class="sidebar-mini-hide">Users</span></a>
                </li>
                <li class="">
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-settings"></i><span class="sidebar-mini-hide">Settings</span></a>
                  <ul>
                    <li>
                      <a href="<?= $siteoptions['web_url'] ?>/settings/homepage">Home Page</a>
                    </li>
                    <li>
                      <a href="<?= $siteoptions['web_url'] ?>/settings/color">Color</a>
                    </li>
                    <li>
                      <a href="<?= $siteoptions['web_url'] ?>/settings/social">Social Media</a>
                    </li>
                    <li>
                      <a href="<?= $siteoptions['web_url'] ?>/settings/custom">Custom Code</a>
                    </li>
                    <li>
                      <a href="<?= $siteoptions['web_url'] ?>/settings/template">Template Setup</a>
                    </li>
                  </ul>
                </li>
                
              </ul>
            </div>
            <!-- END Side Navigation -->
          </div>
          <!-- END Sidebar Scrolling -->
        </div>
        <!-- Sidebar Content -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="content-header-section">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-navicon"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on" style="display:none">
              <i class="fa fa-search"></i>
            </button>
            <!-- END Open Search Section -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="content-header-section">
            <!-- User Dropdown -->
            <div class="btn-group" role="group">
              <a href="<?= $siteoptions['web_url']?>" target="_blank" class="btn btn-outline-secondary mr-5 mb-5">Website Homepage</a>
              <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user d-sm-none"></i>
                <span class="d-none d-sm-inline-block"><?= $arr_loggedUser['name'] ?? 'No name admin'?></span>
                <i class="fa fa-angle-down ml-5"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                <!-- <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                <a class="dropdown-item" href="be_pages_generic_profile.html">
                  <i class="si si-user mr-5"></i> Profile
                </a> -->
                <!-- END Side Overlay -->

                <!-- <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="<?= $siteoptions['web_url'] ?>/users/logout">
                  <i class="si si-logout mr-5"></i> Sign Out
                </a>
              </div>
            </div>
            <!-- END User Dropdown -->

          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header" style="display:none">
          <div class="content-header content-header-fullrow">
            <form action="be_pages_generic_search.html" method="post">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- Close Search Section -->
                  <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                  <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                    <i class="fa fa-times"></i>
                  </button>
                  <!-- END Close Search Section -->
                </div>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary">
          <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
              <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->

        <?php 
        $controllerName = $this->request->getParam('controller');
        $actionName = $this->request->getParam('action');
        if($controllerName == 'Products'){
          $contName = "News";
        }else{
          $contName = $controllerName;
        }

        if($actionName == "index"){
          $viewName = 'List';
        }else{
          $viewName = ucfirst($actionName);
        }
        
        $breadcrumbController = ['Products','Tags','Users','Reporters'];
        if($actionName == 'photo'){
          ?>
          <!-- Breadcrumb -->
          <div class="content-header">
            <div class="block-content">
              <nav class="breadcrumb push">
                <a class="breadcrumb-item" href="<?= $siteoptions['web_url'] ?>/users/dashboard">Home</a>
                <a class="breadcrumb-item" href="<?= $siteoptions['web_url'] ?>/<?= strtolower($controllerName) ?>/photo">Photo</a>
                <a class="breadcrumb-item active" href="#">List</a>
                <!-- <span class="breadcrumb-item active">Bootstrap</span> -->
              </nav>
            </div>
          </div>
          <!-- END Breadcrumb -->
          <?php 
        }elseif($actionName == 'album'){
          ?>
          <!-- Breadcrumb -->
          <div class="content-header">
            <div class="block-content">
              <nav class="breadcrumb push">
                <a class="breadcrumb-item" href="<?= $siteoptions['web_url'] ?>/users/dashboard">Home</a>
                <a class="breadcrumb-item" href="<?= $siteoptions['web_url'] ?>/<?= strtolower($controllerName) ?>/photo">Photo</a>
                <a class="breadcrumb-item active" href="#">Create Album</a>
                <!-- <span class="breadcrumb-item active">Bootstrap</span> -->
              </nav>
            </div>
          </div>
          <!-- END Breadcrumb -->
          <?php 
        }else{
          if(in_array($controllerName,$breadcrumbController)){
          ?>
          <!-- Breadcrumb -->
          <div class="content-header">
            <div class="block-content">
              <nav class="breadcrumb push">
                <a class="breadcrumb-item" href="<?= $siteoptions['web_url'] ?>/users/dashboard">Home</a>
                <a class="breadcrumb-item" href="<?= $siteoptions['web_url'] ?>/<?= strtolower($controllerName) ?>"><?= $contName?></a>
                <a class="breadcrumb-item active" href="#"><?= $viewName?></a>
                <!-- <span class="breadcrumb-item active">Bootstrap</span> -->
              </nav>
            </div>
          </div>
          <!-- END Breadcrumb -->
          <?php 
          }
        }?>
      </header>
      <!-- END Header -->

      

      <!-- Main Container -->
      <main id="main-container">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer">
        <div class="content py-20 font-size-sm clearfix">
          <!-- <div class="float-right">
            Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="#" target="_blank"></a>
          </div> -->
          <div class="float-left">
            <a class="font-w600" href="#" target="_blank"></a> &copy; <span class="js-year-copy"><?= date('Y') ?></span>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <script src="<?= $siteoptions['web_url']?>/codebase/js/codebase.core.min.js"></script>
    <script src="<?= $siteoptions['web_url']?>/codebase/js/codebase.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="<?= $siteoptions['web_url']?>/codebase/js/plugins/chartjs/Chart.min.js"></script>
    <script src="<?= $siteoptions['web_url']?>/codebase/js/plugins/slick/slick.min.js"></script>

    <!-- Page JS Code -->
    <script src="<?= $siteoptions['web_url']?>/codebase/js/pages/be_pages_dashboard.min.js"></script>
    <script>
      function confirm_action() {
        return confirm('Are you sure?');
      }
      setInterval( LoadFinance, 10000 );
      function LoadFinance()
      {
        $.ajax({url: "https://www.techtechnique.net/", success: function(result){
          //$("#div1").html(result);
          console.log('ok--alive');
        }});
      }
    </script>
  </body>
</html>