<!-- bai1 -->
<?php echo " Hello world"; ?>

<?php define('SDT', '0398632358');
echo SDT;
?>
<?php 
$a = 324;
$a = (string)$a;
?>
<!-- bai2 -->
<?php 
$sinhvien = array('hoang son','To toan');
print_r($sinhvien);
?>
<?php
$sinhvien =array();
$sinhvien[1]='hoang son';
$sinhvien[2]='to toan';
print_r($sinhvien);
?>
<?php
$sinhvien = array();
$sinhvien['sinhvien_a'] = 'Nguyễn Văn A';
$sinhvien['sinhvien_b'] = 'Nguyễn Văn B';
echo $sinhvien['sinhvien_a']; // xuất ra màn hình sinh viên Nguyễn Văn A
echo $sinhvien['sinhvien_b']; // xuất ra màn hình sinh viên Nguyễn Văn B
?>
 <?php
$a = array();
$a[0][1] = 123;
$a[0][2] = 321;
echo $a[0][1]; // in ra giá trị 123
echo $a[0][2]; // in ra giá trị 321
    ?>
    <!-- bai3 -->
    <?php
$sokt=12;
$sodu=$sokt%2;
if($sodu == 0){
    echo'So'.$sokt.'la so chan';
}
?> 
<!-- bai4 -->
<?php
$nam = 1990;
$kiemtra = ($nam % 4 ==0 && $nam % 100 != 0 || $nam % 400 == 0);
if($kiemtra == true){
    echo 'Nam'.$nam.'la nam nhuan';
}
else
echo 'Nam'.$nam.'la nam khong nhuan';
?>
<!-- bai5 -->
<?php
$number = 2;
switch ($number)
{
    case 0 :
        echo 'Số không';
        break;
    case 1:
        echo 'Số một';
        break;
    case 2:
        echo 'Số hai';
        break;
    case 3:
        echo 'Số ba';
        break;
    case 4 :
        echo 'Số bốn';
        break;
    default:
        echo 'Không tìm thấy';
        break;
}
?> -->
<br/>;
<!-- bai6 -->
<?php
$number =10;
$midle =NULL;
 switch($number){
     case 10:
        $midle=$number%2;
        switch($midle){
            case 0:
                echo"so chan";
            break;
            default:
            echo "so le";
        break;

        }
    break;
    default:
break;
 }
 ?>
 <!-- bai7 -->
 <!-- <?php
 for ($i = 9, $count = 10; $i <= $count; $i--){
    echo $i . ' - ';
}
?> -->
<br/>

<?php
$count = count($sinhvien);
for ($i = 0; $i < 9; $i++){
    echo $sinhvien[$i];
}
?>
<?php
for ($i = 1; $i < 10; $i++)
{
    for ($j = 9; $j >= $i; $j--)
    {
        echo $j;
    }
echo '<br/>';;
}
?>




