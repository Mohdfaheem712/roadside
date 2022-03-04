@extends('backend.layouts.master')
@push('css')
<style>
    .gallery_img{
        min-height:74px;
    }
</style>
@endpush
@section('main-section')
<div class="container-fluid py-4">
<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Gallery</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sr. No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($images as $image)
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $image->id }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $image->title }}</span>
                      </td>
                      <td>
                      <div class="avatar avatar-xl position-relative">
                        <img src="{{ Storage::url($image->image_url) }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm gallery_img">
                      </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        @if($image->status == 1)
                        <span class="badge badge-sm bg-gradient-success">Active</span>
                        @else
                        <span class="badge badge-sm bg-gradient-secondary">Inactive</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"> {{ \Carbon\Carbon::parse($image->created_at)->diffForHumans() }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="{{ route('admin.editImage',$image->id) }} " class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit Image">
                          Edit
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection