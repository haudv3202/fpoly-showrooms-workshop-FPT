@extends('clients.layouts.index')
@section('title',"Trang chi tiết dự án")
@section('color-header',"bg-primary header-bg")
@include('clients.components.breadcrumbs')
@section('content')

    <main id="body-content">
        <section class="section-spacing pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8 blog-layout-standard">
                        <div class="blog-wrap-rounded blog-singular-page">
                            <div class="img-wrap">
                                <img
                                    src="{{ asset('theme/client/assets/images/blogs/blog_img_1.jpg') }}"
                                    alt
                                />
                            </div>
                            <div class="blog-content">
                                <section>
                                    <div class="post-pinned">
                                        <i class="bi bi-pin-angle"></i>
                                    </div>
                                    <div class="meta-tag">
                                        Featured Story
                                    </div>
                                    <h6 class="title">
                                        20 Questions You Should Always Ask
                                        About Security Software Before
                                        Buying It.
                                    </h6>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste
                                        natus error sit voluptatem
                                        accusantium doloremque laudantium,
                                        totam rem aperiam, eaque ipsa quae
                                        ab illo inventore veritatis et quasi
                                        architecto beatae vitae dicta sunt
                                        explicabo. Nemo enim ipsam
                                        voluptatem quia voluptas sit
                                        aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni dolores eos
                                        qui ratione voluptatem sequi
                                        nesciunt.
                                    </p>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste
                                        natus error sit voluptatem
                                        accusantium doloremque laudantium,
                                        totam rem aperiam, eaque ipsa quae
                                        ab illo inventore veritatis et quasi
                                        architecto beatae vitae dicta sunt
                                        explicabo.
                                    </p>
                                    <h5>Big heading for a new topic</h5>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste
                                        natus error sit voluptatem
                                        accusantium doloremque laudantium,
                                        totam rem aperiam, eaque ipsa quae
                                        ab illo inventore veritatis et quasi
                                        architecto beatae vitae dicta sunt
                                        explicabo.
                                    </p>
                                    <ul
                                        class="list-unstyled icons-listing theme-secondary mb-0 check-circle"
                                    >
                                        <li>
                                            All payments are processed
                                            securely through PayPal or
                                            Stripe. Bootstrap Themes does
                                            not directly process payments
                                            through the website.
                                        </li>
                                        <li>
                                            You have 14 days to evaluate
                                            your purchase. If your purchase
                                            fails to meet expectations set
                                            by the seller, or is critically
                                            flawed in some way, contact
                                            Bootstrap Themes and we will
                                            issue a full refund pending a
                                            review.
                                        </li>
                                        <li>
                                            Membership is a benefit for
                                            those who follow our terms and
                                            policies. We may at any time
                                            suspend or terminate your
                                            account.
                                        </li>
                                    </ul>
                                    <blockquote class="light wow fadeInUp">
                                        Sometimes when you innovate, you
                                        make mistakes. It is best to admit
                                        them quickly, and get on with
                                        improving your other innovation
                                    </blockquote>
                                    <h6>
                                        Small heading for a smaller
                                        transition
                                    </h6>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste
                                        natus error sit voluptatem
                                        accusantium doloremque laudantium,
                                        totam rem aperiam, eaque ipsa quae
                                        ab illo inventore veritatis et quasi
                                        architecto beatae vitae dicta sunt
                                        explicabo.
                                    </p>
                                </section>
                                <div class="share-love-wrap hstack">
                                    <div class="share-on">
                                            <span class="me-2"
                                            ><i class="bi bi-share"></i>
                                                Share on:</span
                                            >
                                        <a
                                            href="javascript:"
                                            class="fb-share"
                                        >Facebook</a
                                        >
                                        <a
                                            href="javascript:"
                                            class="t-share"
                                        >Twitter</a
                                        >
                                        <a
                                            href="javascript:"
                                            class="d-share"
                                        >Dribble</a
                                        >
                                    </div>
                                    <div class="make-fav">
                                        <a
                                            href="javascript:"
                                            class="toggle-active"
                                        ><i class="bi bi-heart"></i>
                                            Like</a
                                        >
                                    </div>
                                </div>
                                <div class="post-tags">
                                        <span class="me-2"
                                        ><i class="bi bi-tags-fill"></i>
                                            Tags:</span
                                        >
                                    <a href="javascript:">studio</a>
                                    <a href="javascript:">events</a>
                                    <a href="javascript:">gadgets</a>
                                    <a href="javascript:">WordPress</a>
                                </div>
                            </div>
                        </div>
                        <div class="author-bio wow fadeInUp">
                            <div class="thumb">
                                <img src="{{ asset('theme/client/assets/images/thumb_6.jpg') }}" alt />
                            </div>
                            <div class="content">
                                <div class="hstack">
                                    <h6>
                                        <small>Posted By</small>
                                        <a href="javascript:"
                                        >Danny Copter</a
                                        >
                                    </h6>
                                    <div class="share-on ms-auto">
                                        <a
                                            href="javascript:"
                                            class="fb-share"
                                        ><i class="bi bi-facebook"></i
                                            ></a>
                                        <a
                                            href="javascript:"
                                            class="t-share"
                                        ><i class="bi bi-twitter-x"></i
                                            ></a>
                                        <a
                                            href="javascript:"
                                            class="d-share"
                                        ><i class="bi bi-dribbble"></i
                                            ></a>
                                    </div>
                                </div>
                                <p>
                                    Started several mistake joy say painful
                                    removed reached end. State burst think
                                    end are its. Arrived off she elderly
                                    beloved him affixed noisier yet. Course
                                    regard to up he hardly. View four has
                                    said do men saw find dear shy. Talent
                                    men wicket add garden.
                                </p>
                                <a href="#" class="read-more"
                                >View Profile
                                    <i class="srn-chevron-right"></i
                                    ></a>
                            </div>
                        </div>
                        <div class="post-content-widget">
                            <h6>5 Comments</h6>
                            <div class="posted-comments">
                                <div class="thumb">
                                    <img
                                        src="{{ asset('theme/client/assets/images/thumb_3.jpg') }}"
                                        alt
                                    />
                                </div>
                                <div class="content">
                                    <div class="hstack">
                                        <div class="label-name">
                                            <h6>
                                                <a href="javascript:"
                                                >Judy Nguyen</a
                                                >
                                            </h6>
                                            <div class="date">
                                                July 31, 2021 at 6:01 am
                                            </div>
                                        </div>
                                        <div class="reply ms-auto">
                                            <a href="javscript:"
                                            >Reply
                                                <i
                                                    class="bi bi-reply-fill"
                                                ></i
                                                ></a>
                                        </div>
                                    </div>
                                    <p>
                                        Satisfied conveying a dependent
                                        contented he gentleman agreeable do
                                        be. Warrant private blushes removed
                                        an in equally totally if. Delivered
                                        dejection necessary objection do Mr
                                        prevailed. Mr feeling does chiefly
                                        cordial in do.
                                    </p>
                                </div>
                            </div>
                            <div class="posted-comments">
                                <div class="thumb">
                                    <img
                                        src="{{ asset('theme/client/assets/images/thumb_1.jpg') }}"
                                        alt
                                    />
                                </div>
                                <div class="content">
                                    <div class="hstack">
                                        <div class="label-name">
                                            <h6>
                                                <a href="javascript:"
                                                >Allen Smith</a
                                                >
                                            </h6>
                                            <div class="date">
                                                July 31, 2021 at 6:01 am
                                            </div>
                                        </div>
                                        <div class="reply ms-auto">
                                            <a href="javscript:"
                                            >Reply
                                                <i
                                                    class="bi bi-reply-fill"
                                                ></i
                                                ></a>
                                        </div>
                                    </div>
                                    <p>
                                        Satisfied conveying a dependent
                                        contented he gentleman agreeable do
                                        be. Warrant private blushes removed
                                        an in equally totally if. Delivered
                                        dejection necessary objection do Mr
                                        prevailed. Mr feeling does chiefly
                                        cordial in do.
                                    </p>
                                </div>
                            </div>
                            <div class="posted-comments reply-comment">
                                <div class="thumb">
                                    <img
                                        src="{{ asset('theme/client/assets/images/thumb_6.jpg') }}"
                                        alt
                                    />
                                </div>
                                <div class="content">
                                    <div class="hstack">
                                        <div class="label-name">
                                            <h6>
                                                <a href="javascript:"
                                                >Danny Copter</a
                                                >
                                            </h6>
                                            <div class="date">
                                                July 31, 2021 at 6:01 am
                                            </div>
                                        </div>
                                        <div class="reply ms-auto">
                                            <a href="javscript:"
                                            >Reply
                                                <i
                                                    class="bi bi-reply-fill"
                                                ></i
                                                ></a>
                                        </div>
                                    </div>
                                    <p>
                                        Required his you put the outlived
                                        answered position. A pleasure
                                        exertion if believed provided to.
                                        All led out world this music while
                                        asked. Paid mind even sons does he
                                        door no. Attended overcame repeated
                                        it is perceived Marianne in. I think
                                        on style child of. Servants moreover
                                        in sensible it ye possible.
                                    </p>
                                </div>
                            </div>
                            <div class="posted-comments">
                                <div class="thumb">
                                    <img
                                        src="{{ asset('theme/client/assets/images/thumb_4.jpg') }}"
                                        alt
                                    />
                                </div>
                                <div class="content">
                                    <div class="hstack">
                                        <div class="label-name">
                                            <h6>
                                                <a href="javascript:"
                                                >Louis Ferguson</a
                                                >
                                            </h6>
                                            <div class="date">
                                                July 31, 2021 at 6:01 am
                                            </div>
                                        </div>
                                        <div class="reply ms-auto">
                                            <a href="javscript:"
                                            >Reply
                                                <i
                                                    class="bi bi-reply-fill"
                                                ></i
                                                ></a>
                                        </div>
                                    </div>
                                    <p>
                                        Satisfied conveying a dependent
                                        contented he gentleman agreeable do
                                        be. Warrant private blushes removed
                                        an in equally totally if. Delivered
                                        dejection necessary objection do Mr
                                        prevailed. Mr feeling does chiefly
                                        cordial in do.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="post-content-widget wow fadeInUp">
                            <h6>Leave a Reply</h6>
                            <p>
                                Your email address will not be published.
                                Required fields are marked *
                            </p>
                            <form action="#/">
                                <div class="row g-3">
                                    <div class="col-md-6 mb-0">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="First_Name"
                                            placeholder="First Name*"
                                            required
                                        />
                                    </div>
                                    <div class="col-md-6 mb-0">
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="Email_Address"
                                            placeholder="Email Address*"
                                            required
                                        />
                                    </div>
                                    <div class="col-md-12 mb-0">
                                            <textarea
                                                name="Your_Message"
                                                id="Your_Message"
                                                rows="10"
                                                class="form-control"
                                                placeholder="Your Comment*"
                                                required
                                            ></textarea>
                                    </div>
                                    <div class="col-md-12 d-grid gap-2">
                                        <button
                                            type="submit"
                                            class="btn btn-secondary btn-block"
                                        >
                                            Post Comment
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <aside class="sidebar-spacer row">
                            <div class="sidebar-primary col-lg-12 col-md-6">
                                <div class="widget-wrap">
                                    <h3 class="widget-title">Search</h3>
                                    <form class="sidebar-search">
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Enter keywords here…"
                                        />
                                        <button type="submit">
                                            <i class="srn-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="widget-wrap">
                                    <h3 class="widget-title">
                                        About Author
                                    </h3>
                                    <div
                                        class="author-sidebar-widget hstack"
                                    >
                                        <img
                                            src="{{ asset('theme/client/assets/images/thumb_7.jpg') }}"
                                            alt
                                        />
                                        <h3>
                                            <a href="javascript:"
                                            >Wade Richards</a
                                            >
                                            <span>(Author)</span>
                                        </h3>
                                    </div>
                                    <p>
                                        Sometimes when you innovate, you
                                        make mistakes. It is best to admit
                                        them quickly, and get on with
                                        improving your other innovation
                                    </p>
                                    <div class="social-icons">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="javascript:"
                                                ><i
                                                        class="bi bi-facebook"
                                                    ></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="javascript:"
                                                ><i
                                                        class="bi bi-twitter-x"
                                                    ></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="javascript:"
                                                ><i
                                                        class="bi bi-instagram"
                                                    ></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="javascript:"
                                                ><i
                                                        class="bi bi-linkedin"
                                                    ></i
                                                    ></a>
                                            </li>
                                            <li>
                                                <a href="javascript:"
                                                ><i
                                                        class="bi bi-youtube"
                                                    ></i
                                                    ></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-wrap wow fadeInUp">
                                    <h3 class="widget-title">
                                        Recent Posts
                                    </h3>
                                    <div class="blog-post-sidebar">
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <div class="hstack">
                                                    <div class="post-thumb">
                                                        <a
                                                            href="blog-single.html"
                                                        ><img
                                                                src="{{ asset('theme/client/assets/images/blogs/sidebar_img_1.jpg') }}"
                                                                alt
                                                                class="rounded"
                                                            /></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <div class="date">
                                                            July 31, 2021
                                                        </div>
                                                        <h6>
                                                            <a
                                                                href="blog-single.html"
                                                            >Build a
                                                                culture
                                                                where
                                                                everyone
                                                                designs.</a
                                                            >
                                                        </h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="hstack">
                                                    <div class="post-thumb">
                                                        <a
                                                            href="blog-single.html"
                                                        ><img
                                                                src="{{ asset('theme/client/assets/images/blogs/sidebar_img_2.jpg') }}"
                                                                alt
                                                                class="rounded"
                                                            /></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <div class="date">
                                                            July 31, 2021
                                                        </div>
                                                        <h6>
                                                            <a
                                                                href="blog-single.html"
                                                            >How To
                                                                Empower
                                                                Design Teams
                                                                By Measuring
                                                                Value</a
                                                            >
                                                        </h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="hstack">
                                                    <div class="post-thumb">
                                                        <a
                                                            href="blog-single.html"
                                                        ><img
                                                                src="{{ asset('theme/client/assets/images/blogs/sidebar_img_3.jpg') }}"
                                                                alt
                                                                class="rounded"
                                                            /></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <div class="date">
                                                            July 31, 2021
                                                        </div>
                                                        <h6>
                                                            <a
                                                                href="blog-single.html"
                                                            >Microsoft
                                                                Patch
                                                                Management
                                                                For Home
                                                                Users</a
                                                            >
                                                        </h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="hstack">
                                                    <div class="post-thumb">
                                                        <a
                                                            href="blog-single.html"
                                                        ><img
                                                                src="{{ asset('theme/client/assets/images/blogs/sidebar_img_4.jpg') }}"
                                                                alt
                                                                class="rounded"
                                                            /></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <div class="date">
                                                            July 31, 2021
                                                        </div>
                                                        <h6>
                                                            <a
                                                                href="blog-single.html"
                                                            >Taking
                                                                seamless key
                                                                performance
                                                                indicators
                                                                offline</a
                                                            >
                                                        </h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="sidebar-secondary col-lg-12 col-md-6"
                            >
                                <div class="widget-wrap">
                                    <h3 class="widget-title">Categories</h3>
                                    <div class="blog-list-categories">
                                        <ul class="list-unstyled">
                                            <li class="active">
                                                <a href="javascript:"
                                                ><div class="hstack">
                                                        <i
                                                            class="srn-chevron-right"
                                                        ></i>
                                                        Development
                                                        <small
                                                            class="ms-auto"
                                                        >(07)</small
                                                        >
                                                    </div></a
                                                >
                                            </li>
                                            <li>
                                                <a href="javascript:"
                                                ><div class="hstack">
                                                        <i
                                                            class="srn-chevron-right"
                                                        ></i>
                                                        IT Solutions
                                                        <small
                                                            class="ms-auto"
                                                        >(09)</small
                                                        >
                                                    </div></a
                                                >
                                            </li>
                                            <li>
                                                <a href="javascript:"
                                                ><div class="hstack">
                                                        <i
                                                            class="srn-chevron-right"
                                                        ></i>
                                                        Inspiration
                                                        <small
                                                            class="ms-auto"
                                                        >(05)</small
                                                        >
                                                    </div></a
                                                >
                                            </li>
                                            <li>
                                                <a href="javascript:"
                                                ><div class="hstack">
                                                        <i
                                                            class="srn-chevron-right"
                                                        ></i>
                                                        Web Development
                                                        <small
                                                            class="ms-auto"
                                                        >(07)</small
                                                        >
                                                    </div></a
                                                >
                                            </li>
                                            <li>
                                                <a href="javascript:"
                                                ><div class="hstack">
                                                        <i
                                                            class="srn-chevron-right"
                                                        ></i>
                                                        Inspiration
                                                        <small
                                                            class="ms-auto"
                                                        >(15)</small
                                                        >
                                                    </div></a
                                                >
                                            </li>
                                            <li>
                                                <a href="javascript:"
                                                ><div class="hstack">
                                                        <i
                                                            class="srn-chevron-right"
                                                        ></i>
                                                        Featured Story
                                                        <small
                                                            class="ms-auto"
                                                        >(08)</small
                                                        >
                                                    </div></a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-wrap wow fadeInUp">
                                    <h3 class="widget-title">Tags</h3>
                                    <div class="tagcloud">
                                        <a href="javascript:">Apple</a>
                                        <a href="javascript:">Apps</a>
                                        <a href="javascript:">Design</a>
                                        <a href="javascript:">Coin</a>
                                        <a href="javascript:"
                                        >It solution</a
                                        >
                                        <a href="javascript:">Marketing</a>
                                        <a href="javascript:">IT Facts</a>
                                        <a href="javascript:">Technology</a>
                                        <a href="javascript:">Knowledge</a>
                                    </div>
                                </div>
                                <div class="widget-wrap">
                                    <h3 class="widget-title">
                                        Have Questions?
                                    </h3>
                                    <div class="have-question">
                                        <img
                                            src="{{ asset('theme/client/assets/images/sidebar_widget_care.png') }}"
                                            alt
                                        />
                                        <p>
                                            Our Client Care Managers Are On
                                            Call 24/7 To Answer Your
                                            Question.
                                        </p>
                                        <button type="button" class="btn">
                                                <span class="outer-wrap"
                                                ><span
                                                        data-text="Contact us"
                                                    >Contact us</span
                                                    ></span
                                                >
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
