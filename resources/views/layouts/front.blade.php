<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('seo_section')


    <link rel="icon" href="{{ asset('img/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('img/favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="{{ asset('front_assets/css/bootstrap.min.css') }}" loading="lazy"   >

    <link rel="stylesheet" href="{{ asset('front_assets/css/fade-down.css') }}" loading="lazy"  >
    <link rel="stylesheet" href="{{ asset('front_assets/css/webslidemenu.css') }}" loading="lazy" > 
    {{-- <link rel="stylesheet" href="{{ asset('front_assets/css/owl.carousel.min.css') }}" loading="lazy" > --}}
    {{-- <link rel="stylesheet" href="{{ asset('front_assets/css/owl.theme.default.min.css') }}" loading="lazy" > --}}
    {{-- <link rel="stylesheet" href="{{ asset('front_assets/css/jquery.fancybox.min.css') }}" loading="lazy" >  --}}

    {{-- <link rel="stylesheet" href="{{ asset('front_assets/css/jquery.mCustomScrollbar.css') }}" loading="lazy" > --}}
    <link rel="stylesheet" href="{{ asset('front_assets/css/custom-style.css') }}" loading="lazy"  onload="this.onload=null;this.removeAttribute('media');" >
    <link rel="stylesheet" href="{{ asset('front_assets/css/main.css') }}" loading="lazy" > 
    <link rel="stylesheet" href="{{ asset('front_assets/css/media.css') }}" loading="lazy" >
    <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" loading="lazy" >
    <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" loading="lazy" >
    <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" loading="lazy" >
    <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" loading="lazy" >
    <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" loading="lazy" >
 


    <meta name="csrf-token" content="{{ csrf_token() }}">

   
   <style>
    .footer-box{
      padding: 0px 15px;
    }
    .webestbox {
    padding: 0px 20px;
}
   </style>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-239789351-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-239789351-1');
    </script>




    @yield('before_body')

</head>

<body>
    <div class="scrollToTop" id="backToTop"><a href="#backToTop"><i class="fa fa-angle-up"></i><span>TOP</span></a>
    </div>
    {{-- <a href="https://api.whatsapp.com/send?phone=9999884828&text=Welcome to 911GlobalMeds.com" class="whatup-float" target="_blank">
<i class="fa fa-whatsapp whatup-my-float"></i>
</a> --}}


    @include('front.partial.header')
    @yield('content')
    @include('front.partial.footer')


    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/css/bootstrap-select.min.css" loading="lazy" />
    <script src="{{ asset('front_assets/js/jquery.js') }}" ></script>
    <script src="{{ asset('front_assets/js/popper.min.js') }}" loading="lazy"></script>
    <script src="{{ asset('front_assets/js/bootstrap.min.js') }}" loading="lazy"></script>
    {{-- <script src="{{ asset('front_assets/js/webslidemenu.js') }}" loading="lazy"></script> --}}
    {{-- <script src="{{ asset('front_assets/js/owl.carousel.min.js') }}" loading="lazy"></script> --}}
    {{-- <script src="{{ asset('front_assets/js/jquery.fancybox.min.js') }}" loading="lazy"></script> --}}
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script  type="text/javascript" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js" loading="lazy" ></script>

    {{-- <script src="{{ asset('front_assets/js/jquery.mCustomScrollbar.concat.min.js') }}" loading="lazy"></script> --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" loading="lazy"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" loading="lazy"></script>
    <script src="{{ asset('front_assets/js/custom.js') }}" loading="lazy"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js"
        crossorigin="anonymous" referrerpolicy="no-referrer" loading="lazy"></script>
    
    {{-- {!! ReCaptcha::htmlScriptTagJsApi() !!} --}}
    {{-- <script src="{{ asset('js/share.js') }}" loading="lazy"></script> --}}
    <script src="{{ asset('front_assets/js/script.js') }}" loading="lazy"></script>
    <style>
      @media only screen and (max-width:768px){
    .footmarque {
        width: unset !important;
        height: 35px;
    }
}
      </style>
    @yield('afterScript')


<!-----------------Heatmap--08-11-2022------------------->

<script type="text/javascript">


    $(function() {
      let isMobDevice = (/iphone|ipad|Android|webOS|iPod|BlackBerry|Windows Phone|ZuneWP7/gi).test(navigator.appVersion);

if(!isMobDevice){
  $("img.lazy").lazyload({effect : "fadeIn"});
}else{
   $('img.lazy').each(function(){
      $(this).attr('src',$(this).data('original'));
   });
}

    document.addEventListener(
  "touchstart",
  function (e) {
    console.log("hi");
    e.preventDefault();
  },
  { passive: true }
);
});

    $(function() {
  $(".mobile-menu a").on("click", function(e) {
    $("body").addClass("wsactive");
    e.stopPropagation()
  });
  $(document).on("click", function(e) {
    if ($(e.target).is("body") === false) {
      $("body").removeClass("wsactive");
    }
  });
});
    
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "efkpvq2mtq");
</script>

</body>

</html>
