@extends('backend.layouts.master')

@section('main-section')
<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image:url({{ asset('images/1.jpg') }});">
    <span class="mask  bg-gradient-dark  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
    <div class="row gx-4 mb-2">
        <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
            <img src="{{ asset('backend/assets/img/bruce-mars.jpg') }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
        </div>
        </div>
        <div class="col-auto my-auto">
        <div class="h-100">
            <h5 class="mb-1">
            {{ Auth::user()->name }}
            </h5>
            <p class="mb-0 font-weight-normal text-sm">
            CEO / Founder
            </p>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
        <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                <i class="material-icons text-lg position-relative">person</i>
                <span class="ms-1">Admin Details</span>
                </a>
            </li>
            </ul>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-0">Profile Information</h6>
                    </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; {{ Auth::user()->name }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{ Auth::user()->email }}</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-12 col-xl-8">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-0">Edit Profile</h6>
                    </div>
                    <div class="col-md-4 text-end">
                        <a href="javascript:;">
                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <form role="form" class="text-start" method="post" action="{{ route('admin.updateProfile') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Name</label>
                            <input type="name" name="name" value="{{ Auth::user()->name }}" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Update Persnol Details</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection