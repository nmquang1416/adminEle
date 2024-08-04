@extends('layouts/contentNavbarLayout')
@use(App\Http\Controllers\StoreProductRequest as StoreProductRequest)
@use(App\Http\Controllers\user_management\addUser\AddNewUserController)
@use(App\Http\Requests\StoreFormRequest as StoreFormRequest)
@section('title', ' Horizontal Layouts - Forms')

@section('content')
  <!-- Basic Layout & Basic with Icons -->
  <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-6">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Add new user</h5> <small class="text-muted float-end"></small>
        </div>
        <div class="card-body">
          <form method="post" action="{{url("user-management/add-new-user")}}" name="add-user">
            {{csrf_field()}}
            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-user-name">User Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-user-name" name="user_name"  placeholder="John Doe" />
                <span class="w-100" id="error-message"></span>
              </div>
            </div>

            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-user-password">User Password</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-user-password" name="user_password" placeholder="ACME Inc." />
              </div>
            </div>

            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-first-name">First Name</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input type="text" id="basic-default-first-name" name="first_name" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
{{--                  <span class="input-group-text" id="basic-default-email2">@example.com</span>--}}
                </div>
{{--                <div class="form-text"> You can use letters, numbers & periods </div>--}}
              </div>
            </div>

{{--            --}}
            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-last-name">Last Name</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input type="text" id="basic-default-last-name" name="last_name" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
{{--                  <span class="input-group-text" id="basic-default-email2">@example.com</span>--}}
                </div>
{{--                <div class="form-text"> You can use letters, numbers & periods </div>--}}
              </div>
            </div>

            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input type="text" id="basic-default-email" name="email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
                  <span class="input-group-text" id="basic-default-email">@example.com</span>
                </div>
{{--                <div class="form-text"> You can use letters, numbers & periods </div>--}}
              </div>
            </div>

            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone Number</label>
              <div class="col-sm-10">
                <input type="text" id="basic-default-phone" name="phone_number" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
              </div>
            </div>

            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-favourite">Favourite</label>
              <div class="col-sm-10">
                <input type="text" id="basic-default-favourite" name="favourite" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
              </div>
            </div>

            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-birth">Birth</label>
              <div class="col-sm-10">
                <input type="date" id="basic-default-birth" class="form-control phone-mask" name="birth" placeholder="" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
              </div>
            </div>

            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button onsubmit="return validateForm()" type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection



