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
                    <h4>Trạng thái hỗ trợ  => <code>Chưa tiếp nhận</code> </h4>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Mã câu hỏi:</th>
                        <td colspan="2"> 12 </td>
                    </tr>
                    <tr>
                        <th scope="row">Phòng xử lí:</th>
                        <td colspan="2">
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Phòng nhân sự</option>
                                <option value="1">Phòng ban</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Người xử lí: </th>
                        <td colspan="2"> 
                            <div class="row">
                                <h5 class=" ml-3"> All</h5>
                                <a href="" class=" ml-md-auto mt-2">Chuyển nhân viên</a> 
                            </div>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>Thời gian: </th>
                        <td colspan="2"> 2019-10-05 04:09:48</td>
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
                    <h4>Sinh viên - <code>Hữu Hùng</code> </h4>
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
                               <td class="boder border-dark"> <p>Nội dung yêu cầu [<code>2019-10-05 04:09:48</code>] : <strong> Học phí học kì fall </strong></p></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Học phí kì trước em còn dự 200 nghìn, không biết đã được cộng dồn vào học phí kì này chưa ạ .</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <table class="table pb-4 bg-secondary">
                        <thead>
                            <tr>
                               <td class="boder border-dark"> <p>Mr.Nhân Huỳnh [<code>2019-10-05 04:09:48</code>]</p></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>anh đã ăn chặn. a xl em nhé, e gửi stk a đền.</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table">
                        <thead>
                            <tr>
                                <td class="boder border-dark"> <p>Sinh viên: Hữu Hùng [<code>2019-10-05 04:09:48</code>]</p></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DMM.</td>
                            </tr>
                        </tbody>
                    </table>
                <div class="button mt-4">
                    <button type="button" class="btn btn-primary">Tiếp Nhận</button>
                    <button type="button" class="btn btn-danger">Xóa</button>
                    <button type="button" class="btn btn-success">Đóng</button>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
@endsection
