<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use DataTables;
use Auth;
use App\DataTables\StudentDataTable;
class StudentController extends Controller
{
   public function index(StudentDataTable $datatable)
    {
		if(Auth::user()->id==33)
		{
        return $datatable->render('welcome');
		}
		
    }


    
}
