<html lang="en">
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body style="background-color: #f4f5f7;">
  <section>
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                  alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                <h4>{{$employee->name}}</h4>
                <p>{{ $employee->role->name}}</p>
                <i class="far fa-edit mb-5"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h3><b>Employee's Details</b></h3>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h5><b>Email</b></h5>
                      <p class="text-muted">{{$employee->email}}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h5><b>Phone</b></h5>
                      <p class="text-muted">{{$employee->phone}}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h5><b>Date of birth</b></h5>
                      <p class="text-muted">{{$employee->dob}}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h5><b>Date of join</b></h5>
                      <p class="text-muted">{{$employee->join}}</p>
                    </div>
                  </div>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                  <h5><b>Employee Designation</b></h5>
                    <p>{{ $employee->designation->name }}</p>
                    <div class="col-6 mb-3">
                      <h5><b>Address</b></h5>
                      <p class="text-muted">{{$employee->address}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>