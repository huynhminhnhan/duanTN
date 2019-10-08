@extends('layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row" >
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4" style="font-size: 20px">Chỉnh sửa tài khoản</h4>
                            <div class="row">
                            @if ($Account) 
                                <div class="form-group col-md-6">
                                <form  method="POST" action="/admin/user/" >
                                @csrf
                                    <label for="tieude">Tên tài khoản</label>
                                    <input type="text" value="{{$Account->name}}" name="name" class="form-control" id="tieude" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="title">Phòng ban</label>
                                    <select class="form-control"  name="Department" id="title">
                                      @if  ($Departments)

                                        @foreach ($Departments as $Departments )
                                             @php
                                            $selected = '';
                                            @endphp
                                            @if ($Departments->name_depart == $Account->name_depart)
                                            @php
                                                $selected = 'selected';
                                            @endphp
                                            @endif
                                            <option {{$selected }} value=" {{$Departments->id_department}}" >  {{$Departments->name_depart}}</option>
                                       
                                        @endforeach
                                        @endif
                                    </select>    
                                </div>
                                <div class="ml-3 mb-3">
                                {{-- @if($Roles->name == $RoleUser) 
                                            @php
                                            $checked = 'checked';
                                            @endphp
                                        @endif --}}
                                        @php
                                        $arrRule = [];
                                        @endphp
                                @foreach($RoleUser as $RoleUser)
                                        @php
                                        array_push($arrRule,$RoleUser->name);
                                        @endphp
                                      
                                    @endforeach
                                   
                                @if ($Roles) 
                                        @php
                                        $dem = 0;
                                        @endphp
                                    @foreach ($Roles as $Roles) 
                                            @php
                                            $dem ++;
                                            $checked = '';
                                            @endphp
                                        @if (in_array($Roles->name,$arrRule))
                                            @php
                                            $checked = 'checked';
                                            @endphp
                                       
                                        @endif
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input name="roles[]" type="checkbox" value="{{$Roles->name}}" class="custom-control-input" id="customCheck{{$dem}}"  {{$checked}}>
                                        <label class="custom-control-label" for="customCheck{{$dem}}" >{{$Roles->name}}</label>
                                    </div>
                                
                                    @endforeach
                                @endif
                                </div>
                                <div class="form-group col-md-12">
                                <input name="idAccount"  type="hidden" value="{{$Account->id}}">
                                    <button type="submit" class="btn btn-success mr-2">Lưu</button>
                                    <button type="reset" class="btn btn-secondary">Tạo lại mật khẩu</button>
                                    <button name="removeAccount" class="btn btn-warning">Xóa tài khoản</button>
                                </div>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection