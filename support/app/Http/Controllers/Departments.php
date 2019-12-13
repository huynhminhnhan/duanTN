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
        $Department->description = strip_tags($nameDepartment['mota']);
        
        $Department->save();
        return redirect('admin/Departments');
       
        
    }
    
    // public function delete_department(Request $request) {
    //     $data = $request->all();
    //     $id = $data['delete_department'];
    //     $Department = Department::find($id);
    //     $Department->delete();
    //     return redirect('admin/Departments')->with("success",'Xóa phòng ban thành công');
       
        
    // }
    public function edit_department(Request $request) {
        $nameDepartment = $request->all();
        if (empty($nameDepartment['Department'])) {
            return redirect('/admin/Departments/')->with('erro', 'Trường phòng ban không được bỏ trống');
        }
        $checkNameDeparment = Department::where('name_depart',$nameDepartment)->get()->first();
       
        if ($checkNameDeparment) {
            return redirect('/admin/Departments/')->with('erro', 'Phòng ban đã tồn tại');
        }
        $Department =  Department::where('id_department',$nameDepartment['id_department']);
        
        $Department->update([
           "name_depart" => strip_tags($nameDepartment['Department']),
           "description" => strip_tags($nameDepartment['mota']),
           "state" => strip_tags($nameDepartment['state'])
        ]);
            
        return redirect('admin/Departments');
       
        
    }
    
    public function editDepartments(Request $request) {
        $id = $request->route('id');
      
        $Department = Department::where('id_department',$id)
        ->get()->first();
        
        $Department_arr = $Department->toArray();
        // dd($Department_arr);
            // dd($Department_arr);
        return view('adminLayout/Departments',["data" => $Department_arr]);
       
        
    }
}
