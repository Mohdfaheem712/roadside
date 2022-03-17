@extends('backend.layouts.master')

@section('main-section')
<div class="container-fluid py-4">
<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header">
              <div class="row bg-gradient shadow-black border-radius-lg">
                <div class="col-6 d-flex align-items-center">
                  <h4 class="text text-capitalize ps-3">User Queries</h4>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sr. No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name & Email</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Phone</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($queries as $query)
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $query->id }}</span>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $query->name }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $query->email }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $query->phone }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        @if($query->status == 0)
                        <span class="badge badge-sm bg-gradient-success">New</span>
                        @else
                        <span class="badge badge-sm bg-gradient-secondary">Replied</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ \Carbon\Carbon::parse($query->created_at)->diffForHumans() }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="ms-auto text-end">
                          <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                          <form method="post" action="javascript:;" style="display:inline-block;">
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