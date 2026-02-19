<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<div class="container-fluid px-0 bg p-4 pt-1">

    <h3 class="text-white text-center my-3">
        Academics | Programmes
    </h3>
    <div class="container overflow-hidden">
        <div class="row gy-3 justify-content-center">
            <div class="col-5">
                <div class="p-3 border bg-white rounded">
                    <a href="{{ route('academic.pptt') }}" class=" text-capitalize text-decoration-none text-black"> <i class="fa fa-user-doctor me-2"></i>perioperative theatre technology</a>
                </div>
            </div>
            <div class="col-5">
                <div class="p-3 border bg-white rounded">
                    <a href="{{ route('academic.orthopedics') }}" class=" text-capitalize text-decoration-none text-black"> <i class="fa fa-bone me-2"></i>Orthopedics & Trauma Medicine</a>
                   
                </div>
            </div>
            <div class="col-5">
                <div class="p-3 border bg-white rounded">
                    <a href="{{ route('academic.cna') }}" class=" text-capitalize text-decoration-none text-black"><i class="fa fa-stethoscope me-2"></i>Certified Nurse Assistant</a>
    
                </div>
            </div>
            <div class="col-5">
                <div class="p-3 border bg-white rounded">
                    <a href="{{ route('academic.nursing') }}" class=" text-capitalize text-decoration-none text-black"> <i class="fa fa-user-nurse me-2"></i>Nursing</a>
                </div>
            </div>
            <div class="col-5">
                <div class="p-3 border bg-white rounded">
                    <a href="{{ route('academic.packages') }}" class=" text-decoration-none text-black text-capitalize"> <i class="fa fa-laptop-medical me-2"></i>Computer packages </a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="text-center mt-3">
        <a href="{{ route('academic.programs') }}"
            class="btn btn-outline-danger btn-sm mt-3 px-5  py-1 w-auto d-inline-block rounded-pill fs-4">
            Read More
        </a>
    </div>
</div>
