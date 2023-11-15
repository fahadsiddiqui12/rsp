<?php
    $siteurl = "http://mushidrsp.test/";
?>
<style>
    .review-sec {
        padding: 100px 0;
    }

    .review-sec .main-head {
        max-width: 60%;
        margin: auto;
    }

    .review-mn-testimonial {
        padding: 50px 30px;
        border: 2px solid rgb(0, 0, 0);
        border-radius: 15px;
        background-color: rgb(255, 255, 255);
        margin: 20px;
        min-height: 530px;
    }

    .review-mn-testimonial img {
        padding-bottom: 30px;
    }

    .review-mn-testimonial p {
        font-size: 18px;
        font-weight: 500;
        color: black;
        display: -webkit-box;
        -webkit-line-clamp: 8;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 170px;
    }

    .review-mn-testimonial span {
        font-size: 24px;
        font-weight: 800;
        display: block;
        padding-top: 30px;
    }

    .review-mn-testimonial strong {
        font-weight: 500;
        font-size: 16px;
    }

    .review-mn-testimonial strong.trust {
        color: #00b67a;

    }

    .review-mn-testimonial strong.google {
        color: #ee3364;
        background: transparent;
    }

    .review-inner .slick-dots li button {
        width: 15px;
        height: 15px;
        background: rgb(209, 209, 229);
        border-radius: 50%;
    }

    .review-inner .slick-dots li button:before {
        display: none;
    }

    .review-inner .slick-dots li.slick-active button {
        width: 30px;
        border-radius: 10px;
        background: #e60040;
    }



    .review-inner .slick-dots {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0px;
    }

    .rev-mn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 40px;
        padding-top: 40px;
    }

    .review-mn-testimonial a {
        text-decoration: none !important;
        color: black;
    }
    .review-inner.slick-slider .slick-dots li {
        margin: 2px;
    }
    section.review-sec .review-inner .slick-arrow {
        position: absolute;
        display: block;
        z-index: 11;
        opacity: 1;
        visibility: visible;
        left: 0px;
        background: #ed3369;
    }

    section.review-sec .review-inner .slick-arrow::before {
        color: white;
    }

    section.review-sec .review-inner .slick-arrow:hover {
        background: black;
    }

    section.review-sec .review-inner .slick-arrow.slick-arrow.slick-next {
        right: 0px;
        left:auto
    }
    @media (max-width: 991px) {
        .review-sec .container-fluid .row:nth-child(2) {
            margin-left: 0px;
        }

        .review-mn-testimonial img {
            padding-bottom: 15px;
            height: 35px;
        }
        .review-sec .main-head {
            max-width: 100%;
        }
        .review-sec {
            padding: 50px 0px;
        }

        .review-mn-testimonial {
            padding: 25px 10px;
            min-height: auto;
            margin: 5px;
        }

        .review-mn-testimonial span {
            padding-top: 10px;
            font-weight: 700;
            font-size: 22px;
        }

        .rev-mn img {
            max-width: 36%;
        }

        .review-mn-testimonial p {
            font-size: 14px;
        }
    }
</style>

<section class="review-sec">
    <div class="container-fluid">
        <div class="main-head text-center">
            <h2>Some More Reviews</h2>
            <p>Logo design journey of our delighted customers! Our clients share their remarkable experiences and
                the impact of our tailor-made logos on their brand success.</p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="review-inner">
                    <div>
                        <div class="review-mn-testimonial">
                            <a href="https://www.google.com/maps/contrib/109732687637802105103/reviews" target="_blank">
                                <img src="<?php echo $siteurl ?>lp-3/images/trust2.png" class="img-fluid" alt="">
                                <p>Exceptional Web Development Services

                                    I had the privilege of working with Mr. Johnny Stones on the redevelopment of my
                                    company's website
                                    and the experience was nothing short of exceptional. [Developer's Name]'s
                                    technical
                                    skills and
                                    knowledge in web development were evident in the sophisticated, user-friendly,
                                    and
                                    visually stunning
                                    website they created.

                                    Their ability to transform my vision into reality was impressive. They took the
                                    time to
                                    understand
                                    our company's needs, audience, and brand identity, and managed to seamlessly
                                    integrate
                                    these into
                                    our site's design.

                                    What stood out to me was their exceptional communication skills and
                                    professionalism.
                                    They kept me
                                    informed about the progress at each stage of the project, promptly responded to
                                    any
                                    inquiries, and
                                    delivered the project on time. They were also open to feedback and made any
                                    adjustments
                                    requested
                                    with precision and efficiency.

                                    I would highly recommend Johnny Stones to anyone seeking professional,
                                    high-quality, and
                                    reliable
                                    web development services. Their dedication, skill, and customer-oriented
                                    approach truly
                                    set them
                                    apart in the industry.</p>
                                <span>Lamar Rucker</span>
                                <strong class="google">Logomentary Customer</strong>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="review-mn-testimonial">
                            <a href="https://www.trustpilot.com/reviews/64c1cc78f72fb1ebb1b20801"  target="_blank">
                                <img src="<?php echo $siteurl ?>lp-3/images/trust1.png" class="img-fluid" alt="">
                                <p>Johnny Stones was an absolute pleasure to work with. He worked to get my desired
                                    graphic designer custom made to my exact liking. I highly encourage Johnny’s
                                    work ethic and ability to meet client expectations.
                                </p>
                                <span>
                                    navi Gill</span>
                                <strong class="trust">Logomentary Customer</strong>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="review-mn-testimonial">
                            <a href="https://www.google.com/maps/contrib/100000279703085633799/reviews"  target="_blank">
                                <img src="<?php echo $siteurl ?>lp-3/images/trust2.png" class="img-fluid" alt="">
                                <p>My partner and I worked with Johhny S with Logomentary and
                                    highly
                                    recommend his services. Johnny was available throughout the process and helped
                                    us create
                                    an amazing
                                    website for our business. We get compliments all the time on how great the
                                    website
                                    looks. Johnny was
                                    friendly, efficient, and guided us through. We now use his service to maintain
                                    the
                                    amazing website
                                    he created for us. Do not hesitate to use Logomentary. Excellent service!</p>
                                <span>Tour More Partners</span>
                                <strong class="google">Logomentary Customer</strong>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="review-mn-testimonial">
                            <a href="https://www.trustpilot.com/reviews/64bb0a3ae1296c32c2f6449b"  target="_blank">
                                <img src="<?php echo $siteurl ?>lp-3/images/trust1.png" class="img-fluid" alt="">
                                <p>Hello. I have been working with Johnny from logomentary, and he has been
                                    excellent. Every detail that I have given he has followed and did a superb job.
                                    I will be back again to work with him in the future.
                                </p>
                                <span>Shaunte Boyd</span>
                                <strong class="trust">Logomentary Customer</strong>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="review-mn-testimonial">
                            <a href="https://www.google.com/maps/contrib/104434274179113668376/reviews"  target="_blank">
                                <img src="<?php echo $siteurl ?>lp-3/images/trust2.png" class="img-fluid" alt="">
                                <p>Johnny was absolutely great to work with! He was very quick
                                    to respond,
                                    helpful, and extremely nice! The logo is amazing. They gave me multiple designs
                                    to
                                    choose from. I
                                    would highly recommend working with Johnny. awesome job with my vision and
                                    turned it
                                    into my brand
                                    logo.</p>
                                <span>Speedbug_ 901</span>
                                <strong class="google">Logomentary Customer</strong>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="review-mn-testimonial">
                            <a href="https://www.trustpilot.com/reviews/649a2086cc0c68dde2e42a50"  target="_blank">
                                <img src="<?php echo $siteurl ?>lp-3/images/trust1.png" class="img-fluid" alt="">
                                <p>I had a great experience getting exactly what I needed.
                                    As soon as I got on the website a chat box popped up asking if I needed any help
                                    which I did to help no what package would be best for me.
                                    I don’t have a artistic bone in my body and I was provided with multiple options
                                    to choose from with many different styles. From there going back and forth to
                                    make everything perfect with Kevin was a easy experience.
                                    I’ll definitely recommend.
                                </p>
                                <span>Eric Berry</span>
                                <strong class="trust">Logomentary Customer</strong>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="review-mn-testimonial">
                            <a href="https://www.google.com/maps/contrib/116920697237686478577/reviews"  target="_blank">
                                <img src="<?php echo $siteurl ?>lp-3/images/trust2.png" class="img-fluid" alt="">
                                <p>10/10 Johnny Stones was my project manager and i have nothing
                                    but good
                                    things to say. Incredible service, quick results at a quality you can be sure is
                                    worth
                                    every penny
                                    invested. He gave me his own opinions and really helped the process flow
                                    seamlessly.
                                    100% recommend
                                    for any of your design/development needs! You’re the G.O.A.t Johnny!</p>
                                <span>Skeet Willard</span>
                                <strong class="google">Logomentary Customer</strong>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="review-mn-testimonial">
                            <a href="https://www.trustpilot.com/reviews/64a6273d63f179c99d74e46e"  target="_blank">
                                <img src="<?php echo $siteurl ?>lp-3/images/trust1.png" class="img-fluid" alt="">
                                <p>I got exactly what I was looking for and didn't know I was looking for it. The
                                    logo has gotten tremendous response from everyone. I couldn't be more happy with
                                    the service and quality of the product I received.
                                </p>
                                <span>Jose Goncalves</span>
                                <strong class="trust">Logomentary Customer</strong>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="review-mn-testimonial">
                            <a href="https://www.google.com/maps/contrib/118031266676184176101/reviews"  target="_blank">
                                <img src="<?php echo $siteurl ?>lp-3/images/trust2.png" class="img-fluid" alt="">
                                <p>I had the privilege of working with Johnny this week. He is a
                                    very
                                    professional and super efficient logo designer. All I can say Is Wow! Wow about
                                    my
                                    outstanding
                                    finished logo with a quick 1 day turnaround. I absolutely loved it! Johnny
                                    perfectly
                                    captured and
                                    envisioned my submitted description of my logo and Brand with my dog as the
                                    mascot which
                                    turned out
                                    beautiful.</p>
                                <span>Terry Oneal</span>
                                <strong class="google">Logomentary Customer</strong>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="review-mn-testimonial">
                            <a href="https://www.trustpilot.com/users/60d24fc445d061001a0773b9"  target="_blank">
                                <img src="<?php echo $siteurl ?>lp-3/images/trust1.png" class="img-fluid" alt="">
                                <p>Johnny Stones & Logomentary took a logo concept from my tattoo and turned it into
                                    my brand image! Johnny helped me sign up and worked with me on the concept fees
                                    up into final approved and editing. Johnny is a credit to the company and made
                                    it a pleasure to do business with Logomentary. Fast, personable, quality service
                                    is not just the business model but exemplified through Johnny! I highly
                                    recommend this company and when it comes time for more logos I will be a repeat
                                    customer.
                                </p>
                                <span>Kevin Pelkey</span>
                                <strong class="trust">Logomentary Customer</strong>
                            </a>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                 <div class="rev-mn">
                    <a href="https://www.trustpilot.com/review/logomentary.com" target="_blank">
                    <img src="<?php echo $siteurl ?>lp-3/images/rev-1.png" class="img-fluid" alt="">
                </a>
                <a href="https://www.google.com/maps/place/Logomentary+-+Best+Logo+Design+Company+in+USA/@34.1846197,-118.3114833,17z/data=!4m8!3m7!1s0x80c295b650ed394b:0xe56d8b9e721e09e7!8m2!3d34.1846153!4d-118.3089084!9m1!1b1!16s%2Fg%2F11t6pzklfc?entry=ttu" target="_blank">
                    <img src="<?php echo $siteurl ?>lp-3/images/rev-2.png" class="img-fluid" alt="">
                </a>
                </div>
            </div>
        </div>
    </div>
</section>