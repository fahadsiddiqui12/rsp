<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ($_SERVER['DOCUMENT_ROOT']."/includes/meta.php");?>
    <?php include ($_SERVER['DOCUMENT_ROOT']."/includes/variables.php");?>
</head>

<body>

   
        
        
        <!-- <div id="preloader"></div> -->


        <?php include ($_SERVER['DOCUMENT_ROOT']."/includes/header-top.php");?>
        <?php include ($_SERVER['DOCUMENT_ROOT']."/includes/header.php");?>
        <?php include ($_SERVER['DOCUMENT_ROOT']."/includes/header-sticky.php");?>

        <section class="packages-bann">
            <div class="w-100 dark-layer3 opc85 position-relative">
                <div class="fixed-bg" ></div>
                    
                    <div class="pack-port">
                        <img src="<?php echo $siteurl; ?>assets/images/price-center.png" class="img-fluid desktop" alt="">
                        <img src="<?php echo $siteurl; ?>assets/images/price-mobiler.png" class="mobile" alt="">
                    </div>
            </div>
        </section>  
        

        <?php include ($_SERVER['DOCUMENT_ROOT']."/templates/pricing-sec.php");?>    

        <?php include ($_SERVER['DOCUMENT_ROOT']."/templates/combo-sec.php");?>

        <section class="sincer-sec price-sincer mb-70">
            <div class="an-custom-container">
                <div class="row justify-content-center">
                    <div class="col-md-12 justify-content-center">
                        <div class="sincer-mn">
                            <h2>We love to help you,<span> Sincerely.</span></h2>
                            <h4>Still deciding what would meet your need?</h4>
                            <p>Give us a call for <span>Free Consultation</span></p>
                            <div class="lbn-btns">
                                <a href="tel:+18174053278" class="thm-btn mini-btn brd-rd3">+1 (817) 405-3278</a>
                                <a href="javascript:;" class="thm-btn mini-btn brd-rd3 open_chat_btn">Chat Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include ($_SERVER['DOCUMENT_ROOT']."/templates/video-review.php");?>


        <?php include ($_SERVER['DOCUMENT_ROOT']."/templates/review-sec.php");?> 

                <?php include ($_SERVER['DOCUMENT_ROOT']."/templates/aff-logos.php");?>

                <?php include ($_SERVER['DOCUMENT_ROOT']."/includes/footer.php");?>

                <?php include ($_SERVER['DOCUMENT_ROOT']."/includes/footer-bottom.php");?>
                
            </main>
            <!-- Main Wrapper -->
        
        <?php include ($_SERVER['DOCUMENT_ROOT']."/includes/scripts.php");?>
            
</body>

</html>