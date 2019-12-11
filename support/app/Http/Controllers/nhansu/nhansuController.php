<?php

namespace App\Http\Controllers\nhansu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chamcong;
use App\Account;
use App\User;
use App\Http\Imports\importChamCong;
use Maatwebsite\Excel\Facades\Excel;


class nhansuController extends Controller
{
    
    public function viewImportChamCong() {
        return view('nhansu/import');
    }
    public function viewquanlychamcong() {
        
        $account_chamcong =  Chamcong::join('account', 'account.user_id', '=', 'Chamcong.id_user');
       

        $Chamcong = $account_chamcong->paginate();
       
        $data = $Chamcong->items();
        $link = $Chamcong->links();
      
       
      
        return view('nhansu/quanlychamcong',array(
            "panigation" => $link,
            "data" => $data
           
        ));
    }

    public function editchamcong(Request $Request) {
       
        $id = $Request->route('id');
        $chamcong = Chamcong::find($id)
        ->join('account', 'account.user_id', '=', 'Chamcong.id_user')
        ->get()->first();
      
        $arr_chamcong = $chamcong->toArray();
        // dd($arr_chamcong);
        return view('nhansu/addnew',["data"=>$arr_chamcong]);
    }
    public function viewthemchamcong(Request $Request) {
       
        return view('nhansu/addnew');
    }
    public function serch_name_ajax() {
        $data = request()->all();
        $output = '';
        $user_role =  User::get()->load('roles');
        $arr_id_acount = array();
        if($user_role) {
            
        foreach ($user_role as $items) {
            if ($items->hasRole('employees')) {
               array_push($arr_id_acount,$items->id);
             }
            }
        
        }
        
        $Account = Account::whereIn('user_id', $arr_id_acount)
        ->where('name', 'like', '%' . $data['name_nv'] . '%')->get();
        if($Account) {
            $output .=  '<ul class="list_nv">';
            foreach ($Account as $key => $Account) {
                $output .= '<li> <a class="user_id" href="'.$Account->user_id.'">'.$Account->name.'</a></li>';
            }
            $output .=  '</ul>';
        }
        return $output;
    }
    public function add_cham_cong() {
        $data = request()->all();
        if(empty($data['id_nv'])) {
            return redirect()->route('quanlychamcong')
        ->with('error', 'Có lỗi xãy ra , vui lòng nhập lại');
        }
       
        Chamcong::create([
            'id_user' => $data['id_nv'],
            'ngay' => $data['ngay'],
            'gio_vao1' => $data['giovao_1'],
            'gio_ra1' => $data['giora_1'],
            'gio_vao2' => $data['giovao_2'],
            'gio_ra2' => $data['giora_2'],
            'ghi_chu' => $data['ghichu'],
            ]);

       return redirect()->route('quanlychamcong')
        ->with('success', 'Thêm chấm công thành công ');
    }
    public function edit_cham_cong() {
        $data = request()->all();
       
        if(empty($data['id_nv'])) {
            return redirect()->route('quanlychamcong')
        ->with('error', 'Có lỗi xãy ra , vui lòng nhập lại');
        }

       
        Chamcong::find($data['id_chamcong'])->update([
            'id_user' => $data['id_nv'],
            'ngay' => $data['ngay'],
            'gio_vao1' => $data['giovao_1'],
            'gio_ra1' => $data['giora_1'],
            'gio_vao2' => $data['giovao_2'],
            'gio_ra2' => $data['giora_2'],
            'ghi_chu' => $data['ghichu'],
            ]);

       return redirect()->route('quanlychamcong')
        ->with('success', 'update chấm công thành công ');
    }
    
    public function importData(Request $Request) {
         $file = $_FILES['filechamcong'];
         if (empty($file['name'])) {
            return redirect()->route('importchamcong')->with('success', 'Không được bỏ trống');
        }
        $destinationpath = public_path().'/filechamcong';
        $res = $Request->file('filechamcong')->move( $destinationpath,$file['name'] );
        $my_new_path = $res->getPath(); // retu
       
        
        $import = new importChamCong;
        Excel::import($import,$my_new_path.'/'.$file['name']);
        return redirect()->route('importchamcong')
        ->with('success', 'Import thành công '.$import->msg['success'].' thất bại '.$import->msg['error'].'')
        ->with('list_name_erro', $import->msg['name_err']);
        // dd($import);
    }
    
}
