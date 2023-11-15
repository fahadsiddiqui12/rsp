 <?php
    $siteurl = "http://mushidrsp.test/";
?>
<style>
             .review-mn {
                padding: 100px 0px;
            }
                    .in-review h3 {
                font-size: 48px;
                color: black;
            }

            .in-review .star span {
                font-size: 30px;
            }

            .in-review p {
                font-size: 20px;
                color: black;
                font-weight: 700;
                padding-top: 20px;
            }
            .rev-vid img ,
            .rev-vid iframe{
                border-radius: 20px;

            }
            .rev-vid {
                margin: 10px;
                position: relative;
                text-align: center;
            }
            .in-review .star {
                padding-top: 40px;
            }
            .fill-min {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 30px;
                border-top: 1px solid #eeeeee;
                padding: 30px 0px;
                border-bottom: 1px solid #eeeeee;
            }

            .fill-min .star strong {
                display: block;
                font-size: 18px;
                font-weight: 700;
                font-family: 'Muli';
                padding-top: 10px;
            }
            .fill-min .star span{
                font-size: 20px;
            }
            .fill-min p {
                max-width: 70%;
                color: black;
                font-weight: 500;
            }
            .fill-min i {
                font-size: 40px;
                color: #ed3363;
            }


                 .rev-vid a {
                position: absolute;
                top: 0;
                left: 0;
                display: grid;
                place-items: center;
                bottom: 0;
                right: 0;
            }
            .fancybox-iframe, .fancybox-video{
                height: 500px !important;
            }

            .fancybox-iframe {

                width: 500px !important;
                transform: translate(-50%, -50%) !important;
            }
            .rev-vid a .youtube-btn {
                border-radius: 0px;
            }
                     @media only screen and (max-width: 1600px) { 
                 .rev-vid iframe,
                       .rev-vid .client-img{
                height: 383px !important;
                         object-fit: cover;
            }
                 }
                 @media only screen and (max-width: 1445px)  {
                   .rev-vid iframe ,
                   .rev-vid .client-img{
                   height: 380px !important;
                   object-fit: cover;
                   }
                 
                 }
                    @media only screen and (max-width: 1366px) {
                   
                        .serv-innerr ul li a {
                            font-size: 15px;
                        }
                        .in-review h3 {
                font-size: 38px;

            }


            .in-review p {
                font-size: 16px;
               
                padding-top: 10px;
            }
            .review-mn {
                padding: 60px 0px;
            }
                    }

                    @media only screen and (max-width: 991px) {
                        /* .serverr-main .main-head {
                            text-align: center;
                        } */

                        .all-serv {
                            background: #1e1e1e !important;
                            min-height: 400px !important;
                        }
                        .serverr-main {
                padding: 40px 0px 0px;
            }
            .in-review h3 {
                font-size: 30px;
            }

            .review-mn {
                padding: 30px 0px;
            }
            .fill-min .star span {
                font-size: 14px;
            }
                  .rev-vid iframe, .rev-vid .client-img {
                height: 330px !important;
                    
            }
                      .rev-vid .client-img {
                width: 100%;
                object-fit: cover;
            }
                    }
                    
                    @media only screen and (max-width: 767px) {

            .fill-min {
                gap: 10px;
                padding: 20px 0px;
            }
            .fill-min p {
                max-width: 60%;
                font-size: 14px;
            }
                      .rev-vid .client-img {
                width: 100%;
                object-fit: cover;
                height: auto!important;
            }
                    }
                    @media only screen and (max-width: 575px) {
                        .fill-min {
                flex-direction: column;
            }
            .fill-min p {
                max-width: 100%;
                font-size: 14px;
            }
                      .fancybox-iframe {
                width: 280px !important;
            }
                    }
</style>


<section class="update-review review-mn">
    <div class="an-custom-container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="in-review">
                    <h3>
                        Hear from the witness of our reliable services
                    </h3>
                    <p>Our clients have ranked us 4.8 on average from 37,509 design contest ratings.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="rev-vid">
                    <img src="<?php echo $siteurl ?>page-content/uploads/2023/08/5qXqeDC7du9Q8GenHePzBAJLdw0hnSLiV7jQQjkk.webp" class="img-fluid" alt="">
                    <a data-fancybox="reviews" href="https://www.youtube.com/embed/QZ8FL-OiF1Q?" tabindex="0">
                        <img src="<?php echo $siteurl ?>assets/images/review/youtube.webp" class="img-fluid youtube-btn" alt="">
                    </a>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">

                            <div class="rev-vid">
                                <img src="<?php echo $siteurl ?>page-content/uploads/2023/09/sNJF1IBi2SOqS0nR5KD3POySTl7hyt2d7qsRKjbe.webp" class="img-fluid" alt="">
                                <a data-fancybox="reviews" href="https://www.youtube.com/embed/4yHnkhe9rrA?" tabindex="0" >
                              
                        <img src="<?php echo $siteurl ?>assets/images/review/youtube.webp" class="img-fluid youtube-btn" alt="">
                            </a>
                            </div>
                    </div>
            <div class="col-lg-4 col-md-6">

                            <div class="rev-vid">
                                <img src="<?php echo $siteurl ?>page-content/uploads/2023/09/GoReweQpSkelaf7OVxgTbipGZWIj0cyGvkJK1t2P.webp" class="img-fluid" alt="">
                                <a data-fancybox="reviews" href="https://www.youtube.com/embed/DndXEQ9SWGU?" tabindex="0" >
                              
                        <img src="<?php echo $siteurl ?>assets/images/review/youtube.webp" class="img-fluid youtube-btn" alt="">
                            </a>
                            </div>
                    </div>
                <div class=" col-lg-12">
                    <div class="lbn-btns" style="text-align: center;
                 padding: 50px 0 0;
                    text-transform: uppercase;">
                                <a href="testimonials.html" class="thm-btn mini-btn brd-rd3">View More Reviews</a>
                        </div>
                </div>
            </div>
        </div>
</section>