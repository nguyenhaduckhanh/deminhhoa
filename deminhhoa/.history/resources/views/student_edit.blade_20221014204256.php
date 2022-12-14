$<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h4>How to Edit and Update Data in Laravel
                          <a href="{{ url('add-student') }}" class="btn btn-primary float-end">Add Student</a>
                      </h4>
                  </div>
                  <div class="card-body">
  
                      <table class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Course</th>
                                  <th>Section</th>
                                  <th>Edit</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($student as $item)
                              <tr>
                                  <td>{{ $item->id }}</td>
                                  <td>{{ $item->name }}</td>
                                  <td>{{ $item->email }}</td>
                                  <td>{{ $item->course }}</td>
                                  <td>{{ $item->course }}</td>
                                  <td>
                                      <a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
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
  </body>
</html>