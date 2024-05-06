<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DOH Exam</title>
  </head>
  <body>
    <div class="container mt-5">
        <a href="{{ route('employee_list') }}" target="_blank" class="btn btn-secondary mb-3">Employee List</a>

        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('save') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
            </div>

            <div class="form-group">
                <label for="middlename">Middlename</label>
                <input type="text" class="form-control" id="middlename" placeholder="Enter middlename" name="middlename">
            </div>

            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
            </div>

            <div class="form-group">
                <label for="suffix">Suffix</label>
                <input type="text" class="form-control" id="suffix" placeholder="Enter suffix" name="suffix">
            </div>
        
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>

            <div class="form-group">
                <label for="division">Division</label>
                <input type="text" class="form-control" id="division" placeholder="Enter division" name="division">
            </div>

            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" placeholder="Enter position" name="position">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>