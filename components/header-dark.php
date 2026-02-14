<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOT Enterprises</title>
    <link rel="stylesheet" href="../assets/css/styles2-dark.css">
    <link rel="stylesheet" href="../assets/css/header-dark.css">
    <link rel="stylesheet" href="../assets/css/neww-dark.css">
    <link rel="stylesheet" href="../assets/css/responsive-dm.css">
    <!-- <link rel="stylesheet" href="../assets/css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../assets/images/cardslight/fav.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- <link rel="stylesheet" href="../assets/css/header.css"> -->
<style>
        /* ================= TOP BAR ================= */
        /* ================= TOP MARQUEE ================= */

@font-face {
  font-family: 'Montserrat-Light';
  src: url('../assets/Montserrat/static/Montserrat-Light.ttf') format('truetype');
  font-weight: 300;
}
@font-face {
  font-family: 'Montserrat-Regular';
  src: url('../assets/Montserrat/static/Montserrat-Regular.ttf') format('truetype');
  font-weight: 400;
}

@font-face {
  font-family: 'Montserrat-Medium';
 src: url('../assets/Montserrat/static/Montserrat-Medium.ttf') format('truetype');
  font-weight: 500;
}


@font-face {
  font-family: 'Montserrat-Bold';
  src: url('../assets/Montserrat/static/Montserrat-Bold.ttf') format('truetype');
 font-weight: 700;
}
@font-face {
  font-family: 'Montserrat-Extra-Bold';
  src: url('../assets/Montserrat/static//Montserrat-ExtraBold.ttf') format('truetype');
 font-weight: 800;
}
@font-face {
  font-family: 'Montserrat-semi-Bold';
  src: url('../assets/Montserrat/static//Montserrat-SemiBold.ttf') format('truetype');
 font-weight: 600;
}

 
        .top-marquee{
            background:#0A71B9;
            color:#fff;
            font-size:13px;
            padding:6px 0;
            color: #000000;
        }

        .marquee-container{
            overflow:hidden;
            white-space:nowrap;
        }

        .marquee-track{
            display:flex;
            width:max-content;
            will-change:transform;
        }

        .marquee-track span{
            display:flex;
            align-items:center;
            gap:12px;
            padding-right:40px;
        }

        .marquee-track img{
            height:16px;
        }

        /* ================= TOP LINKS ================= */
        .top-links-wrapper{
            width:100%;
            display:flex;
            justify-content:flex-end;
            align-items:center;
            padding-right:1.5%;     
        }

        .top-links-right{
            background:#0A71B9;
            padding:6px 14px 6px 14px;
            display:flex;
            align-items:center;
            justify-content:center;
            gap:21px;
            height: 32px;
            border-bottom-right-radius: 5.23px;
            border-bottom-left-radius: 5.23px;
            border-right-width: 1.05px;
            border-bottom-width: 1.05px;
            border-left-width: 1.05px;
            white-space:nowrap;
        }

        .top-links-right a{
            color:#fff;
            font-family: Montserrat;
            font-weight: 400;
            font-style: Regular;
            font-size: 12.55px;
            text-decoration:none;
        }
          .login-header-button a{
            padding: 5px 30px;
            background-color: #0A71B9;
            text-decoration: none;
            color: #FFFFFF;
          }
        /* ================= ACTIONS ================= */
        .top-actions{
            position:static;
            display:flex;
            align-items:center;
            gap:12px;
            padding-left: 1%;
        }

        /* ================= LANGUAGE ================= */
        .dropdown{
            border-top: none;
    width: 94px;
    height: 32px;
    border-bottom-right-radius: 5.23px;
    border-bottom-left-radius: 5.23px;
    border-right-width: 1.05px;
    border-bottom-width: 1.05px;
    border-left-width: 1.05px;
    border-style: solid;
    border-top-style: none;
    border-width: 0px, 1.05px, 1.05px, 1.05px;
    /* border-style: solid; */
    border-color: #FFFFFF;
        }

        .lang-dropdown button{
            background:none;
            border:none;
            font-size:14px;
            display:flex;
            align-items:center;
            gap:6px;
            color: #FFFFFF;
        }

        .lang-dropdown .dropdown-menu img{
            width:18px;
            height:12px;
            margin-right:6px;
        }

        .lang-dropdown .dropdown-item{
            display:flex;
            align-items:center;
            gap:6px;
            font-size:12px;
        }



.list-unstyled a {
    color: #FFFFFF;
    text-decoration: none;
    font-family: 'Montserrat-Medium';
    font-size: 14px;
    line-height: 100%;
    letter-spacing: 0%;
    transition: color 0.3s ease, text-decoration 0.3s ease;
}
        /* ================= TOGGLE ================= */
     .switch{
  width:38px;
  height:14px;
  position:relative;
  display:inline-block; /* add */
  border: 0.9px solid #0A71B9;
  border-radius: 20px;
}

.switch input{
  position:absolute;
  inset:0;
  width:100%;
  height:100%;
  margin:0;
  opacity:0;
  cursor:pointer;
  z-index:2; /* clickable layer */
}

.slider{
  position:absolute;
  inset:0;
  background:#fff;
  border-radius:20px;
  cursor:pointer;
  z-index:1;
}

.slider:before{
  content:"";
  position:absolute;
  width:12px;
  height:12px;
  left:3px;
  top:1px;          /* add (better alignment) */
  background:#0A71B9;
  border-radius:50%;
  transition:.3s;
}

