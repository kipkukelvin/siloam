@extends('partials.layouts')
@section('title', 'Siloam-Team')

@section('content')
    <div class="position-relative pt-4">
        <img src="{{ asset('assets/images/TEAM.avif') }}" class="img-fluid w-100" style="height:400px; object-fit:cover;"
            alt="">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.75;"></div>
        <div class="position-absolute top-50 start-0 translate-middle-y ps-5 text-white">
            <h1 class="fw-bold text-uppercase">Our Team</h1>
        </div>
    </div>

    <!-- ================= BOARD ================= -->
    <div class="mt-5">
        <h3 class="text-center text-uppercase text-primary">The Board</h3>
    </div>
    <span style="display:block;width:60px;height:2px;background:#fa0000;margin:5px auto;"></span>

    <div class="container my-5">
        <div class="row g-4 justify-content-center">

            <div class="col-md-5">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/Cha.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body text-center">
                        <h4>Hon. Frankline Bett</h4>
                        <p>Chairman</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/Dir.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body text-center">
                        <h4>Miss Cheruto</h4>
                        <p>Director</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ================= EXECUTIVE ================= -->
    <div>
        <h3 class="text-center text-uppercase text-primary">The Executive</h3>
    </div>
    <span style="display:block;width:100px;height:2px;background:#fa0000;margin:5px auto;"></span>

    <div class="container my-5">
        <div class="row justify-content-center">

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/Prin.jpg') }}" class="rounded-circle mx-auto mt-3 profile-img"
                        alt="">
                    <div class="card-body text-center">
                        <h4>Bernadette Sang</h4>
                        <p>Principal</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profilePrincipal">
                            <i class="fas fa-user-graduate me-2"></i>See Profile
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ================= ADMINISTRATIVE TEAM ================= -->
    <div>
        <h3 class="text-center text-uppercase text-primary">Administrative Team</h3>
    </div>
    <span style="display:block;width:150px;height:2px;background:#fa0000;margin:5px auto;"></span>

    <div class="container my-5">
        <div class="row g-4 justify-content-center">

            <!-- Registrar -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/Reg.jpg') }}" class="rounded-circle mx-auto mt-3 profile-img"
                        alt="">
                    <div class="card-body text-center">
                        <h4>Mr. Vincent</h4>
                        <p>Academic Registrar</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profileRegistrar">
                            See Profile
                        </button>
                    </div>
                </div>
            </div>

            <!-- Dean -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/Dean.jpg') }}" class="rounded-circle mx-auto mt-3 profile-img"
                        alt="">
                    <div class="card-body text-center">
                        <h4>Ruth Orina</h4>
                        <p>Dean of Students</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profileDean">
                            See Profile
                        </button>
                    </div>
                </div>
            </div>

            <!-- Operations -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/rena.jpeg') }}" class="rounded-circle mx-auto mt-3 profile-img"
                        alt="">
                    <div class="card-body text-center">
                        <h4>Renalda Riaga</h4>
                        <p>Operations Manager</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profileRenalda">
                            See Profile
                        </button>
                    </div>
                </div>
            </div>

            <!-- Finance -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/fai.jpeg') }}" class="rounded-circle mx-auto mt-3 profile-img"
                        alt="">
                    <div class="card-body text-center">
                        <h4>Faith Chepkorir</h4>
                        <p>Finance Officer</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profileFaith">
                            See Profile
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ================= ACADEMIC TEAM ================= -->
    <div>
        <h3 class="text-center text-uppercase text-primary">Academic Team</h3>
    </div>
    <span style="display:block;width:100px;height:2px;background:#fa0000;margin:5px auto;"></span>

    <div class="container my-5">
        <div class="row g-4 justify-content-center">

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/Mercy.jpg') }}" class="rounded-circle mx-auto mt-3 profile-img"
                        alt="">
                    <div class="card-body text-center">
                        <h4>Mercy Kitur</h4>
                        <p>School Chaplain & Tutor</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profileMercy">
                            See Profile
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/PPT.jpg') }}" class="rounded-circle mx-auto mt-3 profile-img"
                        alt="">
                    <div class="card-body text-center">
                        <h4>Purity Ngeno</h4>
                        <p>H.O.D Perioperative Theatre Technology</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profilePurity">
                            See Profile
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/Doreen.jpg') }}" class="rounded-circle mx-auto mt-3 profile-img"
                        alt="">
                    <div class="card-body text-center">
                        <h4>Doreen Mageto</h4>
                        <p>H.O.D Orthopedics & Trauma Medicine</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profileDoreen">
                            See Profile
                        </button>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/Magdalene.jpg') }}" class="rounded-circle mx-auto mt-3 profile-img"
                        alt="">
                    <div class="card-body text-center">
                        <h4>Magdaline Jerop</h4>
                        <p>H.O.D Certified Nursing Assistant</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#profileMagdaline">
                            See Profile
                        </button>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/Rency.jpg') }}" class="rounded-circle mx-auto mt-3 profile-img"
                        alt="">
                    <div class="card-body text-center">
                        <h4>Rency Cherono</h4>
                        <p>Tutor</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profileRency">
                            See Profile
                        </button>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/Joan.jpg') }}" class="rounded-circle mx-auto mt-3 profile-img"
                        alt="">
                    <div class="card-body text-center">
                        <h4>Joan Cheptoo</h4>
                        <p>Librarian</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profileJoan">
                            See Profile
                        </button>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/Brenda.jpg') }}" class="rounded-circle mx-auto mt-3 profile-img"
                        alt="siloam">
                    <div class="card-body text-center">
                        <h4>Brenda</h4>
                        <p>Tutor</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#profileBrenda">
                            See Profile
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- ================= MODALS ================= -->

    <div class="modal fade" id="profilePrincipal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 text-center">
                <button class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                <h5 class="fw-bold">Bernadette Sang</h5>
                <p class="text-muted">Principal</p>
                <p>Full profile description here...</p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profileRegistrar" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 text-center">
                <button class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                <h5 class="fw-bold">Mr. Vincent</h5>
                <p class="text-muted">Academic Registrar</p>
                <p>Full profile description here...</p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profileDean" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 text-center">
                <button class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                <h5 class="fw-bold">Ruth Orina</h5>
                <p class="text-muted">Dean of Students</p>
                <p>Full profile description here...</p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profileRenalda" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold">Renalda Riaga</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center">
                    <p class="text-muted">Operations Manager</p>
                    <p>Full profile description here...</p>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="profileFaith" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 text-center">
                <button class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                <h5 class="fw-bold">Faith Chepkorir</h5>
                <p class="text-muted">Finance Officer</p>
                <p>Full profile description here...</p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profileMercy" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 text-center">
                <button class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                <h5 class="fw-bold">Mercy Kitur</h5>
                <p class="text-muted">College Chaplain & Lead Tutor</p>
                <p>I am a Tutor and Chaplain at Siloam, supporting students’ academic success and
                    spiritual growth. I provide guidance, mentorship, and pastoral care, helping
                    students build confidence, integrity, and resilience. My goal is to nurture the
                    whole student—academically, morally, and spiritually—preparing them to face life’s
                    challenges with faith and purpose.</p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profilePurity" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 text-center">
                <button class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                <h5 class="fw-bold">Purity Ngeno</h5>
                <p class="text-muted">H.O.D. Perioperative Theatre Technology</p>
                <p> As H.O.D for Perioperative Theatre Technology at Siloam Hospital College of Health
                    Sciences, I lead the training of students to become skilled, professional, and
                    compassionate theatre technologists. I oversee curriculum delivery, clinical skills
                    training, and mentorship, while providing career guidance and psychological support.
                    I work closely with the school registrar and clinical instructors to coordinate
                    placements and academic progression. I am committed to evidence-based practice,
                    professional development, and excellence in perioperative education, and I highly
                    recommend Siloam Medical & Technical College as a top institution for health sciences training.
                </p>
                </p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profileDoreen" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 text-center">
                <button class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                <h5 class="fw-bold">Doreen Mageto</h5>
                <p class="text-muted">H.O.D. Orthopedics & Trauma Medicine</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profileMagdaline" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 text-center">
                <button class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                <h5 class="fw-bold">Magdaline Jerop</h5>
                <p class="text-muted">H.O.D. Certified Nursing Assistant</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profileRency" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 text-center">
                <button class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                <h5 class="fw-bold">Rency Cherono</h5>
                <p class="text-muted">Tutor</p>
                <p> Dedicated tutor with experience in healthcare education and student mentorship. I
                    specialize in bridging the gap between classroom instruction and clinical practice,
                    I draw upon
                    my direct healthcare experience to offer students relevant, real-world context. I
                    consistently highlight the significance of therapeutic communication, patient
                    advocacy, and precise attention to detail throughout my teaching. This applied
                    approach prepares students not only for academic assessments but also equips them to
                    deliver compassionate, evidence-based care across varied healthcare environments.</p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profileJoan" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 text-center">
                <button class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                <h5 class="fw-bold">Joan Cheptoo</h5>
                <p class="text-muted">Librarian</p>
                <p> I am a dedicated librarian at Siloam Medical & Technical College, committed to supporting
                    teaching, learning, and research within the academic community. My role involves
                    organizing and managing library resources to ensure easy access to accurate and
                    relevant information for students and staff. I assist users in developing research
                    and information literacy skills, guiding them in the effective use of library
                    materials and online databases. I also work closely with faculty to support
                    curriculum needs and encourage a strong reading culture across the college. Through
                    user education, reference services, and collection development, I strive to create a
                    welcoming and supportive learning environment. As a librarian, I value continuous
                    learning and professional growth, and I am passionate about helping students become
                    independent, confident information seekers. My goal is to ensure that the Siloam
                    College Library remains a vital academic resource that contributes meaningfully to
                    student success and institutional excellence.</p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="profileBrenda" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 text-center">
                <button class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                <h5 class="fw-bold">Brenda</h5>
                <p class="text-muted">Tutor</p>
                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                    quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                    nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                    justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                    Vivamus elementum semper nisi.</p>
            </div>
        </div>
    </div>
@endsection
