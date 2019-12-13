<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bảng chấm công</title>
</head>
<body>
    
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
              @foreach ($data as $cc)
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

</body>
</html>

