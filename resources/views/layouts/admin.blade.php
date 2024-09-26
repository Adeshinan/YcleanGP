<!doctype html>
<html lang="fr" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>{{$entete}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="Admin/assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="Admin/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="Admin/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="Admin/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="Admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="Admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="Admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="Admin/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <link href="Admin/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="Admin/assets/libs/glightbox/css/glightbox.min.css">
    {{--
  
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}

    @livewireStyles
</head>

<body>

   
    <div id="layout-wrapper">

        @include('layouts.hearder')


        @include('layouts.sliderbar')


        
        <div class="vertical-overlay"></div>

        
        @include('sweetalert::alert')
        @yield('contenu')
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var chatConversation = document.getElementById('chat-conversation');
            chatConversation.scrollTop = chatConversation.scrollHeight;
        });
    </script>

    <!-- JAVASCRIPT -->
    <script src="Admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Admin/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="Admin/assets/libs/node-waves/waves.min.js"></script>
    <script src="Admin/assets/libs/feather-icons/feather.min.js"></script>
    <script src="Admin/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="Admin/assets/js/plugins.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>

    <!-- apexcharts -->
    <script src="Admin/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="Admin/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="Admin/assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="Admin/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="Admin/assets/js/pages/dashboard-ecommerce.init.js"></script>
    <script src="Admin/assets/js/pages/listjs.init.js"></script>
    <script src="Admin/assets/libs/prismjs/prism.js"></script>
    <script src="Admin/assets/libs/list.js/list.min.js"></script>
    <script src="Admin/assets/libs/list.pagination.js/list.pagination.min.js"></script>
    <script src="Admin/assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- App js -->
    <script src="Admin/assets/js/app.js"></script>
    <!--jquery cdn-->
    {{-- <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--select2 cdn-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="Admin/assets/js/pages/select2.init.js"></script>

    <script src="Admin/assets/libs/glightbox/js/glightbox.min.js"></script>

    <!-- fgEmojiPicker js -->
    <script src="Admin/assets/libs/fg-emoji-picker/fgEmojiPicker.js"></script>
    <script src="Admin/assets/libs/fullcalendar/index.global.min.js"></script>

    <!-- Calendar init -->
    <script src="Admin/assets/js/pages/calendar-month-grid.init.js"></script>
    <!-- chat init js -->
    <script src="Admin/assets/js/pages/chat.init.js"></script>

    @livewireScripts
</body>

</html>