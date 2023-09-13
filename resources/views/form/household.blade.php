
@include('layout.header')
    
    @include('layout.sidebar')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Household Fuel Consumption Pattern</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container-flex" style="    margin-left: 21rem;
    margin-top: 5rem;
    margin-right: 9rem;">
        <h1>Household Fuel Consumption Pattern</h1>
        <form action="{{url('add_household')}}" method="post">
            @csrf
            <!-- How far is the village from the nearest forest -->
            <div class="form-group">
                <label for="forestDistance">How far is the village from the nearest forest:</label>
                <input type="text" class="form-control" id="forestDistance" name="forestDistance" required>
            </div>

            <!-- How many times do you cook per day -->
            <div class="form-group">
                <label for="cookingFrequency">How many times do you cook per day:</label>
                <input type="number" class="form-control" id="cookingFrequency" name="cookingFrequency" required>
            </div>

            <!-- How many hours do you spend in cooking everyday -->
            <div class="form-group">
                <label for="cookingHours">How many hours do you spend in cooking everyday:</label>
                <input type="number" class="form-control" id="cookingHours" name="cookingHours" required>
            </div>

            <!-- Where do you cook -->
            <div class="form-group">
                <label>Where do you cook:</label><br>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="separateKitchen" name="cookingLocation" value="Separate kitchen" required>
                    <label class="form-check-label" for="separateKitchen">Separate kitchen</label><br>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="courtyardOpenFire" name="cookingLocation" value="Courtyard open fire" required>
                    <label class="form-check-label" for="courtyardOpenFire">Courtyard open fire</label><br>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="corridor" name="cookingLocation" value="Corridor" required>
                    <label class="form-check-label" for="corridor">Corridor</label><br>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="insideBedroom" name="cookingLocation" value="Inside the bedroom" required>
                    <label class="form-check-label" for="insideBedroom">Inside the bedroom</label><br>
                </div>
            </div>

            <!-- Type of cookstove used -->
            <div class="form-group">
                <label>Type of cookstove used:</label><br>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="mudClaySinglePot" name="cookstoveType" value="Traditional mud clay single pot" required>
                    <label class="form-check-label" for="mudClaySinglePot">Traditional mud clay single pot</label><br>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="mudClayDoublePot" name="cookstoveType" value="Traditional mud clay double pot" required>
                    <label class="form-check-label" for="mudClayDoublePot">Traditional mud clay double pot</label><br>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="electricStove" name="cookstoveType" value="Electric stove" required>
                    <label class="form-check-label" for="electricStove">Electric stove</label><br>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="keroseneStove" name="cookstoveType" value="Kerosene stove" required>
                    <label class="form-check-label" for="keroseneStove">Kerosene stove</label><br>
                </div>
            </div>

            <!-- Fuel used for cooking -->
            <div class="form-group">
                <label>Fuel used for cooking:</label><br>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="firewood" name="fuelType" value="Firewood">
                    <label class="form-check-label" for="firewood">Firewood</label><br>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="charcoal" name="fuelType" value="Charcoal">
                    <label class="form-check-label" for="charcoal">Charcoal</label><br>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="electricity" name="fuelType" value="Electricity">
                    <label class="form-check-label" for="electricity">Electricity</label><br>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="gas" name="fuelType" value="Gas">
                    <label class="form-check-label" for="gas">Gas</label><br>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="agroResidue" name="fuelType" value="Agro-Residue">
                    <label class="form-check-label" for="agroResidue">Agro-Residue</label><br>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="sawdust" name="fuelType" value="Sawdust">
                    <label class="form-check-label" for="sawdust">Sawdust</label><br>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="otherFuel" name="fuelType" value="Other">
                    <label class="form-check-label" for="otherFuel">Others (please specify)</label><br>
                </div>
            </div>

            <!-- If Firewood, What is the source? -->
            <div class="form-group">
                <label for="firewoodSource">If Firewood, What is the source?</label>
                <input type="text" class="form-control" id="firewoodSource" name="firewoodSource">
            </div>

            <!-- Problems using current cookstove -->
            <div class="form-group">
                <label>Problems using current cookstove:</label><br>
                <input type="text" class="form-control" id="problem1" name="problems" placeholder="Problem 1"><br>
                <input type="text" class="form-control" id="problem2" name="problems" placeholder="Problem 2"><br>
                <input type="text" class="form-control" id="problem3" name="problems" placeholder="Problem 3"><br>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and jQuery scripts (if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



@include('layout.footer')

