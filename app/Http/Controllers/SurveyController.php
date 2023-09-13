<?php

namespace App\Http\Controllers;

use App\Models\household;
use App\Models\layout;
use App\Models\general;
use App\Models\profile;
use App\Models\cooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{
    
   public function general (){


    return view('form.general');
   }

   public function layout (){


      return view('form.layout');
     }
     public function profile (){


      return view('form.profile');
     }
     public function household (){


      return view('form.household');
     }
     public function cooking (){


      return view('form.cooking');
     }

     public function congratulations(){

      return view('form.Congratulations');
  
  
    }

     public function add_layout(request $request){
      // echo("hello");
      // dd($request);
          // Validate the incoming form data
    
$validatedData=$request->all();
  // Create a new model instance and fill it with the validated data
  $formData = new layout();
  $formData->date = $validatedData['date'];
  $formData->name = $validatedData['name'];
  $formData->email = $validatedData['email'];
  $formData->password = bcrypt($validatedData['password']);
  $formData->address = $validatedData['address'];

  // Save the data to the database
  $formData->save();

  // Redirect back with a success message
//   return redirect()->back()->with('success', 'Data added successfully');
return redirect('general');

     }

     public function add_general(request $request){
      // dd($request);
         // Validate the form data
         $validatedData = $request->all();
         $rs=layout::all()->max('id');


  $formData = new general();

         
           $formData->  first_name =$validatedData['firstName'];
             $formData->middle_name =$validatedData['middleName'];
            $formData-> last_name =$validatedData['lastName'];
            $formData-> village =$validatedData['village'];
            $formData-> taluka =$validatedData['taluka'];
             $formData->district =$validatedData['district'];
             $formData->layout_id= $rs;
      
$formData->save();
 
         
      
 
         // Redirect to a success page or return a response
  return redirect('profile');

// return redirect('general');
         
     }
     public function add_household(request $request){
// dd($request);
$validateData=$request->all();
$rs=layout::all()->max('id');

$formData = new household();

$formData->forest_distance=$validateData['forestDistance'];
$formData->cooking_frequency=$validateData['cookingFrequency'];
$formData->cooking_hours=$validateData['cookingHours'];
$formData->cooking_location=$validateData['cookingLocation'];
$formData->cookstove_type=$validateData['cookstoveType'];
$formData->fuel_types=$validateData['fuelType'];
// $formData->fuel_type = json_encode($validateData['fuelType']);

$formData->firewood_source=$validateData['firewoodSource'];
$formData->problems=$validateData['problems'];
// $formData->problems = json_encode($validateData['problems']);
$formData->layout_id= $rs;


$formData->save();
return redirect('cooking');



     }
  
     public function add_profile(request $request){

    //  dd($request);
$validateData=$request->all();
$rs=layout::all()->max('id');

  $profile= new profile();

      // Create a new instance of the model and save the data
      
      $profile->respondentName = $validateData['respondentName'];
      $profile->age = $validateData['age'];
      $profile->sex = $validateData['sex'];
      $profile->location = $validateData['location'];
      $profile->phone = $validateData['phone'];
      $profile->occupation = $validateData['occupation'];
      $profile->income = $validateData['income'];
      $profile->economicClass = $validateData['economicClass'];
      $profile->adultMembers = $validateData['adultMembers'];
     $profile->children = $validateData['children'];

      $profile->documents = $validateData['documents'];

      $profile->documentNumber = $validateData['documentNumber'];
     // $profile->children = $validateData['children'];
     $profile->layout_id= $rs;

      // Set other fields here

      // Save the record
      $profile->save();

      // Redirect back with a success message or do any other necessary actions
return redirect('household');
      
  }



  public function add_cooking(Request $request)
  {
     
      $validator = validator::make($request->all(), [
       
       'charcoalUsage' => 'required|boolean',
       'firewoodUsage' => 'required|boolean',
       'lpgUsage' => 'required|boolean',
       'keroseneUsage' => 'required|boolean',
       'coalUsage' => 'required|boolean',
       'electricityUsage' => 'required|boolean',
       'charcoalQuantity' => 'nullable|numeric',
       'charcoalUnit' => 'nullable|string',
       'charcoalMoney' => 'nullable|numeric',
       'firewoodQuantity' => 'nullable|numeric',
       'firewoodUnit' => 'nullable|string',
       'firewoodMoney' => 'nullable|numeric',
       'lpgQuantity' => 'nullable|numeric',
       'lpgMoney' => 'nullable|numeric',
       'keroseneQuantity' => 'nullable|numeric',
       'keroseneMoney' => 'nullable|numeric',
       'coalQuantity' => 'nullable|numeric',
       'coalUnit' => 'nullable|string',
       'coalMoney' => 'nullable|numeric',
       'electricityQuantity' => 'nullable|numeric',
       'electricityMoney' => 'nullable|numeric',
       'otherFuelUsage' => 'nullable|string',
   ]);
$rs=layout::all()->max('id');


   if ($validator->fails()) {
       return redirect()->back()->withErrors($validator)->withInput();
   }
   
      // Create a new Sale record
      $sale = new cooking();
    
      // Set the values for each type of fuel based on usage
      $sale->charcoalUsage = $request->input('charcoalUsage');
      if ($request->input('charcoalUsage') == "1") {
          $sale->charcoalQuantity = $request->input('charcoalQuantity');
          $sale->charcoalUnit = $request->input('charcoalUnit');
          $sale->charcoalMoney = $request->input('charcoalMoney');
      }
      $sale->firewoodUsage = $request->input('firewoodUsage');
      if ($request->input('firewoodUsage') == "1") {
          $sale->firewoodQuantity = $request->input('firewoodQuantity');
          $sale->firewoodUnit = $request->input('firewoodUnit');
          $sale->firewoodMoney = $request->input('firewoodMoney');
      }
  
      $sale->lpgUsage = $request->input('lpgUsage');
      if ($request->input('lpgUsage') == "1") {
          $sale->lpgQuantity = $request->input('lpgQuantity');
          $sale->lpgMoney = $request->input('lpgMoney');
      }
  
      $sale->keroseneUsage = $request->input('keroseneUsage');
      if ($request->input('keroseneUsage') == "1") {
          $sale->keroseneQuantity = $request->input('keroseneQuantity');
          $sale->keroseneMoney = $request->input('keroseneMoney');
      }
  
      $sale->coalUsage = $request->input('coalUsage');
      if ($request->input('coalUsage') == "1") {
          $sale->coalQuantity = $request->input('coalQuantity');
          $sale->coalUnit = $request->input('coalUnit');
          $sale->coalMoney = $request->input('coalMoney');
      }
  
      $sale->electricityUsage = $request->input('electricityUsage');
      if ($request->input('electricityUsage') == "1") {
          $sale->electricityQuantity = $request->input('electricityQuantity');
          $sale->electricityMoney = $request->input('electricityMoney');
      }
  
      $sale->otherFuelUsage = $request->input('otherFuelUsage');
     $sale->layout_id= $rs;

  
      $sale->save();
  
      // Optionally, you can redirect to a success page or perform other actions.
      return redirect()->route('congratulations');
      
  }

  public function show_list(){
       // Retrieve all survey records
       $surveys = layout::all();
       $generalInformations = general::all();
       
       $formData3 = Profile::all();
   
       $formData4 = household::all();
        
       $formData5 = cooking::all();


       // Pass the data to the view for listing
       return view('form.list', compact('surveys','generalInformations','formData3','formData4','formData5'));

       
  }

}





     
      


     

