<?php
//Array กำหนดค่าให้  key
$height=['johh'=>178,'rebert'=>189,'joly'=>186];
print_r($height);


echo '<hr>';
//แสดงค่า johh  คือ  178
echo $height['johh'];


echo '<hr>';
// วน loop เข้าถึง array แบบ Key  แล้วแสดง
foreach ($height as $key => $value) {
    echo $key.':'.$value.'<hr>';
}