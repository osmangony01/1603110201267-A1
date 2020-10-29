<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <div class="row justify-content-center mt-4 mx-3 ">
        <div class="col-md-12">
            <div>
                <!-- <div class="alert alert-danger text-center" role="alert">
                <b>Your registration is successful, Please verify the email and check the inbox!</b>
                </div> -->
            </div>
            <div class="card border_card shadow-sm rounded">
                <div class="card-header">
                    <p class="h5 my-0 float-left">Student Add form</p>
                    <a class="p-0 m-0 float-right" href="{{ URL::to('view-employee') }}">view the list</a>
                </div>
                <div class="card-body">
                    {{-- @if (Session::has('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>{{ Session::get('success') }}</strong>
                        </div>
                    @endif --}}
                    {{-- <a class="text-sm-right" href="#">view student list</a> --}}
                    <form method="post" action="{{ URL::to('add-employee') }}" >
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">Name</label>
                            <div id="" class="col-md-6">
                                <input type="text" id="" class="form-control" name="name" placeholder="full name" value="{{ old('name') }}">
                                
                            </div>     
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>
                            <div id="email1" class="col-md-6">
                                <input type="email" id="" class="form-control" name="email" placeholder="email" value="{{ old('email') }}">
                              
                            </div>
                        </div>

                       
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Date of birth</label>
                            <div id="email1" class="col-md-6">
                                <input type="date" id="" class="form-control" name="dob" placeholder="dob" value="{{ old('dob') }}">
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Salary</label>
                            <div id="email1" class="col-md-6">
                                <input type="number" id="" class="form-control" name="salary" placeholder="salary" value="{{ old('salary') }}">
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Gender</label>
                            <div id="email1" class="col-md-6">
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" >
                                    <label class="form-check-label" for="exampleRadios1">
                                      Male
                                    </label>
                                  </div>

                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
                                    <label class="form-check-label" for="exampleRadios2">
                                      Female
                                    </label>
                                  </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Status </label>
                            <div id="" class=" form-check col-md-6 ml-2">
                                <input type="checkbox" class="form-check-input" name="status" id="exampleCheck1">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>