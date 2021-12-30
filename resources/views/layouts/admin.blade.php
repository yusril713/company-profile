<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>INPROSULA | @yield('title')</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('storage/img/logo.png') }}" rel="icon">

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/icon-kit/dist/css/iconkit.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/ionicons/dist/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/jvectormap/jquery-jvectormap.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/weather-icons/css/weather-icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/c3/c3.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/owl.carousel/dist/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/plugins/owl.carousel/dist/assets/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/dist/css/theme.min.css')}}">
        <link href="{{asset('users/css/magnific-popup.css')}}" rel="stylesheet">
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script src="{{asset('admin/src/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                                </div>
                            </div>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
                        <div class="top-menu d-flex align-items-center">

                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="img/user.jpg" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{route('profile.show')}}"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>

            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="index.html">
                            <div class="logo-img">
                               <img src="" class="header-brand-img" alt="" width="35">
                            </div>
                            <span class="text"></span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>

                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Notifikasi</div>
                                <div class="nav-item">
                                    <a href="{{ route('manage-request-file.index') }}"><i class="ik ik-menu"></i>Request Download
                                        @if (RequestFile::notif()->where('status', 'Belum Dikirim')->count() > 0)
                                            <span class="badge badge-danger">{{ RequestFile::notif()->where('status', 'Belum Dikirim')->count() }}</span>
                                        @endif
                                    </a>
                                </div>
                                <div class="nav-lavel">Dashboard</div>
                                <div class="nav-item active">
                                    <a href=""><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="{{ route('manage-profil.index') }}"><i class="ik ik-menu"></i>Profil Instansi</a>
                                </div>
                                <div class="nav-item">
                                    <a href="{{ route('manage-sertifikat.index') }}"><i class="ik ik-menu"></i><span>Lain-lain</a>
                                </div>

                                <div class="nav-lavel">Informasi</div>
                                <div class="nav-item">
                                    <a href="{{ route('manage-produk.index') }}"><i class="ik ik-menu"></i><span>Produk</a>
                                </div>
                                <div class="nav-item">
                                    <a href="{{ route('manage-media.index') }}"><i class="ik ik-menu"></i><span>Media</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="{{ route('manage-news.index') }}"><i class="ik ik-menu"></i><span>News Inprosula</a>
                                </div>
                                <div class="nav-item">
                                    <a href="{{ route('manage-galeri.index') }}"><i class="ik ik-menu"></i><span>Galeri</a>
                                </div>
                                <div class="nav-lavel">Aktivitas</div>
                                <div class="nav-item">
                                    <a href="{{ route('manage-strategi.index') }}"><i class="ik ik-menu"></i><span>Lingkup Program</a>
                                </div>
                                <div class="nav-item">
                                    <a href="{{ route('manage-kegiatan.index') }}"><i class="ik ik-menu"></i><span>Program InProSuLA</a>
                                </div>
                                <div class="nav-lavel">Pengaturan</div>
                                <div class="nav-item">
                                    <a href="{{ route('manage-wa.index') }}"><i class="ik ik-menu"></i><span>Akun Whatsapp</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                @yield('content')

                <aside class="right-sidebar">
                    <div class="sidebar-chat" data-plugin="chat-sidebar">
                        <div class="sidebar-chat-info">
                            <h6>Chat List</h6>
                            <form class="mr-t-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search for friends ...">
                                    <i class="ik ik-search"></i>
                                </div>
                            </form>
                        </div>
                        <div class="chat-list">
                            <div class="list-group row">
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Gene Newman">
                                    <figure class="user--online">
                                        <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Gene Newman</span>  <span class="username">@gene_newman</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Billy Black">
                                    <figure class="user--online">
                                        <img src="img/users/2.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Billy Black</span>  <span class="username">@billyblack</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Herbert Diaz">
                                    <figure class="user--online">
                                        <img src="img/users/3.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Herbert Diaz</span>  <span class="username">@herbert</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Sylvia Harvey">
                                    <figure class="user--busy">
                                        <img src="img/users/4.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Sylvia Harvey</span>  <span class="username">@sylvia</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item active" data-chat-user="Marsha Hoffman">
                                    <figure class="user--busy">
                                        <img src="img/users/5.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Marsha Hoffman</span>  <span class="username">@m_hoffman</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Mason Grant">
                                    <figure class="user--offline">
                                        <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Mason Grant</span>  <span class="username">@masongrant</span> </span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Shelly Sullivan">
                                    <figure class="user--offline">
                                        <img src="img/users/2.jpg" class="rounded-circle" alt="">
                                    </figure><span><span class="name">Shelly Sullivan</span>  <span class="username">@shelly</span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>

                <div class="chat-panel" hidden>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>
                            <span class="user-name">John Doe</span>
                            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="card-body">
                            <div class="widget-chat-activity flex-1">
                                <div class="messages">
                                    <div class="message media reply">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="img/users/3.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>Epic Cheeseburgers come in all kind of styles.</p>
                                        </div>
                                    </div>
                                    <div class="message media">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>Cheeseburgers make your knees weak.</p>
                                        </div>
                                    </div>
                                    <div class="message media reply">
                                        <figure class="user--offline">
                                            <a href="#">
                                                <img src="img/users/5.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>Cheeseburgers will never let you down.</p>
                                            <p>They'll also never run around or desert you.</p>
                                        </div>
                                    </div>
                                    <div class="message media">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>A great cheeseburger is a gastronomical event.</p>
                                        </div>
                                    </div>
                                    <div class="message media reply">
                                        <figure class="user--busy">
                                            <a href="#">
                                                <img src="img/users/5.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                                        </div>
                                    </div>
                                    <div class="message media">
                                        <figure class="user--online">
                                            <a href="#">
                                                <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                            </a>
                                        </figure>
                                        <div class="message-body media-body">
                                            <p>If you are a vegan, we are sorry for you loss.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="javascript:void(0)" class="card-footer" method="post">
                            <div class="d-flex justify-content-end">
                                <textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
                                <button class="btn btn-icon" type="submit"><i class="ik ik-arrow-right text-success"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2021 inprosula.org All Rights Reserved.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Lavalite</a></span>
                    </div>
                </footer>

            </div>
        </div>




        <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                        <i class="ik ik-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{asset('admin/src/js/vendor/jquery-3.3.1.min.js')}}"><\/script>')</script>
        <script src="{{asset('admin/plugins/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('admin/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('admin/plugins/screenfull/dist/screenfull.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap.min.js')}}"></script>
        <script src="{{asset('admin/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('admin/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <script src="{{asset('admin/plugins/d3/dist/d3.min.js')}}"></script>
        <script src="{{asset('admin/plugins/c3/c3.min.js')}}"></script>
        <script src="{{asset('admin/js/tables.js')}}"></script>
        <script src="{{asset('admin/js/widgets.js')}}"></script>
        <script src="{{asset('admin/dist/js/theme.min.js')}}"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"></script>
        <script src="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"></script>
        <script>
            $(document).ready(function() {
                $('#table_alat').DataTable();
            } );
        </script>
         <script>
            $('#exampleInputFile').on('change',function(){
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
        </script>
        <script src="{{asset('users/js/jquery.magnific-popup.min.js')}}"></script>
        <script>
            $(document).ready(function() {
                $('.zoom-gallery').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    closeOnContentClick: false,
                    closeBtnInside: false,
                    mainClass: 'mfp-with-zoom mfp-img-mobile',
                    image: {
                        verticalFit: true,
                        titleSrc: function(item) {
                            return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
                        }
                    },
                    gallery: {
                        enabled: true
                    },
                    zoom: {
                        enabled: true,
                        duration: 300, // don't foget to change the duration also in CSS
                        opener: function(element) {
                            return element.find('img');
                        }
                    }

                });
            });
        </script>
        <script>
        var konten = document.getElementById("konten");
        CKEDITOR.replace(konten,{
            language:'en-gb'
        });
        CKEDITOR.config.allowedContent = true;
      CKEDITOR.on('instanceReady', function (ev) {
        ev.editor.dataProcessor.htmlFilter.addRules( {
            elements : {
                img: function( el ) {
                    // Add bootstrap "img-responsive" class to each inserted image
                    el.addClass('img-fluid');

                    // Remove inline "height" and "width" styles and
                    // replace them with their attribute counterparts.
                    // This ensures that the 'img-responsive' class works
                    var style = el.attributes.style;

                    if (style) {
                        // Get the width from the style.
                        var match = /(?:^|\s)width\s*:\s*(\d+)px/i.exec(style),
                            width = match && match[1];

                        // Get the height from the style.
                        match = /(?:^|\s)height\s*:\s*(\d+)px/i.exec(style);
                        var height = match && match[1];

                        // Replace the width
                        if (width) {
                            el.attributes.style = el.attributes.style.replace(/(?:^|\s)width\s*:\s*(\d+)px;?/i, '');
                            el.attributes.width = width;
                        }

                        // Replace the height
                        if (height) {
                            el.attributes.style = el.attributes.style.replace(/(?:^|\s)height\s*:\s*(\d+)px;?/i, '');
                            el.attributes.height = height;
                        }
                    }

                    // Remove the style tag if it is empty
                    if (!el.attributes.style)
                        delete el.attributes.style;

                }
            }
        });
    });
        </script>
        @yield('script')
        <style>

            .image-source-link {
                color: #98C3D1;
            }

            .mfp-with-zoom .mfp-container,
            .mfp-with-zoom.mfp-bg {
                opacity: 0;
                -webkit-backface-visibility: hidden;
                /* ideally, transition speed should match zoom duration */
                -webkit-transition: all 0.3s ease-out;
                -moz-transition: all 0.3s ease-out;
                -o-transition: all 0.3s ease-out;
                transition: all 0.3s ease-out;
            }

            .mfp-with-zoom.mfp-ready .mfp-container {
                    opacity: 1;
            }
            .mfp-with-zoom.mfp-ready.mfp-bg {
                    opacity: 0.8;
            }

            .mfp-with-zoom.mfp-removing .mfp-container,
            .mfp-with-zoom.mfp-removing.mfp-bg {
                opacity: 0;
            }

        </style>
    </body>
</html>
