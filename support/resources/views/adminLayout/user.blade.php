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
                    <h4 class="card-title"style="font-size: 20px">QUẢN LÝ TÀI KHOẢN</h4>
                    <table class="table table-striped">
                      <thead>

                        <tr>
                          <th> Avatar</th>
                          <th> Tên tài khoản </th>
                          <th> Phòng ban</th>
                        

                        </tr>
                       
                      </thead>
                      <tbody>
                      @if ($Accounts)
                      @foreach ($Accounts as $Accounts)
                        
                        <tr>
                        <td class="py-1">
                          <a href="/admin/user/{{$Accounts->id_account}}"> <img src="{{$Accounts->avatar}}" alt="image" /></a>  </td>
                          <td> <a href="/admin/user/{{$Accounts->id_account}}"> {{$Accounts->name}} </a></td>
                          <td> {{$Accounts->name_depart}} </td>
                         
                        </tr>
                        @endforeach
                        @endif
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