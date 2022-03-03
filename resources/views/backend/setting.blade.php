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
                <i class="material-icons text-lg position-relative">settings</i>
                <span class="ms-1">Settings</span>
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
                        <h6 class="mb-0">Website Information</h6>
                    </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm mb-2" ><strong class="text-dark">Logo:</strong> &nbsp; <img src="{{ \Illuminate\Support\Facades\Storage::url($setting->logo)}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" style="max-height:734px; max-width:658px;"></li>  
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Title:</strong> &nbsp; {{ $setting->title }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; (+91) {{ $setting->phone }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{ $setting->email }}</li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; {{ $setting->address }}</li>
                    <li class="list-group-item border-0 ps-0 pb-0">
                        <strong class="text-dark text-sm">Social:</strong> &nbsp;
                        <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="{{ $setting->facebok_url }}">
                        <i class="fab fa-facebook fa-lg"></i>
                        </a>
                        <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="{{ $setting->twitter_url }}">
                        <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="{{ $setting->instagram_url }}">
                        <i class="fab fa-instagram fa-lg"></i>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-12 col-xl-8">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-0">Edit Website Information</h6>
                    </div>
                    <div class="col-md-4 text-end">
                        <a href="javascript:;">
                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                        </a>
                    </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <form role="form" class="text-start" method="post" action="{{ route('admin.updateSetting') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Name</label>
                            <input type="title" name="title" value="{{ $setting->title }}" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $setting->email }}" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Phone</label>
                            <input type="phone" name="phone" value="{{ $setting->phone }}" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" value="{{ $setting->address }}" class="form-control">
                        </div>
                        
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Facebook URL</label>
                            <input type="text" name="facebook_url" value="{{ $setting->facebook_url }}" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Twitter URL</label>
                            <input type="text" name="twitter_url" value="{{ $setting->twitter_url }}" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Instagaram URL</label>
                            <input type="text" name="instagram_url" value="{{ $setting->instagram_url }}" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Logo</label>
                            <input type="file" name="logo" class="form-control file">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Update Website Setting</button>
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