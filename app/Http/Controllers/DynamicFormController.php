<?php

namespace App\Http\Controllers;

use App\DynamicForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class DynamicFormController extends Controller
{
    
    public function index()
    {
        return view('dynamic_field');
    }

    public function insert(Request $request)
    {
     if($request->ajax())
     {
      $rules = array(
        'fullname.*'  => 'required',
        'university.*'  => 'required',
        'class.*'  => 'required',
        'year.*'  => 'required'
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $fullname = $request->fullname;
      $university = $request->university;
      $class = $request->class;
      $year = $request->year;
      for($count = 0; $count < count($fullname); $count++)
      {
       $data = array(
        'fullname' => $fullname[$count],
        'university' => $university[$count],
        'class' => $class[$count],
        'year' => $year[$count],
       );
       $insert_data[] = $data; 
      }

      DynamicForm::insert($insert_data);
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
    }
}
