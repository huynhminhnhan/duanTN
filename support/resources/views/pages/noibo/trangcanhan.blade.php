@extends('layout.master')
@section('content')
{{-- <h1>day la trang ca nhan</h1> --}}
<div class="main-panel">
    <div class="content-wrapper">
        <h1>Thông tin sinh viên</h1>
    </div>

    <form method="post" action="/profile/{{(session()->get('AccountInfor')['id'])}}">
        @csrf
    <div class="content-wrapper">

            <div class="row">
                    <div class="col-lg-4 grid-margin stretch-card">


                            <div class="card" style="width: 18rem;">

                                    @if ($user_info['avatar']=='')
                                    <img src="" alt="avatar" class="card-img-top">
                                    @else
                                    <img src=" {{asset($user_info['avatar'])}} " name="avatar" class="card-img-top">
                                    @endif
                                  <div class="card-body">
                                      <h3 class="card-title"><strong>Tên:</strong> {{$user_info['name']}}</h3>

                                    <h6><strong>Chuyên ngành:</strong> {{$user_info['specialized']}} </h6>


                                      <hr>
                                      {{-- <h5><strong>Email:</strong> {{$user_info['email2']}}</h5> --}}
{{-- {{dd($user_info)}} --}}
                                    </div>
                                  </div>
                    </div>
                    <div class="col-lg-8 grid-margin stretch-card">
                            <div class="card">
                                    <div class="card-header bg-success">
                                      <h3>Thông tin chi tiết</h3>
                                    </div>

                                    {{-- Right  --}}
                                    <h3 class="pl-3 pt-3 mb-0">Cá nhân</h3>
                                    <hr>
                                    <div class="card-body row">
                                        <label class="col-lg-2 col-form-label" for=""><strong>Họ tên:</strong></label>
                                        <div class="col-lg-10">
                                                <input class="form-control-plaintext col-lg-10" value="{{$user_info['name']}}" style="width: 100%" type="text"{{$disable}}>
                                        </div>

                                        {{-- <h5> <strong>Họ tên:</strong> {{$user_info['name']}}</h5> --}}
                                        @if (isset($_GET['edit']))
                                        <div class="row">
                                            <div class="col-lg-6">

                                                    <h5 class="mb-2"><strong>Phone:</strong><input type="text"  name="phone" class="form-control" placeholder="Điền thêm Phone" required> </h5>




                                                <h5 class="mb-2"><strong>Ngày sinh:</strong><input type="text" name="birthday" class="form-control" placeholder="Điền thêm birthday" required></h5>




                                                <h5 class="mb-2"><strong>Giới tính:</strong><input type="text" name="sex" disabled placeholder="Giới tính" id="" required></h5>




                                            </div>
                                            <div class="col-lg-6">

                                                    <h5 class="mb-2"><strong>Địa chỉ:</strong><input type="text" name="address" placeholder="Giới tính" id="" required></h5>



                                                <h5 class="mb-2"><strong>Ngành:</strong><input type="text" name="specialized" placeholder="Ngành" disabled id="" required></h5>



                                                <h5 class="mb-2"><strong>Học kì:</strong><input type="text" name="semester" placeholder="Học kì" disabled id="" required></h5>

                                            </div>

                                        </div>
                                        {{-- form bth --}}
                                        @else
                                        <div class="row">
                                            <div class="col-lg-6">
                                                {{-- {{dd($user_info['phone'])}} --}}
                                                {{-- @if ( $user_info['phone'] == '' )
                                                    <h5><strong>Phone:</strong><input type="text"  name="phone" class="form-control" placeholder="Điền thêm Phone" required> </h5>
                                                @else --}}
                                                <h5><strong>Phone:</strong> {{$user_info['phone']}} </h5>
                                                {{-- @endif --}}
                                                {{-- birthday --}}
                                                {{-- @if ( $user_info['birthday'] =='')
                                                <h5 class="mb-2"><strong>Ngày sinh:</strong><input type="text" name="birthday" class="form-control" placeholder="Điền thêm birthday" required></h5>
                                                @else --}}
                                                <h5><strong>Ngày sinh:</strong> {{$user_info['birthday']}} </h5>
                                                {{-- @endif --}}

                                                {{-- Sex --}}
                                                {{-- @if ($user_info['sex']=='')
                                                <h5 class="mb-2"><strong>Giới tính:</strong><input type="text" name="sex" placeholder="Giới tính" id="" required></h5>
                                                @else --}}
                                                <h5 class="mb-2"><strong>Giới tính:</strong> {{$user_info['sex']}}</h5>
                                                {{-- @endif --}}



                                            </div>
                                            <div class="col-lg-6">
                                                    {{-- @if ($user_info['address']=='')
                                                    <h5 class="mb-2"><strong>Địa chỉ:</strong><input type="text" name="address" placeholder="Giới tính" id="" required></h5>
                                                    @else --}}
                                                    <h5 class="mb-2"><strong>Địa chỉ:</strong> {{$user_info['address']}}</h5>
                                                    {{-- @endif --}}

                                                {{-- @if ($user_info['specialized']=='')
                                                <h5 class="mb-2"><strong>Ngành:</strong><input type="text" name="specialized" placeholder="Ngành" id="" required></h5>
                                                @else --}}
                                                <h5 class="mb-2"><strong>Ngành:</strong> {{$user_info['specialized']}}</h5>
                                                {{-- @endif --}}

                                                {{-- @if ($user_info['semester']=='')
                                                <h5 class="mb-2"><strong>Học kì:</strong><input type="text" name="semester" placeholder="Học kì" id="" required></h5>
                                                @else --}}
                                                <h5 class="mb-2"><strong>Học kì:</strong> {{$user_info['semester']}}</h5>
                                                {{-- @endif --}}
                                            </div>

                                        </div>
                                        @endif


                                    </div>
                                    <div class="row">
                                            <div class="col-lg-12 text-center pb-3">
                                                    @if (isset($_GET['edit']))
                                                    <button type="submit" class="btn btn-success">Submit </button>
                                                    @else
                                                    <button class="btn btn-danger"> <a href="/profile?edit">Sửa</a> </button>
                                                    @endif
                                            </div>
                                        </div>



                                  </div>
                    </div>
            </div>
    </div>
</form>
@endsection
