@include('layout.header')
@include('layout.sidebar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Data</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container " style="margin-top: 6rem!important;     margin-left: 20rem;">
        <h1>layout Data</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($surveys as $survey)
                <tr>
                    <td>{{ $survey->date }}</td>
                    <td>{{ $survey->name }}</td>
                    <td>{{ $survey->email }}</td>
                    <td>{{ $survey->address }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container " style="margin-top: 6rem!important ; margin-left: 20rem;">

        <h1>General Information</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Village</th>
                    <th>Taluka</th>
                    <th>District</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($generalInformations as $info)
                <tr>
                    <td>{{ $info->first_name }}</td>
                    <td> {{ $info->last_name }}</td>
                    <td>{{ $info->village }}</td>
                    <td> {{ $info->taluka }}</td>
                    <td>{{ $info->district }}</td>
                    <!-- Add more columns as needed -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container " style="margin-top: 6rem!important ; margin-left: 20rem;">

        <h3 style="margin-top:5rem;"> Profile Information</h3>
        <table class="table  table-striped" style="font-size: 10px;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name of Respondent</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th> Location (Lat/Long)</th>
                    <th>Phone Number</th>
                    <th>Occupation</th>
                    <th>Yearly Income (INR)</th>
                    <th>Economic Class</th>
                    <th>Number of Adult Family Members</th>
                    <th>Number of Children (<6 years)</th>
                    <th>Government Documents</th>
                    <th>Document Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formData3 as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->respondentName }}</td>
                    <td>{{ $data->age }}</td>
                    <td>{{ $data->sex }}</td>
                    <td>{{ $data->location }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->occu }}</td>
                    <td>{{ $data->income }}</td>
                    <td>{{ $data->economicClass }}</td>
                    <td>{{ $data->adultMembers }}</td>
                    <td>{{ $data->children }}</td>
                    <td>{{ $data->documents }}</td>
                    <td>{{ $data->documentNumber }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    






    <div class="container" style="margin-top: 6rem!important ; margin-left: 20rem;">
        <h3 style="margin-top:5rem;">Fuel Consumption Pattern Data</h3>
        <table class="table  table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>How far is the village from the nearest forest</th>
                    <th>How many times do you cook per day</th>
                    <th>How many hours do you spend in cooking everyday</th>
                    <th>Where do you cook</th>
                    <th>Type of cookstove used</th>
                    <th>Fuel used for cooking</th>
                    <th>If Firewood, What is the source?</th>
                    <th>Problems using current cookstove</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($formData4 as $data)
                <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td> {{ $data->forest_distance }}</td>
                    <td>{{ $data->cooking_frequency }}</td>
                    <td>{{ $data->cooking_hours }}</td>
                    <td>{{ $data->cooking_location }}</td>
                    <td> {{ $data->cookstove_type }}</td>
                    <td>{{ $data->fuel_type }}</td>
                    <td>{{ $data->firewood_source }}</td>
                    <td> {{ $data->problems }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container" style="margin-top: 6rem!important ; margin-left: 20rem;">
        <h3 style="margin-top:5rem;">Fuel Use for Cooking Information</h3>
        <table class="table  table-striped" style="font-size: 10px;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Charcoal</th>
                    <th>Quantity of usage</th>
                    <th>Unit</th>
                    <th>Money per month (INR)</th>
                    <th>Firewood</th>
                    <th>Quantity of usage</th>
                    <th>Unit</th>
                    <th>Money per month (INR)</th>
                    <th>LPG</th>
                    <th>kg or Cylinders per month</th>
                    <th>Money per month (INR)</th>
                    <th>Kerosene</th>
                    <th>Liters per month</th>
                    <th>Money per month (INR)</th>
                    <th>Coal</th>
                    <th>Quantity of usage</th>
                    <th>Unit</th>
                    <th>Money per month (INR)</th>
                    <th>Electricity</th>
                    <th>kWh per month</th>
                    <th>Money per month (INR)</th>
                    <th>Other fuels (please specify)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formData5 as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->charcoalUsage ? 'Yes' : 'No' }}</td>
                    <td>{{ $data->charcoalQuantity }}</td>
                    <td>{{ $data->charcoalUnit }}</td>
                    <td>{{ $data->charcoalMoney }}</td>
                    <td>{{ $data->firewoodUsage ? 'Yes' : 'No' }}</td>
                    <td>{{ $data->firewoodQuantity }}</td>
                    <td>{{ $data->firewoodUnit }}</td>
                    <td>{{ $data->firewoodMoney }}</td>
                    <td>{{ $data->lpgUsage ? 'Yes' : 'No' }}</td>
                    <td>{{ $data->lpgQuantity }}</td>
                    <td>{{ $data->lpgMoney }}</td>
                    <td>{{ $data->keroseneUsage ? 'Yes' : 'No' }}</td>
                    <td>{{ $data->keroseneQuantity }}</td>
                    <td>{{ $data->keroseneMoney }}</td>
                    <td>{{ $data->coalUsage ? 'Yes' : 'No' }}</td>
                    <td>{{ $data->coalQuantity }}</td>
                    <td>{{ $data->coalUnit }}</td>
                    <td>{{ $data->coalMoney }}</td>
                    <td>{{ $data->electricityUsage ? 'Yes' : 'No' }}</td>
                    <td>{{ $data->electricityQuantity }}</td>
                    <td>{{ $data->electricityMoney }}</td>
                    <td>{{ $data->otherFuelUsage }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>






    <!-- Add Bootstrap JS and jQuery scripts here (if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>