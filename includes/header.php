 <?php
    $siteurl = "http://mushidrsp.test/";
?>
 <style>
    
        header .dropdown .main_menus {
            display: block;
            position: absolute;
            left: 152%;
            top: calc(100% + 7px);
            margin: 0;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            background: #fff;
            box-shadow: 0 0 30px rgb(127 137 161 / 25%);
            transition: .3s;
            width: 1240px;
            transform: translateX(-50%);
            padding: 40px 30px;
        }
        
        header .dropdown ul li {
            min-width: 200px
        }
        
        header  .dropdown ul a {
            padding: 14px 0px 0px !important;
            text-transform: none;
            text-align: left;
            font-weight: 500;
            display: block;
            text-transform: uppercase;
            line-height: 20px;
            margin-bottom: 10px;
            border-radius: 5px;
            font-size: 15px;
            color: #000;
        }
        
        header  .dropdown ul a:hover,
        header .dropdown ul li:hover {
            color: #ff0053
        }
        
        header  .dropdown ul a i {
            font-size: 12px
        }
        
        header .dropdown ul .active:hover,header .dropdown ul a:hover,header .dropdown ul li:hover>a {
            color: #ff0053 !important;
        }
        
        header .dropdown:hover>.main_menus {
            opacity: 1;
            top: 100%;
            visibility: visible
        }
        header  .dropdown ul h6{
            font-size: 18px;
            font-weight: 700;
            text-decoration: 2px  underline;
            padding-top: 15px;
        }
        header  .dropdown ul img{
            border-radius: 5px;
            transition: 0.5s;
        }
        .menu-wrap2>ul .main_menus{
            width: 1240px;
            display: block;
            position: absolute;
            left: 152%;
            top: calc(100% + 7px);
            margin: 0;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            background: #fff;
            box-shadow: 0 0 30px rgb(127 137 161 / 25%);
            transition: .3s;
            width: 1240px;
            transform: translateX(-50%);
            padding: 40px 30px!important;
            text-align: left;
        }
        
        .menu-wrap2>ul .main_menus  a {
            text-align: left;
            padding: 14px 0px 0px !important;
        }
        
        .menu-wrap2>ul .main_menus{
            padding: 0px;
        }
        
        .menu-wrap2>ul .main_menus .row {
            justify-content: flex-start;
            align-items: flex-start;
        }
        
        .menu-wrap2>ul .main_menus h6 {
            font-size: 18px;
            font-weight: 700;
            text-decoration: 2px underline;
            padding-top: 15px;
        }
        /* width */
        
        .menu-wrap>ul>li.menu-item-has-children .mob-serve::-webkit-scrollbar {
            width: 5px;
        }
        
        
        /* Track */
        
        .menu-wrap>ul>li.menu-item-has-children .mob-serve::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }
        
        /* Handle */
        
        .menu-wrap>ul>li.menu-item-has-children .mob-serve::-webkit-scrollbar-thumb {
            background: #ee3364;
            border-radius: 10px;
        }
        
        .menu-wrap>ul>li.menu-item-has-children .mob-serve{
            height: 130px;
            overflow: scroll;
            overflow-x: hidden;
        }
        
    </style>

