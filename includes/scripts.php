<?php
    $siteurl = "http://mushidrsp.test/";
?>
<!-- Package Modal -->
            <div class="modal fade popup_package_model" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="popup_form">
                            <button type="button" class="close_popup" data-dismiss="modal" aria-label="Close"><i
                                    class="fas fa-times"></i></button>
                            <small class="pkg_name">Logo & Identity</small>
                            <h3 class="title pkg_title"><span id="pkg_title">Newbie</span> - <span class="pkg_price">$49</span>
                            </h3>
                            <form class="leadform lfcta smm-checks" data-source="package"
                                data-fid="xQB9i3Du1wt4xVcEMg8f29hnul9uhjkCW1dZqdfOMa">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_field">
                                            <input type="text" name="name" class="c_field" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_field">
                                            <input type="email" class="c_field" name="email" placeholder="Your Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_field">
                                            <input type="tel" name="phone" class="c_field" placeholder="Your Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_field">
                                            <textarea class="c_field" name="message" rows="5"
                                                placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check mt-0 mb-0 pl-0">
                                            <input class="form-check-input" type="hidden"  name="receive_newsletter"  value="1" id="flexCheckDefault2">
                                    <!--       <label class="form-check-label" for="flexCheckDefault2">
                                                To receive our weekly Newsletter/SMS and offers check here. You can unsubscribe
                                                at any time.
                                            </label>-->
        
                                        </div>
                
                                    </div>
            
                                    <div class="col-lg-4">
                                        <button type="submit" class="c_btn btn_green lfbtn">Submit</button>
                                    </div>
                            
                                    <div class="col-lg-8">
                                        <p class="success_msg lfmsg d-none">Your form has been submitted</p>
                                    </div>
                                    <div class="col-lg-12">
                                         <p class="firm_para">By submitting this form you consent to receive occasional SMS messages for updates and promotions. Reply STOP to unsubscribe.</p>
                                        <input type="hidden" id="get_pkg_data" name="package">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
        
            <div id="myModal" class="modal fade contact_popup" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="popup_form">
                            <button type="button" class="close_popup" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="fas fa-times"></i></button>
                            <h3 class="title">Get In Touch</h3>
                            <form class="leadform lfcta" data-source="popup"
                                data-fid="6Lq2WjvHIDLWJgjYaNGBSIE198ebJlhSjCHfBDAi">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_field">
                                            <input type="text" name="name" class="c_field" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_field">
                                            <input type="email" class="c_field" name="email" placeholder="Your Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_field">
                                            <input type="text" name="phone" class="c_field" placeholder="Your Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_field">
                                            <textarea class="c_field" name="message" rows="5"
                                                placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 coloum-wrap">
        
                            <div class="info__item">
                            
                            
                            </div>
                            </div>
                                                        <div class="col-lg-4">
                                                            <button type="submit" class="c_btn btn_green lfbtn">Submit</button>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <p class="success_msg lfmsg d-none">Your form has been submitted</p>
                                                        </div>
                            <input type="hidden" class="searched_domains" id=""  name="searched_domain" >
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
            </div>
        
        
        
        
            <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script src="<?php echo $siteurl;?>/assets/js/jquery.min5e1f.js?v=2"></script>
            <script src="<?php echo $siteurl;?>/assets/js/popper.min.js"></script>
            <script src="<?php echo $siteurl;?>/assets/js/bootstrap.min.js"></script>
            <script src="<?php echo $siteurl;?>/assets/js/owl.carousel.min.js"></script>
            <script src="<?php echo $siteurl;?>/assets/js/jquery.fancybox.min.js"></script>
        <script src="<?php echo $siteurl;?>/assets/js/perfect-scrollbar.min.js"></script>

    <script>
        function patchScrollBlockingListeners() {
        let supportsPassive = false;
        const x = document.createElement("x");
        x.addEventListener("cut", () => 1, {
            get passive() { supportsPassive = true; return !!1 }
        });
        x.remove();
        if (supportsPassive) {
            const originalFn = EventTarget.prototype.addEventListener;
            EventTarget.prototype.addEventListener = function(...args) {
            if (
                ['scroll', 'touchmove', 'touchstart'].includes(args[0]) &&
                (typeof args[2] !== 'object' || args[2].passive === undefined)
            ) {
                args[2] = {
                ...(typeof args[2] === 'object' ? args[2] : {}),
                passive: false
                };
            }
        originalFn.call(this, ...args);

            }
        }
        }
        patchScrollBlockingListeners();
        jQuery.event.special.touchstart = {
            setup: function( _, ns, handle ){
                this.addEventListener("touchstart", handle, { passive: true });
            }
            };
    </script>
        <!--<script>
        jQuery.event.special.touchstart = {
            setup: function( _, ns, handle ) {
                this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
            }
        };
        jQuery.event.special.touchmove = {
            setup: function( _, ns, handle ) {
                this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
            }
        };
        jQuery.event.special.wheel = {
            setup: function( _, ns, handle ){
                this.addEventListener("wheel", handle, { passive: true });
            }
        };
        jQuery.event.special.mousewheel = {
            setup: function( _, ns, handle ){
                this.addEventListener("mousewheel", handle, { passive: true });
            }
        };
        
        </script>-->
        <!--<script type="text/javascript" src="https://unpkg.com/default-passive-events"></script>-->
            <script src="<?php echo $siteurl;?>/assets/js/slick.min.js"></script>
        <script async src="../app.logomentary.com/js/main.js"></script>
            <script src="<?php echo $siteurl;?>/assets/js/jquery.lazyload.min.js"></script>
            <script src="<?php echo $siteurl;?>/assets/js/jquery.lazy.plugins.min.js"></script>
            <script src="<?php echo $siteurl;?>/assets/js/fliper.js"></script>
            <script src="<?php echo $siteurl;?>/assets/js/custom-scripts.js"></script>
<script>
        $('.review-inner').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            arrows: true,
            infinite: true,
            slidesToShow: 3.8,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1366,
                    settings: {
                        slidesToShow: 3,

                    }
                },
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                        rows: 1,


                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                        rows: 1,


                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        arrows: true,
                        dots: false,
                        centerMode: true,
                        centerPadding: '30px',
                        adaptiveHeight: true,
                    }
                }

            ]
        });
    </script>
<script>
    $('.price-box3 .form-check input').click(function () {
        var getid = $(this).parent('.form-check').attr('data-id')
        var getprice = $(this).parent('.form-check').attr('data-price')
        $(this).parents('.price-box3').find('.pkg_link').attr('data-id', getid)
        $(this).parents('.price-box3').find('.pkg_link').attr('data-price', getprice)
        $(this).parents('.price-box3').find('.price-head3>h3 span').html(getprice)
    })

    $(function () {
  var $anchors = $('.banner-slides img');

  (function _loop(idx) {
    $anchors.removeClass('active').eq(idx).addClass('active');
    setTimeout(function () {
      _loop((idx + 1) % $anchors.length);
    }, 1500);
  }(0));
});
  
    $(function () {
  var $anchors = $('.home-banner h1 span');

  (function _loop(idx) {
    $anchors.removeClass('active').eq(idx).addClass('active');
    setTimeout(function () {
      _loop((idx + 1) % $anchors.length);
    }, 1500);
  }(0));
});
  
  
  
   

jQuery.fn.extend({
    renameAttr: function (e, t, a) {
        var o;
        return this.each(function () {
            o = jQuery.attr(this, e), jQuery.attr(this, t, o), jQuery.removeAttr(this, e), !1 !== a && jQuery.removeData(this, e.replace("data-", ""))
        })
      }
})  
setTimeout(function() { 
        $(".banner-slides img").renameAttr("custom-data-src", "src");
  $('.back-banner').remove();
    }, 10000);
  
  $(document).ready(function () {
    var width = $(window).width();
    if (width < 991) {
        $(".back-banner").remove();
        $(".banner-slides").remove();
    }

});
  
     $('.smm-addon').on('click',function(){
                                            var $this = $(this);
                                            var checked = $this.prop('checked');
                                            var addon_id = $this.data('addon');
                                            var datapricing = $(this).parents('.price-body3').find('.open_package_model').attr('data-price');
                                                datapricing = datapricing.substring(1);
                                                datapricing = parseInt(datapricing);
                                            var packagePrice = parseInt($this.val())+datapricing;

                                            if(checked){
                                                $(".smm-checks").append("<input type='hidden' id='smm-addon-" + addon_id + "' name='addons[]' value='"+ addon_id +"'/>");
                                                $(this).parents('.price-box3').find('h3>span').text("$"+packagePrice) 
                                                $(this).parents('.price-body3').find('.pkg_link').attr('data-price', '$'+packagePrice)
                                              
                                            }else{
                                                var getinputval = datapricing - $(this).val()  

                                                $(".smm-checks").find("#smm-addon-"+addon_id).remove();
                                                $(this).parents('.price-box3').find('h3>span').text("$"+getinputval) 
                                                $(this).parents('.price-body3').find('.pkg_link').attr('data-price', '$'+getinputval)
                                            }


                                   }); 


</script>

<style>
    .pdf-views iframe {
        height: 80vh;
        width: 100%;
    }
    .price-body3>ul li>a {
        font-weight: 800;
    }
</style>
<!-- pdf modals -->

    <div class="modal fade pdf-one  pdf-check" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="pdf-views">
                            <iframe src="assets/images/new-logo/logo-1.pdf" frameborder="0"></iframe>
                        </div>
                    </div>
                    </div>
                </div>
          </div>
        </div>
      </div>

    <div class="modal fade pdf-two  pdf-check" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="pdf-views">
                            <iframe src="assets/images/new-logo/logo-2.pdf" frameborder="0"></iframe>
                        </div>
                    </div>
                    </div>
                </div>
          </div>
        </div>
      </div>

    <div class="modal fade pdf-three  pdf-check" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="pdf-views">
                            <iframe src="assets/images/new-logo/logo-3.pdf" frameborder="0"></iframe>
                        </div>
                    </div>
                    </div>
                </div>
          </div>
        </div>
      </div>

    <div class="modal fade pdf-four  pdf-check" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="pdf-views">
                            <iframe src="assets/images/new-logo/logo-4.pdf" frameborder="0"></iframe>
                        </div>
                    </div>
                    </div>
                </div>
          </div>
        </div>
      </div>


<script>
        //=== logom-slider Carousel ===//
        $('.logom-slider').slick({
            slidesToShow: 3,
            dots: false,
            arrows: false,
            fade: false,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 1445,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 770,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
  
        $(document).ready(function(){

          $('.contactus_pops').click(function(){
            $('.contact_popup').modal("show")


          })  
        })
        </script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"822aaa3f3f86d1d4","b":1,"version":"2023.10.0","token":"fd857fd005624fda9f22264efbfa2a85"}' crossorigin="anonymous"></script>