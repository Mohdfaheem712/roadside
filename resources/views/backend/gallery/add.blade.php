@extends('backend.layouts.master')

@section('main-section')
<div class="container-fluid px-2 px-md-4">
    <div class="row">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="row bg-gradient shadow-black border-radius-lg">
                    <div class="col-6 d-flex align-items-center">
                    <h4 class="text text-capitalize ps-3">
                        <i class="material-icons text-sm">add</i>
                        Add Image
                    </h4>
                    </div>
                </div>
                <div class="card-body p-3">
                    <form role="form" class="text-start" method="post" action="{{ route('admin.postImage') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Title</label>
                            <input type="title" name="title" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        
                        <div class="input-group input-group-outline my-3 is-filled">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control file">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Add photo</button>
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