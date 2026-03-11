<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <h2 class="text-warning-emphasis text-center hf fw-bold my-3">
        Academics | Programmes
    </h2>
<div class="container-fluid history-card px-0 p-4 mt-md-1 pt-1">

    <div class="container overflow-hidden">
        <div class="row gy-3 mt-2 justify-content-center fs-5">
            <div class="col-5">
                <div class="p-3 bg rounded">
                    <a href="{{ route('academic.pptt') }}" class=" text-capitalize text-decoration-none text-white"> <i
                            class="fa fa-user-doctor me-2"></i>perioperative theatre technology</a>
                </div>
            </div>
            <div class="col-5">
                <div class="p-3 bg rounded">
                    <a href="{{ route('academic.orthopedics') }}"
                        class=" text-capitalize text-decoration-none text-white"> <i
                            class="fa fa-bone me-2"></i>Orthopedics & Trauma Medicine</a>

                </div>
            </div>
            <div class="col-5">
                <div class="p-3 bg rounded">
                    <a href="{{ route('academic.cna') }}" class=" text-capitalize text-decoration-none text-white"><i
                            class="fa fa-stethoscope me-2"></i>Certified Nursing Assistant</a>

                </div>
            </div>
            <div class="col-5">
                <div class="p-3 bg rounded">
                    <a href="{{ route('academic.nursing') }}" class=" text-capitalize text-decoration-none text-white">
                        <i class="fa fa-user-nurse me-2"></i>Nursing (KCRHN)</a>
                </div>
            </div>
            <div class="col-5">
                <div class="p-3 bg rounded">
                    <a href="{{ route('academic.packages') }}" class=" text-decoration-none text-white text-capitalize">
                        <i class="fa fa-laptop-medical me-2"></i>Computer packages </a>
                </div>
            </div>

        </div>
    </div>
    <div class="text-center mt-3">
        <a href="{{ route('academic.programs') }}"
            class="btn btn-warning text-black btn-sm mt-3 px-5  py-1 w-auto d-inline-block rounded-pill fs-4">
            Explore Our Courses
        </a>
    </div>
</div>
