@extends('pastpapers.examlayout')
@section('title', 'Exam Past Papers')
@section('content')
    <div class="container py-4">

        <h3 class="fw-bold ms-4 mb-4">
            {{ $department }} - {{ $year }} Past Papers
        </h3>

        <ul class="list-unstyled">
            @forelse($files as $file)
                <li class="mb-3 pb-2">
                    <a href="{{ asset('storage/pastpapers/' . $department . '/' . $year . '/' . basename($file)) }}"
                        target="_blank"
                        class="text-decoration-none ms-5 text-dark d-flex justify-content-between align-items-center">

                        <span class="ms-2 me-3">
                            📄 {{ str_replace('.pdf', '', basename($file)) }}
                        </span>

                        <span class="text-muted small">
                            View →
                        </span>

                    </a>
                </li>
            @empty
                <li class="text-muted">No papers available.</li>
            @endforelse
        </ul>

    </div>
@endsection
