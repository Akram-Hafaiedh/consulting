@extends('layouts.app')


@section('content')
<div class="main-inner">

    <nav class="bread-crumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="bread-crumbs-list">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="material-icons md-18">chevron_right</i>
                        </li>
                        <li>News</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav><!-- End bread crumbs -->

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading heading-center section-heading-animate">
                        <div class="section-subheading">most interesting articles</div>
                        <h1>News</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="news-post.html" class="news-item-img el">
                            <img data-src="assets/img/news-img-1.jpg" class="lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">07/01/2021</div>
                            <h2 class="news-item-heading item-heading">
                                <a href="news-post.html" title="Benefits Of Async/Await">Benefits Of
                                    Async/Await</a>
                            </h2>
                            <div class="news-item-desc">
                                <p>Asynchronous functions are a good and bad thing in JavaScript.</p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="news-post.html" class="news-item-img el">
                            <img data-src="assets/img/news-img-2.jpg" class="lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">05/01/2021</div>
                            <h2 class="news-item-heading item-heading">
                                <a href="news-post.html" title="Key Considerations Of IPaaS">Key Considerations
                                    Of IPaaS</a>
                            </h2>
                            <div class="news-item-desc">
                                <p>Digital transformation requires cloud appropriate adoption</p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="news-post.html" class="news-item-img el">
                            <img data-src="assets/img/news-img-3.jpg" class="lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">01/01/2021</div>
                            <h2 class="news-item-heading item-heading">
                                <a href="news-post.html" title="Hibernate Query Language">Hibernate Query
                                    Language</a>
                            </h2>
                            <div class="news-item-desc">
                                <p>In this tutorial, we will discuss the Hibernate Query Language. </p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="news-post.html" class="news-item-img el">
                            <img data-src="assets/img/news-img-1.jpg" class="lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">07/01/2021</div>
                            <h2 class="news-item-heading item-heading">
                                <a href="news-post.html" title="Benefits Of Async/Await">Benefits Of
                                    Async/Await</a>
                            </h2>
                            <div class="news-item-desc">
                                <p>Asynchronous functions are a good and bad thing in JavaScript.</p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="news-post.html" class="news-item-img el">
                            <img data-src="assets/img/news-img-2.jpg" class="lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">05/01/2021</div>
                            <h2 class="news-item-heading item-heading">
                                <a href="news-post.html" title="Key Considerations Of IPaaS">Key Considerations
                                    Of IPaaS</a>
                            </h2>
                            <div class="news-item-desc">
                                <p>Digital transformation requires cloud appropriate adoption</p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="news-post.html" class="news-item-img el">
                            <img data-src="assets/img/news-img-3.jpg" class="lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">01/01/2021</div>
                            <h2 class="news-item-heading item-heading">
                                <a href="news-post.html" title="Hibernate Query Language">Hibernate Query
                                    Language</a>
                            </h2>
                            <div class="news-item-desc">
                                <p>In this tutorial, we will discuss the Hibernate Query Language. </p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="news-post.html" class="news-item-img el">
                            <img data-src="assets/img/news-img-1.jpg" class="lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">07/01/2021</div>
                            <h2 class="news-item-heading item-heading">
                                <a href="news-post.html" title="Benefits Of Async/Await">Benefits Of
                                    Async/Await</a>
                            </h2>
                            <div class="news-item-desc">
                                <p>Asynchronous functions are a good and bad thing in JavaScript.</p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="news-post.html" class="news-item-img el">
                            <img data-src="assets/img/news-img-2.jpg" class="lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">05/01/2021</div>
                            <h2 class="news-item-heading item-heading">
                                <a href="news-post.html" title="Key Considerations Of IPaaS">Key Considerations
                                    Of IPaaS</a>
                            </h2>
                            <div class="news-item-desc">
                                <p>Digital transformation requires cloud appropriate adoption</p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <!-- Begin news item -->
                    <article class="news-item item-style">
                        <a href="news-post.html" class="news-item-img el">
                            <img data-src="assets/img/news-img-3.jpg" class="lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </a>
                        <div class="news-item-info">
                            <div class="news-item-date">01/01/2021</div>
                            <h2 class="news-item-heading item-heading">
                                <a href="news-post.html" title="Hibernate Query Language">Hibernate Query
                                    Language</a>
                            </h2>
                            <div class="news-item-desc">
                                <p>In this tutorial, we will discuss the Hibernate Query Language. </p>
                            </div>
                        </div>
                    </article><!-- End news item -->
                </div>
                <div class="col-12">
                    <!-- Begin pagination -->
                    <nav class="pagination">
                        <ul class="pagination-list">
                            <li class="pagination-item-arrow pagination-item-arrow-prev pagination-item-disabled">
                                <a href="#!"><i class="material-icons md-24">chevron_left</i></a>
                            </li>
                            <li class="active"><a href="#!">1</a></li>
                            <li><a href="#!">2</a></li>
                            <li><a href="#!">3</a></li>
                            <li><a href="#!">4</a></li>
                            <li class="pagination-item-arrow pagination-item-arrow-next"><a href="#!"><i
                                        class="material-icons md-24">chevron_right</i></a></li>
                        </ul>
                    </nav><!-- End pagination -->
                </div>
            </div>
        </div>
    </div>

</div>

@endsection