<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('material/assets/img/apple-icon.png'); ?>">
  <link rel="icon" type="image/png" href="<?= base_url('material/assets/img/favicon.png'); ?>">
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="Informasi Jumlah Penderita Virus Covid-19">
  <meta name="author" content="Pudyasto Adi Wibowo">
  <meta name="keyword" content="Covid-19, Corona Virus">
  <meta name="csrf" id="<?= $this->security->get_csrf_token_name(); ?>" content="<?= $this->security->get_csrf_hash(); ?>">
  <meta name="mapbookapi" id="mapbookapi" content="<?= KEY_MAPBOXAPI; ?>">
  <title>
    COVID-19
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?= base_url('material/assets/css/material-dashboard.css'); ?>" rel="stylesheet" />

  <!-- Data Tables -->
  <link rel="stylesheet" href="<?= base_url('material/datatables/datatables.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('material/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('material/datatables/Select-1.2.4/css/select.bootstrap4.min.css'); ?>">
  
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url('material/assets/demo/demo.css'); ?>" rel="stylesheet" />

  <!--   Core JS Files   -->
  <script src="<?= base_url('material/assets/js/core/jquery.min.js"'); ?>"></script>
  <script src="<?= base_url('material/assets/js/core/popper.min.js"'); ?>"></script>
  <script src="<?= base_url('material/assets/js/core/bootstrap-material-design.min.js"'); ?>"></script>
  <script src="<?= base_url('material/assets/js/plugins/perfect-scrollbar.jquery.min.js"'); ?>"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

  <!-- datatables -->
  <script src="<?= base_url('material/datatables/datatables.min.js'); ?>"></script>
  <script src="<?= base_url('material/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js'); ?>"></script>
  <script src="<?= base_url('material/datatables/Select-1.2.4/js/dataTables.select.min.js'); ?>"></script>  

  <script>
    function isJson(str) {
      try {
        JSON.parse(str);
      } catch (e) {
        return false;
      }
      return true;
    }
    var bulan_short = ["Nama Bulan", "Jan", "Feb", "Mar", "Apr", "Mei", "Juni", "Juli", "Agt", "Sept", "Okt", "Nov", "Des"];

    function tgl_id_short(param) {
      if (param === null || param === "") {
        return "";
      }
      var yyyy = param.substring(0, 4);
      var mm = param.substring(5, 7);
      var dd = param.substring(8, 10);
      var hh = param.substring(10, 20);
      return dd + " " + bulan_short[Number(mm)] + " " + yyyy + " " + hh;
    }

    var last = function(array, n) {
      if (array == null)
        return void 0;
      if (n == null)
        return array[array.length - 1];
      return array.slice(Math.max(array.length - n, 0));
    };
  </script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="white" data-image="<?= base_url('material/assets/img/sidebar-1.jpg'); ?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="<?= site_url(); ?>" class="simple-text logo-normal">
          COVID-19
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <?php
          $url = array(
            0 => array(
              'name' => 'Home',
              'url' => site_url('home'),
              'class' => 'home',
              'icon' => 'dashboard',
            ),
            1 => array(
              'name' => 'Indonesia',
              'url' => site_url('indonesia'),
              'class' => 'indonesia',
              'icon' => 'add_location',
            ),
            2 => array(
              'name' => 'About',
              'url' => site_url('about'),
              'class' => 'about',
              'icon' => 'person',
            ),
          );

          $class = ($this->uri->segment(1)) ? $this->uri->segment(1) : 'home';
          $title = "Home";
          foreach ($url as $value) {
            if(($value['class'] == $class)){
              $title = $value['name'];
            }
          ?>
            <li class="nav-item <?= ($value['class'] == $class) ? 'active' : ''; ?>">
              <a class="nav-link" href="<?= $value['url']; ?>">
                <i class="material-icons"><?= $value['icon']; ?></i>
                <p><?= $value['name']; ?></p>
              </a>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>


    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">

          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#"><?=$title;?></a>
          </div>

          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url(); ?>">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="container-fluid">
          <?php echo $template['body']; ?>
        </div>
      </div>

      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            Pudyasto Adi Wibowo
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Themes by <i class="material-icons">favorite</i>
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="<?= base_url('material/assets/img/sidebar-1.jpg"'); ?> alt="">
          </a>
        </li>
        <li>
          <a class=" img-holder switch-trigger" href="javascript:void(0)">
            <img src="<?= base_url('material/assets/img/sidebar-2.jpg"'); ?> alt="">
          </a>
        </li>
        <li>
          <a class=" img-holder switch-trigger" href="javascript:void(0)">
            <img src="<?= base_url('material/assets/img/sidebar-3.jpg"'); ?> alt="">
          </a>
        </li>
        <li>
          <a class=" img-holder switch-trigger" href="javascript:void(0)">
            <img src="<?= base_url('material/assets/img/sidebar-4.jpg"'); ?> alt="">
          </a>
        </li>
        
      </ul>
    </div>
  </div>

  <!-- Plugin for the momentJs  -->
  <script src=" <?= base_url('material/assets/js/plugins/moment.min.js"'); ?>"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('material/assets/js/material-dashboard.js'); ?>" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>