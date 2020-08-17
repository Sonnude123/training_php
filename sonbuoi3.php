<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="namsv">
<?php
// Danh sách các năm
$nam = array(
    1990,
    1991,
    1992,
    1993,
    1994,
    1995
);
  

//Dùng foreach xuất ra các năm trong $nam
foreach ($nam as $value){
    echo $value;
}
?>

</div>
<div id="dssv">
<?php
$sinhvien=array(
    'sv1'=>'hoangson',
    'sv2'=>'hoanganh',
    'sv3'=>'vinhngu'

);
foreach($sinhvien as $tensv){
         echo $tensv . '<br/>';
}
?>
</div>

<div id="break để dừng vòng lặp">
    <?php
    for($i=1;$i<=100;$i++)
    {
        echo $i . '';
        if($i ==20)
        {
            break;
        }
    }
    for($i=1;$i<=10;$i++)
    {
        if($i == 5){
            continue;
        }
        echo $i .'';
    }
    ?>

</div>
<div>
    <?php
    $tongsv = 8;
    if(sinhvien($tongsv)){
        echo 'chan';

    }
    else{
    echo 'le';
    }
    function sinhvien($tongsv){
        if($tongsv % 2 == 0)
        return true;
        else
        return false;


    }
    ?>
</div>


<!-- hàm nhiều biến -->
    <div>
        <?php
        $son1=12;
        $son2=13;
        echo tong($son1, $son2);
        function tong($son1, $son2)
        {
            return $son1 + $son2;
        }
        ?>
    </div>
<div>
    <?php
    $a = 12;
    $b = 13;
      
    // chỉ truyền 2 đối số vào
    echo tinhtong($a, $b);
      
    // $c có một giá trị mặc định
    // hàm này tính tổng của 3 số
    function tinhtong($a, $b, $c = false)
    {
        $tong = $a + $b;
        if ($c != false){ // nếu $c được truyền vào (vì false là giá trị mặc định)
            $tong = $tong + $c; // thì thực hiện cộng thêm $c
        }
        return $tong;
    }
    ?>
</div>
<div>
    <?php
    $bien_toan_cuc=30;
    kiem_tra();

    function kiem_tra(){
    $bien_cuc_bo=13;
    global $bien_toan_cuc;
    if($bien_toan_cuc%$bien_cuc_bo ==0){
        echo 'ok';
        
    }
    else{
        echo 'again';
    }
}
    ?>
</div>


<!-- biến static -->
<div>
    <?php
    function kiemtra(){
        static $a=1;
        $a ++;
        echo $a .'<br/>';
    }
    kiemtra();
    kiemtra();
    ?>
</div> 
 

<!-- Bài toán Đệ quy -->
<div>
    <?php
    tinh_tong();
    function tinh_tong(){

        $tong = 0;
        for ($i = 1; $i <= 2; $i++){
            $tong += $i; 
           }
        echo $tong ;
   
    }

    ?>

</div>


<!-- đệ quy tuyến tính -->

<div>
    <?php
    function tinh_tong2($n){
        if($n==1){
        return $n;}
        return $n + tinh_tong2($n-1);
    }

    echo tinh_tong2(100);
    ?>
</div>
<div>

</div>
<div>
    <?php
    function Fibo($n){
        if( $n<=2){
            return 1;
        }
        else{
        return (Fibo($n-2)+Fibo($n-1));
    }
}
echo Fibo(7);
?>
</div>


<!-- đệ quy phi tuyến -->
<div>
    <?php
    
    function pheptinh($n)
    {
        // Neeus $n < 6 thì trả về chính nó
        if ($n < 6){
            return $n;
        }   
        else{
            // Ngược lại tính tổng từ 1 tới $n - 1, và mỗi phần tử lại gọi làm hàm chính nó
            $tong = 0;
            for ($i = 1; $i < $n; $i++){
                $tong += pheptinh($n - $i);
            }
            return $tong;
        }
    }
      
    echo pheptinh(6);
    ?>
</div>
<div>
    <?php
    // Hàm đệ quy U
function U($n)
{
    if ($n < 5){ // điều kiện dừng
        return $n;
    }
    else{
        return U($n - 1) + G($n - 2);
    }
}
  

// Hàm đệ quy G
function G($n)
{
    if ($n <= 8){ // điều kiện dừng
        return $n - 3;
    }
    else{
        return U($n - 1) + G($n - 2);
    }
}
  
// Gọi Hàm
  
echo G(9);
?>
</div>


<!-- sắp xếp nổi bọt tăng dần -->
<div>
    <?php
    $mang = array(1,3,6,9,4,5,2);
    $sophantu = 7;
    for($i=0; $i<($sophantu-1); $i++){
        for($j=$i+1; $j < $sophantu; $j++){
            if($mang[$i] > $mang[$j]){
                $tmp = $mang[$j];
                $mang[$j] = $mang[$i];
                $mang[$i] = $tmp;
            }
        }
    }
    for($i= 0;$i<$sophantu; $i++){
        echo $mang[$i]. '';
    }
    ?>
</div>

<!-- sắp xếp nổi bọt giảm dần -->
<div>
    <?php
    $mang = array(1,3,4,8,9,5);
    $sophantu =count($mang);
    for($i=0; $i<($sophantu-1);$i++){
        for($j=$i+1; $j<$sophantu; $j++){
            if($mang[$i]<$mang[$j]){
                $tmp = $mang[$j];
                $mang[$j] = $mang[$i];
                $mang[$i] = $tmp;
            }
        }

      }
      for($i=0;$i<$sophantu;$i++){
          echo $mang[$i] .'';
      }
    ?>
</div>
<!-- Tìm kiếm tuyến tính -->
<div>
    <?php
    
    function kiem_tra1($mang,$cantim){
        for ($i=0; $i<count($mang); $i++){
            if($mang[$i]==$cantim){
                return true;
            }
        }
        return false;

    }
    $mang = array(12,1,2,4,56,6,66,6,4,7);
    $cantim = 77;
    if(kiem_tra1($mang,$cantim)){
        echo 'Số'. $cantim .' co nam trong mang ';
    }
    else{
        echo 'Số'. $cantim . ' không nằm trong mảng ';
    }
    ?>


<!-- Tìm phần tử nhỏ nhatts trong mảng -->
    <div>
        <?php
        $mang = array(12,1,2,4,56,6,66,6,4,7);
        function tim_min($mang){
            $total=count($mang);
            $min = 0;   
            for($i=0; $i>$total;$i++)
            {
                if($mang[$min]>$mang[$i]){
                    $min=$i;
                }
            }
            
        }
        echo $i;
        ?>
    </div>
    
    
    
    <!-- Tìm phần tử nhỏ nhất bằng sắp xếp chọn -->

    <div>
        <?php
        $mang=array(1,2,3,4,5,7,33,5,9);
       function SelectionSortAscending($mang)
       {
           
           $sophantu = count($mang);
         
           
           for ($i = 0; $i < $sophantu - 1; $i++)
           {
               $min = $i;
               for ($j = $i + 1; $j < $sophantu; $j++){
                   if ($mang[$j] < $mang[$min]){
                       $min = $j;
                   }
               }
         
               // Sau khi có vị trí nhỏ nhất thì hoán vị
               // với vị trí thứ $i
               $temp = $mang[$i];
               $mang[$i] = $mang[$min];
               $mang[$min] = $temp;
           }
         
       }
       echo $i;

        ?>

    </div>
 
</div>
</body>
</html>
