@extends('layout.master')
@section('content')

      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row" >
        <div class="col-md-12">
         @include('adminLayout.header')
        </div>
        </div>
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"style="font-size: 20px">QUẢN LÝ PHÒNG BAN</h4>
                    {{-- update  --}}
                    @if(isset($data)) 
                    <form  action="/admin/edit_department" method="POST">
                      @csrf
                     
                              <label for="tieude">Sửa phòng ban</label>
                               <input type="text" value="{{$data['name_depart']}}" name="Department" class="form-control" id="tieude" placeholder="update  phòng ban">

                               <input type="text" value="{{$data['description']}}" name="mota" class="form-control mt-3" id="mota" placeholder="mô tả phòng ban">
                               <input type="hidden" value="{{$data['id_department']}}" name="id_department" class="form-control mt-3">
                               <select class="form-control mt-3" name="state">
                                 @php 
                                    $selected = '';
                                    $arr_selected = [0,1];
                                   
                                    $name_select = ['Hiện','Ẩn'];
                                    $count = count($arr_selected);
                                   
                                    for($i=0;$i< $count;$i++) {
                                    
                                      if($arr_selected[$i] == $data['state'] ) {
                                        $selected = 'selected';
                                      }
                                      else {
                                        $selected = '';
                                      }
                                      
                                        echo '<option '.$selected.' value="'.$arr_selected[$i].'">'.$name_select[$i].'</option>';
                                    }
                                 
                                 @endphp
                                  
                                 
                                 
                                </select>
                              <input value="cập nhật phòng ban" type="submit" class="btn btn-outline-success mt-3" style="font-size: 20px"/>
                              {{-- <a  class="btn btn-warning btn-fw mt-3"  href="{{route('delete_department')}}?delete_department={{$data['id_department']}}">Xóa phòng ban</a> --}}
                              {{-- <input value="Xóa phòng ban" type="submit" class="btn btn-warning btn-fw mt-3" style="font-size: 20px"/> --}}
                             
                           
                     
                      </form>
                   @else
                    {{-- end update --}}
                    {{-- add  --}}
                    <form  action="/admin/addDepartment" method="POST">
                    @csrf
                    @php 
                    $id__depart = '';
                    $name = 'Thêm phòng ban';
                    $name_depart = '';
                    $class = 'btn btn-outline-success';
                    if (isset($name_depart) && !empty($name_depart))  {
                        $name = 'Sửa tên phòng ban';
                        $class = 'btn btn-warning';
                    }
                    @endphp
                    @if( isset($id_depart))
                    @php
                        $id__depart =$id_depart;
                    @endphp
                    @endif
                                 <label for="tieude">Thêm mới phòng ban</label>
                                 <input type="text" value="{{$name_depart}}" name="Department" class="form-control" id="tieude" placeholder="Thêm mới phòng ban">
                                 <input type="text" value="" name="mota" class="form-control mt-3" id="mota" placeholder="Mô tả phòng ban">
                            <input value="{{$name}}" type="submit" class="{{$class}} mt-3"style="font-size: 20px"/>
                            
                            
                         
                   
                    </form>
  {{-- end add  --}}
                    <table class="table table-striped">
                      <thead>

                        <tr>
                          <th> ID</th>
                          <th> Tên phòng ban </th>
                          <th> Mô tả </th>
                          <th> Ngày tạo </th>

                        </tr>
                       
                      </thead>
                      <tbody>
                   
                      @foreach ($Departments as $Department)
                        <tr>
                      
                        <td class="py-1"> {{$Department->id_department}} </td>
                          <td> <a href="editDepartment/{{$Department->id_department}}">  {{$Department->name_depart}} </a></td>
                          <td> {{$Department->description}}</td>
                          <td> {{$Department->created_at}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
          </div>
        
@endsection