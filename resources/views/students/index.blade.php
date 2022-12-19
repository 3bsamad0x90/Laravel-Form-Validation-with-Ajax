<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-4"></div>
            <div class="col-md-4 col-md-offset-6">
                <h4 class="d-flex justify-content-center">Add New Student</h4><hr>
                <form method="post" action="{{ route('students.store') }}" id="Form_Register">
                    @csrf
                    <div class="form-group">
                        <label for="name">Enter Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name" id="name">
                        <span class="text-danger text-error name_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Enter Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" id="email">
                        <span class="text-danger text-error email_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Enter Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password" id="password">
                        <span class="text-danger text-error password_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Enter Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone" id="phone">
                        <span class="text-danger text-error phone_error"></span>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="submit" class="btn btn-outline-dark rounded-top" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
</body>
</html>

