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
                    <form  action="/admin/addDepartment" method="POST">
                    @csrf
                    @php 
                    $id__depart = '';
                    $name = 'Thêm phòng ban';
                    $name_depart = '';
                    $class = 'btn btn-outline-success';
                    $Attrname = 'Department';
                    
                    if (isset($name_depart) && !empty($name_depart))  {
                        $name = 'Sửa tên phòng ban';
                        $class = 'btn btn-warning';
                        $Attrname = 'EdDepartment';
                    }
                    @endphp
                    @if( isset($id_depart))
                    @php
                        $id__depart =$id_depart;
                    @endphp
                    @endif
                                 <label for="tieude">Thêm mới phòng ban</label>
                                 <input type="text" value="{{$name_depart}}" name="{{$Attrname}}" class="form-control" id="tieude" placeholder="Thêm mới phòng ban">
                                 <input type="hidden" value="{{$id__depart}}" name="id_depart">
                                   

                            <input value="{{$name}}" type="submit" class="{{$class}} mt-3"style="font-size: 20px"/>
                            
                         
                   
                    </form>
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
                          <td> <a href="?id={{$Department->id_department}}">  {{$Department->name_depart}} </a></td>
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
              
          </div>
          </div>
        
@endsection