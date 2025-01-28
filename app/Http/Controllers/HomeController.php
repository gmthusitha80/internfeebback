<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Models\Students;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		
		if(Auth::user()->id==33)
		{
			return redirect()->route('students');
		}
		else{
		$students=Students::where('supid',Auth::user()->id)->get();
		//dd(Auth::user()->id);
        return view('home')->with('students',$students);
		}
    }
	 public function getstu($id)
    {
		
		$student=Students::where('id',$id)->first();
		//dd(Auth::user()->id);
        return view('student')->with('student',$student);
    }

    public function getstulist()
    {
		
		$students=Students::select('*')->paginate(1);
		//dd(Auth::user()->id);
        return view('studentlist')->with('students',$students);
    }

    public function search(Request $request)
    {
         $search = $request->get('search');
         if($search != ''){
            $students = Students::where('name','like', '%' .$search. '%')
                                  ->orWhere('email','like', '%' .$search. '%')
                                  ->orWhere('tp','like', '%' .$search. '%')
                                  ->orWhere('scno','like', '%' .$search. '%')
                                  ->orWhere('indname','like', '%' .$search. '%')
                                  ->paginate(1);
            $students->appends(array('search'=> $search,));
         if(count($students )>0){
            return view('studentlist')->with('students',$students);
         }
         return back()->with('error','No results Found');
     }
     else{
        $students=Students::select('*')->paginate(1);
		//dd(Auth::user()->id);
        return view('studentlist')->with('students',$students);
     }
 }

	public function update(Request $request,$id)
    {
		$Validator = Validator::make($request->all(), array(
                    'op1'    =>  'required',
                    'op2'   =>  'required',
                    'op3'    =>  'required',
					'op4'    =>  'required',
                    'op5'    =>  'required',
                    'op6' =>  'required',
                    'op7'       =>  'required',
					'op8'      =>  'required',
                    'op9' =>   'required',
                    'op10'  =>   'required',
					'op11'  =>   'required'
                ),
				
					[
					'op1.required'   =>'Please select One Option',
					'op2.required'   =>'Please select One Option',
					'op3.required'   =>'Please select One Option',
					'op4.required'   =>'Please select One Option',
					'op5.required'   =>'Please select One Option',
					'op6.required'   =>'Please select One Option',
					'op7.required'   =>'Please select One Option',
					'op8.required'   =>'Please select One Option',
					'op9.required'   =>'Please select One Option',
					'op10.required'   =>'Please select One Option',
					'op11.required'   =>'Please select One Option'
					]
				
				
				);
			
                $Validator->sometimes(['rooms','workers'], 'required', function ($input) {
                    return $input->busi_t == 'Hotel';
                });
                if($Validator->fails()){
					//dd($Validator->messages()->all());
                    return Redirect::back()
                        ->withErrors($Validator)
                        ->withInput();
                }else
				{
					$op1      = $request->input('op1');
                    $op2    = $request->input('op2');
                    $op3   = $request->input('op3');
                    $op4    = $request->input('op4');
                    $op5    = $request->input('op5');
                    $op6    = $request->input('op6');
                    $op7    = $request->input('op7');
                    $op8  = $request->input('op8');
                    $op9    = $request->input('op9');
                    $op10  = $request->input('op10');
                    $op11       = $request->input('op11');
                    $feedback     = $request->input('feedback');
					
                   $update=Students::where('id', $id)->update(['op1'=>$op1,'op2'=>$op2,'op3'=>$op3,'op4'=>$op4,'op5'=>$op5,'op6'=>$op6,'op7'=>$op7,'op8'=>$op8,'op9'=>$op9,'op10'=>$op10,'op11'=>$op11,'feedback'=>$feedback]);
					//dd($update);
					if($update)
					{
						return  Redirect::back()->with('success','Details Successfully Updated');
					}
				   else
				   {
						return  Redirect::back()->with('error','There was an error Updating User');
					}
					
}
				
		
    }
}
