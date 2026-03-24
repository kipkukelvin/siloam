@extends('partials.layouts')
@section('title', 'News and Updates')
@section('content')
    <section class="container my-5">
        <div class="row justify-content-center">

                        <div class="col-lg-10 mb-3">

                <div class="card border-0 shadow-sm p-4">

                    <h2 class="text-center hf mb-4">
                        Guidance and Counselling Session at Siloam College
                    </h2>

                    <img src="{{ asset('assets/Gallery/handson.jpg') }}" class="img-fluid rounded mb-3"
                        alt="Clinical Training Session">

                    <p class="text-muted small text-center">
                        The school administration and students during a guidance and counselling session at Silaom College.
                    </p>

                    <p>
                        Siloam College recently hosted a comprehensive guidance and counselling session led by the Dean of Students.
                    </p>
                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                    quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                    nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                    justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                    Vivamus elementum semper nisi.</p>

                    <div class="text-left text-muted mt-4 small">
                        <span>March 19, 2026</span> |

                        <button id="likeBtn" class="btn">
                            <i class="fa fa-heart text-danger"></i>
                            <span id="likeCount">{{ $likes ?? 0 }}</span> Likes
                        </button>

                        |

                        <span><i class="fa fa-comments text-success"></i> 0 Comments</span> |

                        <span class="badge bg-warning text-dark">Campus News</span>
                    </div>

                </div>

            </div>

            <div class="col-lg-10 mb-3">

                <div class="card border-0 shadow-sm p-4">

                    <h2 class="text-center hf mb-4">
                        Siloam Leadership Engages TVET Authority on Training Standards
                    </h2>

                    <img src="{{ asset('assets/images/NEWS.jpg') }}" class="img-fluid w-100 rounded mb-4"
                        alt="TVET Authority Meeting">

                    <p>
                        The Acting Director General of the Technical and Vocational Education and Training
                        Authority (TVETA), <strong>Timothy Nyongesa Katiambo</strong>, hosted
                        <strong>Hon. Franklin Bett</strong>, former Minister and former Member of Parliament
                        for Buret, at the Authority’s offices.
                    </p>

                    <p>
                        During the meeting, the leaders discussed the important role of private-sector
                        investors in Technical and Vocational Education and Training (TVET).
                    </p>
                    <p>
                        Hon. Bett, who runs a TVET institution in Kericho County, shared insights on private
                        sector participation in skills development, particularly in medical-related training
                        programs. He also highlighted the importance of maintaining high training standards
                        to meet industry needs.
                    </p>

                    <div class="text-left text-muted mb-4 small">

                        <span>March 12, 2025</span> |

                        <button id="likeBtn" class="btn">
                            <i class="fa fa-heart text-danger"></i>
                            <span id="likeCount">{{ $likes }}</span> Likes
                        </button>

                        |

                        <span><i class="fa fa-comments text-success"></i> 1 Comment</span>

                        |

                        <span class="badge bg-warning text-dark">Campus News</span>

                    </div>

                </div>
            </div>

            <div class="col-lg-10 mb-3">

                <div class="card border-0 shadow-sm p-4">

                    <h2 class="text-center hf mb-4">
                        Practical Clinical Training Session at Siloam College
                    </h2>

                    <img src="{{ asset('assets/Gallery/handson.jpg') }}" class="img-fluid rounded mb-3"
                        alt="Clinical Training Session">

                    <p class="text-muted small text-center mb-4">
                        Students and instructors during a hands-on clinical demonstration session.
                    </p>

                    <p>
                        Siloam College continues to strengthen its commitment to excellence in healthcare training through
                        hands-on practical sessions. In a recent demonstration, students and instructors engaged in a
                        simulated clinical environment designed to mirror real hospital settings.
                    </p>

                    <p>
                        The session emphasized the importance of simulation-based learning in building essential clinical
                        skills. Students were guided through patient care procedures using modern training equipment,
                        enabling them to gain confidence and practical experience before entering real-world healthcare
                        environments.
                    </p>

                    <p>
                        Faculty members highlighted the role of continuous practice and supervision in shaping competent
                        healthcare professionals. By integrating theory with hands-on application, the institution ensures
                        that graduates are well-prepared to meet industry demands.
                    </p>

                    <p>
                        This initiative reflects Siloam College’s dedication to producing skilled, ethical, and
                        industry-ready professionals who contribute positively to the healthcare sector.
                    </p>

                    <div class="text-left text-muted mt-4 small">
                        <span>January 18, 2026</span> |

                        <button id="likeBtn" class="btn">
                            <i class="fa fa-heart text-danger"></i>
                            <span id="likeCount">{{ $likes ?? 0 }}</span> Likes
                        </button>

                        |

                        <span><i class="fa fa-comments text-success"></i> 0 Comments</span> |

                        <span class="badge bg-warning text-dark">Campus News</span>
                    </div>

                </div>

            </div>
            <div class="col-lg-10 mb-3">

                <div class="card border-0 shadow-sm p-4">

                    <h2 class="text-center hf mb-4">
                        Practical Clinical Training Session at Siloam College
                    </h2>

                    <img src="{{ asset('assets/Gallery/handson.jpg') }}" class="img-fluid rounded mb-3"
                        alt="Clinical Training Session">

                    <p class="text-muted small text-center">
                        The school principal and management team during a guided tour of Siloam College facilities.
                    </p>

                    <p>
                        Siloam College recently hosted a comprehensive tour of its facilities led by the school principal
                        together with members of the management team. The visit provided an opportunity to showcase the
                        institution’s learning environment, training resources, and commitment to academic excellence.
                    </p>

                    <p>
                        During the tour, the leadership team guided guests through key departments including classrooms,
                        laboratories, and practical training areas. Emphasis was placed on the college’s hands-on approach
                        to learning, particularly in specialized programs designed to equip students with industry-relevant
                        skills.
                    </p>

                    <p>
                        The principal highlighted the institution’s dedication to maintaining high standards in education
                        and training, while management underscored ongoing efforts to improve infrastructure and enhance
                        student experience. The tour also served as a platform to engage stakeholders and strengthen
                        partnerships within the education sector.
                    </p>

                    <p>
                        This initiative reflects Siloam College’s vision of providing quality, practical, and accessible
                        education while continuously fostering growth and innovation in training delivery.
                    </p>

                    <div class="text-left text-muted mt-4 small">
                        <span>December 18, 2025</span> |

                        <button id="likeBtn" class="btn">
                            <i class="fa fa-heart text-danger"></i>
                            <span id="likeCount">{{ $likes ?? 0 }}</span> Likes
                        </button>

                        |

                        <span><i class="fa fa-comments text-success"></i> 0 Comments</span> |

                        <span class="badge bg-warning text-dark">Campus News</span>
                    </div>

                </div>

            </div>

        </div>
    @endsection
