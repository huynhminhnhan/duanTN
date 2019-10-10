@extends('layout.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <!-- {{-- <code>.table-striped</code> --}} -->
                <table class="table">
                <thead>
                    @php 
                    // var_dump($Question[0]);
                   
                    $b = $Question[0]->idAdmin;
                    // dd('aa');
                    $a = $Question[0]->Status;
                    
                    //  dd(session()->get('AccountInfor')['roles']);
                    $Status = '';
                    $Emp = $model->questionEmployee($b);
                    if($a == 0){
                        $Status = 'Chưa tiếp nhận';
                    }
                    if($a == 1 ){
                        $Status = 'Xử lý bởi '.$Emp[0]->name;
                    }else{
                        $Status = 'Đã xử lý xong';
                    }
                   $color ='';
                    // {{dd($Emp[0]->name)}}
                    
                    // dd($Emp); 
                    
                    @endphp
                    <h4>Trạng thái hỗ trợ  => <code>{{$Status}}</code> </h4>
                </thead>
                <tbody>
                    {{-- {{var_dump($Question)}}  --}}

                    <tr>
                        <th scope="row">Mã câu hỏi:</th>
                        <td colspan="2"> {{$Question[0]->id_question.$id_cauhoi}} </td>
                    </tr>
                    <tr>
                        <th scope="row">Phòng xử lí:</th>
                        <td colspan="2">
                        {{-- <select value="{{$Emp[0]->department_id}}" class="custom-select"> --}}
                        <select value="" class="custom-select">

                            <option value="0">ALL</option>

                                @forelse($Depart as $dep)
                            <option value="{{$dep->id_department}}">{{$dep->name_depart}}</option>
                                @empty
                                Chưa có phòng ban
                                @endforelse
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Người xử lí: </th>
                        <td colspan="2"> 
                            <div class="row">
                                @if($a == '')
                                    <h5 class=" ml-3"> All</h5>
                                @else
                                    <h5 class=" ml-3"> {{$Emp[0]->name}}</h5>
                                @endif
                                <a href="" class=" ml-md-auto mt-2">Chuyển nhân viên</a> 
                            </div>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>Thời gian: </th>
                        <td colspan="2"> {{$Question[0]->created_at}}</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>

        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <table class="table">
                    <thead>
                    <h4>Sinh viên - <code> {{$Question[0]->name}}</code> </h4>
                    </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Mã sinh viên:</th>
                                <td colspan="2">Ps06785</td>
                            </tr>
                            <tr>
                                <th rowspan="2" scope="row">Thông tin:</th>
                                <td colspan="2"> 
                                     Ngành: Thiết kế website - Kỳ 7
                                </td> 
                            </tr>
                            <tr>
                                <td colspan="2">
                                    Thời gian: 2017 - 2020
                                </td>
                            </tr>
                            <tr>
                                <th>Các câu hỏi khác: </th>
                                <td> <a href=""> Xem thêm</a></td>
                            </tr>
                        </tbody>
                        </table>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <table class="table mt-2 mb-4">
                        <thead>
                            <tr>
                               <th class="boder border-dark"> <p>Nội dung yêu cầu [<code>{{$Question[0]->created_at}}</code>] : <strong>{{$Question[0]->Title}} </strong></p></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">{{$Question[0]->Content}}</td>
                            </tr>
                            <tr>
                                <td>Các file đính kèm</td>
                                <td><a href="{{asset($Question[0]->Images)}}" target="_blank" ><img style="width: 200px;border-radius: 0; height: 100; height: 100px;Object-fit: cover; " src="{{asset($Question[0]->Images)}}" alt=""></a> </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- cau phan hoi --}}
                    @forelse($rep as $rep)
                    <table class="table mt-2 mb-4 {{$color}}">
                        <thead>
                            <tr>
                                    <td class="boder border-dark"> <p> <strong>{{$rep->name}}</strong> [<code>{{$rep->created_at}}</code>]</p></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$rep->Content_Answer}}</td>
                            </tr>
                        </tbody>
                    </table>
                    @empty
                    @endforelse
                    
                    {{-- {{dd((session()->get('AccountInfor')['roles'])')}} --}}
                @if((session()->get('AccountInfor')['roles'][0])  == 'student')
                {{-- sinh vien phan hoi  --}}
                <table class="table pb-4" bgcolor="f3fdfd">
                    <form action="/rep/{{(session()->get('AccountInfor')['user_id'])}}/{{$Question[0]->id_question}}" method="POST">
                        @csrf
                        <thead>
                            <tr>
                                <td class="boder border-dark"> <p>{{$Question[0]->name}} </p></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <textarea name="rep" id="editor" cols="120" rows="10"></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="button mt-4">
                        <button type="submit" class="btn btn-primary"> Phản hồi</button>
                    </div>
                    </form>
                @else
                {{-- nhan vien tiep nhan --}}
                    @if($a == 0)
                        <div class="button mt-4">
                            <button type="button" class="btn btn-primary"> <a href="/receive/{{(session()->get('AccountInfor')['user_id'])}}/{{$Question[0]->id_question}}"> Tiếp Nhận</a></button>
        
                            <button type="button" class="btn btn-success"><a href="/done/{{$Question[0]->id_question}}"> Đóng</a></button>
                        </div>
                 
                    @else
                {{-- Nhan vien phan hoi --}}
                    <table class="table pb-4" bgcolor="f3fdfd">
                        <form action="/repEmployee/{{(session()->get('AccountInfor')['user_id'])}}/{{$Question[0]->id_question}}" method="POST">
                            @csrf
                        <thead>
                            <tr>
                                <td class="boder border-dark"> <p>{{(session()->get('AccountInfor')['name'])}} </p></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <textarea name="rep" id="editor" cols="120" rows="10"></textarea></td>
                            </tr>
                        </tbody>
                        </table>
                        <div class="button mt-4">
                                <button type="submit" class="btn btn-primary"> Phản hồi</button>
                                <button type="button" class="btn btn-primary"> <a href="/done/{{$Question[0]->id_question}}"> Đóng</a></button>
                        </div>
                        </form>  
                    @endif
                    @endif
            </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/ckeditor.js')}}"></script>
    <script src="{{asset('assets/plugin.js')}}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script>
    
@endsection