<header class="stick style1 w-100 d-flex flex-wrap justify-content-between align-items-center">
            <div class="logo">
          
                    <a href="/" title="Home"><img class="img-fluid" src="<?php echo $siteurl ?>assets/images/logo.webp"
                            alt="Logo" srcset="<?php echo $siteurl ?>assets/images/logo.png"><img class="img-fluid" src="<?php echo $siteurl ?>assets/images/logo-dark.webp"
                            alt="Logo" ></a>
        
            </div>
            <!-- Logo -->
            <div class="menu-wrap">
                <span class="menu-cls-btn rounded-circle"><i class="icon_close"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                    <li><a href="/">Home</a></li>
                   
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Services</a>
                        <ul class="mb-0 list-unstyled w-100 mob-serve">
                                <li><a href="logo-design.html" title="">Logo Design</a></li>
                                <li><a href="mascot-logo.html">Mascot Logo</a></li>
                                <li><a href="3d-logo-design.html">3D Logo Design</a></li>
                                <li><a href="website-design.html">Website Design</a></li>
                                <li><a href="landing-pages.html">Landing Pages</a></li>
                                <li><a href="ecommerce-website.html">Ecommerce Website</a></li>
                                <li><a href="basic-business-website.html">Basic Business Website</a></li>
                                <li><a href="website-design.html" title="">Website Design</a></li>
                                <li><a href="business-cards.html" title="">Business Cards</a></li>
                                <li><a href="brand-merchandise.html" title="">Brand Merchandise</a></li>
                                <!-- <li><a href="/digital-marketing" title="">Digital Marketing</a></li> -->
                                <li><a href="seo-marketing.html" title="">Search Engine Optimization </a></li>
                                <li><a href="social-media-marketing.html" title="">Social Media Marketing</a></li>
                                <li><a href="tiktok-marketing.html">TikTok Marketing</a></li>
                                <li><a href="digital-strategy.html">Digital Strategy</a></li>
                                <li><a href="content-development.html">Content Development</a></li>
                                <li><a href="3d-logo-animation.html" title="">3d Logo Animation</a></li>
                                <li><a href="video-animation.html" title="">Video Animation</a></li>
                                <li><a href="packaging-label.html" title="">Packaging Labels</a></li>
                                <li><a href="banner-ad-design.html" title="">Post & Banner Ads </a></li>
                                <li><a href="marketing-collateral.html" title="">Print Collateral</a></li>
                                <li><a href="art-illustration.html" title="">Art & Illustration</a></li>
                                <li><a href="logo-illustration.html">Logo Illustration</a></li>
                                <li><a href="brochure-and-flyer.html">Brochures & Flyers</a></li>
                                <li><a href="affiliate-marketing.html">Affiliate Marketing</a></li>
                                <li><a href="domain-and-hosting.html">Domain & Hosting</a></li>
                        </ul>
                    </li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="packages.html">Packages</a></li>
                    <li><a href="combo-packages.html">Combo Packages</a></li>
                    <li><a href="contact.html">Contact</a></li>
            
                </ul>
            </div>
            <!-- Menu Wrap -->
            <div class="menu-wrap2 main-nav">
                <ul class="mb-0 d-flex flex-wrap list-unstyled w-100">
                    <li><a href="index.html">Home</a></li>
                    
                    <li class="menu-item-has-children dropdown"><a href="javascript:void(0);" title="">Services</a>
               
                <div class="main_menus">
                    <div class="row">
                                                    <div class="col-lg-3">
                                                        <ul class="list-unstyled">
                                                        <h6 class="logobradn">Logo </h6>
                                                        <li><a href="logo-design.html">Logo Design</a></li>
                                                         <li><a href="mascot-logo.html">Mascot Logo</a></li>
                                                         <li><a href="logo-illustration.html">Logo Illustration</a></li>
                                                        <li><a href="3d-logo-design.html">3D Logo Design</a></li>
                                                    </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul class="list-unstyled">
                                                        <h6 class="logobradn">Website</h6>
                                                        <li><a href="website-design.html">Website Design</a></li>
                                                        <li><a href="landing-pages.html">Landing Pages</a></li>
                                                        <li><a href="ecommerce-website.html">Ecommerce Website</a></li>
                                                        <li><a href="basic-business-website.html">Basic Business Website</a></li>
                                                    </ul> 
                                                   
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul class="list-unstyled">
                                                    <h6 class="digimart"> Digital Marketing</h6>
                                                        <!-- <li><a href="/digital-marketing">Digital Marketing</a></li> -->
                                                        <li><a href="seo-marketing.html" title="">Search Engine Optimization </a></li>
                                                        <li><a href="social-media-marketing.html" title="">Social Media Marketing</a></li>
                                                        <li><a href="content-development.html">Content Development</a></li>
                                                      <li><a href="banner-ad-design.html">Post & Banner Ads </a></li>
                                                 <li><a href="affiliate-marketing.html">Affiliate Marketing</a></li>
                                                 <li><a href="tiktok-marketing.html">Tiktok Marketing</a></li>
                                                 <li><a href="digital-strategy.html">Digital Strategy</a></li>
                                                        </ul>
                                                    </div>
                                                     <div class="col-lg-3">
                                                        <ul class="list-unstyled">
                                                        <h6 class="collatMn">Marketing Collateral</h6>
                                                        <!-- <li><a href="/brochure-and-flyer">Brochures & Flyers</a></li> -->
                                                        <li><a href="marketing-collateral.html">Print Collateral</a></li>
                                                        <li><a href="business-cards.html">Business Cards</a></li>
                                                     </ul> 
                                                     <ul class="list-unstyled">
                                                        <h6 class="collatMn">Domain & Hosting</h6>
        
                                                        <li><a href="domain-and-hosting.html">Domain & Hosting</a></li>
                                                    </ul> 
                                                    </div>
                                                 
                                                    <div class="col-lg-3">
                                                        <ul class="list-unstyled">
                                                    <h6 class="animateMn">Animation</h6>
                                                    <li><a href="3d-logo-animation.html">3d Logo Animation</a></li>
                                                        <li><a href="video-animation.html">Video Animation</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul class="list-unstyled">
                                                        <h6 class="labelMn">Packaging & Labels</h6>
                                                        <li><a href="packaging-label.html">Packaging Labels</a></li>
                                                        </ul>
                                                    </div>
                                                 <div class="col-lg-3">
                                                    <ul class="list-unstyled">
                                                    <h6 class="brandds">Merchandise</h6>
                                                    <li><a href="brand-merchandise.html">Brand Merchandise</a></li>
                                                    </ul>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <ul class="list-unstyled">
                                                        <h6 class=" artMn">Art and illustration</h6>
                                                        <li><a href="art-illustration.html">Art &amp; Illustration</a></li>
                                                        </ul>  
                                                    </div>
                                               
                                              
            
                    </div>
                </div>
            <!-- new dropdown Mfs -->
                    </li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="packages.html">Packages</a></li>
                    <li><a href="combo-packages.html">Combo Packages</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <!-- Menu Wrap -->
            <div class="menu-btns d-inline-flex">
                <a class="menu-btn rounded-circle" href="javascript:void(0);"><i class="fas fa-align-justify"></i></a>
            </div>
            <!-- Menu Btns -->
        </header>
        <!-- Header -->