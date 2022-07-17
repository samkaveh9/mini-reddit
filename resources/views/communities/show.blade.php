@extends('layouts.app')

@section('content')
    <div class="nav bg-primary bg-gradient " style="height: 5rem"></div>
    <div class="nav bg-white bg-gradient d-flex" style="height: 5rem">
        <div class="ms-5 mt-3 d-flex">
            <svg class="bd-placeholder-img rounded-circle" width="75" height="75" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Completely round image: 75x75" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Completely round image</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">75x75</text></svg>
            <h4 class="fw-normal ms-5 mt-3">{{ $community->name }}</h4>
        </div>
        <button type="button" class="btn btn-outline-primary rounded-pill ms-4 mt-4" style="height: fit-content">Primary</button>
    </div>

@endsection
