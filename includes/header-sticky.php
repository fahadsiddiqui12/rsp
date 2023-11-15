<?php
    $siteurl = "http://mushidrsp.test/";
?>
 <!-- Search Wrap -->
        <div class="sticky-header w-100 position-fixed">
            <?php include ($_SERVER['DOCUMENT_ROOT']."/includes/header-top.php");?>
            <div class="an-custom-container">
                <div class="row">
                    <div class="logo">
                        <h1 class="mb-0">
                            <a href="/" title="Home"><img class="img-fluid"
                                    src="<?php echo $siteurl ?>/assets/images/logo-dark.webp" alt="Logo"
                                    srcset="<?php echo $siteurl ?>/assets/images/logo-dark.webp"></a>
                        </h1>
                    </div>
                    <nav class="menu-wrap2">
                        <ul class="mb-0 list-unstyled w-100">
                            <li><a href="/">Home</a></li>
                            
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);" title="">Services</a>
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
                                        <li><a href="seo-marketing.html" >Search Engine Optimization </a></li>
                                        <li><a href="social-media-marketing.html" >Social Media Marketing</a></li>
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
                            </li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="packages.html">Packages</a></li>
              <li><a href="combo-packages.html">Combo Packages</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
<style>
  header.style1 .logo a>img:nth-child(2) {display: block!important;}
                    header.style1 .logo a>img:nth-child(1) {display: none;}
                    .home-banner {padding-top: 190px;
                      background: #ffeef2;
                      }
                    .home-banner h1 {font-size: 80px;}
                    .home-banner h1 span {display: none;position: relative;background: #ffeef2;}
                    .home-banner ul li {list-style: none;font-size: 23px;display: inline-block;padding: 0px 15px;color: black;font-weight: 500;}
                    .home-banner ul {padding-left: 100px;margin-bottom: 50px;}
                    .banner-slides img {
                        width: 100%;
                        position: absolute;
                        left: 0px;
                        top: 0px;
                        transition: 0.5s;
                        opacity: 0;
                        visibility: hidden;
                        max-width: 1470px;
                        max-height: 775px;
                        height: 100%;
                        aspect-ratio: 250 / 130;
                    }
                      .portlp-inner img {
                        width: 100%;
                        height: 100%;
                        aspect-ratio: 370 / 207;
                    }
                    .banner-slides {position: relative;}
                    .banner-slides img:nth-child(1) {position: relative;}
                    .banner-slides img.active {opacity: 1;visibility: visible;}
                    .home-banner h1 span.active {display: inline-block;/* width: 0%; *//* overflow: hidden; *//* white-space: nowrap; *//* animation: bannertext 0.5s linear; */}
                    .home-banner h1 span.active::before {content: "";position: absolute;width: 100%;height: 100%;right: 0px;top: 0px;background: #ffeef2;transition:0.5s;animation: bannertext 0.5s linear;animation-fill-mode: forwards;}
                      
                        .portfolio-slider .item img{
                        height: auto !important;
                        object-fit: unset !important; 
                      }
                    @keyframes bannertext{
                        0%{
                            width: 100%;  
                        }
                        100%{
                            width: 0%;
                        }
                    }
                       .seris-mn h5 {
                        display: inline-block;
                    }
                    .srv-box1.style2 {
                        padding: 30px;
                        border: 1px solid black;
                        border-radius: 0px;
                        margin-bottom: 0px;
                        position: relative;
                    }

                    .icons-sec .row>div {
                        margin-bottom: 30px;
                    }

                    .srv-box1.style2 .srv-info1>p {
                        padding: 15px;
                      position: relative;
                    }

                    .srv-box1.style2 .srv-info1>h3 {
                        font-size: 22px;
                      position: relative;
                    }

                    .srv-box1.style2:hover {
                        background: black;
                        color: white;
                    }

                    .srv-box1.style2:hover p, .srv-box1.style2:hover h3 {
                        color: white;
                    }

                    .icons-sec {
                        padding-bottom: 70px;
                        background: #ffeef2;
                        position: relative;
                    }
                    .srv-box1.style2 span {width: 60px;height: 60px;position: absolute;background: #ee3364;border-radius: 100%;display: flex;align-items: center;justify-content: center;right: 10px;top: 10px;opacity: 0;}

                    .srv-box1.style2 span img {
                      filter: brightness(0);
                      height: auto;
                      width: 34px;
                      flex: 0 0 33px;
                      margin: 0px;
                       height: 36px;
                        object-fit: contain;
                      aspect-ratio: 48 / 56;
                      }

                    .srv-box1.style2:hover span {opacity: 1;}
                    .home-banner h1 b {display: inline-block;padding: 20px;}
                              .main-nav ul li a {
                        color: #000!important;
                    }
                      .icons-sec .servr-brnd {
                        display: block !important;
                       background: transparent;
                    }

                    .icons-sec .servr-brnd span {
                          position: relative;
                        opacity: 1;
                    }

                    .icons-sec .servr-brnd:before {
                        content: '';
                        position: absolute;
                        background: #00000066;
                        width: 100%;
                        height: 100%;
                        top: 0;
                        right: 0;
                        opacity: 0;
                    }

                    .icons-sec .servr-brnd:hover:before {
                        opacity: 1;
                    }
                    .icons-sec .web-brnd:before{
                            background: url(page-content/uploads/2023/06/mgNTH287S1SEdXQb1IMJHdUlQKG4enGpcdPOOuQ0.webp) no-repeat;
                        background-size: cover;
                    }
                    .icons-sec .mnn-brnd:before{
                        background: url(page-content/uploads/2023/06/vq2VFtLWuh2oHYorPdNidqXfTfTPjbugHVForuAp.webp) no-repeat;
                        background-size: cover;
                    }
                    .icons-sec .content-brnd:before{
                            background: url(page-content/uploads/2023/06/mYBkaO0HSDrOSBqpGLCdhqcEhJTrxbr63xzFj1vC.webp) no-repeat;
                        background-size: cover;
                    }
                    .icons-sec .anim-brnd:before{
                            background: url(page-content/uploads/2023/06/h7LIE5IBxyNQUH8cuV1foOcMPjrmnKtCCChYL037.webp) no-repeat;
                        background-size: cover;
                    }
                    .icons-sec .embr-brnd:before{
                            background: url(page-content/uploads/2023/06/NqBOu6FlLcg46sikrshikLfZBSIVYgAZm0xK9oWu.webp) no-repeat;
                        background-size: cover;
                    }
                    .icons-sec .doman-brnd:before{
                            background: url(page-content/uploads/2023/06/pIWguQcORZcjgkt91rSbAJ9ynPZklW9UvZWGG8Q2.webp) no-repeat;
                        background-size: cover;
                    }
                    .rev-vid a>img.youtube-btn {
                        width: 55px;
                        height: 37px;
                        object-fit: cover;
                        aspect-ratio: 53 / 37;
                    }
                    .logo a img {
                        width: 200px;
                      aspect-ratio: 200/43;
                    }
                      .back-banner img {
                        width: 100%;
                        height: 100%;
                        aspect-ratio: 245/129;
                    }
                      
                    @media(max-width:1445px){
                    .srv-box1.style2 .srv-info1>p {
                        padding: 0;
                    }
                        .srv-box1.style2 span {
                            display: flex;
                        margin-bottom: 20px;
                    }
                    .srv-box1.style2 {
                        padding: 15px;
                    }

                    .srv-box1.style2 .mt-15 {
                        margin-top: 0px;
                    }

                    .srv-box1.style2 .srv-info1>p {
                        font-size: 14px;
                    }
                     
                    .home-banner h1 {
                        font-size: 60px;
                    }

                    .icons-sec {
                        padding-top: 50px;
                    }

                    .icons-sec::before {
                        top: -60%;
                    }
                    }
                    @media(max-width:991px){
                    .icons-sec::before {
                        display: none;
                    }
                    .home-banner {
                        padding-bottom: 0px;
                    }

                    header.style1 .logo a>img:nth-child(2) {
                        display: none!important;
                    }
                    .home-banner h1 {
                        font-size: 40px;
                    }
                    .home-banner ul li {
                        font-size: 18px;
                    }
                    .home-banner ul {
                        padding-left: 0px;
                        margin-bottom: 20px;
                    }
                    .home-banner h1 b {
                        display: none;
                    }

                    .icons-sec {
                        padding-bottom: 40px;
                    }
                        .banner-slides ,
                       .back-banner {
                        display: none;
                    }
                    .tab-content>.tab-pane ul#myTab {
                        gap: 14px;
                    }
                    }
                    @media(max-width:767px){
                    .home-banner h1 {
                        font-size: 28px;
                    }
                        .home-banner ul li {
                        padding: 0px 5px;
                    }
                    }

                    @media(max-width:575px){
                    .home-banner h1 {
                        font-size: 24px;
                    }
                    .home-banner ul li {
                        font-size: 14px;
                    }
                    }
                      /* old home css end */
                      /* combo css start */
                    .update-combo-sec {
                        background: url(assets/images/combo-package/update-ban.webp) no-repeat;
                        background-size: cover;
                        padding: 90px 0px;
                    }
                      .review-mn{
                        padding-bottom: 0px !important;
                      }

                    .inner-combb h5 {
                        font-size: 24px;
                        font-weight: 700;
                        color: white;
                        text-transform: uppercase;
                    }
                    .inner-combb img{
                        margin-bottom: 20px;
                    }
                    .inner-combb p {
                        font-size: 18px;
                        font-weight: 500;
                        color: white;
                        padding-bottom: 40px;
                    }
                    .inner-combb ul h6 {
                        color: white;
                        font-size: 18px;
                    }

                    .inner-combb ul li {
                        color: white;
                        display: flex;
                        align-items: baseline;
                        margin-bottom: 5px;
                        font-size: 16px;
                        font-weight: 700;
                    }

                    .inner-combb ul li img {
                        flex: 0 0 15px;
                        margin-right: 10px;
                    }
                    .inner-combb .valueadded {
                        padding-top: 40px;
                    }

                    .inner-combb .Websitess {
                        padding-top: 10px;
                    }
                    .inner-chevr {
                        border: 1px solid #ffd200;
                        display: flex;
                        align-items: center;
                        padding: 30px 40px;
                        margin-bottom: -12px;
                    }

                    .inner-chevr h3 {
                        font-size: 40px;
                        color: white;
                        text-transform: uppercase;
                        font-weight: 800;
                    }

                    .inner-chevr h3 span {
                        font-size: 30px;
                        color: #ffd200;
                        font-weight: 700;
                        display: block;
                    }
                    .pricee-cher strong {
                        color: white;
                        font-size: 48px;
                        font-weight: 900;
                        text-decoration: line-through;
                       
                    }
                    .pricee-cher .cut-price{
                        display: flex;
                        align-items: baseline;
                        text-align: end;
                        justify-content: end;
                        position: relative;
                    }

                    .pricee-cher .cut-price small {
                        font-size: 24px;
                        font-weight: 800;
                        color: white;
                    }

                    .inner-combb .lbn-btns .open_package_model {
                        background: #ffd200;
                        color: black;
                    }

                    .inner-combb .lbn-btns a {
                        width: 250px;
                        min-height: 60px;
                        background: #ffd200;
                        color: black;
                        font-size: 18px;
                        font-weight: 700;
                        font-style: italic;
                        border-radius: 40px;
                    }

                    .inner-combb .lbn-btns .open_chat_btn {
                        background: #ee3364;
                        color: white;
                        border-color: #ee3364;
                    }
                    .contct-inf {
                        display: flex;
                        align-items: center;
                        gap: 20px;
                        color: white;
                        padding-top: 40px;
                    }
                    .contct-inf a {
                        font-size: 30px;
                        font-weight: 600;
                        font-family: 'Montserrat';
                    }

                    .inner-combb .lbn-btns {
                        display: flex;
                        align-items: center;
                        gap: 20px;
                    }

                    .contct-inf a:hover {
                        color: #ee3364;
                    }
                    .portfolio-slider ,
                    .slider1,
                    .portlp-slide {
                        visibility: hidden;
                    }

                    .portfolio-slider.slick-initialized,
                    .slider1.slick-initialized,
                    .portlp-slide.slick-initialized{
                        visibility: visible;
                    }
                    .rev-vid>img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }


                    @media only screen and (max-width: 1750px) {

                        .inner-chevr h3 span {
                        font-size: 25px;
                    }
                    .inner-chevr h3 {
                        font-size: 32px;
                     
                    }
                    .pricee-cher img {
                        max-width: 70%;
                    }
                    .contct-inf a {
                        font-size: 26px;

                    }

                    }
                    @media only screen and (max-width: 1600px) {

                        .pricee-cher strong {
                        font-size: 40px;
                     
                    }

                    .inner-combb h5 {
                        font-size: 20px;
                    }

                    }
                    @media only screen and (max-width: 1445px) {

                        .pricee-cher strong {
                        font-size: 30px;
                    }

                    .inner-chevr {
                        padding: 30px 20px;
                      
                    }
                    .inner-chevr h3 {
                        font-size: 28px;
                    }
                    .inner-chevr h3 span {
                        font-size: 20px;
                    }
                    .pricee-cher img {
                        max-width: 80%;
                    }
                    .inner-chevr h3 {
                        font-size: 25px;
                    }
                    .contct-inf a {
                        font-size: 20px;
                    }
                    }
                    @media only screen and (max-width: 1366px) {
                        .inner-combb h5 {
                        font-size: 17px;
                    }
                    .inner-combb p {
                        font-size: 16px;
                        padding-bottom: 20px;
                    }
                    .inner-combb ul li {
                        margin-bottom: 5px;
                        font-size: 14px;
                        line-height: inherit;
                    }

                    }
                    @media only screen and (max-width: 1199px) {}
                    @media only screen and (max-width: 991px) {

                        .inner-chevr {
                       
                        justify-content: space-between;
                    }
                    .contct-inf {

                        padding-top: 20px;
                        padding-bottom: 20px;
                        justify-content: center;
                    }
                    .inner-combb .lbn-btns {

                        justify-content: center;}

                        .update-combo-sec {
                      
                        padding: 60px 0px;
                    }
                    .inner-combb ul h6 {
                     font-size: 16px;
                        text-align: initial;
                    }
                    .inner-combb {
                        text-align: center;
                    }
                    .pricee-cher .cut-price small {
                        font-size: 18px;
                      
                    }
                    .pricee-cher strong {
                        font-size: 20px;
                    }
                    .pricee-cher {
                        text-align: end;
                    }
                    .inner-chevr {
                        padding: 20px 20px;
                    }
                    .inner-combb .valueadded {
                        padding-top: 0px;
                    }
                    .inner-combb .Websitess {
                        padding-top: 0px;
                    }
                      .update-combo-sec .row {
                        flex-direction: column-reverse;
                    }

                    .sd-chevron-inner {
                        padding-bottom: 30px;
                    }
                      .price-sd {
                        display: none !important;
                      }

                    }
                    @media only screen and (max-width: 767px) {
                        .inner-chevr h3 span {
                        font-size: 18px;
                    }
                    .inner-chevr h3 {
                        font-size: 20px;
                    }
                    .inner-combb p {
                        font-size: 14px;
                      
                    }
                    .inner-combb h5 {
                        font-size: 14px;
                    }
                    .contct-inf {

                        gap: 10px;
                      
                    }
                    .inner-combb .lbn-btns {

                        gap: 10px;
                    }
                    .update-combo-sec {
                        padding: 40px 0px;
                    }
                    }
                    @media only screen and (max-width: 575px) {
                        .inner-combb .lbn-btns ,
                        .contct-inf {

                        flex-direction: column;
                    }
                    .inner-combb .lbn-btns a {
                       width: 100%;
                    }
                    .inner-chevr h3 span {
                        font-size: 14px;
                    }
                    .inner-chevr h3 {
                        font-size: 16px;
                    }
                    .pricee-cher strong {
                        font-size: 16px;
                    }
                    .pricee-cher .cut-price small {
                        font-size: 12px;
                    }




                    }

                      /* combo css end */
   </style>

<!-- Sticky Header -->