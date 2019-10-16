<?php

namespace App\Http\Controllers;
use App\Department;
use Illuminate\Http\Request;

class Departments extends Controller
{
    public function showDepartments() {
        $name__depart = '';
        $id_depart = '';
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $Department = Department::where('id_department',$id)->get()->first();
            $name__depart = $Department->name_depart;
            $id_depart = $Department->id_department;
        }
        $Departments = Department::all();
        return view('adminLayout/Departments',[
            "Departments"=> $Departments,
            "name_depart" => $name__depart,
            "id_depart" =>$id_depart
            ]);
    }

    public function addDepartments(Request $request) {
        $nameDepartment = $request->all();
        if (empty($nameDepartment['Department'])) {
            return redirect('/admin/Departments/')->with('erro', 'Trường phòng ban không được bỏ trống');
        }
        $checkNameDeparment = Department::where('name_depart',$nameDepartment)->get()->first();
       
        if ($checkNameDeparment) {
            return redirect('/admin/Departments/')->with('erro', 'Phòng ban đã tồn tại');
        }
        $Department = new Department();
        $Department->name_depart = strip_tags($nameDepartment['Department']);
        $Department->save();
        return redirect('admin/Departments');
       
        
    }
}
