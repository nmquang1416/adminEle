@extends('layouts/contentNavbarLayout')
@use(App\Http\Controllers\StoreProductRequest as StoreProductRequest)
@use(App\Http\Controllers\user_management\addUser\AddNewUserController)
@use(App\Http\Requests\StoreFormRequest as StoreFormRequest)
@section('title', ' Horizontal Layouts - Forms')

@section('content')
  <!-- Basic Layout & Basic with Icons -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Form</title>
    <style>
      .error-message {
        color: red;
        font-size: 0.875em;
      }
    </style>
  </head>
  <body>
  <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-6">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Add new user</h5> <small class="text-muted float-end"></small>
        </div>
        <div class="card-body">
          <form method="post" action="{{url("/user-management/add-new-user")}}" name="add-user" onsubmit="return validateForm()">
            {{csrf_field()}}
            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-user-name">User Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-user-name" name="user_name" placeholder="John Doe" />
                <span class="error-message" id="user-name-error"></span>
              </div>
            </div>
            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-user-password">User Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="basic-default-user-password" name="user_password" placeholder="ACME Inc." />
                <span class="error-message" id="user-password-error"></span>
              </div>
            </div>
            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-first-name">First Name</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input type="text" id="basic-default-first-name" name="first_name" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
                </div>
                <span class="error-message" id="first-name-error"></span>
              </div>
            </div>
            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-last-name">Last Name</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input type="text" id="basic-default-last-name" name="last_name" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
                </div>
                <span class="error-message" id="last-name-error"></span>
              </div>
            </div>
            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input type="text" id="basic-default-email" name="email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
                  <span class="input-group-text" id="basic-default-email">@example.com</span>
                </div>
                <span class="error-message" id="email-error"></span>
              </div>
            </div>
            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone Number</label>
              <div class="col-sm-10">
                <input type="text" id="basic-default-phone" name="phone_number" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                <span class="error-message" id="phone-error"></span>
              </div>
            </div>
            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-favourite">Favourite</label>
              <div class="col-sm-10">
                <input type="text" id="basic-default-favourite" name="favourite" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                <span class="error-message" id="favourite-error"></span>
              </div>
            </div>
            <div class="row mb-6">
              <label class="col-sm-2 col-form-label" for="basic-default-birth">Birth</label>
              <div class="col-sm-10">
                <input type="date" id="basic-default-birth" class="form-control phone-mask" name="birth" placeholder="" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                <span class="error-message" id="birth-error"></span>
              </div>
            </div>
            <div class="row justify-content-end">

              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function validateForm() {
      let isValid = true;

      // Reset previous error messages
      document.getElementById('user-name-error').textContent = '';
      document.getElementById('user-password-error').textContent = '';
      document.getElementById('first-name-error').textContent = '';
      document.getElementById('last-name-error').textContent = '';
      document.getElementById('email-error').textContent = '';
      document.getElementById('phone-error').textContent = '';
      document.getElementById('favourite-error').textContent = '';
      document.getElementById('birth-error').textContent = '';

      // Get form values
      const userName = document.getElementById('basic-default-user-name').value.trim();
      const userPassword = document.getElementById('basic-default-user-password').value.trim();
      const firstName = document.getElementById('basic-default-first-name').value.trim();
      const lastName = document.getElementById('basic-default-last-name').value.trim();
      const email = document.getElementById('basic-default-email').value.trim();
      const phone = document.getElementById('basic-default-phone').value.trim();
      const favourite = document.getElementById('basic-default-favourite').value.trim();
      const birth = document.getElementById('basic-default-birth').value.trim();

      // Validate User Name
      if (userName === '') {
        document.getElementById('user-name-error').textContent = 'User Name is required!';
        isValid = false;
      }

      // Validate User Password
      if (userPassword === '') {
        document.getElementById('user-password-error').textContent = 'User Password is required!';
        isValid = false;
      }

      // Validate First Name
      if (firstName === '') {
        document.getElementById('first-name-error').textContent = 'First Name is required!';
        isValid = false;
      }

      // Validate Last Name
      if (lastName === '') {
        document.getElementById('last-name-error').textContent = 'Last Name is required!';
        isValid = false;
      }

      // Validate Email
      if (email === '') {
        document.getElementById('email-error').textContent = 'Email is required!';
        isValid = false;
      } else {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
          document.getElementById('email-error').textContent = 'Invalid email format!';
          isValid = false;
        }
      }

      // Validate Phone Number
      if (phone === '') {
        document.getElementById('phone-error').textContent = 'Phone Number is required!';
        isValid = false;
      }

      // Validate Favourite
      if (favourite === '') {
        document.getElementById('favourite-error').textContent = 'Favourite is required!';
        isValid = false;
      }

      // Validate Birth
      if (birth === '') {
        document.getElementById('birth-error').textContent = 'Birth is required!';
        isValid = false;
      }

      return isValid;
    }
  </script>
  </body>
  </html>


@endsection



