@include('layout.header')
    
    @include('layout.sidebar')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Layouts - Survey</title>

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
       

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Information</h5>


     

              <!-- Vertical Form -->
              <form class="row g-3" method="POST" action="{{url('add_layout')}}">
              @csrf
                <div class="col-12">
                  <label for="inputNanme4"  name="date" class="form-label">Date of Survey</label>
                  <input type="date" class="form-control" id="inputNanme4" name="date">
                  @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                
                <div class="col-12">
                  <label for="inputNanme4" name="name" class="form-label">First Name</label>
                  <input type="text" name="name" class="form-control" id="inputNanme4">
                  @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-12">
                  <label for="inputEmail4" name="email" class="form-label">Email</label>
                  <input type="email" name="email" class="form-cotrol" id="inputEmail4">
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-12">
                  <label for="inputPassword4" name="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="inputPassword4">
                  @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-12">
                  <label for="inputAddress" name="address" class="form-label">Address</label>
                  <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Next</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

      

       

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  
</body>

</html>
@include('layout.footer')