.switch input:checked + .slider{
  background:#0A71B9;
}
.switch input:checked + .slider:before{
  transform:translateX(22px);
  background:#fff;
}


        /* ================= LOGO ================= */
        .header-main{padding:15px 0;}
        .logo img{height:64px; }
        .search-box{
            width: 268px;
            height: 32px;
            margin-left:auto;
            position:relative;
        }
        .form-scontrol-style {
            border-radius: 6.01px;
            border-width: 1.2px;
            border: 1.2px solid #000000;
            font-family: Montserrat;
            font-weight: 400;
            font-style: Regular;
            font-size: 14.42px;
        }
        .search-box button{
            position:absolute;
            right:-5px;
            top:50%;
            transform:translateY(-50%);
            border:none;
            background:none;
        }

        /* ================= NAV BAR ================= */
        .kot-main-header-nav-bar{
            background:#0A71B9;
            position:relative;
            z-index: 1000;
        }

        .kot-main-header-nav-bar-inner{
            display:flex;
            justify-content:center;
            align-items:center;
            position: relative;
        }

        .kot-main-header-nav-bar-item-wrapper{
            display:flex;
            align-items:center;
            position:relative;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .kot-main-header-nav-bar-item{
            font-family: 'Montserrat';
            font-weight: 500;
            font-size: 11px;
            color:#FFFFFF;
            padding:14px 16px;
            font-weight:600;
            white-space:nowrap;
            position:relative;
            z-index:1;
            text-decoration:none;
            display:block;
            cursor: pointer;
        }
         
        /* ================= NAV BAR VERTICAL LINES ================= */
        .kot-main-header-nav-bar-item-wrapper:not(:last-child)::after {
            content: "";
            position: absolute;
            right: 0;
            width: 1px;
            height: 40%;
            background: #cfe6f7;
            transition: opacity 0.3s ease;
            z-index: 2;
        }

        .kot-main-header-nav-bar-item-wrapper:not(:first-child)::before {
            content: "";
            position: absolute;
            left: 0;
            width: 1px;
            height: 40%;
            background: #cfe6f7;
            transition: opacity 0.3s ease;
            z-index: 2;
        }

        /* Hide lines on hover for ALL items */
        .kot-main-header-nav-bar-item-wrapper:hover::after,
        .kot-main-header-nav-bar-item-wrapper:hover::before,
        .kot-main-header-nav-bar-item-wrapper:hover + .kot-main-header-nav-bar-item-wrapper::before {
            opacity: 0;
        }

        /* Also hide the right line of previous item */
        .kot-main-header-nav-bar-item-wrapper:has(+ .kot-main-header-nav-bar-item-wrapper:hover)::after {
            opacity: 0;
        }

        .kot-main-header-nav-bar-item-wrapper:first-child::before {
            display: none;
        }

        .kot-main-header-nav-bar-item-wrapper:last-child::after {
            display: none;
        }

        /* ================= FIX: Hide lines when mega menu is active or hovered ================= */
        /* Hide lines when mega menu is shown */
        .kot-main-header-nav-bar-mega-menu.show ~ .kot-main-header-nav-bar-inner .kot-main-header-nav-bar-item-wrapper::before,
        .kot-main-header-nav-bar-mega-menu.show ~ .kot-main-header-nav-bar-inner .kot-main-header-nav-bar-item-wrapper::after {
            opacity: 0;
        }

        /* Hide lines when nav item has mega-hovered class */
        .kot-main-header-nav-bar-item-wrapper.mega-hovered::before,
        .kot-main-header-nav-bar-item-wrapper.mega-hovered::after,
        .kot-main-header-nav-bar-item-wrapper.mega-hovered + .kot-main-header-nav-bar-item-wrapper::before,
        .kot-main-header-nav-bar-item-wrapper:has(+ .kot-main-header-nav-bar-item-wrapper.mega-hovered)::after {
            opacity: 0;
        }

        /* Hide lines when hovering over mega menu */
        .kot-main-header-nav-bar-mega-menu:hover ~ .kot-main-header-nav-bar-inner .kot-main-header-nav-bar-item-wrapper::before,
        .kot-main-header-nav-bar-mega-menu:hover ~ .kot-main-header-nav-bar-inner .kot-main-header-nav-bar-item-wrapper::after {
            opacity: 0 !important;
        }

        /* ================= BLINKING FIX: Add buffer zone for smooth transition ================= */
        .mega-menu-buffer {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: 10px;
            background: transparent;
            z-index: 998;
            display: none;
        }

        /* Hover background color for ALL items */
        .kot-main-header-nav-bar-item-wrapper:hover {
            background: var(--hover-color);
        }

        /* Specific hover colors for each menu item */
        .kot-main-header-nav-bar-item-wrapper[data-item="CORPORATE"]:hover {
            background: #A65E4E !important;
        }
        .kot-main-header-nav-bar-item-wrapper[data-item="SERVICES"]:hover {
            background: #A53694 !important;
        }
        .kot-main-header-nav-bar-item-wrapper[data-item="CONSULTANCY"]:hover {
            background: #7EAB39 !important;
        }
        .kot-main-header-nav-bar-item-wrapper[data-item="SUPPORT"]:hover {
            background: #068A4F !important;
        }
        .kot-main-header-nav-bar-item-wrapper[data-item="CAREER"]:hover {
            background: #dc3545 !important;
        }
        .kot-main-header-nav-bar-item-wrapper[data-item="CONTACT"]:hover {
            background: #6c757d !important;
        }
        .kot-main-header-nav-bar-item-wrapper[data-item="INSIGHTS"]:hover {
             background: #C43882 !important;
        }

        /* Active hover state */
        .kot-main-header-nav-bar-item-wrapper.mega-hovered {
            background: var(--hover-color) !important;
        }

        /* ================= SMOOTH MEGA MENU TRANSITIONS ================= */
        .kot-main-header-nav-bar-mega-menu {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: 0;
            overflow: hidden;
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            /* transform-origin: top center; */
            transform: translateY(-10px);
            display: block !important;
        }

        .kot-main-header-nav-bar-mega-menu.show {
            height: 322px;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        /* Smooth content animation */
        .kot-main-header-nav-bar-mega-content {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease 0.1s;
            padding: 30px 0;
        }

        .kot-main-header-nav-bar-mega-menu.show .kot-main-header-nav-bar-mega-content {
            opacity: 1;
            transform: translateY(0);
        }

        /* Keep mega menu visible during hover */
        .kot-main-header-nav-bar-mega-menu:hover {
            height: 322px !important;
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
        }

        /* Menu-specific backgrounds */
        .corporate-mega { 
            background: #A65E4E !important; 
            background: linear-gradient(135deg, #A65E4E 0%, #8f4b36 100%) !important;
        }
        .services-mega { 
            background: #A53694 !important; 
            background: linear-gradient(135deg, #A53694 0%, #8a2a7a 100%) !important;
        }
        .consultancy-mega { 
            background: #7EAB39 !important; 
            background: linear-gradient(135deg, #7EAB39 0%, #689425 100%) !important;
        }
        .insights-mega { 
            background: #C43882 !important; 
            /* background: linear-gradient(135deg, #C43882#20c997 0%, #17a589 100%) !important; */
            
        }

        /* ================= MEGA MENU CONTENT STYLES ================= */
        .mega-content-container {
            padding: 30px 0;
        }
       .image-list{
        width: 28px;
        height: 22px;
       }
        .corporate-heading-main h2 {
            color: white;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }

        .corporate-text-heading h5 {
            color: white;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .corporate-text-heading p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 14px;
            line-height: 1.5;
        }

        .corporate-btn-section .btn-primary {
            background: #f2b233;
            border: none;
            color: #000;
            padding: 8px 20px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .corporate-btn-section .btn-primary:hover {
            background: #d99c1e;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
           .corporate-section-image img{
            width: 432px;
            height: auto;
           }
        .corporate-image-ul ul {
            list-style: none;
            padding: 0;
        }

        .corporate-image-ul li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: transform 0.3s ease;
        }

        .corporate-image-ul li:hover {
            transform: translateX(5px);
        }

        .corporate-image-ul a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .corporate-image-ul a:hover {
            color: #f2b233;
        }

        .corporate-image-ul span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
        }
      
        /* .corporate-image-ul img {
            width: 28px;
            height: 22px;
            filter: brightness(0) invert(1);
        } */

        /* Image styles for services mega menu */
        .img-fluid.rounded {
            border-radius: 8px !important;
            transition: all 0.3s ease;
            height: 120px;
            object-fit: cover;
        }

        .img-fluid.rounded:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
          @media (min-width: 768px) and (max-width: 991px) {
    .corporate-section-image img {
        width: 320px;   /* ya jo tumhein best lage */
        height: auto;   /* proportion safe */
    }
}

        /* ================= MOBILE STYLES ================= */
        @media (max-width: 767px){
            .top-marquee,
            .top-links-wrapper,
            .header-main,
            .kot-main-header-nav-bar,
            .desktop-header-wrap {
                display: none;

            }
        }

        /* MOBILE TOP */
        .kot-header-mobile-top{
            position: sticky;
            top: 0;
            z-index: 1060;
            overflow: visible;
            display: none;
        }

        @media (max-width: 767px) {
            .kot-header-mobile-top {
                display: block;
                background-color: #0A71B9;
            }
        }

        .kot-header-mobile-top-container{
            position: relative;
            padding-top: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .kot-header-hero-subline{
            margin: 0;
            font-weight: 700;
            font-size: clamp(10px , 1vw, 14px);
            line-height: 1.15;
            color: #fff;
            flex: 1 1 auto;
        }

        .kot-header-mobile-right{
            display: none !important;
        }

        /* OVERLAY */
        .kot-header-menu-overlay{
            position: fixed;
            inset: 0;
            z-index: 1040;
            opacity: 0;
            pointer-events: none;
            transition: opacity .25s ease;
            background: rgba(0,0,0,.45);
            backdrop-filter: blur(4px);
            display: none;
        }

        .kot-header-menu-overlay.kot-header-show{
            opacity: 1;
            pointer-events: none;
        }

        /* MOBILE MENU */
        .kot-header-mobile-menu{
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            z-index: 1050;
            transform: translateX(-100%);
            transition: transform .28s ease;
            background: linear-gradient(180deg, rgba(23, 23, 57, 0.90), rgba(23, 23, 57, 0.60));
            backdrop-filter: blur(8px);
            color:#fff;
            display: none;
        }

        .kot-header-mobile-menu.kot-header-open{ 
            transform: translateX(0); 
        }

        .kot-header-mobile-menu-header {
            position: relative;
            z-index: 1051;
            padding: 20px;
            top: 10%;
        }

        .kot-header-close-btn {
            position: static !important;
            font-size: 28px;
            padding: 8px 14px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.10);
            color: #fff;
            border: 0;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .kot-header-close-btn:hover {
            background: rgba(255, 255, 255, 0.18);
        }

        .kot-header-logo-layer img {
            height: 50px;
            width: auto;
            object-fit: contain;
        }

        .kot-header-mobile-menu-body{
            height: 100%;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            gap:12px;
        }

        .kot-header-menu-item,
        .kot-header-menu-acc-btn{
            width: min(520px, 92vw);
            color:#fff;
            border:0;
            padding:24px 16px;
            display:flex;
            align-items:center;
            justify-content:center;
            gap:10px;
            font-weight:700;
            text-decoration:none;
            border-radius:14px;
            cursor: pointer;
            text-align: center;
            background: none;
        }

        .kot-header-menu-item:hover,
        .kot-header-menu-acc-btn:hover{ 
            background: rgba(255,255,255,0.12); 
        }

        .kot-header-menu-accordion{ 
            width: min(520px, 92vw);
        }

        .kot-header-menu-acc-btn{ 
            width:100%; 
            position: relative; 
        }

        .kot-header-menu-acc-btn .kot-header-chev{
            position:absolute;
            right: 16px;
            transition: transform .2s ease;
        }

        .kot-header-menu-acc-panel{
            max-height: 0;
            overflow: hidden;
            transition: max-height .25s ease;
            margin-top: 8px;
        }

        .kot-header-menu-acc-panel a{
            display:flex;
            justify-content:center;
            align-items:center;
            padding:4px 16px;
            color:#fff;
            text-decoration:none;
            font-weight:600;
            border-radius:14px;
            margin: 0px 0;
        }

        .kot-header-menu-acc-panel a:hover{ 
            background: rgba(255,255,255,0.12); 
        }

        .kot-header-menu-accordion.kot-header-open .kot-header-menu-acc-panel{ 
            max-height: 400px; 
        }

        .kot-header-menu-accordion.kot-header-open .kot-header-chev{ 
            transform: rotate(180deg); 
        }

        /* MOBILE BOTTOM NAV */
        .kot-header-mobile-bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            display: none;
        }

        @media (max-width: 767px) {
            .kot-header-menu-overlay,
            .kot-header-mobile-menu,
            .kot-header-mobile-bottom-nav {
                display: block;
            }
        }

        .kot-header-mobile-logo-strip {
            position: absolute;
            top: -56%;
            left: 50%;
            transform: translateX(-50%);
            background-image: url(../assets/images/Header/Vector3.png);
            height: 84px;
            width: 84px;
            background-repeat: no-repeat;
            background-size: contain;
        }

        .kot-header-mobile-bottom-nav .kot-header-bottom-container {
            padding-top: 15px !important;
            background-color: #0A71B9;
        }

        .kot-header-mobile-bottom-nav a {
            color: #FFFFFF;
            font-size: 20px;
            font-weight: 600;
            text-decoration: none;
        }

        .kot-header-mobile-bottom-nav i {
            font-size: 30px;
        }

        /* TOGGLE */
        .kot-header-glow-toggle {
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .kot-header-toggle {
            position: relative;
            width: 50px;
            height: 26px;
        }

        .kot-header-toggle input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .kot-header-slider {
            position: absolute;
            inset: 0;
            background: #ffffff;
            border-radius: 30px;
            transition: 0.4s ease;
            cursor: pointer;
        }

        .kot-header-slider::before {
            content: "";
            position: absolute;
            height: 18px;
            width: 18px;
            left: 4px;
            top: 4px;
            background: #1e90ff;
            border-radius: 50%;
            transition: 0.4s ease;
            box-shadow: 0 0 6px rgba(30,144,255,0.9);
        }

        .kot-header-toggle input:checked + .kot-header-slider::before {
            transform: translateX(22px);
        }

        /* RESPONSIVE ADJUSTMENTS */
        @media screen and (min-width: 768px) and (max-width: 800px) {
            .kot-main-header-nav-bar-item{
                padding:14px 15px;
            }
        }

        /* DESKTOP FIXED HEADER */
        @media (min-width: 992px){
            .desktop-header-wrap{
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 1050;
               background: #000000;
                transition: all .4s ease;
            }

            .desktop-header-wrap.header-shrink .kot-main-header-nav-bar{
                box-shadow: 0 6px 18px rgba(0,0,0,0.12);
            }

            body{
                padding-top: 190px;
            }
        }

        /* ================= CRITICAL FIXES ================= */
        /* Ensure proper stacking */
        .kot-main-header-nav-bar {
            position: relative;
        }

        .kot-main-header-nav-bar-mega-menu {
            display: block !important;
        }

        /* Smooth transition for nav items */
        .kot-main-header-nav-bar-item-wrapper {
            transition: all 0.3s ease;
        }
        
        /* ================= BLINKING FIX: Additional CSS ================= */
        .kot-main-header-nav-bar-item-wrapper {
            transition: background-color 0.2s ease !important;
        }
        
        .kot-main-header-nav-bar-mega-menu {
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) !important;
        }
        
        .kot-main-header-nav-bar-item-wrapper.mega-hovered {
            z-index: 1001;
        }
    </style>
</head>

<body style="background-color: #000000;" >

<!-- ================= DESKTOP HEADER ================= -->
<div class="global-header desktop-header-wrap">
    <!-- TOP MARQUEE -->
    <div class="top-marquee">
        <div class="marquee-container">
            <div class="marquee-track" id="marqueeTrack">
                <span>
                    <img src="../assets/images/Header/marquee-logo2.png" alt="">
                    Empowering businesses to streamline operations and grow.
                </span>
                <span>
                    <img src="../assets/images/Header/marquee-logo2.png" alt="">
                    Empowering businesses to streamline operations and grow.
                </span>
            </div>
        </div>
    </div>

    <!-- TOP LINKS -->
    <div class="top-links-wrapper">
        <div class="top-links-right">
            <a href="/-/">Home</a>
            <a href="/services-/"> <span><img src="../assets/images/Header/Vector (1).png" alt=""></span> Services</a>
            <a href="/career-/"> <span><img src="../assets/images/Header/Vector (1).png" alt=""></span> Career</a>
            <a href="/faq-page-/"> <span><img src="../assets/images/Header/Vector (1).png" alt=""></span> FAQ</a>
            <a href="/contact-/"> <span><img src="../assets/images/Header/Vector (1).png" alt=""></span> Contact</a>
            <a href="/site-map-/"> <span><img src="../assets/images/Header/Vector (1).png" alt=""></span> Site Map</a>
            
                        <a href="https://kot-e.com/authentication/login" class="login-header-button" >Login</a>
                 
        </div>

        <div class="top-actions">
            <!-- <div class="dropdown lang-dropdown">
                <button class="dropdown-toggle" id="langBtn" data-bs-toggle="dropdown">
                    <img id="langImg" src="../assets/images/Header/pak.png">
                    <span id="langText">اردو</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item lang-option" href="#" data-img="../assets/images/Header/pak.png" data-text="اردو"><img src="../assets/images/Header/pak.png"> اردو</a></li>
                    <li><a class="dropdown-item lang-option" href="#" data-img="../assets/images/Header/uk.png" data-text="English"><img src="../assets/images/Header/uk.png"> English</a></li>
                    <li><a class="dropdown-item lang-option" href="#" data-img="../assets/images/Header/saudi.png" data-text="العربية"><img src="../assets/images/Header/saudi.png"> العربية</a></li>
                    <li><a class="dropdown-item lang-option" href="#" data-img="../assets/images/Header/fr.png" data-text="Français"><img src="../assets/images/Header/fr.png"> Français</a></li>
                </ul>
            </div> -->

           <label class="switch">
  <input type="checkbox" id="theme-toggle" checked>
  <span class="slider"></span>
</label>
        </div>
    </div>

    <!-- LOGO -->
    <div class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 logo">
                    <a href="/-/"><img src="../assets/images/Header/Logo.png" alt="Kot Enterprises"></a>
                </div>
                <div class="col-md-6">
                    <!-- <div class="search-box">
                        <input class="form-control form-scontrol-style" placeholder="Search">
                        <button><img src="../assets/images/Header/search-icon.png" alt="Search"></button>
                    </div> -->
                    <!-- <div class="login-header-button d-flex justify-content-end ">
                        <a href="">Login</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- NAV BAR -->
    <div class="kot-main-header-nav-bar" id="nav">
        <div class="kot-main-header-nav-bar-inner">
            <!-- CORPORATE -->
            <div class="kot-main-header-nav-bar-item-wrapper" data-item="CORPORATE">
                <a class="kot-main-header-nav-bar-item" href="#">
                    CORPORATE
                </a>
            </div>

            <!-- SERVICES -->
            <div class="kot-main-header-nav-bar-item-wrapper" data-item="SERVICES">
                <a class="kot-main-header-nav-bar-item" href="/services-/">
                    SERVICES
                </a>
            </div>

            <!-- CONSULTANCY -->
            <div class="kot-main-header-nav-bar-item-wrapper" data-item="CONSULTANCY">
                <a class="kot-main-header-nav-bar-item" href="#">
                    CONSULTANCY
                </a>
            </div>

            <!-- SUPPORT -->
            <div class="kot-main-header-nav-bar-item-wrapper" data-item="SUPPORT">
                <a class="kot-main-header-nav-bar-item" href="/support-/">
                    SUPPORT
                </a>
            </div>

            <!-- CAREER -->
            <div class="kot-main-header-nav-bar-item-wrapper" data-item="CAREER">
                <a class="kot-main-header-nav-bar-item" href="/career-/">
                    CAREER
                </a>
            </div>

            <!-- CONTACT -->
            <div class="kot-main-header-nav-bar-item-wrapper" data-item="CONTACT">
                <a class="kot-main-header-nav-bar-item" href="/contact-/">
                    CONTACT
                </a>
            </div>
            
            <!-- INSIGHTS -->
            <div class="kot-main-header-nav-bar-item-wrapper" data-item="INSIGHTS"  >
                <a class="kot-main-header-nav-bar-item" href="/insights-/">
                    INSIGHTS
                </a>
            </div>
        </div>

        <!-- ======== BUFFER ZONE FOR SMOOTH TRANSITION ======== -->
        <div class="mega-menu-buffer"></div>
        <!-- ======== END BUFFER ZONE ======== -->

        <div class="kot-main-header-nav-bar-mega-menu corporate-mega" id="corporateMega">
  <div class="mega-content-container">
    <div class="container">
      <div class="row mt-5 align-items-center">

        <!-- LEFT -->
        <div class="col-12 col-md-6">
          <div class="row align-items-center">
            <div class="col-12 col-md-12">
              <div class="corporate-section-image">
                 <a href="/contact-/"><img src="../assets/images/Header/corporate.svg" alt="corporate"></a>
              </div>
            </div>
          </div>
        </div>

        <!-- RIGHT -->
        <div class="col-12 col-md-6">
          <div class="corporate-heading-main mb-3">
            <h2>CORPORATE</h2>
          </div>

          <div class="row">
            <div class="col-12 col-md-12">
              <ul class="list-unstyled">
                <li class="mb-2">
                  <img src="../assets/images/Header/vec1.png" class="image-list me-2">
                  <a href="/why-kot-/">Why KOT</a>
                </li>
                <li>
                  <img src="../assets/images/Header/vec1.png" class="image-list me-2">
                  <a href="/board-of-directors-/">Board of Directors</a>
                </li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>


        <!-- SERVICES MEGA MENU -->
        <div class="kot-main-header-nav-bar-mega-menu services-mega" id="servicesMega">
  <div class="mega-content-container">
    <div class="container">
      <div class="row mt-5 align-items-center">

        <!-- LEFT -->
        <div class="col-12 col-md-6">
          <div class="corporate-section-image">
            <img src="../assets/images/Header/header-group.png" alt="">
          </div>
        </div>

        <!-- RIGHT -->
        <div class="col-12 col-md-6">
          <div class="corporate-heading-main mb-4">
            <h2>SERVICES</h2>
          </div>

          <div class="row">
            <div class="col-12 col-md-6">
              <ul class="list-unstyled">
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/agile-apps-/">AGILEAPPS</a></li>
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/digittrail-/">DIGITTRAIL</a></li>
                <li class="mb-3" ><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/app-sculpt-/">APP SCULPT</a></li>
                <li  ><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/WebSculpture-/">Web Sculptures</a></li>
              </ul>
            </div>

            <div class="col-12 col-md-6">
              <ul class="list-unstyled">
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/merchanity-/">MERCHANITY</a></li>
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/flawless-/">FLAWLESS X</a></li>
                <li><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/graphoria-/">GRAPHIORA</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>


        <!-- CONSULTANCY MEGA MENU -->
       <div class="kot-main-header-nav-bar-mega-menu consultancy-mega" id="consultancyMega">
  <div class="mega-content-container">
    <div class="container">
      <div class="row mt-5 align-items-center">

        <!-- LEFT -->
        <div class="col-12 col-md-6">
          <div class="corporate-section-image">
            <a href="/contact-/"> <img src="../assets/images/Header/consultancy.svg" alt="consultancy"></a>
          </div>
        </div>

        <!-- RIGHT -->
        <div class="col-12 col-md-6">
          <div class="corporate-heading-main mb-4">
            <h2>CONSULTANCY</h2>
          </div>

          <div class="row">
            <div class="col-12 col-md-6">
              <ul class="list-unstyled">
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/audits-/">AUDITS</a></li>
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/data-engineering-/">DATA ENGINEERING</a></li>
              </ul>
            </div>

            <div class="col-12 col-md-6">
              <ul class="list-unstyled">
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/gen-ai-/">GENERATIVE AI</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>


        <!-- INSIGHTS MEGA MENU -->
        <div class="kot-main-header-nav-bar-mega-menu insights-mega" id="insightsMega">
  <div class="mega-content-container">
    <div class="container">
      <div class="row mt-5 align-items-center">

        <!-- LEFT -->
        <div class="col-12 col-md-6">
          <div class="corporate-section-image">
           <a href="/contact-/"> <img src="../assets/images/Header/insight.svg" alt="insights"></a>
          </div>
        </div>

        <!-- RIGHT -->
        <div class="col-12 col-md-6">
          <div class="corporate-heading-main mb-4">
            <h2>INSIGHTS</h2>
          </div>

          <div class="row">
            <div class="col-12 col-md-6">
              <ul class="list-unstyled">
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/certificate-/">Certificate Verification Center</a></li>
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/event-/">Event Management Center</a></li>
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/appreciation-/">Appreciation Board</a></li>
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/policy-/">Policy Center</a></li>
              </ul>
            </div>

            <div class="col-12 col-md-6">
              <ul class="list-unstyled">
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/case-/">Case Studies</a></li>
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/ebook-/">Ebook / Whitepapers</a></li>
                  <li class="mb-3 d-flex gap-4">
    
    <!-- News -->
    <div class="d-flex align-items-center gap-2">
      <img src="../assets/images/Header/vec1.png" class="image-list">
      <a href="/news-/">News</a>
    </div>

    <!-- Blog -->
    <div class="d-flex align-items-center gap-2">
      <img src="../assets/images/Header/vec1.png" class="image-list">
      <a href="/blogs-/">Blog</a>
    </div>

  </li>
                <li class="mb-3"><img src="../assets/images/Header/vec1.png" class="image-list me-2"><a href="/announce-/">Announcements</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

    </div>
</div>

<!-- ================= MOBILE TOP ================= -->
<div class="kot-header-mobile-top d-lg-none">
    <div class="container py-2 kot-header-mobile-top-container">
        <h4 class="kot-header-hero-subline">
            <marquee behavior="" direction="">Kot Enterprises - Empowering businesses with digital solutions</marquee>
        </h4>
        <div class="d-flex align-items-center gap-3 kot-header-mobile-right">
            <button id="openMenuBtn" class="btn btn-sm btn-outline-dark" type="button">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </div>
</div>

<!-- OVERLAY -->
<div class="kot-header-menu-overlay" id="menuOverlay"></div>

<!-- MOBILE MENU -->
<aside class="kot-header-mobile-menu" id="mobileMenu" aria-hidden="true">
    <div class="kot-header-mobile-menu-header d-flex justify-content-between align-items-center px-4 py-3">
        <div class="kot-header-logo-layer">
            <a href="/-/">
                <img src="../assets/images/Header/Logo-mb.svg" alt="Kot Enterprises">
            </a>
        </div>
        <button id="closeMenuBtn" class="kot-header-close-btn" aria-label="Close Menu">&times;</button>
    </div>
    
    <div class="kot-header-mobile-menu-body">
        <div class="alternate-changing">
            <div class="kot-header-glow-toggle">
                <label class="switch" for="theme-toggle">
  <input type="checkbox" hidden checked>
  <span class="slider"></span>
</label>

            </div>
            <div class="login-btn">
                <a href="https://kot-e.com/authentication/login" class="login-btn">Login</a>
            </div>
        </div>
        
        <div class="scroleer-addion-sec" style="height: 52vh; overflow: auto;">
            <!-- CORPORATE -->
            <div class="kot-header-menu-accordion">
                <button class="kot-header-menu-acc-btn" type="button">
                    <span class="d-flex align-items-center gap-2 justify-content-center w-100">
                        <i class="bi "></i> CORPORATE
                    </span>
                    <i class="bi bi-chevron-down kot-header-chev"></i>
                </button>
                <div class="kot-header-menu-acc-panel">
                    <a href="/why-kot-/">Why Kot Enterprises</a>
                    <a href="/board-of-directors-/">Board Of Director</a>
                    <!-- <a href="/career-/">Career</a> -->
                </div>
            </div>

            <!-- SERVICES -->
            <div class="kot-header-menu-accordion">
                <button class="kot-header-menu-acc-btn" type="button">
                    <span class="d-flex align-items-center gap-2 justify-content-center w-100">
                        <i class="bi "></i> SERVICES
                    </span>
                    <i class="bi bi-chevron-down kot-header-chev"></i>
                </button>
                <div class="kot-header-menu-acc-panel">
                    <a href="/app-sculpt-/">APP SCULPT</a>
                    <a href="/agile-apps-/">AGILE APPS</a>
                    <a href="/digittrail-/">DIG-IT-TRAIL</a>
                    <a href="/merchanity-/">MERCHANITY</a>
                    <a href="/WebSculpture-/">WEB SCULPTURE</a>
                    <a href="/flawless-/">FLAWLESSX</a>
                    <a href="/graphoria-/">GRAPHIORA</a>
                </div>
            </div>

            <!-- CONSULTANCY -->
            <div class="kot-header-menu-accordion">
                <button class="kot-header-menu-acc-btn" type="button">
                    <span class="d-flex align-items-center gap-2 justify-content-center w-100">
                        <i class="bi "></i> CONSULTANCY
                    </span>
                    <i class="bi bi-chevron-down kot-header-chev"></i>
                </button>
                <div class="kot-header-menu-acc-panel">
                    <a href="/audits-/">Audits</a>
                    <a href="/data-engineering-/">Data Engineering</a>
                    <a href="/gen-ai-/">Generative AI</a>
                </div>
            </div>
                  <div class="kot-header-menu-accordion">
                  <button class="kot-header-menu-acc-btn" type="button">
                    <span class="d-flex align-items-center gap-2 justify-content-center w-100">
                        <i class="bi "></i> Insight
                    </span>
                    <i class="bi bi-chevron-down kot-header-chev"></i>
                   </button>
                   <div class="kot-header-menu-acc-panel">
                    <a href="/certificate-/">Certificate Verification</a>
                    <a href="/event-/">Event Management</a>
                    <a href="/news-/">News</a>
                    <a href="/appreciation-/">Appreciation Board</a>
                    
                    <a href="/blogs-/">Blogs</a>
                    <a href="/announce-/">Announcement</a>
                    <a href="/case-/">Case Study</a>
                     <a href="/ebook-/">E-Book</a>
                    <a href="/policy-/">Policy Center</a>
                </div>
            </div>
            <a href="/support-/" class="kot-header-menu-item"><i class="bi "></i> Support</a>
            <a href="/career-/" class="kot-header-menu-item"><i class="bi "></i> Career</a>
            <a href="/contact-/" class="kot-header-menu-item"><i class="bi "></i> Contact</a>
        </div>
    </div>
</aside>

<!-- ================= PAGE CONTENT ================= -->
<!-- Add your page content here -->

<!-- ================= MOBILE BOTTOM NAV ================= -->
<div class="kot-header-mobile-bottom-nav fixed-bottom d-lg-none">
   <a href="/-/"> <div class="kot-header-mobile-logo-strip">
        <!-- Logo can be added here -->
        
    </div> </a>

    <div class="container-fluid kot-header-bottom-container">
        <div class="row text-center">
            <div class="col">
                <a id="openMenuBtnBottom" role="button" class="d-flex flex-column align-items-center">
                    <i class="bi bi-list"></i>
                </a>
            </div>

            <div class="col">
                <a href="/index-/" class="d-flex flex-column align-items-center">
                    <i class="bi bi-house-fill"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // ================= MOBILE MENU FUNCTIONALITY =================
    const body = document.body;
    const menu = document.getElementById("mobileMenu");
    const overlay = document.getElementById("menuOverlay");
    const openBtnTop = document.getElementById("openMenuBtn");
    const openBtnBottom = document.getElementById("openMenuBtnBottom");
    const closeBtn = document.getElementById("closeMenuBtn");

    function openMenu(){
        menu.classList.add("kot-header-open");
        overlay.classList.add("kot-header-show");
        body.style.overflow = "hidden";
        menu.setAttribute("aria-hidden", "false");
    }

    function closeMenu(){
        menu.classList.remove("kot-header-open");
        overlay.classList.remove("kot-header-show");
        body.style.overflow = "";
        menu.setAttribute("aria-hidden", "true");
    }

    openBtnTop?.addEventListener("click", openMenu);
    openBtnBottom?.addEventListener("click", openMenu);
    closeBtn.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);

    document.addEventListener("keydown", (e) => {
        if(e.key === "Escape" && menu.classList.contains("kot-header-open")) closeMenu();
    });

    // MOBILE ACCORDION FUNCTIONALITY
    const accBtns = document.querySelectorAll(".kot-header-menu-acc-btn");
    accBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            const accordion = btn.parentElement;
            accordion.classList.toggle("kot-header-open");
            
            // Close other accordions
            accBtns.forEach(otherBtn => {
                const otherAccordion = otherBtn.parentElement;
                if (otherAccordion !== accordion) {
                    otherAccordion.classList.remove("kot-header-open");
                }
            });
        });
    });

    // TOGGLE BUTTON
    document.getElementById("glowToggle")?.addEventListener("change", function () {
        console.log(this.checked ? "Dark mode ON" : "Dark mode OFF");
    });

    // ================= SMOOTH DESKTOP MEGA MENU (BLINKING FIXED) =================
    document.addEventListener('DOMContentLoaded', function() {
        const navItems = document.querySelectorAll('.kot-main-header-nav-bar-item-wrapper');
        const megaMenus = document.querySelectorAll('.kot-main-header-nav-bar-mega-menu');
        const bufferZone = document.querySelector('.mega-menu-buffer');
        const navBar = document.getElementById('nav');
        
        // Hide all mega menus initially
        megaMenus.forEach(menu => {
            menu.classList.remove('show');
        });
        
        // Hover colors for ALL menu items
        const hoverColors = {
            'CORPORATE': '#A65E4E',
            'SERVICES': '#A53694',
            'CONSULTANCY': '#7EAB39',
            'SUPPORT': '#068A4F',
            'CAREER': '#dc3545',
            'CONTACT': '#6c757d',
            'INSIGHTS': '#C43882'
        };
        
        // Control variables
        let activeMenu = null;
        let activeNavItem = null;
        let hoverTimer = null;
        let isTransitioning = false;
        let mouseX = 0;
        let mouseY = 0;
        
        // Track mouse movement
        document.addEventListener('mousemove', function(e) {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });
        
        // Function to get mega menu ID
        function getMegaMenuId(menuType) {
            switch(menuType) {
                case 'CORPORATE': return 'corporateMega';
                case 'SERVICES': return 'servicesMega';
                case 'CONSULTANCY': return 'consultancyMega';
                case 'INSIGHTS': return 'insightsMega';
                default: return null;
            }
        }
        
        // Function to check if element has mega menu
        function hasMegaMenu(item) {
            const dataItem = item.getAttribute('data-item');
            return dataItem === 'CORPORATE' || 
                   dataItem === 'SERVICES' ||
                   dataItem === 'CONSULTANCY' ||
                   dataItem === 'INSIGHTS';
        }
        
        // Function to hide ALL mega menus
        function hideAllMegaMenus() {
            megaMenus.forEach(menu => {
                menu.classList.remove('show');
            });
            
            navItems.forEach(item => {
                item.classList.remove('mega-hovered');
                item.style.backgroundColor = '';
            });
            
            if (bufferZone) bufferZone.style.display = 'none';
            activeMenu = null;
            activeNavItem = null;
            isTransitioning = false;
        }
        
        // Function to show specific mega menu
        function showMegaMenu(menuType, navItemElement) {
            // Clear any pending timers
            if (hoverTimer) {
                clearTimeout(hoverTimer);
                hoverTimer = null;
            }
            
            // If already showing the same menu, do nothing
            const megaMenuId = getMegaMenuId(menuType);
            if (activeMenu && activeMenu.id === megaMenuId) {
                return;
            }
            
            // Set transitioning flag
            isTransitioning = true;
            
            // First hide all menus
            hideAllMegaMenus();
            
            // Show buffer zone
            if (bufferZone) {
                bufferZone.style.display = 'block';
                const rect = navItemElement.getBoundingClientRect();
                const navRect = navBar.getBoundingClientRect();
                bufferZone.style.left = (rect.left - navRect.left) + 'px';
                bufferZone.style.width = rect.width + 'px';
                bufferZone.style.top = '100%';
                bufferZone.style.height = '10px';
            }
            
            // Highlight nav item
            navItemElement.classList.add('mega-hovered');
            const color = hoverColors[navItemElement.getAttribute('data-item')];
            if (color) {
                navItemElement.style.backgroundColor = color;
            }
            
            // Show target menu
            if (megaMenuId) {
                const targetMega = document.getElementById(megaMenuId);
                if (targetMega) {
                    // Small delay for smoothness
                    setTimeout(() => {
                        targetMega.classList.add('show');
                        activeMenu = targetMega;
                        activeNavItem = navItemElement;
                        isTransitioning = false;
                    }, 10);
                }
            }
        }
        
        // ========== NAV ITEM HOVER EVENTS ==========
        navItems.forEach((item) => {
            const menuType = item.getAttribute('data-item');
            const hasMega = hasMegaMenu(item);
            
            item.addEventListener('mouseenter', function(e) {
                // Clear any hide timer
                if (hoverTimer) {
                    clearTimeout(hoverTimer);
                    hoverTimer = null;
                }
                
                // Apply hover color
                const color = hoverColors[menuType];
                if (color) {
                    this.style.backgroundColor = color;
                }
                
                if (hasMega) {
                    // For items with mega menus
                    showMegaMenu(menuType, this);
                } else {
                    // For items without mega menus
                    hideAllMegaMenus();
                    this.classList.add('mega-hovered');
                    this.style.backgroundColor = color;
                    activeNavItem = this;
                }
            });
            
            item.addEventListener('mouseleave', function(e) {
                // Don't process if transitioning
                if (isTransitioning) return;
                
                const relatedTarget = e.relatedTarget;
                const goingToMega = relatedTarget && relatedTarget.closest('.kot-main-header-nav-bar-mega-menu');
                const goingToBuffer = relatedTarget && relatedTarget.closest('.mega-menu-buffer');
                const goingToAnotherNav = relatedTarget && relatedTarget.closest('.kot-main-header-nav-bar-item-wrapper');
                
                // If going to buffer zone, mega menu, or another nav item, don't hide immediately
                if (goingToBuffer || goingToMega || goingToAnotherNav) {
                    return;
                }
                
                // Set timer to hide
                hoverTimer = setTimeout(() => {
                    // Reset background color
                    this.style.backgroundColor = '';
                    this.classList.remove('mega-hovered');
                    
                    // Hide mega menu if not hovering over it
                    if (activeMenu && !isMouseOver(activeMenu) && !isMouseOver(bufferZone)) {
                        hideAllMegaMenus();
                    }
                }, 50); // Very short delay
            });
        });
        
        // ========== BUFFER ZONE EVENTS ==========
        if (bufferZone) {
            bufferZone.addEventListener('mouseenter', function() {
                // Clear any hide timer
                if (hoverTimer) {
                    clearTimeout(hoverTimer);
                    hoverTimer = null;
                }
            });
            
            bufferZone.addEventListener('mouseleave', function(e) {
                const relatedTarget = e.relatedTarget;
                const goingToMega = relatedTarget && relatedTarget.closest('.kot-main-header-nav-bar-mega-menu');
                const goingToNav = relatedTarget && relatedTarget.closest('.kot-main-header-nav-bar-item-wrapper');
                
                if (!goingToMega && !goingToNav) {
                    hoverTimer = setTimeout(() => {
                        if (activeMenu && !isMouseOver(activeMenu) && !isMouseOverAnyNav()) {
                            hideAllMegaMenus();
                        }
                    }, 50);
                }
            });
        }
        
        // ========== MEGA MENU EVENTS ==========
        megaMenus.forEach(menu => {
            menu.addEventListener('mouseenter', function() {
                // Clear any hide timer
                if (hoverTimer) {
                    clearTimeout(hoverTimer);
                    hoverTimer = null;
                }
            });
            
            menu.addEventListener('mouseleave', function(e) {
                const relatedTarget = e.relatedTarget;
                const goingToNav = relatedTarget && relatedTarget.closest('.kot-main-header-nav-bar-item-wrapper');
                const goingToBuffer = relatedTarget && relatedTarget.closest('.mega-menu-buffer');
                
                if (!goingToNav && !goingToBuffer) {
                    hoverTimer = setTimeout(() => {
                        if (!isMouseOverAnyNav() && !isMouseOver(bufferZone)) {
                            hideAllMegaMenus();
                        }
                    }, 50);
                }
            });
        });
        
        // ========== HELPER FUNCTIONS ==========
        function isMouseOver(element) {
            if (!element) return false;
            
            // Check if mouse is within element bounds
            const rect = element.getBoundingClientRect();
            return mouseX >= rect.left && 
                   mouseX <= rect.right && 
                   mouseY >= rect.top && 
                   mouseY <= rect.bottom;
        }
        
        function isMouseOverAnyNav() {
            for (let item of navItems) {
                if (isMouseOver(item)) {
                    return true;
                }
            }
            return false;
        }
        
        // Close menus on click outside
        document.addEventListener('click', function(e) {
            const isNavItem = e.target.closest('.kot-main-header-nav-bar-item-wrapper');
            const isMegaMenu = e.target.closest('.kot-main-header-nav-bar-mega-menu');
            const isBuffer = e.target.closest('.mega-menu-buffer');
            
            if (!isNavItem && !isMegaMenu && !isBuffer) {
                hideAllMegaMenus();
            }
        });
        
        // Close menus on scroll
        window.addEventListener('scroll', function() {
            hideAllMegaMenus();
        });
        
        // Apply initial hover colors
        navItems.forEach(item => {
            const menuType = item.getAttribute('data-item');
            if (hoverColors[menuType]) {
                item.style.setProperty('--hover-color', hoverColors[menuType]);
            }
        });
    });

    // ================= MARQUEE ANIMATION =================
    const track = document.getElementById("marqueeTrack");
