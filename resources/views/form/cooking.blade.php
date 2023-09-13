
@include('layout.header')
    
    @include('layout.sidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuel Use for Cooking</title>
   
    <style>
        / Add some general styles to the body /
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

/ Style the container for the form /
.container {
    max-width: 600px;
    margin: 1rem;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/ Style form headings /
h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

/ Style form labels /
label {
    font-weight: bold;
}

/ Style form checkboxes /
.form-check-input[type="checkbox"] {
    margin-right: 5px;
}

/ Style form inputs and number inputs /
.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

/ Style the submit button /
.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

/ Style the INR labels /
.input-group-text {
    background-color: #007bff;
    color: #fff;
    border: none;
    height: 3rem;
}

/ Adjust spacing between elements /
.mb-3 {
    margin-bottom: 20px;
}

    </style>
</head>
<body>

    
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

    <div class="container" style="    width: 66%;
    margin: 1rem;">
        <h1 class="mb-4">Fuel Use for Cooking</h1>

        
  
        <form class="row g-3" method="POST" action="{{url('add_cooking')}}">
              @csrf
            <!-- Charcoal -->
            <div class="mb-3">
                <label for="charcoalUsage" class="form-label">Charcoal:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="charcoalUsage" name="charcoalUsage" value="1" class="form-check-input">
                    <label for="charcoalUsage" class="form-check-label">Yes</label>
                    
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="noCharcoalUsage" name="charcoalUsage" value="0" class="form-check-input">
                    <label for="noCharcoalUsage" class="form-check-label">No</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="charcoalQuantity" class="form-label">Quantity of usage:</label>
                <input type="number" id="charcoalQuantity" name="charcoalQuantity" class="form-control">
            </div>
            <div class="mb-3">
                <label for="charcoalUnit" class="form-label">Unit:</label>
                <input type="text" id="charcoalUnit" name="charcoalUnit" class="form-control">
            </div>
            <div class="mb-3">
                <label for="charcoalMoney" class="form-label">Money spent on fuel per month:</label>
                <div class="input-group">
                    <input type="number" id="charcoalMoney" name="charcoalMoney" class="form-control">
                    <span class="input-group-text">INR</span>
                </div>
            </div>

            <!-- Firewood -->
            <div class="mb-3">
                <label for="firewoodUsage" class="form-label">Firewood:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="firewoodUsage" name="firewoodUsage" value="1" class="form-check-input">
                    <label for="firewoodUsage" class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="noFirewoodUsage" name="firewoodUsage" value="0" class="form-check-input">
                    <label for="noFirewoodUsage" class="form-check-label">No</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="firewoodQuantity" class="form-label">Quantity of usage:</label>
                <input type="number" id="firewoodQuantity" name="firewoodQuantity" class="form-control">
            </div>
            <div class="mb-3">
                <label for="firewoodUnit" class="form-label">Unit:</label>
                <input type="text" id="firewoodUnit" name="firewoodUnit" class="form-control">
            </div>
            <div class="mb-3">
                <label for="firewoodMoney" class="form-label">Money spent on fuel per month:</label>
                <div class="input-group">
                    <input type="number" id="firewoodMoney" name="firewoodMoney" class="form-control">
                    <span class="input-group-text">INR</span>
                </div>
            </div>

            <!-- LPG -->
            <div class="mb-3">
                <label for="lpgUsage" class="form-label">LPG:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="lpgUsage" name="lpgUsage" value="1" class="form-check-input">
                    <label for="lpgUsage" class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="noLpgUsage" name="lpgUsage" value="0" class="form-check-input">
                    <label for="noLpgUsage" class="form-check-label">No</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="lpgQuantity" class="form-label">kg or Cylinders per month:</label>
                <input type="number" id="lpgQuantity" name="lpgQuantity" class="form-control">
            </div>
            <div class="mb-3">
                <label for="lpgMoney" class="form-label">Money spent on fuel per month:</label>
                <div class="input-group">
                    <input type="number" id="lpgMoney" name="lpgMoney" class="form-control">
                    <span class="input-group-text">INR</span>
                </div>
            </div>

            <!-- Kerosene -->
            <div class="mb-3">
                <label for="keroseneUsage" class="form-label">Kerosene:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="keroseneUsage" name="keroseneUsage" value="1" class="form-check-input">
                    <label for="keroseneUsage" class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="noKeroseneUsage" name="keroseneUsage" value="0" class="form-check-input">
                    <label for="noKeroseneUsage" class="form-check-label">No</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="keroseneQuantity" class="form-label">Liters per month:</label>
                <input type="number" id="keroseneQuantity" name="keroseneQuantity" class="form-control">
            </div>
            <div class="mb-3">
                <label for="keroseneMoney" class="form-label">Money spent on fuel per month:</label>
                <div class="input-group">
                    <input type="number" id="keroseneMoney" name="keroseneMoney" class="form-control">
                    <span class="input-group-text">INR</span>
                </div>
            </div>

            <!-- Coal -->
            <div class="mb-3">
                <label for="coalUsage" class="form-label">Coal:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="coalUsage" name="coalUsage" value="1" class="form-check-input">
                    <label for="coalUsage" class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="noCoalUsage" name="coalUsage" value="0" class="form-check-input">
                    <label for="noCoalUsage" class="form-check-label">No</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="coalQuantity" class="form-label">Quantity of usage:</label>
                <input type="number" id="coalQuantity" name="coalQuantity" class="form-control">
            </div>
            <div class="mb-3">
                <label for="coalUnit" class="form-label">Unit:</label>
                <input type="text" id="coalUnit" name="coalUnit" class="form-control">
            </div>
            <div class="mb-3">
                <label for="coalMoney" class="form-label">Money spent on fuel per month:</label>
                <div class="input-group">
                    <input type="number" id="coalMoney" name="coalMoney" class="form-control">
                    <span class="input-group-text">INR</span>
                </div>
            </div>

            <!-- Electricity -->
            <div class="mb-3">
                <label for="electricityUsage" class="form-label">Electricity:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="electricityUsage" name="electricityUsage" value="1" class="form-check-input">
                    <label for="electricityUsage" class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" id="noElectricityUsage" name="electricityUsage" value="0" class="form-check-input">
                    <label for="noElectricityUsage" class="form-check-label">No</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="electricityQuantity" class="form-label">kWh per month:</label>
                <input type="number" id="electricityQuantity" name="electricityQuantity" class="form-control">
            </div>
            <div class="mb-3">
                <label for="electricityMoney" class="form-label">Money spent on fuel per month:</label>
                <div class="input-group">
                    <input type="number" id="electricityMoney" name="electricityMoney" class="form-control">
                    <span class="input-group-text">INR</span>
                </div>
            </div>

            <!-- Other fuels -->
            <div class="mb-3">
                <label for="otherFuelUsage" class="form-label">Other fuels (please specify):</label>
                <input type="text" id="otherFuelUsage" name="otherFuelUsage" class="form-control">
            </div>
            <!-- Submit Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-primary  text-right">Sumbit</button>
            </div>
        </form>
    </div>

    
</body>
</html>
@include('layout.footer')
