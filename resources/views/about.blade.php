@extends('partials.layouts')

@section('title', 'Mission, Vission and Core Values - SMTC')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@section('content')
    <div class="container-fluid bg text-light mt-2 py-4">
        <h2 class="text-center fw-bold m-0">
            Welcome to Siloam Medical & Technical College
        </h2>
    </div>
    <div class="container my-4">
        <div class="row g-0 mb-4 my-4">
            <div class="col-md-4">
                <p class="text-uppercase text-center text-warning-emphasis hf mb-0 fs-1">Our <br> mandate</p>
                <span style="display:block; width:250px; height:2px; background:#ff0000; margin:5px auto 0;"></span>
            </div>
            <div class="col-md-8">
                <h3 class="mb-4 mt-4 ms-4 text-start fs-5 text-muted">The mandate of Siloam Medical & Technical College is
                    to train competent, ethical, and innovative healthcare professionals who can effectively respond to the
                    changing health needs of society. <br>

                    Through quality education, practical training, and community engagement, the college equips students
                    with the knowledge, skills, and professional values necessary to provide compassionate and
                    evidence-based healthcare services in Kenya and beyond.</h3>
            </div>
        </div>
    </div>
    <div class="container my-5 p-0">
        <div class="card border-0 p-4 text-start">
            <h2 class="text-warning-emphasis hf text-center">Our Philosophy</h2>
            <p class="fs-5">At Siloam Medical & Technical College, our philosophy is rooted in the belief that
                education is a transformative
                force that empowers individuals to reach their full potential and make meaningful contributions to
                society. We are committed to fostering a learning environment that promotes critical thinking,
                creativity, and lifelong learning. Our approach emphasizes the development of both technical skills
                and
                ethical values, ensuring that our graduates are not only competent professionals but also compassionate
                and socially responsible citizens. We strive to cultivate a culture of excellence, innovation, and
                inclusivity, where students are encouraged to explore their passions, challenge themselves, and
                become
                leaders in their fields.</p>
        </div>

        <div class="card border-0 p-4 text-center">
            <h2 class="text-warning-emphasis hf fw-bold">Campus Life</h2>
            <p class="fs-5">Campus life offers students a vibrant and enriching experience beyond the classroom. It
                provides
                opportunities to engage in academic clubs, sports, cultural activities, and social events, helping
                students develop leadership, teamwork, and communication skills. Campus life also fosters a sense of
                community and belonging, allowing students to build friendships, network with peers, and explore new
                interests. Through a balance of learning and extracurricular activities, students gain practical
                experiences that prepare them for personal growth and future careers.</p>
            <div class="lightbox" data-mdb-lightbox-init>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/offcampus.jpg') }}" alt=""
                            class="w-100 mb-2 mb-md-4 shadow-1-strong rounded" />
                        <img src="{{ asset('assets/images/campus.jpg') }}" alt=""
                            class="w-100 shadow-1-strong rounded" />
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/offcampus.jpg') }}" alt=""
                            class="w-100 mb-2 mb-md-4 shadow-1-strong rounded" />
                        <img src="{{ asset('assets/images/soccer.jpg') }}" alt=""
                            class="w-100 shadow-1-strong rounded" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5 p-0">
            <div class="row g-0">
                <div class="col-md-6 p-4">
                    <h2 class="text-warning-emphasis">Graduation Ceremony</h2>
                    <p class="fs-6">The graduation ceremony at <strong class="text-capitalize">siloam hospital college
                            of health
                            sciences
                        </strong> is a joyous and memorable event that celebrates the accomplishments of
                        students who have successfully completed their studies. It is a formal occasion where graduates
                        are
                        recognized for their hard work, dedication, and perseverance throughout their academic journey.
                        Families, friends, and faculty gather to honor the achievements of the graduates, witness the
                        awarding of certificates or diplomas, and share in the pride and excitement of this significant
                        milestone. The ceremony not only marks the end of an educational chapter but also inspires
                        graduates
                        as they embark on new opportunities and future endeavors.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/GRADU.jpg') }}" class="w-100 h-80 mx-auto" style="object-fit: cover;"
                        alt="">
                </div>
            </div>
        </div>



        <div class="container my-5 p-0">
            <div class="row g-0">

                <div class="col-md-6">
                    <img src="{{ asset('assets/img/sss.jpg') }}" class="w-100 h-80" style="object-fit: cover;"
                        alt="">
                </div>

                <div class="col-md-6 p-4">
                    <h2 class="text-warning-emphasis">Student Support.</h2>
                    <p>The institution is committed to fostering a supportive and inclusive learning environment by
                        providing comprehensive Student Support Services (SSS) designed to promote the overall
                        well-being,
                        personal development, and academic success of all students. Our dedicated SSS department offers
                        a
                        range of confidential resources and professional assistance, including individualized counseling
                        for
                        personal, career, and academic matters; mental health support; academic advising and tutoring;
                        and
                        assistance with financial aid and accommodation services. The primary goal of these services is
                        to
                        help students navigate challenges, develop essential life skills (such as time management and
                        study
                        habits), and access necessary resources, thereby optimizing their opportunities for personal
                        growth
                        and successful academic progression throughout their time here.</p>
                </div>

            </div>
        </div>
        <div class="card border-0 p-4 text-start">
            <h2 class="text-warning-emphasis text-center">Our Commitment</h2>
            <p class="fs-5">We are committed to preparing competent, ethical, and professional nurses who provide
                holistic, patient-centered care to individuals, families, and communities—regardless of social,
                economic, or cultural status.

                <br><br>Our training emphasizes:
            <ul>
                <li>Excellence in nursing education, research, and practice.</li>
                <li>Fostering a culture of compassion, integrity, and respect for human dignity.</li>
                <li>Promoting lifelong learning and professional development among our students and faculty.</li>
                <li>Engaging in community partnerships to improve health outcomes and address healthcare disparities.</li>
            </ul>
            </p>
        </div>
    </div>
@endsection
