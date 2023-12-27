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
                    <?php include ($_SERVER['DOCUMENT_ROOT']."/includes/nav.php");?>
                </div>
            </div>
        </div>


<!-- Sticky Header -->