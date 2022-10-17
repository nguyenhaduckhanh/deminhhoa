<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Student add</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Student
                            <a href="{{ url('student-manage') }}" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                      {{-- Attempt to read property "id" on bool?? --}}
                        <form action="{{ url('student-add/') }}" method="POST">
                            <div class="form-group mb-3">
                                <label for="">ID</label>
                                <input type="text" name="id" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Student Name</label>
                                <input type="text" name="fullname" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Student Birthday</label>
                                <input type="date" name="birthday" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Student Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Add Student</button>
                            </div>
                            
                        </form>
                    </div>
                    {{-- Thông báo thành công --}}
      
                </div>
            </div>
        </div>
      </div>
</body>
</html>