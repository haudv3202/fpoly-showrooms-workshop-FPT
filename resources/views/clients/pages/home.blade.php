@extends('clients.layouts.index')
@push('styles')
    <link rel="stylesheet" href="{{ asset('theme/client/assets/css/home-default.css') }}">
@endpush
@section('title',"Trang chủ")
@include('clients.components.banner')
@section('content')
    <main id="body-content">
        <section class="section-spacing logo-carousel">
            <div class="container">
                <div class="owl-carousel owl-theme top-right-arrow" id="client-home-default">
                    <div class="item">
                        <div class="img-partner"><img src="{{ asset('theme/client/assets/images/partner/img-client1.png') }}" alt></div>
                    </div>
                    <div class="item">
                        <div class="img-partner"><img src="{{ asset('theme/client/assets/images/partner/img-client2.png') }}" alt></div>
                    </div>
                    <div class="item">
                        <div class="img-partner"><img src="{{ asset('theme/client/assets/images/partner/img-client3.png') }}" alt></div>
                    </div>
                    <div class="item">
                        <div class="img-partner"><img src="{{ asset('theme/client/assets/images/partner/img-client4.png') }}" alt></div>
                    </div>
                    <div class="item">
                        <div class="img-partner"><img src="{{ asset('theme/client/assets/images/partner/img-client5.png') }}" alt></div>
                    </div>
                    <div class="item">
                        <div class="img-partner"><img src="{{ asset('theme/client/assets/images/partner/img-client6.png') }}" alt></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-spacing home-ideas-wrap">
            <div class="container pos-rel">
                <div class="square-top"><img src="{{ asset('theme/client/assets/images/square_large.svg') }}" alt></div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="section-title text-start mb-0"><span>Why Chose Us?</span>
                            <h2 class="wow">Turn Your Amazing <strong>Ideas Into Reality</strong></h2>
                            <ul class="list-unstyled icons-listing theme-primary check">
                                <li>Machine learning enabled projections</li>
                                <li>Visitor mouse and click tracking</li>
                                <li>Automated revenue suggestions</li>
                            </ul><a href="our-services.html" class="btn btn-default btn-rounded mt-3"><span
                                    class="outer-wrap"><span data-text="View All Services">View All
                                        Services</span></span></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="icon-style-top">
                            <div class="icon"><i class="srn-icon-design-creativity"></i></div>
                            <div class="text">
                                <h6>Design & Creativity</h6>
                                <p>We use the latest technologies it voluptatem accusantium do loremque laudantium.</p>
                                <div class="arrow-icon"><a href="service-single.html"><i
                                            class="srn-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 spacer-30 d-none d-md-block d-lg-block d-xl-none d-sm-none"></div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="icon-style-top">
                            <div class="icon"><i class="srn-icon-digital-marketing"></i></div>
                            <div class="text">
                                <h6>Digital Marketing</h6>
                                <p>We use the latest technologies it voluptatem accusantium do loremque laudantium.</p>
                                <div class="arrow-icon"><a href="service-single.html"><i
                                            class="srn-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="icon-style-top">
                            <div class="icon"><i class="srn-icon-technology-innovation"></i></div>
                            <div class="text">
                                <h6>Technology Innovation</h6>
                                <p>We use the latest technologies it voluptatem accusantium do loremque laudantium.</p>
                                <div class="arrow-icon"><a href="service-single.html"><i
                                            class="srn-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
                        <p class="text-center wow pulse" data-wow-delay="0.5s">Let’s Come Up With a <strong
                                class="txt-primary">Start Free Trial 30-Day Money Back Guarantee</strong> For New
                            Purchases&ZeroWidthSpace;.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-spacing bg-light-blue section-padding home-default-video pb-0">
            <div class="container">
                <div class="row pos-rel">
                    <div class="col-lg-5 mb-0">
                        <div class="section-title text-start"><span>The work we do willingly</span>
                            <h2 class="wow">Inspiration comes only <strong>during work.</strong></h2>
                            <p>This letter expresses our sincere gratitude for the excellent work that your company has
                                done. I would like to note the high professionalism of the entire team, the ability to
                                work with the customer.</p>
                        </div>
                        <div class="mb-3">
                            <div class="progress-wrap">
                                <h6>Project delivered on time</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="90"><span>90%</span></div>
                                </div>
                            </div>
                            <div class="progress-wrap">
                                <h6>Availability</h6>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="70"><span>70%</span></div>
                                </div>
                            </div>
                        </div><a href="about-us.html" class="btn btn-secondary"><span class="outer-wrap"><span
                                    data-text="Read More">Read More</span></span></a>
                    </div>
                    <div class="col-lg-7 mt-5 mt-lg-0">
                        <div class="video-padding">
                            <div class="section-title text-start"><span>Achievement</span>
                                <h2 class="wow">Products successfully launced <strong>in the previous 12 months</strong>
                                </h2>
                            </div>
                        </div>
                        <div class="video-bg-off wow fadeInUp"><img src="{{ asset('theme/client/assets/images/video_bg_off.png') }}" alt>
                            <div class="video-play-btn"><a class="popup-video"
                                                           href="https://player.vimeo.com/video/7449107" target="_blank" role="button"><i
                                        class="bi bi-play"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-spacing">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-7 wow slideInLeft"><img src="{{ asset('theme/client/assets/images/tabbing_img.png') }}" alt></div>
                    <div class="col-lg-6 col-xl-5 col-sm-12">
                        <div class="section-title text-start mb-4"><span>Planning on Developing a Product</span>
                            <h2 class="wow">Popular Features that your <strong>Business Needs</strong></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                                accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor
                                sit amet, consectetur adipiscing.</p>
                        </div>
                        <ul class="list-unstyled icons-listing theme-primary mb-4 w-half check">
                            <li>Intregrations</li>
                            <li>Business Strategy</li>
                            <li>Business Setup</li>
                            <li>Easy Documentation</li>
                        </ul><a href="our-services.html" class="btn btn-secondary"><span class="outer-wrap"><span
                                    data-text="View All Features">View All Features</span></span></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="txt-white section-padding pattern_abstract_bg pos-rel">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 mb-0">
                        <div class="section-title text-start light"><span>Get To Know Us</span>
                            <h2 class="wow">We Working For You To <strong>Build Your Business Fast</strong></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                                accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor
                                sit amet, consectetur adipiscing.</p>
                        </div>
                        <div class="hstack gap-4 mb-5 home-stats">
                            <div class="tick-icon-big">
                                <div class="icon-space"><i class="bi bi-check2"></i></div>
                                <div class="text-space fun-fact">
                                    <h2><span class="timer" data-to="99" data-speed="2000">99.7</span>%</h2>
                                    <div>Satisfaction rate</div>
                                    <div class="stars"><i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i
                                            class="bi bi-star-fill"></i></div>
                                </div>
                            </div>
                            <div class="tick-icon-big">
                                <div class="icon-space"><i class="bi bi-check2"></i></div>
                                <div class="text-space fun-fact">
                                    <h2>$<span class="timer" data-to="9" data-speed="2000"></span>M</h2>
                                    <div>Global revenue</div>
                                    <div class="stars"><i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i
                                            class="bi bi-star-fill"></i></div>
                                </div>
                            </div>
                        </div><a href="about-us.html" class="btn btn-outline-light"><span class="outer-wrap"><span
                                    data-text="Read More">Read More</span></span></a>
                    </div>
                    <div class="stats-img-abstract">&nbsp;</div>
                    <div class="stats-img wow slideInRight"><img src="{{ asset('theme/client/assets/images/stats_img.png') }}" class alt></div>
                </div>
            </div>
        </section>
        <section class="section-spacing bg-light-blue section-padding home-case-study">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-5 mb-0">
                        <div class="section-title text-start"><span>Our Case Studies</span>
                            <h2 class="mb-0 wow">Our work we do and <strong>The client we help</strong></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 ms-auto mb-4 mb-lg-0">
                        <div class="section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna
                            lectus, mattis non accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem
                            ipsum dolor sit amet, consectetur adipiscing.</div>
                    </div>
                </div>
                <div class="row">
                    @forelse($projects as $project)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="portfolio-gallery-item">
                            @php
                                $image = \App\Models\images::where([['is_active',0],['type',1],['projects_id',$project->id]])->first();
                                $domains = \App\Models\project_domains::with(['domain' => function($qr){
                                  $qr->withTrashed();
                                }])->where('projects_id',$project->id)->get();
                            @endphp
                            <div class="item-img">
                                <div class="portfolio-img-gallery"><a href="{{ \Illuminate\Support\Facades\Storage::url('images/projects/avatar/' .$image->image) }}"
                                                                      class="portfolio-img-gallery" title="Title Come here"><img
                                            src="{{ \Illuminate\Support\Facades\Storage::url('images/projects/avatar/' .$image->image) }}" class="rounded" alt></a>
                                    <div class="img-over"><i class="bi bi-plus-lg"></i></div>
                                </div><a href="{{ route('single',$project->id) }}" class="arrow"><i class="srn-arrow-right"></i></a>
                            </div>
                            <div class="item-content">
                                <h6><a href="{{ route('single',$project->id) }}">{{ $project->name }}</a></h6>
                                <div class="sub-head">
                                    @forelse($domains as $key => $valueDomain)
                                        <a href="{{ route('projects') }}?domain={{  to_slug($valueDomain->domain->name) }}" class="sub-head link-redirect">{{ $valueDomain->domain->name }}</a>{{ $loop->last ? '' : ' & ' }}
                                    @empty
                                    @endforelse
                                    </div>
{{--                                <p>We use the latest technologies it voluptatem accusantium We do this by discerning the--}}
{{--                                    ships</p>--}}
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
        <section class="section-spacing">
            <div class="container pos-rel">
                <div class="row align-items-center">
                    <div class="col-xl-7 mx-auto col-lg-8 mb-0">
                        <div class="home-default-faqs-counter-wrap">
                            <div class="text-center"><img src="{{ asset('theme/client/assets/images/home-default-faqs.png') }}" alt></div>
                            <div class="home-default-faqs-counter">
                                <div class="hstack gap-3">
                                    <div class="counter-text fun-fact">
                                        <h2><span class="timer" data-to="12" data-speed="2000">12</span><sub>K</sub>
                                        </h2>
                                        <div class="text">Support Request resolved</div>
                                    </div>
                                    <div class="vr"></div>
                                    <div class="counter-text fun-fact">
                                        <h2><span class="timer" data-to="97" data-speed="2000">97</span>.8<sub>%</sub>
                                        </h2>
                                        <div class="text">Customer satisfaction</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto col-xl-5 col-lg-8 mt-5 mt-xl-0">
                        <div class="section-title text-start"><span>Get Your Answer Fast</span>
                            <h2 class="wow">Everything you need to <strong>Know to work better</strong></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                                accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor
                                sit amet, consectetur adipiscing.</p>
                        </div>
                        <div class="theme-accordian">
                            <div class="accordion accordion-flush theme-accordian" id="accordionFlushExampleSimple">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingOne"><button
                                            class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-gap-collapseOne" aria-expanded="false"
                                            aria-controls="flush-gap-collapseOne">First and foremost, you never want to
                                            go?</button></h2>
                                    <div id="flush-gap-collapseOne" class="accordion-collapse collapse show"
                                         aria-labelledby="flush-gap-headingOne"
                                         data-bs-parent="#accordionFlushExampleSimple">
                                        <div class="accordion-body">Ned ut perspiciatis unde omnis iste natus error sit
                                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque Arya.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingTwo"><button
                                            class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-gap-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-gap-collapseTwo">How can i customized this
                                            theme?</button></h2>
                                    <div id="flush-gap-collapseTwo" class="accordion-collapse collapse"
                                         aria-labelledby="flush-gap-headingTwo"
                                         data-bs-parent="#accordionFlushExampleSimple">
                                        <div class="accordion-body">Ned ut perspiciatis unde omnis iste natus error sit
                                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque Arya.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingThree"><button
                                            class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-gap-collapseThree" aria-expanded="false"
                                            aria-controls="flush-gap-collapseThree">Can I cancel or change my
                                            order?</button></h2>
                                    <div id="flush-gap-collapseThree" class="accordion-collapse collapse"
                                         aria-labelledby="flush-gap-headingThree"
                                         data-bs-parent="#accordionFlushExampleSimple">
                                        <div class="accordion-body">Ned ut perspiciatis unde omnis iste natus error sit
                                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque Arya.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-gap-headingFour"><button
                                            class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-gap-collapseFour" aria-expanded="false"
                                            aria-controls="flush-gap-collapseFour">How can I exchange an item bought
                                            online?</button></h2>
                                    <div id="flush-gap-collapseFour" class="accordion-collapse collapse"
                                         aria-labelledby="flush-gap-headingFour"
                                         data-bs-parent="#accordionFlushExampleSimple">
                                        <div class="accordion-body">Ned ut perspiciatis unde omnis iste natus error sit
                                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque Arya.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-spacing">
            <div class="container">
                <div class="home-default-testimonials">
                    <div class="row">
                        <div class="col-md-7 col-lg-5 col-xxl-5 text-start">
                            <div class="section-title light pos-rel">
                                <div class="svg-wrap wow fadeInDown"><svg xmlns="http://www.w3.org/2000/svg"
                                                                          viewBox="0 0 512 512">
                                        <path
                                            d="M437 75a254 254 0 0 0-362 0 254 254 0 0 0-39 312L1 492a15 15 0 0 0 19 19l105-35a255 255 0 0 0 387-220c0-68-27-133-75-181zM256 482c-43 0-84-12-121-35a15 15 0 0 0-12-2l-84 28 28-84c1-4 1-9-2-12A225 225 0 0 1 256 30a226 226 0 0 1 0 452z" />
                                        <path
                                            d="M346 161h-40c-19 0-35 16-35 35v40c0 19 16 35 35 35h43c-7 29-32 50-63 50a15 15 0 0 0 0 30c52 0 95-43 95-95v-60c0-19-16-35-35-35zm-45 75v-40c0-3 2-5 5-5h40c3 0 5 2 5 5v45h-45c-3 0-5-2-5-5zm-95-75h-40c-19 0-35 16-35 35v40c0 19 16 35 35 35h43c-7 29-32 50-63 50a15 15 0 0 0 0 30c52 0 95-43 95-95v-60c0-19-16-35-35-35zm-45 75v-40c0-3 2-5 5-5h40c3 0 5 2 5 5v45h-45c-3 0-5-2-5-5z" />
                                    </svg></div><span>Real User Reviews</span>
                                <h2 class="wow">What our client’s are <strong>Saying about us</strong></h2>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme top-right-arrow" id="home-default-testimonials">
                        <div class="item">
                            <div class="testimonial-single-left">
                                <hr class="divider-secondary">
                                <h6>My business is growing faster and I’m very happy with that</h6>
                                <p>Thank you for your excellent work. No one could hear us as well as you and make our
                                    wishes come true so beautifully and beautifully. Starting from the very first day,
                                    the work was inspired and gave positive results.</p>
                                <div class="testimonial-box">
                                    <div class="thumb-img"><img src="{{ asset('theme/client/assets/images/thumb_1.jpg') }}" alt></div>
                                    <div class="content">
                                        <h6 class="name">Rider Smith</h6>
                                        <div class="post">Marketing Envato Pty Ltd.</div>
                                        <div class="rating"><i class="bi bi-star-fill"></i> <i
                                                class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i
                                                class="bi bi-star-fill"></i> <i class="bi bi-star"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single-left">
                                <hr class="divider-secondary">
                                <h6>My business is growing faster and I’m very happy with that</h6>
                                <p>Thank you for your excellent work. No one could hear us as well as you and make our
                                    wishes come true so beautifully and beautifully. Starting from the very first day,
                                    the work was inspired and gave positive results.</p>
                                <div class="testimonial-box">
                                    <div class="thumb-img"><img src="{{ asset('theme/client/assets/images/thumb_2.jpg') }}" alt></div>
                                    <div class="content">
                                        <h6 class="name">Kevin Martin</h6>
                                        <div class="post">Marketing Consultant</div>
                                        <div class="rating"><i class="bi bi-star-fill"></i> <i
                                                class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i
                                                class="bi bi-star-fill"></i> <i class="bi bi-star"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single-left">
                                <hr class="divider-secondary">
                                <h6>My business is growing faster and I’m very happy with that</h6>
                                <p>Thank you for your excellent work. No one could hear us as well as you and make our
                                    wishes come true so beautifully and beautifully. Starting from the very first day,
                                    the work was inspired and gave positive results.</p>
                                <div class="testimonial-box">
                                    <div class="thumb-img"><img src="{{ asset('theme/client/assets/images/thumb_3.jpg') }}" alt></div>
                                    <div class="content">
                                        <h6 class="name">Sarah Albert</h6>
                                        <div class="post">Senior Advisor</div>
                                        <div class="rating"><i class="bi bi-star-fill"></i> <i
                                                class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i
                                                class="bi bi-star-fill"></i> <i class="bi bi-star"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-single-left">
                                <hr class="divider-secondary">
                                <h6>My business is growing faster and I’m very happy with that</h6>
                                <p>Thank you for your excellent work. No one could hear us as well as you and make our
                                    wishes come true so beautifully and beautifully. Starting from the very first day,
                                    the work was inspired and gave positive results.</p>
                                <div class="testimonial-box">
                                    <div class="thumb-img"><img src="{{ asset('theme/client/assets/images/thumb_4.jpg') }}" alt></div>
                                    <div class="content">
                                        <h6 class="name">David Cooper</h6>
                                        <div class="post">Freelance Consultant</div>
                                        <div class="rating"><i class="bi bi-star-fill"></i> <i
                                                class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i
                                                class="bi bi-star-fill"></i> <i class="bi bi-star"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="faqs-bg section-spacing home-default-abstract pt-5">
            <div class="container pos-rel">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="home-services-imgs"><img src="{{ asset('theme/client/assets/images/home-default-img-1.png') }}" alt> <img
                                src="{{ asset('theme/client/assets/images/home-default') }}-img-2.png" class="off-pattern" alt></div>
                    </div>
                    <div class="col-xl-7 col-lg-6 text-start">
                        <div class="section-title"><span>Need Help With Our Services</span>
                            <h2 class="wow">Are you looking for <strong>our services or want to try it for
                                    free?</strong></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna lectus, mattis non
                                accumsan in, tempor dictum neque. In hac habitasse platea dictumst. Lorem ipsum dolor
                                sit amet, consectetur adipiscing.</p>
                        </div>
                        <div class="btn-set wow fadeInUp"><a href="javascript:" class="btn btn-primary"
                                                             data-trigger="#signup"><span class="outer-wrap"><span data-text="Try for free">Try for
                                        free</span></span></a> <a href="contact.html" class="btn btn-secondary"><span
                                    class="outer-wrap"><span data-text="Learn More">Learn More</span></span></a></div>
                    </div>
                </div>
                <div class="img-abstract">&nbsp;</div>
            </div>
        </section>
    </main>
@endsection
