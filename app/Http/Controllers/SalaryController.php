<?php

namespace App\Http\Controllers;

use App\Emp;
use App\Salary;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Excel;
use File;

class SalaryController extends Controller
{
    public function index()
    {
        return view('add-salary');
    }

    public function import(Request $request){
        //validate the xls file
        $this->validate($request, array(
            'file'      => 'required'
        ));

        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {

                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()) {

                    foreach ($data as $key => $value) {

                        $employ = Emp::where('email',$value->email)->first();

                        if (!count($employ)){
                            Emp::create([
                                'email' => $value->email,
                                'name'=>$value->name,
                                'designation'=>$value->designation,
                                'status'=>$value->status,
                                'doj'=>$value->doj
                            ]);
                        }
                        if(!empty($value['net_payable']))

                            $insert = [
                                'email' => $value->email,
                                'basic_salary' => $value->basic_salary,
                                'absence' => $value->absences,
                                'late' => $value->late,
                                'other_deduction' => $value->other_deductions,
                                'lunch' => $value->lunch,
                                'tax_ded' => $value->tax_ded,
                                'bonus' => $value->bonus,
                                'total_deduction' => $value->total_deduction,
                                'net_payable' => $value->net_payable,
                            ];

                        if(!empty($insert)){
                            $insertData = Salary::create($insert);

                            if ($insertData) {
                                Session::flash('success', 'Your Data has successfully imported');
                            }else {
                                Session::flash('error', 'Error inserting the data..');
                                return back();
                            }
                        }
                    }


                }

                return back();

            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }

    public function show()
    {
        $employee = Emp::all();

        return view('emp',compact('employee'));
    }
    public function salary($id)
    {
        $employee=Emp::findOrFail($id);
        $salary=$employee->salary;


        return view('salary',compact('salary'));
    }
}