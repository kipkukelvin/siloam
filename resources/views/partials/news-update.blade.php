@extends('partials.layouts')

@section('content')
    <section class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="card border-0 shadow-sm p-4">

                    <h2 class="text-center text-warning-emphasis hf mb-4">
                        Siloam Leadership Engages TVET Authority on Training Standards
                    </h2>

                    <img src="{{ asset('assets/images/NEWS.jpg') }}" class="img-fluid rounded mb-4"
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

                    <div class="text-center text-muted mb-4 small">

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
        </div>
    </section>
@endsection
