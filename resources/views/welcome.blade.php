<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.me/demo/azia/v1.1/template/dashboard-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Mar 2019 02:18:42 GMT -->
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130582519-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-130582519-1');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/azia/img/azia-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
          <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="/css/app.css">
    <link href="/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="/lib/morris.js/morris.css" rel="stylesheet">
    <link href="/lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="/lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="/css/azia.css">

  </head>
  <body class="az-body az-body-sidebar">

    <div class="az-sidebar">
      <div class="az-sidebar-header">
        <a href="index.html" class="az-logo">az<span>i</span>a</a>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="/img/img1.jpg" alt=""></div>
        <div class="media-body">
          <h6>Aziana Pechon</h6>
          <span>Premium Member</span>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">
        <ul class="nav">
          <li class="nav-label">Main Menu</li>
          <li class="nav-item active show">
            <a href="index.html" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="dashboard-one.html" class="nav-sub-link">Web Analytics</a></li>
              <li class="nav-sub-item active"><a href="dashboard-two.html" class="nav-sub-link">Sales Monitoring</a></li>
              <li class="nav-sub-item"><a href="dashboard-three.html" class="nav-sub-link">Ad Campaign</a></li>

            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-document"></i>Product Category</a>
            <ul class="nav-sub">
              <li class="nav-sub-item">
                <a href="app-mail.html" class="nav-sub-link">Add category</a>
              </li>
              <li class="nav-sub-item">
                <a href="app-chat.html" class="nav-sub-link">Manage Category</a>
              </li>


            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-book"></i>Products</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="elem-accordion.html" class="nav-sub-link">Add Product</a></li>
              <li class="nav-sub-item"><a href="elem-alerts.html" class="nav-sub-link">Manage products</a></li>

            </ul>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-edit"></i>Sales</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="form-elements.html" class="nav-sub-link">View sales</a></li>
              <li class="nav-sub-item"><a href="form-layouts.html" class="nav-sub-link">Form Layouts</a></li>

            </ul>
          </li><!-- nav-item -->

      <!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link with-sub"><i class="typcn typcn-archive"></i>Waiters</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="util-background.html" class="nav-sub-link">Add waiter</a></li>

              <li class="nav-sub-item"><a href="util-background.html" class="nav-sub-link">Manage waiter</a></li>

            </ul>
          </li><!-- nav-item -->
        </ul><!-- nav -->
      </div><!-- az-sidebar-body -->
    </div><!-- az-sidebar -->

    <div class="az-content az-content-dashboard-two">
      <div class="az-header">
        <div class="container-fluid">
          <div class="az-header-left">
            <a href="#" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          <div class="az-header-center">
            <input type="search" class="form-control" placeholder="Search for anything...">
            <button class="btn"><i class="fas fa-search"></i></button>
          </div><!-- az-header-center -->
          <div class="az-header-right">
            <div class="az-header-message">
              <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
            </div><!-- az-header-message -->
            <div class="dropdown az-header-notification">
              <a href="#" class="new"><i class="typcn typcn-bell"></i></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header mg-b-20 d-sm-none">
                  <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <h6 class="az-notification-title">Notifications</h6>
                <p class="az-notification-text">You have 2 unread notification</p>
                <div class="az-notification-list">
                  <div class="media new">
                    <div class="az-img-user"><img src="/img/img2.jpg" alt=""></div>
                    <div class="media-body">
                      <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                      <span>Mar 15 12:32pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media new">
                    <div class="az-img-user online"><img src="/img/img3.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Joyce Chua</strong> just created a new blog post</p>
                      <span>Mar 13 04:16am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="/img/img4.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                      <span>Mar 13 02:56am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                  <div class="media">
                    <div class="az-img-user"><img src="/img/img5.jpg" alt=""></div>
                    <div class="media-body">
                      <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                      <span>Mar 12 10:40pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </div><!-- az-notification-list -->
                <div class="dropdown-footer"><a href="#">View All Notifications</a></div>
              </div><!-- dropdown-menu -->
            </div><!-- az-header-notification -->
            <div class="dropdown az-profile-menu">
              <a href="#" class="az-img-user"><img src="/img/img1.jpg" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="#" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                  <div class="az-img-user">
                    <img src="/img/img1.jpg" alt="">
                  </div><!-- az-img-user -->
                  <h6>Aziana Pechon</h6>
                  <span>Premium Member</span>
                </div><!-- az-header-profile -->

                <a href="#" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                <a href="#" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                <a href="#" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->

          <div class=".dash">
              <router-view></router-view>
          </div>

      <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>&copy; 2019 </span>
          <span>Designed by: Dennis Ngugi</span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->

    <script src="/js/app.js"></script>
    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/ionicons/ionicons.js"></script>
    <script src="/lib/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="/lib/raphael/raphael.min.js"></script>
    <script src="/lib/morris.js/morris.min.js"></script>
    <script src="/lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="/lib/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="/js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

        $('.az-sidebar .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('show');
          $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
          e.stopPropagation();

          // closing of sidebar menu when clicking outside of it
          if(!$(e.target).closest('.az-header-menu-icon').length) {
            var sidebarTarg = $(e.target).closest('.az-sidebar').length;
            if(!sidebarTarg) {
              $('body').removeClass('az-sidebar-show');
            }
          }
        });


        $('#azSidebarToggle').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('body').toggleClass('az-sidebar-hide');
          } else {
            $('body').toggleClass('az-sidebar-show');
          }
        })

        /* ----------------------------------- */
        /* Dashboard content */

        $('#compositeline').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline2').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline3').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline4').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });


        var morrisData = [
          { y: 'Oct 01', a: 95000, b: 70000 },
          { y: 'Oct 05', a: 75000,  b: 55000 },
          { y: 'Oct 10', a: 50000,  b: 40000 },
          { y: 'Oct 15', a: 75000,  b: 65000 },
          { y: 'Oct 20', a: 50000,  b: 40000 },
          { y: 'Oct 25', a: 80000, b: 90000 },
          { y: 'Oct 30', a: 75000,  b: 65000 }
        ];

        new Morris.Bar({
          element: 'morrisBar1',
          data: morrisData,
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['Online', 'Offline'],
          barColors: ['#560bd0', '#00cccc'],
          preUnits: '$',
          barSizeRatio: 0.55,
          gridTextSize: 11,
          gridTextColor: '#494c57',
          gridTextWeight: 'bold',
          gridLineColor: '#999',
          gridStrokeWidth: 0.25,
          hideHover: 'auto',
          resize: true,
          padding: 5
        });

        $('#vmap2').vectorMap({
          map: 'usa_en',
          showTooltip: true,
          backgroundColor: '#fff',
          color: '#60adff',
          colors: {
            mo: '#9fceff',
            fl: '#60adff',
            or: '#409cff',
            ca: '#005cbf',
            tx: '#005cbf',
            wy: '#005cbf',
            ny: '#007bff'
          },
          hoverColor: '#222',
          enableZoom: false,
          borderWidth: 1,
          borderColor: '#fff',
          hoverOpacity: .85
        });

      });
    </script>
  </body>

<!-- Mirrored from themepixels.me/demo/azia/v1.1/template/dashboard-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Mar 2019 02:18:52 GMT -->
</html>
