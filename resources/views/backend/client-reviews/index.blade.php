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
            <div class="card-header">
              <div class="row bg-gradient shadow-black border-radius-lg">
                <div class="col-6 d-flex align-items-center">
                  <h4 class="text text-capitalize ps-3">Client Reviews</h4>
                </div>
                <div class="col-6 text-end">
                  <a class="btn bg-gradient-dark mb-0" href="{{ route('admin.addReview') }}">
                    <i class="material-icons text-sm">add</i>
                    Add
                   </a>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sr. No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($reviews as $review)
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $review->id }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $review->name }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $review->message }}</span>
                      </td>
                      <td>
                      <div class="avatar avatar-xl position-relative">
                        <img src="{{ Storage::url($review->image_url) }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm gallery_img">
                      </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        @if($review->status == 1)
                        <span class="badge badge-sm bg-gradient-success">Active</span>
                        @else
                        <span class="badge badge-sm bg-gradient-secondary">Inactive</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"> {{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</span>
                      </td>
                      <td>
                        <div class="ms-auto text-end">
                          <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('admin.editReview',$review->id) }}"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                          <form method="post" action="{{ route('admin.deleteReview',$review->id) }}" style="display:inline-block;">
                            @csrf
                            <input type="hidden" name="_method" value="delete" />
                            <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Delete</button>
                          </form>
                        </div>
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