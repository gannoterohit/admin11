@include('layout.header')
    
    @include('layout.sidebar')
<!DOCTYPE html>
<html>
<head>
    <title>Household Profile Form</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container-flex" style="    margin-left: 21rem;
    margin-top: 5rem;
    margin-right: 9rem;">
        <h1 class="mt-4">Household Profile</h1>
        <form action="{{url('add_profile')}}" method="post">
            @csrf
            <!-- Name of Respondent -->
            <div class="form-group">
                <label for="respondentName">Name of Respondent (Household representative):</label>
                <input type="text" class="form-control" id="respondentName" name="respondentName" required>
            </div>

            <!-- Age -->
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>

            <!-- Sex -->
            <div class="form-group">
                <label>Sex:</label>
                <div>
                    <input type="radio" id="male" name="sex" value="M" required>
                    <label for="male">Male</label>
                </div>
                <div>
                    <input type="radio" id="female" name="sex" value="F" required>
                    <label for="female">Female</label>
                </div>
            </div>

            <!-- Household Location (Latitude/Longitude) - Use Notecam Software -->
            <div class="form-group">
                <label for="location">Household Location (Lat/Long) - Use Notecam Software:</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>

            <!-- Phone Number -->
            <div class="form-group">
                <label for="phone">Phone number (if available):</label>
                <input type="tel" class="form-control" id="phone" name="phone">
            </div>

            <!-- Occupation -->
            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <select class="form-control" id="occupation" name="occupation" required>
                    <option value="Farmer">Farmer</option>
                    <option value="Labour">Labour</option>
                    <option value="Herding">Herding</option>
                    <option value="Others">Others (please specify)</option>
                </select>
            </div>

            <!-- Yearly Income (INR) -->
            <div class="form-group">
                <label for="income">Yearly income (INR):</label>
                <input type="number" class="form-control" id="income" name="income" required>
            </div>

            <!-- Economic Class -->
            <div class="form-group">
                <label>Economic class:</label>
                <div>
                    <input type="radio" id="apl" name="economicClass" value="APL" required>
                    <label for="apl">APL</label>
                </div>
                <div>
                    <input type="radio" id="bpl" name="economicClass" value="BPL" required>
                    <label for="bpl">BPL</label>
                </div>
            </div>

            <!-- Number of Adult Family Members -->
            <div class="form-group">
                <label for="adultMembers">Number of Adult family members in the household:</label>
                <input type="number" class="form-control" id="adultMembers" name="adultMembers" required>
            </div>

            <!-- Number of Children (<6 years) -->
            <div class="form-group">
                <label for="children">Number of Children (<6 years) in household: </label>
                <input type="number" class="form-control" id="children" name="children" required>
            </div>

            <!-- Government Documents -->
            <div class="form-group">
                <label>Government Documents:</label><br>
                <div>
                    <input type="checkbox" id="voterId" name="documents" value="Voter Id">
                    <label for="voterId">Voter Id</label>
                </div>
                <div>
                    <input type="checkbox" id="drivingLicense" name="documents" value="Driving License">
                    <label for="drivingLicense">Driving License</label>
                </div>
                <div>
                    <input type="checkbox" id="otherDocument" name="documents" value="Other">
                    <label for="otherDocument">Other (please specify)</label>
                </div>
            </div>

            <!-- Document Number -->
            <div class="form-group">
                <label for="documentNumber">Document Number:</label>
                <input type="text" class="form-control" id="documentNumber" name="documentNumber">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Add Bootstrap JS (Optional, if needed) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@include('layout.footer')