if (track) {
    let pos = 0;
    let speed = 0.5;

    // Duplicate content for seamless scroll
    track.innerHTML += track.innerHTML;
    const trackWidth = track.scrollWidth / 2; // original width

    function animate() {
        pos -= speed;
        if (pos <= -trackWidth) {
            pos = 0; // reset to start
        }
        track.style.transform = `translateX(${pos}px)`;
        requestAnimationFrame(animate);
    }
    animate();
}

    // ================= LANGUAGE SELECTION =================
    document.querySelectorAll(".lang-option").forEach(option => {
        option.addEventListener("click", function(e){
            e.preventDefault();
            document.getElementById("langImg").src = this.dataset.img;
            document.getElementById("langText").innerText = this.dataset.text;
        });
    });

    // ================= SCROLL EFFECT FOR DESKTOP HEADER =================
    if (window.innerWidth >= 992) {
        const headerWrap = document.querySelector(".desktop-header-wrap");
        if (headerWrap) {
            let lastScroll = 0;
            const threshold = 80;

            window.addEventListener("scroll", () => {
                const currentScroll = window.pageYOffset;

                // SCROLL DOWN
                if (currentScroll > lastScroll && currentScroll > threshold) {
                    headerWrap.classList.add("header-hide-top", "header-shrink");
                }

                // SCROLL UP
                if (currentScroll < lastScroll) {
                    headerWrap.classList.remove("header-hide-top", "header-shrink");
                }

                // TOP REACHED
                if (currentScroll <= 5) {
                    headerWrap.classList.remove("header-hide-top", "header-shrink");
                }

                lastScroll = currentScroll;
            });
        }
    }
</script>
</body>
</html>