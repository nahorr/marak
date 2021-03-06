
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Home Default | | Unify - Responsive Website Template</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
  <!-- CSS Global Compulsory -->
   <link rel="stylesheet" href="{{asset('unify/assets/vendor/bootstrap/bootstrap.min.css')}}">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-line/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-etlinefont/style.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-line-pro/style.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/icon-hs/style.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/dzsparallaxer/dzsparallaxer.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/dzsparallaxer/dzsscroller/scroller.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/dzsparallaxer/advancedscroller/plugin.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/animate.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/fancybox/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/typedjs/typed.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/vendor/hamburgers/hamburgers.min.css')}}">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="{{asset('unify/assets/css/unify-core.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/css/unify-components.css')}}">
  <link rel="stylesheet" href="{{asset('unify/assets/css/unify-globals.css')}}">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="{{asset('unify/assets/css/custom.css')}}">
</head>

<body>
  <main>

    @yield('content')



  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="{{asset('unify/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/popper.min.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>


  <!-- JS Implementing Plugins -->
  <script src="{{asset('unify/assets/vendor/slick-carousel/slick/slick.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/appear.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/dzsparallaxer/dzsparallaxer.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/dzsparallaxer/dzsscroller/scroller.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/dzsparallaxer/advancedscroller/plugin.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('unify/assets/vendor/typedjs/typed.min.js')}}"></script>

  <!-- JS Unify -->
  <script src="{{asset('unify/assets/js/hs.core.js')}}"></script>
  <script src="{{asset('unify/assets/js/components/hs.carousel.js')}}"></script>
  <script src="{{asset('unify/assets/js/components/hs.header.js')}}"></script>
  <script src="{{asset('unify/assets/js/helpers/hs.hamburgers.js')}}"></script>
  <script src="{{asset('unify/assets/js/components/hs.tabs.js')}}"></script>
  <script src="{{asset('unify/assets/js/components/hs.popup.js')}}"></script>
  <script src="{{asset('unify/assets/js/components/text-animation/hs.text-slideshow.js')}}"></script>
  <script src="{{asset('unify/assets/js/components/hs.go-to.js')}}"></script>
  <script src="{{asset('unify/assets/js/components/hs.onscroll-animation.js')}}"></script>

  <!-- JS Customization -->
  <script src="{{asset('unify/assets/js/custom.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of scroll animation
      $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

        // initialization of text animation (typing)
        $(".u-text-animation.u-text-animation--typing").typed({
          strings: [
            "an awesome template",
            "perfect template",
            "just like a boss"
          ],
          typeSpeed: 60,
          loop: true,
          backDelay: 1500
        });
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>

</body>

</html>