@extends('layout.master')
@section('content')


<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
                  <div class="card-header">
                    Quy định chấm công
                  </div>
                  <div class="card-header">
                      <p class="card-text">Giờ vào quy định : <b>7h30</b> </p>
                      <p class="card-text">Giờ về quy định : <b>17h30</b> </p>
                     
                    </div>
                  
                  <div class="card-body">
                    <h5 class="card-title">Cho phép đi trễ 130 phút</h5>
                    <p class="card-text">Nghĩ không phép sẽ bị phạt gấp đôi</p>

                  </div>
                </div>
            </div>
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">


          {{-- <i class="fas fa-table"></i> --}}
          {{-- DatePicker --}}
              <label>Chọn ngày tháng: </label>

              <form action="">
                      <script>
                          window.onload = function what(){

                          var d = new Date();


                          var x = d.getMonth();
                            var   y = d.getFullYear();

                          // console.log(y);

                          document.getElementById('demo').value  = x;
                          // document.getElementById('demo1').value  = y;

                      };
                      </script>
                      <select name="month">
                         
                          @php
                          $selected = '';
                              for( $i = 1; $i <= 12; $i++){
                                  if ($i == $arr_time['month']) {
                                    $selected = "selected";
                                    
                                  }  
                                  else {
                                    $selected = '';
                                  }
                                 
                                  echo '<option value="'.$i.'" '.$selected.'>'.$i.'</option>';
                                }
                                
                          @endphp
                      </select>
                      <select name="year"  value="" id="">
                          <script>
                                var d = new Date();
                                $select = '';
                              for(var z = d.getFullYear() ; z>=d.getFullYear()-10 ; z--){
                                  if(z == '{{$arr_time["year"]}}') {
                                    $select = 'selected';
                                  }
                                  else {
                                    $select = '';
                                  } 
                                  document.write ('<option '+$select+' value="'+z+'">'+z+'</option>');
                                  // console.log(z);
                              }
                          </script>
                      </select>

                  <input class="btn btn-outline-success" type="submit">
                </form>


                <table class="table table-bordered mt-3">
                  <thead>
                    <tr>
                      <th> Ngày </th>
                      <th> Giờ vào 1 </th>
                      <th> Giờ ra 1 </th>
                      <th> Giờ vào 2 </th>
                      <th> Giờ ra 2 </th>
                      <th> Đi trể </th>
                      <th> Về sớm </th>
                      <th> Ghi chú </th>
                    </tr>
                  </thead>
                  <tbody>
                        @foreach ($chamcong as $cc)
                    <tr>


                      <td> {{$cc->ngay}} </td>
                      <td>
                            {{$cc->gio_vao1}}
                      </td>
                      <td> {{$cc->gio_ra1}} </td>
                      <td> {{$cc->gio_vao2}} </td>
                      <td> {{$cc->gio_ra2}} </td>
                      <?php 
                      // đi trể
                         // buoi sang 
                        $giovao_1 = $cc->gio_vao1;
                        $giovao1 =  explode(':', $giovao_1);
                        // var_dump($giovao1[0]);
                        // exit;
                        $giosom1 = 0; $phutsom1 = 0;
                        if(($giovao1[0] <= 7) && ($giovao1[1] > 30)){
                          $giosom1 = 0;
                          $phutsom1 = $giovao1[1] - 30;
                        }
                        if(($giovao1[0] > 7) ){
                          $giosom1 =  $giovao1[0] - 8;
                          if(($giovao1[1] >= 30)){
                            $giosom1 = $giovao1[0] - 7;
                            $phutsom1 = $giovao1[1] -30;
                          }
                          if($giovao1[0] == 8){
                            if($giovao1[1] <= 30){
                              $giosom1 = 0;
                              $phutsom1 = 30 + $giovao1[1];
                            }else{
                              $giosom1 = 1;
                              $phutsom1 = $giovao1[1] - 30 ;
                            }
                          }
                          // if(($giovao1[1] < 30) && $giovao1[0] == 8){
                          //   $giosom1 = 0;
                          //   $phutsom1 = 30 + $giovao1[1];
                          // }
                        } 
                        // buoi chieu
                        $giovao_2 = $cc->gio_vao2;
                        $giovao2 =  explode(':', $giovao_2);
                        // var_dump($giovao1[0]);
                        // exit;
                        $giosom2 = 0; $phutsom2 = 0;
                        if(($giovao2[0] <= 13) && ($giovao2[1] > 30)){
                          $giosom2 = 0;
                          $phutsom2 = $giovao2[1] - 30;
                        }
                        if(($giovao2[0] > 13) ){
                          $giosom2 =  $giovao2[0] - 14;
                          if(($giovao2[1] >= 30)){
                            $giosom2 = $giovao2[0] - 13;
                            $phutsom2 = $giovao2[1] -30;
                          }
                          if($giovao2[0] == 14){
                            if($giovao2[1] <= 30){
                              $giosom2 = 0;
                              $phutsom2 = 30 + $giovao2[1];
                            }else{
                              $giosom2 = 1;
                              $phutsom2 = $giovao2[1] - 30 ;
                            }
                          }
                        } 

                      ?>
                      <td> <?=$giosom1 + $giosom2?>:<?=$phutsom1 + $phutsom2?></td>
                      <?php 
                      // về sớm
                      // buổi sáng 
                      $giora1 = $cc->gio_ra1;
                      $vesom1 =  explode(':', $giora1);
                      $h_vesom1 = 0; $p_vesom1 = 0;
                      // var_dump($vesom1[0]);
                      if($vesom1[0] = 11 && $vesom1[1] < 30){
                        $p_vesom1 = 30 - $vesom1[1];
                      }
               
                      

                      ?>

                      <td> <?=$h_vesom1?>:<?=$p_vesom1?></td>

                      <td> {{$cc->ghi_chu}} </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection
