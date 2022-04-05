@extends('backend.layouts.master')

@section('main-section')
<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image:url({{ \Illuminate\Support\Facades\Storage::url($review->image_url)}});">
    <span class="mask  bg-gradient-dark  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
    <div class="row gx-4 mb-2">
    </div>
    <div class="row">
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-0">Edit Review</h6>
                    </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm mb-2" ><strong class="text-dark">Image:</strong> &nbsp; <img src="{{ \Illuminate\Support\Facades\Storage::url($review->image_url) }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm" style="max-height:734px; max-width:658px;"></li>  
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Name:</strong> &nbsp; {{ $review->title }}</li>
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Message:</strong> &nbsp; {{ $review->message }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Status:</strong> &nbsp;{{ $review->status == 1 ? 'Active': 'Inactive' }}</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-12 col-xl-8">
                
                <div class="card-body p-3">
                    <form role="form" class="text-start" method="post" action="{{ route('admin.updateReview',$review->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="{{ $review->name }}" class="form-control">
                        </div>

                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Message</label>
                            <textarea name="message" class="form-control">{{ $review->message }}</textarea>
                        </div>

                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Status</label>
                            <select name="status" value="{{ $review->status }}" class="form-control">
                                <option value="1" {{ $review->status == 1 ? 'selected': '' }} >Active</option>
                                <option value="0" {{ $review->status == 0 ? 'selected': '' }} >Inactive</option>
                            </select>
                        </div>
                        
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control file">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Update Image</button>
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