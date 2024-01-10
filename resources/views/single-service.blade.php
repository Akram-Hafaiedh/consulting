@extends('layouts.app')

@section('content')


    <!-- Begin bread crumbs -->
    <nav class="bread-crumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="bread-crumbs-list">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="material-icons md-18">chevron_right</i>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                            <i class="material-icons md-18">chevron_right</i>
                        </li>
                        <li>Corporate Solutions</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav><!-- End bread crumbs -->

    <article class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading heading-center section-heading-animate">
                        <h1>Corporate Solutions</h1>
                    </div>
                    <div class="content">
                        <div class="item-bordered item-border-radius">
                            <img src="assets/img/subheader-corporate.png" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia
                            in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor
                            eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac
                            lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut
                            lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit
                            tortor eget felis porttitor volutpat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia
                            in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor
                            eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac
                            lectus.</p>
                        <h5>Key Features</h5>
                        <ul>
                            <li>High usability</li>
                            <li>Improved performance</li>
                            <li>Customizable interface</li>
                            <li>Crossplatform support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <section class="section section-bgc">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading heading-center section-heading-animate">
                        <div class="section-subheading">Liked the service?</div>
                        <h2>Order service</h2>
                    </div>
                    <form action="#!" method="post" class="order-form">
                        <!-- Begin hidden Field for send form -->
                        <input type="hidden" name="Subject" value="Order service">
                        <!-- End hidden Field for send form -->
                        <div class="row gutters-20 justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="order-name" class="form-field-label">Your Name</label>
                                    <input type="text" class="form-field-input" name="orderName" value=""
                                        autocomplete="off" id="order-name">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="order-phone" class="form-field-label">Your Phone</label>
                                    <input type="tel" class="form-field-input mask-phone" name="orderPhone"
                                        value="" autocomplete="off" id="order-phone">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12">
                                <div class="form-btn form-btn-wide">
                                    <button type="submit" class="btn btn-w240 ripple"><span>Order</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="row items">
                <header class="col-12">
                    <div class="section-heading heading-center">
                        <h1>Other Services</h1>
                    </div>
                </header>
                <div class="col-12 item">
                    <div class="row items">
                        <div class="col-md-6 col-xl-4 col-12 item">
                            <a href="single-service.html" class="iitem item-style iitem-hover">
                                <div class="iitem-icon">
                                    <i class="material-icons material-icons-outlined md-48">corporate_fare</i>
                                </div>
                                <div class="iitem-icon-bg">
                                    <i class="material-icons material-icons-outlined">corporate_fare</i>
                                </div>
                                <h2 class="iitem-heading item-heading-large">Corporate Solution</h2>
                                <div class="iitem-desc">We embrace holistic development and support for employees with the
                                    aim.</div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4 col-12 item">
                            <a href="single-service.html" class="iitem item-style iitem-hover">
                                <div class="iitem-icon">
                                    <i class="material-icons material-icons-outlined md-48">support_agent</i>
                                </div>
                                <div class="iitem-icon-bg">
                                    <i class="material-icons material-icons-outlined">support_agent</i>
                                </div>
                                <h2 class="iitem-heading item-heading-large">Call Center Solutions</h2>
                                <div class="iitem-desc">Take advantage of the experiential-learning built into many
                                    programs.</div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4 col-12 item">
                            <a href="single-service.html" class="iitem item-style iitem-hover">
                                <div class="iitem-icon">
                                    <i class="material-icons material-icons-outlined md-48">cloud_done</i>
                                </div>
                                <div class="iitem-icon-bg">
                                    <i class="material-icons material-icons-outlined">cloud_done</i>
                                </div>
                                <h2 class="iitem-heading item-heading-large">Cloud Development</h2>
                                <div class="iitem-desc">Through a unique combination of engineering, construction and
                                    design.</div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4 col-12 item">
                            <a href="single-service.html" class="iitem item-style iitem-hover">
                                <div class="iitem-icon">
                                    <i class="material-icons material-icons-outlined md-48">laptop_mac</i>
                                </div>
                                <div class="iitem-icon-bg">
                                    <i class="material-icons material-icons-outlined">laptop_mac</i>
                                </div>
                                <h2 class="iitem-heading item-heading-large">IOS/MacOS Apps</h2>
                                <div class="iitem-desc">You can work in labs on and off campus or even spend semesters
                                    overseas.</div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4 col-12 item">
                            <a href="single-service.html" class="iitem item-style iitem-hover">
                                <div class="iitem-icon">
                                    <i class="material-icons material-icons-outlined md-48">phone_android</i>
                                </div>
                                <div class="iitem-icon-bg">
                                    <i class="material-icons material-icons-outlined">phone_android</i>
                                </div>
                                <h2 class="iitem-heading item-heading-large">Android Applications</h2>
                                <div class="iitem-desc">We embrace holistic development and support for employees with the
                                    aim.</div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4 col-12 item">
                            <a href="single-service.html" class="iitem item-style iitem-hover">
                                <div class="iitem-icon">
                                    <i class="material-icons material-icons-outlined md-48">tv</i>
                                </div>
                                <div class="iitem-icon-bg">
                                    <i class="material-icons material-icons-outlined">tv</i>
                                </div>
                                <h2 class="iitem-heading item-heading-large">UI/UX Design</h2>
                                <div class="iitem-desc">Take advantage of the experiential-learning built into many
                                    programs.</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="bff">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bff-container">
                        <p>Get Full-Featured <br class="d-sm-none"> PathSoft Template</p>
                        <div class="btn-group justify-content-center justify-content-md-start">
                            <a href="https://www.templatemonster.com/website-templates/pathsoft-it-solutions-for-your-business-services-website-template-83414.html?utm_campaign=blog_site_KovalWeb&utm_source=KovalWeb&utm_medium=referral&aff=KovalWeb"
                                class="btn btn-border btn-with-icon btn-small ripple">
                                <span>HTML5</span>
                                <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                    <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                </svg>
                            </a>
                            <a href="https://www.templatemonster.com/wordpress-themes/pathsoft-it-solutions-for-your-business-services-wordpress-theme-99496.html?utm_campaign=blog_site_KovalWeb&utm_source=KovalWeb&utm_medium=referral&aff=KovalWeb"
                                class="btn btn-border btn-with-icon btn-small ripple">
                                <span>WordPress</span>
                                <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                    <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection