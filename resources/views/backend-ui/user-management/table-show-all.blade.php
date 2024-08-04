@use(App\Models\User)
@extends('layouts/contentNavbarLayout')
{{--{{$users = User::all()}}--}}
@section('title', 'Tables - Basic Tables')

@section('content')
  <!-- Basic Bootstrap Table -->

  <div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
        <tr>
          <th>Id</th>
          <th>Account Id</th>
          <th>User Name</th>
          <th>Passwords</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Favourite</th>
          <th>Birth</th>
          <th>Salt</th>
          <th>Current Coin</th>
          <th>Is Admin</th>
          <th>Status</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Deleted At</th>
          <th>Created By</th>
          <th>Updated By</th>
          <th>Deleted By</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach($users as $user)
            <tr>
              <td> {{$user->id}}<span></span></td>
              <td> {{$user->account_id}} </td>
              <td> {{$user->user_name}}</td>
              <td> {{$user->user_password}}</td>
              <td> {{$user->first_name}}</td>
              <td> {{$user->last_name}}</td>
              <td> {{$user->email}}</td>
              <td> {{$user->phone_number}}</td>
              <td> {{$user->favourite}}</td>
              <td> {{$user->birth}}</td>
              <td> {{$user->salt}}</td>
              <td> {{$user->current_coin}}</td>
              <td> {{$user->is_admin}}</td>
              <td> {{$user->status}}</td>
              <td> {{$user->created_at}}</td>
              <td> {{$user->updated_at}}</td>
              <td> {{$user->deleted_at}}</td>
              <td> {{$user->created_by}}</td>
              <td> {{$user->updated_by}}</td>
              <td> {{$user->deleted_by}}</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                      class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>

            </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>
  <div class="container mt-4 ">{!! $users->links() !!}</div>
@endsection
