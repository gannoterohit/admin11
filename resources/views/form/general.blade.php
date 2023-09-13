
@include('layout.header')
    
    @include('layout.sidebar')



<!DOCTYPE html>
<html>
<head>
    <title>Baseline Survey Form</title>
    <!-- Add Bootstrap CSS (you can use a CDN or download it locally) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
   

    <div class="container-flex" style="    margin-left: 21rem;
    margin-top: 5rem;
    margin-right: 9rem;">
        <h1>General Information</h1>
        <form action="{{url('add_general')}}" method="post" >
            @csrf
            <!-- Date of Survey -->
            

            <!-- Surveyor Name -->
            <div class="form-row">
                <div class="col">
                    <label for="firstName">First Name:</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="col">
                    <label for="middleName">Middle Name:</label>
                    <input type="text" class="form-control" id="middleName" name="middleName">
                </div>
                <div class="col">
                    <label for="lastName">Last Name:</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
            </div>

            <h1>Location Information</h1>

            <!-- Village -->
            <div class="form-group">
                <label for="village">Village:</label>
                <input type="text" class="form-control" id="village" name="village" required>
            </div>

            <!-- Taluka -->
            <div class="form-group">
                <label for="taluka">Taluka:</label>
                <input type="text" class="form-control" id="taluka" name="taluka" required>
            </div>

            <!-- District -->
            <div class="form-group">
                <label for="district">District:</label>
                <input type="text" class="form-control" id="district" name="district" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and jQuery (optional, for Bootstrap features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@include('layout.footer')

