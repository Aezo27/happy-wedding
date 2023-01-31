<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Sun Jan 29 2023 10:44:45 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="63ce60421a2c84496d8f94e7" data-wf-site="63bb7b84f1d829298249de34">

<head>
  <meta charset="utf-8">
  <title>Undangan Pernikahan</title>
  <meta content="Undangan Pernikahan" property="og:title">
  <meta content="Undangan Pernikahan" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/happy-wedding-57b4d0.webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Georama:300,regular,500,600,700,800,900:latin,latin-ext,vietnamese"]
      }
    });
  </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
    ! function(o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
  </script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.11/fullpage.min.css" integrity="sha512-NGRhMiWY9pf5z8PLens7/u+LLwIPAu1dhJ7u9sHRWIo8TKrVbKiWlRdYRH3pVDCZA10zmobo+PBLGeLOREklBw==" crossorigin="anonymous"
    referrerpolicy="no-referrer">
  <style>
    .wish-grid-item.active {
      animation: translateinfinite2 {{ $pesans->count() * 5 }}s linear infinite;
    }
  </style>
</head>

<body class="menu-open">
  <div data-w-id="a8e4e0af-f940-40af-97e6-2d36fec59fdb" class="preloader">
    <div data-w-id="4ddf00e1-31d4-1756-60d3-721516b63a7e" class="photo-wrapper">
      <div data-w-id="43d2f85e-9986-6755-6cdb-b63f1c3ff76a" class="photo-item"><img src="images/1.webp" loading="eager" sizes="100vw" srcset="images/1-p-500.png 500w, images/1.webp 720w" alt="" class="img-preload">
        <h1 class="loading-text txt-40">10%</h1>
        <div data-w-id="97cd9005-271f-6b64-53f2-ccc72f9cd3ca" class="hidden-img"></div>
      </div>
      <div data-w-id="4a30f434-a80c-d02e-af00-450f71ac1223" style="display:none" class="photo-item img-2"><img src="images/2.webp" loading="eager" sizes="100vw" srcset="images/2-p-500.png 500w, images/2.webp 792w" alt="" class="img-preload">
        <h1 class="loading-text txt-40">20%</h1>
      </div>
      <div data-w-id="e56694c1-0b3e-0430-9075-9921c43e5ffa" style="display:none" class="photo-item img-3"><img src="images/3.webp" loading="eager" sizes="100vw" srcset="images/3-p-500.png 500w, images/3-p-800.png 800w, images/3.webp 864w" alt="" class="img-preload">
        <h1 class="loading-text txt-40">40%</h1>
      </div>
      <div data-w-id="5b34c6b9-84d7-ec29-ab25-0bd3e1930959" style="display:none" class="photo-item img-4"><img src="images/4.webp" loading="eager" sizes="100vw" srcset="images/4-p-500.png 500w, images/4-p-800.png 800w, images/4.webp 936w" alt="" class="img-preload">
        <h1 class="loading-text txt-40">60%</h1>
      </div>
      <div data-w-id="52dd2948-6c11-b19b-73be-7f42564418a4" style="display:none" class="photo-item img-5"><img src="images/5.webp" loading="eager" sizes="100vw" srcset="images/5-p-500.png 500w, images/5-p-800.png 800w, images/5.webp 1008w" alt="" class="img-preload">
        <h1 class="loading-text txt-40">80%</h1>
      </div>
      <div data-w-id="9598a04c-178e-9a51-109a-c6f90871e170" style="display:none" class="photo-item img-6"><img src="images/6.webp" loading="eager" sizes="100vw" srcset="images/6-p-500.png 500w, images/6-p-800.png 800w, images/6-p-1080.webp 1080w, images/6.webp 1080w" alt="" class="img-preload">
        <h1 class="loading-text txt-40">100%</h1>
        <div data-w-id="62084372-464f-e449-1d53-19b9be078ab1" style="-webkit-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="hidden-img"></div>
      </div>
    </div>
    <div data-w-id="3dd66a2b-4f2d-8ae4-6013-21537c302e5f" style="opacity:0;-webkit-transform:translate3d(0, 0, 0) scale3d(1.1, 1.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.1, 1.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.1, 1.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.1, 1.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="photo-item-wrapper bg"></div>
  </div>
  <div data-animation="default" data-collapse="none" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="container container-nav w-container">
      <nav role="navigation" class="nav-menu w-nav-menu">
        <div class="cropper">
          <a href="#date" data-w-id="f127b7c6-be4d-3134-ebd3-e9557b1d761f" style="-webkit-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);opacity:0" class="nav-link w-nav-link">Event Detail</a>
        </div>
        <div class="cropper">
          <a href="#gallery" data-w-id="2dfbd3a8-8cad-db8b-8c09-9a1baac5c05a" style="-webkit-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);opacity:0" class="nav-link w-nav-link">Gallery</a>
        </div>
        <div class="cropper">
          <a href="#wish" data-w-id="f9f7c179-4fda-6faf-3cef-5b4678d5c058" style="-webkit-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);opacity:0" class="nav-link w-nav-link">Wish</a>
        </div>
      </nav>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div id="btt" class="back-top-top">
    <a href="#" class="btn ver w-inline-block">
      <p class="btn-text">our<br>story</p>
      <div class="btn-icon bot w-embed"><svg width="100%" height="100%" viewbox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M10 0L10 24" stroke="white" stroke-width="2"></path>
          <path d="M-5.96046e-07 15C6.09009 15 10 18.2727 10 24C10 18.2727 14.1441 15 20 15" stroke="white" stroke-width="2"></path>
        </svg></div>
    </a>
  </div>
  <main id="fullpage" class="main">
    <header class="header section">
      <div class="photo-item-wrapper bg header"></div>
      <div class="header-title">
        <div class="cropper">
          <p data-w-id="76e5fa59-acc4-c53d-84b3-bdde8592e8a6"
            style="-webkit-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-moz-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-ms-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);opacity:0"
            class="txt-24">Dear,</p>
        </div>
        <div class="cropper">
          <h1 id="undangan" data-w-id="fd8313b9-4521-94a0-788a-42f14cb6876d"
            style="-webkit-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-moz-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-ms-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);opacity:0"
            class="txt-main">Dribbblers</h1>
        </div>
        <div class="cropper">
          <p data-w-id="826a8cf7-8dc1-2078-88ce-97768a6b8bdb"
            style="-webkit-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-moz-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-ms-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);opacity:0"
            class="txt-24 desk">Mengundang untuk hadir dipernikahan kami pada<br>Minggu, 12 Febuari 2023</p>
          <p data-w-id="346a1d53-e60d-699d-f808-131fd765f42d"
            style="-webkit-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-moz-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-ms-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);opacity:0"
            class="txt-24 mob">Mengundang untuk hadir dipernikahan kami pada Minggu, 12 Febuari 2023</p>
        </div>
        <div class="cropper">
          <div data-w-id="9cf76ec1-6e3d-118c-125d-ae706f60a5c0"
            style="-webkit-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-moz-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-ms-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);opacity:0"
            class="ani-wrapper">
            <a href="#date" data-w-id="5183fe14-eeb8-c517-1513-fb5a3f8e5763" class="btn w-inline-block">
              <p class="btn-text">Save the date</p>
              <div class="btn-icon w-embed"><svg width="100%" height="100%" viewbox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 10L24 10" stroke="white" stroke-width="2"></path>
                  <path d="M15 20C15 13.9099 18.2727 10 24 10C18.2727 10 15 5.85586 15 0" stroke="white" stroke-width="2"></path>
                </svg></div>
            </a>
          </div>
        </div>
      </div>
      <div data-w-id="b5c11dbe-3188-f15f-5988-5c7510ed3f7d"
        style="-webkit-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-moz-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-ms-transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);transform:translate3d(0, 120%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);opacity:0"
        class="date-bg-wrappper">
        <h1 class="date-bg">120223</h1>
      </div>
    </header>
    <div id="date" data-w-id="f5d15092-b1d6-3996-3e5d-497f9770cb65" class="section relative section-1">
      <div class="container w-container">
        <div class="content-wrapper date">
          <div class="info-group">
            <div class="cropper">
              <h1 data-w-id="cf5b0b53-d7ad-c15b-a94e-3de33be9c4c6"
                style="opacity:0;-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0)"
                class="txt-64">Akad</h1>
            </div>
            <div class="btn-group">
              <div class="cropper">
                <div data-w-id="09f4ef9c-8e76-bf63-52e7-38ca2fa356d1"
                  style="opacity:0;-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0)"
                  class="btn date">
                  <div class="btn-icon left w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.85999 4.81V2.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M17.14 4.81V2.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M18.05 3.78003H5.95C4.18 3.78003 2.75 5.21003 2.75 6.98003V18.06C2.75 19.83 4.18 21.26 5.95 21.26H18.06C19.83 21.26 21.26 19.83 21.26 18.06V6.98003C21.25 5.21003 19.82 3.78003 18.05 3.78003Z" stroke="white"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M2.75 7.8999H21.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M18 12C18.5523 12 19 11.5523 19 11C19 10.4477 18.5523 10 18 10C17.4477 10 17 10.4477 17 11C17 11.5523 17.4477 12 18 12Z" fill="white"></path>
                      <path d="M14 12C14.5523 12 15 11.5523 15 11C15 10.4477 14.5523 10 14 10C13.4477 10 13 10.4477 13 11C13 11.5523 13.4477 12 14 12Z" fill="white"></path>
                      <path d="M10 12C10.5523 12 11 11.5523 11 11C11 10.4477 10.5523 10 10 10C9.44772 10 9 10.4477 9 11C9 11.5523 9.44772 12 10 12Z" fill="white"></path>
                      <path d="M6 12C6.55228 12 7 11.5523 7 11C7 10.4477 6.55228 10 6 10C5.44772 10 5 10.4477 5 11C5 11.5523 5.44772 12 6 12Z" fill="white"></path>
                      <path d="M18 15.49C18.5523 15.49 19 15.0423 19 14.49C19 13.9377 18.5523 13.49 18 13.49C17.4477 13.49 17 13.9377 17 14.49C17 15.0423 17.4477 15.49 18 15.49Z" fill="white"></path>
                      <path d="M14 15.49C14.5523 15.49 15 15.0423 15 14.49C15 13.9377 14.5523 13.49 14 13.49C13.4477 13.49 13 13.9377 13 14.49C13 15.0423 13.4477 15.49 14 15.49Z" fill="white"></path>
                      <path d="M10 15.49C10.5523 15.49 11 15.0423 11 14.49C11 13.9377 10.5523 13.49 10 13.49C9.44772 13.49 9 13.9377 9 14.49C9 15.0423 9.44772 15.49 10 15.49Z" fill="white"></path>
                      <path d="M6 15.49C6.55228 15.49 7 15.0423 7 14.49C7 13.9377 6.55228 13.49 6 13.49C5.44772 13.49 5 13.9377 5 14.49C5 15.0423 5.44772 15.49 6 15.49Z" fill="white"></path>
                      <path d="M14 18.97C14.5523 18.97 15 18.5223 15 17.97C15 17.4177 14.5523 16.97 14 16.97C13.4477 16.97 13 17.4177 13 17.97C13 18.5223 13.4477 18.97 14 18.97Z" fill="white"></path>
                      <path d="M10 18.97C10.5523 18.97 11 18.5223 11 17.97C11 17.4177 10.5523 16.97 10 16.97C9.44772 16.97 9 17.4177 9 17.97C9 18.5223 9.44772 18.97 10 18.97Z" fill="white"></path>
                      <path d="M6 18.97C6.55228 18.97 7 18.5223 7 17.97C7 17.4177 6.55228 16.97 6 16.97C5.44772 16.97 5 17.4177 5 17.97C5 18.5223 5.44772 18.97 6 18.97Z" fill="white"></path>
                    </svg></div>
                  <p class="btn-text">Minggu, 12 Febuari 2022,</p>
                </div>
              </div>
              <div class="cropper">
                <div data-w-id="dd4c1e42-87df-654f-3182-3b5681b94f7c"
                  style="opacity:0;-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0)"
                  class="btn date">
                  <div class="btn-icon left w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 6.89137 17.1086 2.75 12 2.75C6.89137 2.75 2.75 6.89137 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25Z" stroke="white" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                      <path d="M12 12.82L9 10.76" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M12 12.82L16.11 9.72998" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></div>
                  <p class="btn-text">08.00 WIB - Selesai,</p>
                </div>
              </div>
              <div class="cropper">
                <div data-w-id="f26cc463-3ffa-fa16-024d-3869f04a09f2"
                  style="opacity:0;-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0)"
                  class="btn date">
                  <div class="btn-icon left w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 2.75C8.31005 2.75 5.30005 5.76 5.30005 9.45C5.30005 14.03 11.3 20.77 11.55 21.05C11.79 21.32 12.21 21.32 12.45 21.05C12.71 20.77 18.7 14.03 18.7 9.45C18.7 5.76 15.69 2.75 12 2.75Z" stroke="white"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M12.3849 11.7852C13.6776 11.5795 14.5587 10.3647 14.353 9.07204C14.1472 7.77936 12.9325 6.89824 11.6398 7.104C10.3471 7.30976 9.466 8.52449 9.67176 9.81717C9.87752 11.1099 11.0922 11.991 12.3849 11.7852Z"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></div>
                  <p class="btn-text">De&#x27; Lawang Djoendjing</p>
                </div>
              </div>
            </div>
          </div>
          <div class="info-group mt-60">
            <div class="cropper">
              <h1 data-w-id="d14f456a-f52a-a0d2-c4b8-5acdeb871a55"
                style="opacity:0;-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0)"
                class="txt-64">Resepsi</h1>
            </div>
            <div class="btn-group">
              <div class="cropper">
                <div data-w-id="d14f456a-f52a-a0d2-c4b8-5acdeb871a58"
                  style="opacity:0;-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0)"
                  class="btn date">
                  <div class="btn-icon left w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.85999 4.81V2.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M17.14 4.81V2.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M18.05 3.78003H5.95C4.18 3.78003 2.75 5.21003 2.75 6.98003V18.06C2.75 19.83 4.18 21.26 5.95 21.26H18.06C19.83 21.26 21.26 19.83 21.26 18.06V6.98003C21.25 5.21003 19.82 3.78003 18.05 3.78003Z" stroke="white"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M2.75 7.8999H21.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M18 12C18.5523 12 19 11.5523 19 11C19 10.4477 18.5523 10 18 10C17.4477 10 17 10.4477 17 11C17 11.5523 17.4477 12 18 12Z" fill="white"></path>
                      <path d="M14 12C14.5523 12 15 11.5523 15 11C15 10.4477 14.5523 10 14 10C13.4477 10 13 10.4477 13 11C13 11.5523 13.4477 12 14 12Z" fill="white"></path>
                      <path d="M10 12C10.5523 12 11 11.5523 11 11C11 10.4477 10.5523 10 10 10C9.44772 10 9 10.4477 9 11C9 11.5523 9.44772 12 10 12Z" fill="white"></path>
                      <path d="M6 12C6.55228 12 7 11.5523 7 11C7 10.4477 6.55228 10 6 10C5.44772 10 5 10.4477 5 11C5 11.5523 5.44772 12 6 12Z" fill="white"></path>
                      <path d="M18 15.49C18.5523 15.49 19 15.0423 19 14.49C19 13.9377 18.5523 13.49 18 13.49C17.4477 13.49 17 13.9377 17 14.49C17 15.0423 17.4477 15.49 18 15.49Z" fill="white"></path>
                      <path d="M14 15.49C14.5523 15.49 15 15.0423 15 14.49C15 13.9377 14.5523 13.49 14 13.49C13.4477 13.49 13 13.9377 13 14.49C13 15.0423 13.4477 15.49 14 15.49Z" fill="white"></path>
                      <path d="M10 15.49C10.5523 15.49 11 15.0423 11 14.49C11 13.9377 10.5523 13.49 10 13.49C9.44772 13.49 9 13.9377 9 14.49C9 15.0423 9.44772 15.49 10 15.49Z" fill="white"></path>
                      <path d="M6 15.49C6.55228 15.49 7 15.0423 7 14.49C7 13.9377 6.55228 13.49 6 13.49C5.44772 13.49 5 13.9377 5 14.49C5 15.0423 5.44772 15.49 6 15.49Z" fill="white"></path>
                      <path d="M14 18.97C14.5523 18.97 15 18.5223 15 17.97C15 17.4177 14.5523 16.97 14 16.97C13.4477 16.97 13 17.4177 13 17.97C13 18.5223 13.4477 18.97 14 18.97Z" fill="white"></path>
                      <path d="M10 18.97C10.5523 18.97 11 18.5223 11 17.97C11 17.4177 10.5523 16.97 10 16.97C9.44772 16.97 9 17.4177 9 17.97C9 18.5223 9.44772 18.97 10 18.97Z" fill="white"></path>
                      <path d="M6 18.97C6.55228 18.97 7 18.5223 7 17.97C7 17.4177 6.55228 16.97 6 16.97C5.44772 16.97 5 17.4177 5 17.97C5 18.5223 5.44772 18.97 6 18.97Z" fill="white"></path>
                    </svg></div>
                  <p class="btn-text">Minggu, 12 Febuari 2022,</p>
                </div>
              </div>
              <div class="cropper">
                <div data-w-id="d14f456a-f52a-a0d2-c4b8-5acdeb871a5c"
                  style="opacity:0;-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0)"
                  class="btn date">
                  <div class="btn-icon left w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 6.89137 17.1086 2.75 12 2.75C6.89137 2.75 2.75 6.89137 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25Z" stroke="white" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                      <path d="M12 12.82L9 10.76" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M12 12.82L16.11 9.72998" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></div>
                  <p class="btn-text">11.00 WIB - Selesai,</p>
                </div>
              </div>
              <div class="cropper">
                <div data-w-id="d14f456a-f52a-a0d2-c4b8-5acdeb871a60"
                  style="opacity:0;-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0)"
                  class="btn date">
                  <div class="btn-icon left w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 2.75C8.31005 2.75 5.30005 5.76 5.30005 9.45C5.30005 14.03 11.3 20.77 11.55 21.05C11.79 21.32 12.21 21.32 12.45 21.05C12.71 20.77 18.7 14.03 18.7 9.45C18.7 5.76 15.69 2.75 12 2.75Z" stroke="white"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M12.3849 11.7852C13.6776 11.5795 14.5587 10.3647 14.353 9.07204C14.1472 7.77936 12.9325 6.89824 11.6398 7.104C10.3471 7.30976 9.466 8.52449 9.67176 9.81717C9.87752 11.1099 11.0922 11.991 12.3849 11.7852Z"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></div>
                  <p class="btn-text">De&#x27; Lawang Djoendjing</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-w-id="d7da6e6c-4c73-669d-ab8a-10fe939a90dd" style="opacity:0" class="map-wrapper">
        <div class="map-overlay"></div>
        <div class="map-embed w-embed w-iframe"><iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3955.287772747086!2d110.8320452806707!3d-7.5435630390729935!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9063dd6c1638a35!2sDe&#39;%20Lawang%20Djoendjing!5e0!3m2!1sid!2sid!4v1673534745222!5m2!1sid!2sid"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <a href="https://www.google.com/maps/place/De&#x27;+Lawang+Djoendjing,+Jl.+Kelud+Timur,+Kadipiro,+Kec.+Banjarsari,+Kota+Surakarta,+Jawa+Tengah+57136/@-7.5437385,110.8310797,15z/data=!4m6!3m5!1s0x2e7a17c869ab49a9:0xa9063dd6c1638a35!8m2!3d-7.5437385!4d110.8310797!16s%2Fg%2F11klwhv9hr"
          target="_blank" class="cursor-wrapper no-strike modal-btn w-inline-block">
          <div class="cursor">
            <h4 class="txt-black pin">Cek Lokasi</h4>
          </div>
        </a>
      </div>
    </div>
    <div data-w-id="d3668aa3-0458-dd09-157f-abce3c614fe2" class="section relative">
      <div class="container w-container">
        <div class="content-wrapper">
          <div class="bridge-wrapper">
            <div class="cropper mb-40-mob">
              <p data-w-id="76af52e3-8da3-39b5-27a0-42fb0d92415f"
                style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);opacity:0"
                class="txt-24">The Wedding of</p>
            </div>
            <div class="cropper">
              <h1 data-w-id="0abb72b8-f989-fb30-18f0-f803d89ee8ed"
                style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);opacity:0"
                class="txt-128">Happy</h1>
            </div>
            <h1 data-w-id="0b5bcb91-75a1-248a-fd56-c961eec23d6f" style="opacity:0" class="and">&amp;</h1>
            <div class="cropper">
              <h1 data-w-id="8afe5032-a824-4de5-3203-d00f1a6be9b0"
                style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);opacity:0"
                class="txt-128">Ramadhani</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <div class="parrent-wrapper">
          <div class="cropper">
            <p data-w-id="7b3669a7-2e1d-639a-a6b1-e70929891d40"
              style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);opacity:0"
              class="txt-20 cotta">Putri dari</p>
          </div>
          <div class="cropper">
            <p data-w-id="14d1cb40-7fe9-5d5b-8632-f48c40461aba"
              style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);opacity:0"
              class="txt-20 cotta">Bp Drs.Budi Dikariyanto</p>
          </div>
          <div class="cropper">
            <p data-w-id="aa94f33a-1353-ab33-4603-bec4e0a718a1"
              style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);opacity:0"
              class="txt-20 cotta">Ibu Nunuk Handayani</p>
          </div>
        </div>
        <div data-w-id="f222d034-e979-27c0-73eb-89f36d453736"
          style="-webkit-transform:translate3d(0, -2em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -2em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -2em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -2em, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="ani-wrapper btn-down">
          <a href="#gallery" data-w-id="6992f69a-287a-ff32-ec04-5cb98080e9fe" class="btn ver w-inline-block" id="story-btn">
            <p class="btn-text">our<br>story</p>
            <div class="btn-icon bot w-embed"><svg width="100%" height="100%" viewbox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 0L10 24" stroke="white" stroke-width="2"></path>
                <path d="M-5.96046e-07 15C6.09009 15 10 18.2727 10 24C10 18.2727 14.1441 15 20 15" stroke="white" stroke-width="2"></path>
              </svg></div>
          </a>
        </div>
        <div class="parrent-wrapper">
          <div class="cropper">
            <p data-w-id="c07f253c-63ba-5bad-db76-43bba46a225b"
              style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);opacity:0"
              class="txt-20 cotta">Putra dari</p>
          </div>
          <div class="cropper">
            <p data-w-id="c07f253c-63ba-5bad-db76-43bba46a225d"
              style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);opacity:0"
              class="txt-20 cotta">Bp Sumarno, S.Pd.</p>
          </div>
          <div class="cropper">
            <p data-w-id="c07f253c-63ba-5bad-db76-43bba46a225f"
              style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);opacity:0"
              class="txt-20 cotta">Ibu Sunarti, S.Pd.</p>
          </div>
        </div>
      </div>
    </div>
    <div id="gallery" data-w-id="eebfa128-dd58-6cf7-0a57-ebbbc1b521ce" class="section relative overflow">
      <div class="floating-img-wrapper gal">
        <div class="left wrapper">
          <div class="slide-photo-weapper text-running-inner">
            <div class="ani-wrapper slide-photo"><img src="images/1-hover.webp" loading="lazy" sizes="(max-width: 767px) 64vw, (max-width: 991px) 100vw, 27vw" srcset="images/1-hover-p-500.png 500w, images/1-hover-p-800.png 800w, images/1-hover-p-1080.webp 1080w, images/1-hover.webp 1080w" alt="" class="float-img img-1"><img src="images/3-hover.webp" loading="lazy" sizes="(max-width: 767px) 43vw, (max-width: 991px) 100vw, 18vw" srcset="images/3-hover-p-500.png 500w, images/3-hover.webp 720w" alt="" class="float-img img-2"><img src="images/5-hover.webp" loading="lazy" sizes="(max-width: 767px) 64vw, (max-width: 991px) 100vw, 27vw" srcset="images/5-hover-p-500.png 500w, images/5-hover-p-800.png 800w, images/5-hover-p-1080.webp 1080w, images/5-hover.webp 1080w" alt="" class="float-img img-3 left"><img src="images/7-hover.webp" loading="lazy" sizes="(max-width: 767px) 43vw, (max-width: 991px) 100vw, 18vw" srcset="images/7-hover-p-500.png 500w, images/7-hover.webp 720w" alt="" class="float-img img-2"></div>
            <div class="ani-wrapper slide-photo _2nd"><img src="images/1-hover.webp" loading="lazy" sizes="(max-width: 767px) 64vw, (max-width: 991px) 100vw, 27vw" srcset="images/1-hover-p-500.png 500w, images/1-hover-p-800.png 800w, images/1-hover-p-1080.webp 1080w, images/1-hover.webp 1080w" alt="" class="float-img img-1"><img src="images/3-hover.webp" loading="lazy" sizes="(max-width: 767px) 43vw, (max-width: 991px) 100vw, 18vw" srcset="images/3-hover-p-500.png 500w, images/3-hover.webp 720w" alt="" class="float-img img-2"><img src="images/5-hover.webp" loading="lazy" sizes="(max-width: 767px) 64vw, (max-width: 991px) 100vw, 27vw" srcset="images/5-hover-p-500.png 500w, images/5-hover-p-800.png 800w, images/5-hover-p-1080.webp 1080w, images/5-hover.webp 1080w" alt="" class="float-img img-3 left"><img src="images/7-hover.webp" loading="lazy" sizes="(max-width: 767px) 43vw, (max-width: 991px) 100vw, 18vw" srcset="images/7-hover-p-500.png 500w, images/7-hover.webp 720w" alt="" class="float-img img-2"></div>
            <div class="ani-wrapper slide-photo _2nd"><img src="images/1-hover.webp" loading="lazy" sizes="(max-width: 767px) 64vw, (max-width: 991px) 100vw, 27vw" srcset="images/1-hover-p-500.png 500w, images/1-hover-p-800.png 800w, images/1-hover-p-1080.webp 1080w, images/1-hover.webp 1080w" alt="" class="float-img img-1"><img src="images/3-hover.webp" loading="lazy" sizes="(max-width: 767px) 43vw, (max-width: 991px) 100vw, 18vw" srcset="images/3-hover-p-500.png 500w, images/3-hover.webp 720w" alt="" class="float-img img-2"><img src="images/5-hover.webp" loading="lazy" sizes="(max-width: 767px) 64vw, (max-width: 991px) 100vw, 27vw" srcset="images/5-hover-p-500.png 500w, images/5-hover-p-800.png 800w, images/5-hover-p-1080.webp 1080w, images/5-hover.webp 1080w" alt="" class="float-img img-3 left"><img src="images/7-hover.webp" loading="lazy" sizes="(max-width: 767px) 43vw, (max-width: 991px) 100vw, 18vw" srcset="images/7-hover-p-500.png 500w, images/7-hover.webp 720w" alt="" class="float-img img-2"></div>
            <div class="ani-wrapper slide-photo _2nd"><img src="images/1-hover.webp" loading="lazy" sizes="(max-width: 767px) 64vw, (max-width: 991px) 100vw, 27vw" srcset="images/1-hover-p-500.png 500w, images/1-hover-p-800.png 800w, images/1-hover-p-1080.webp 1080w, images/1-hover.webp 1080w" alt="" class="float-img img-1"><img src="images/3-hover.webp" loading="lazy" sizes="(max-width: 767px) 43vw, (max-width: 991px) 100vw, 18vw" srcset="images/3-hover-p-500.png 500w, images/3-hover.webp 720w" alt="" class="float-img img-2"><img src="images/5-hover.webp" loading="lazy" sizes="(max-width: 767px) 64vw, (max-width: 991px) 100vw, 27vw" srcset="images/5-hover-p-500.png 500w, images/5-hover-p-800.png 800w, images/5-hover-p-1080.webp 1080w, images/5-hover.webp 1080w" alt="" class="float-img img-3 left"><img src="images/7-hover.webp" loading="lazy" sizes="(max-width: 767px) 43vw, (max-width: 991px) 100vw, 18vw" srcset="images/7-hover-p-500.png 500w, images/7-hover.webp 720w" alt="" class="float-img img-2"></div>
          </div>
        </div>
        <div class="right wrapper">
          <div class="slide-photo-weapper text-running-inner">
            <div class="ani-wrapper slide-photo right"><img src="images/5-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 27vw" srcset="images/5-hover-p-500.png 500w, images/5-hover-p-800.png 800w, images/5-hover-p-1080.webp 1080w, images/5-hover.webp 1080w" alt="" class="float-img img-3"><img src="images/4-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 27vw" srcset="images/4-hover-p-500.png 500w, images/4-hover-p-800.png 800w, images/4-hover-p-1080.webp 1080w, images/4-hover.webp 1080w" alt="" class="float-img img-9"><img src="images/7-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 18vw" srcset="images/7-hover-p-500.png 500w, images/7-hover.webp 720w" alt="" class="float-img img-2 right"><img src="images/8-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 27vw" srcset="images/8-hover-p-500.png 500w, images/8-hover-p-800.png 800w, images/8-hover-p-1080.webp 1080w, images/8-hover.webp 1080w" alt="" class="float-img img-9"></div>
            <div class="ani-wrapper slide-photo right _2nd"><img src="images/5-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 27vw" srcset="images/5-hover-p-500.png 500w, images/5-hover-p-800.png 800w, images/5-hover-p-1080.webp 1080w, images/5-hover.webp 1080w" alt="" class="float-img img-3"><img src="images/4-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 27vw" srcset="images/4-hover-p-500.png 500w, images/4-hover-p-800.png 800w, images/4-hover-p-1080.webp 1080w, images/4-hover.webp 1080w" alt="" class="float-img img-9"><img src="images/7-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 18vw" srcset="images/7-hover-p-500.png 500w, images/7-hover.webp 720w" alt="" class="float-img img-2 right"><img src="images/8-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 27vw" srcset="images/8-hover-p-500.png 500w, images/8-hover-p-800.png 800w, images/8-hover-p-1080.webp 1080w, images/8-hover.webp 1080w" alt="" class="float-img img-9"></div>
            <div class="ani-wrapper slide-photo right _2nd"><img src="images/5-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 27vw" srcset="images/5-hover-p-500.png 500w, images/5-hover-p-800.png 800w, images/5-hover-p-1080.webp 1080w, images/5-hover.webp 1080w" alt="" class="float-img img-3"><img src="images/4-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 27vw" srcset="images/4-hover-p-500.png 500w, images/4-hover-p-800.png 800w, images/4-hover-p-1080.webp 1080w, images/4-hover.webp 1080w" alt="" class="float-img img-9"><img src="images/7-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 18vw" srcset="images/7-hover-p-500.png 500w, images/7-hover.webp 720w" alt="" class="float-img img-2 right"><img src="images/8-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 27vw" srcset="images/8-hover-p-500.png 500w, images/8-hover-p-800.png 800w, images/8-hover-p-1080.webp 1080w, images/8-hover.webp 1080w" alt="" class="float-img img-9"></div>
            <div class="ani-wrapper slide-photo right _2nd"><img src="images/5-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 27vw" srcset="images/5-hover-p-500.png 500w, images/5-hover-p-800.png 800w, images/5-hover-p-1080.webp 1080w, images/5-hover.webp 1080w" alt="" class="float-img img-3"><img src="images/4-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 27vw" srcset="images/4-hover-p-500.png 500w, images/4-hover-p-800.png 800w, images/4-hover-p-1080.webp 1080w, images/4-hover.webp 1080w" alt="" class="float-img img-9"><img src="images/7-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 18vw" srcset="images/7-hover-p-500.png 500w, images/7-hover.webp 720w" alt="" class="float-img img-2 right"><img src="images/8-hover.webp" loading="lazy" sizes="(max-width: 991px) 100vw, 27vw" srcset="images/8-hover-p-500.png 500w, images/8-hover-p-800.png 800w, images/8-hover-p-1080.webp 1080w, images/8-hover.webp 1080w" alt="" class="float-img img-9"></div>
          </div>
        </div>
      </div>
      <div class="content-wrapper mid">
        <div data-w-id="eebfa128-dd58-6cf7-0a57-ebbbc1b521d1" class="sect-4-text">
          <div class="ani-wrapper text-slide">
            <div class="cropper">
              <h1 data-w-id="eebfa128-dd58-6cf7-0a57-ebbbc1b521d8" class="txt-48">Berawal dari rasa penasaran</h1>
            </div>
            <div class="cropper">
              <h1 data-w-id="ab4e4f27-f419-070d-0ef0-571654164fc0" class="txt-48">yang berujung kasmaran,</h1>
            </div>
            <div class="cropper">
              <h1 data-w-id="7acb7256-1d04-2f70-823f-3e2bf245390f" class="txt-48">Happy berkenalan dengan</h1>
            </div>
            <div class="cropper">
              <h1 data-w-id="b3f4b6df-5e99-0489-6f4a-500c2d73c406" class="txt-48">Jelly melalui instagram.</h1>
            </div>
            <div class="cropper">
              <h1 data-w-id="9848726e-af3a-4019-aa20-be8d83842201" class="txt-48">Mereka memiliki passion dan</h1>
            </div>
            <div class="cropper">
              <h1 data-w-id="8417613b-8639-744f-d852-304f4d289a20" class="txt-48">pekerjaan yang sama dan</h1>
            </div>
            <div class="cropper">
              <h1 data-w-id="32a04633-a935-29c9-8968-849566bea7db" class="txt-48">sesekali bekerja bersama.</h1>
            </div>
            <div class="cropper">
              <h1 data-w-id="1f6030a3-acb9-46be-c617-9ac3f92bd268" class="txt-48">Berjalannya waktu, Happy</h1>
            </div>
            <div class="cropper">
              <h1 data-w-id="43fbcf18-80db-7619-eefe-86275dd01251" class="txt-48">nekad menyatakan cintanya</h1>
            </div>
            <div class="cropper">
              <h1 class="txt-48">pada tanggal 14 Maret 2021.</h1>
            </div>
            <div class="cropper">
              <h1 class="txt-48">Sejak hari itu mereka mulai</h1>
            </div>
            <div class="cropper">
              <h1 class="txt-48">berbagi rasa atas dasar cinta.</h1>
            </div>
            <div class="cropper">
              <h1 class="txt-48">Dan akhirnya pada akhirnya</h1>
            </div>
            <div class="cropper">
              <h1 class="txt-48">mereka memutuskan untuk</h1>
            </div>
            <div class="cropper">
              <h1 class="txt-48">lanjut ke meja pelaminan</h1>
            </div>
            <div class="cropper">
              <h1 class="txt-48">dengan harapan untuk lebih</h1>
            </div>
            <div class="cropper">
              <h1 class="txt-48">dalam berbagi cinta,</h1>
            </div>
            <div class="cropper">
              <h1 class="txt-48">meraih ridho yang maha esa.</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div data-w-id="03929250-eb8b-2f7e-0e3f-8b932ee19123" class="section relative overflow">
      <div class="container mid relative w-container">
        <div class="content-wrapper mid">
          <div data-w-id="a6273f50-ca35-1ed7-ddd2-b30ce0020db1"
            style="opacity:0;-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
            class="doa"><img src="images/annisa.webp" loading="lazy" sizes="(max-width: 767px) 100vw, 64vw" srcset="images/َannisa-p-500.png 500w, images/annisa.webp 1655w" alt="" class="desk"><img src="images/annisa2.png"
              loading="lazy" alt="" class="mob">
            <p class="txt-20 txt-grey lh-130">Hai sekalian manusia, bertakwalah kepada Tuhan-mu yang telah menciptakan kamu dari seorang diri, dan dari padanya Allah menciptakan isterinya; dan dari pada keduanya Allah memperkembang biakkan laki-laki
              dan perempuan yang banyak. Dan bertakwalah kepada Allah yang dengan (mempergunakan) nama-Nya kamu saling meminta satu sama lain, dan (peliharalah) hubungan silaturrahim. Sesungguhnya Allah selalu menjaga dan mengawasi kamu.</p>
            <p class="txt-20 cotta">Q. S. AN-NISA’ : 1</p>
          </div>
        </div>
      </div>
    </div>
    <section id="wish" data-w-id="c6d98382-bbc6-4175-0f0e-60e1bfd73c65" class="section relative overflow">
      <div class="overlay bot"></div>
      <div class="container relative w-container">
        <div class="content-wrapper wish">
          <div class="cropper">
            <h1 data-w-id="d62ede79-c6bf-e9dc-003e-462f214596f5"
              style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(10deg) skew(0, 0);opacity:0"
              class="txt-64 txt-center">Give A wish</h1>
          </div>
          <div class="w-form">
            <form id="wish-form" name="wish-form" data-name="Wish Form" method="post" class="wish-form">
              <div class="cropper"><input type="text" class="input w-input" maxlength="256" name="nama" data-name="nama"
                  style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);opacity:0"
                  placeholder="Nama" data-w-id="1cdb3f09-c060-7845-a808-2369890b9e9a" id="nama" required=""></div>
              <div class="cropper">
                <textarea class="input text-area w-input" maxlength="5000" name="pesan" data-name="pesan"
                  style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);opacity:0"
                  placeholder="Ucapan" data-w-id="96ee13ee-70b8-4fa3-6284-979a7c2b1323" id="pesan" required=""></textarea>
              </div>
              <div class="rad-group">
                <div class="cropper forbtn">
                  <div data-w-id="6f884ed1-0e0f-78b7-5a8f-473e08c90cd6"
                    style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);opacity:0"
                    class="custom-checkbox animated-active w-embed"><input type="checkbox" id="hadir" name="opsi" value="1"><label for="hadir" class="hadir" title="Hadir">Hadir</label></div>
                </div>
                <div class="cropper forbtn">
                  <div data-w-id="0a7e0c86-26f7-122a-ddb0-862d98e7d615"
                    style="opacity:0;-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="custom-checkbox animated-active w-embed"><input type="checkbox" id="tidak-hadir" name="opsi" value="0"><label for="tidak-hadir" class="tidak-hadir" title="Tidak Hadir">Tidak Hadir</label></div>
                </div>
              </div>
              <div class="cropper"><button type="submit" id="submitBtn" data-wait="Please wait..." data-w-id="1cdb3f09-c060-7845-a808-2369890b9e9e"
                  style="-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0deg) skew(0, 0);opacity:0"
                  class="btn-submit w-button">Kirim Ucapan</button>
              </div>
            </form>
            <div class="w-form-done">
              <div>Terimakasih atas doa dan pesannya.</div>
            </div>
          </div>
        </div>
        <div data-w-id="7048a963-b072-354f-62eb-84a9698c09e5" style="opacity:0" class="wish-comment">
          <div class="overlay top"></div>
          <div class="comment-wrapper">
            <div id="w-node-efeb96fb-7946-1cef-76dc-3cd865f6a3c1-6d8f94e7" class="wish-grid-item">
              @for ($i = 0; $i < 4; $i++)
                <div class="pesan-outer">
                  @foreach ($pesans as $pesan)
                    <div class="coment-item">
                      <p class="txt-16">{{ $pesan->pesan }}</p>
                      <h4 class="txt-20 txt-reg">{{ $pesan->nama }}</h4>
                    </div>
                  @endforeach
                </div>
              @endfor
            </div>
            <div id="w-node-b22edb2b-7873-bdbe-8d23-1b2c76f657ac-6d8f94e7" class="wish-grid-item mid">
              @for ($i = 0; $i < 4; $i++)
                <div class="pesan-outer">
                  @foreach ($pesans2 as $pesan)
                    <div class="coment-item">
                      <p class="txt-16">{{ $pesan->pesan }}</p>
                      <h4 class="txt-20 txt-reg">{{ $pesan->nama }}</h4>
                    </div>
                  @endforeach
                </div>
              @endfor
            </div>
            <div id="w-node-df1a1ad4-2dde-c317-6030-cd9063004339-6d8f94e7" class="wish-grid-item last">
              @for ($i = 0; $i < 4; $i++)
                <div class="pesan-outer">
                  @foreach ($pesans3 as $pesan)
                    <div class="coment-item">
                      <p class="txt-16">{{ $pesan->pesan }}</p>
                      <h4 class="txt-20 txt-reg">{{ $pesan->nama }}</h4>
                    </div>
                  @endforeach
                </div>
              @endfor
            </div>
          </div>
        </div>
      </div>
    </section>
    <section data-w-id="a3806b78-70e8-9468-832e-3297437eab04" class="section relative overflow footer">
      <div class="thx-wrapper">
        <div class="thx-inner">
          <div class="cropper fortxtmain">
            <h1 data-w-id="a3806b78-70e8-9468-832e-3297437eab07"
              style="opacity:0;-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0)"
              class="txt-main abs">Maturnuwun</h1>
          </div>
          <div class="cropper"><img src="images/matornuwun-hover.webp" loading="eager"
              style="opacity:0;-webkit-transform:translate3d(0, 0, 0) scale3d(1.1, 1.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.1, 1.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.1, 1.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.1, 1.1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
              data-w-id="a3806b78-70e8-9468-832e-3297437eab09"
              srcset="images/matornuwun-hover-p-500.png 500w, images/matornuwun-hover-p-800.png 800w, images/matornuwun-hover-p-1080.png 1080w, images/matornuwun-hover-p-1600.png 1600w, images/matornuwun-hover.webp 2244w"
              sizes="(max-width: 767px) 95vw, 57vw" alt="" class="thx-img"></div>
        </div>
      </div>
      <div class="date-bg-wrappper footer">
        <h1 data-w-id="a3806b78-70e8-9468-832e-3297437eab0b"
          style="opacity:0;-webkit-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-moz-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);-ms-transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0);transform:translate3d(0, 125%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(5deg) skew(0, 0)"
          class="date-bg light">120223</h1>
      </div>
    </section>
  </main>
  <div class="wish-sent">
    <div class="modal-flex">
        <div class="thx-modal-wrapper">
          <h1 class="txt-64 txt-black">Terimakasih</h1><img src="images/Design-Depan-1.jpg" loading="eager" sizes="100vw" srcset="images/Design-Depan-1.jpg 500w, images/Design-Depan-1.jpg 800w" alt="" class="hr-img">
          <a id="close-modal" href="#" class="close-btn w-inline-block">
            <p class="btn-text">Back to home</p>
          </a>
        </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63bb7b84f1d829298249de34" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.11/fullpage.extensions.min.js"></script>
  <!--<script src="https://uploads-ssl.webflow.com/63116a2c2e256f544530a58f/6343d4182bdcd24d7f301001_fullpage.scrollHorizontally.min.js.txt"></script>-->
  <script src="{{ asset('js/custom.js') }}?v=1.0.0"></script>
  <script>
    const submitBtn = $("#submitBtn"),
      form = $("#wish-form");
    form.on('submit', function() {
      submitBtn.prop('disabled', true)
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('happyAdd') }}",
        type: "post",
        data: form.serialize(),
        beforeSend: function() {
          submitBtn.html('Please wait...');
        },
        success: function(response) {
          submitBtn.prop('disabled', false)
          submitBtn.html('Kirim Ucapan');
          if (response.alert == "success") {
            form.css("display", "none")
            // $('.w-form-done').css("display", "block")
            $('.wish-sent').fadeIn();
            $('.body').addClass('menu-open');
            if (window.innerWidth > 991) {
                fullpage_api.setAllowScrolling(false);
            }
          }
          console.log(response);
        },
      });
    })
    $('#close-modal').on('click', function(e) {
        e.preventDefault();
         $('.wish-sent').fadeOut();
         $('.body').removeClass('menu-open');
         if (window.innerWidth > 991) {
            fullpage_api.setAllowScrolling(true);
        }
    })
  </script>
</body>

</html>
