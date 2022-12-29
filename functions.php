<?php
$src1="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimg-ik.cars.co.za%2Fimages%2F2018%2F9%2FToyota-Rush%2Ftr%3An-news_1200x%2FToyota-Rush-5.JPG&f=1&nofb=1&ipt=cef5bc7fb25ac829f55a83e2e0ae77ee3a163537fa5cdeacedbe2ebe75724f5f&ipo=images";
$src2="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.VkS1_F4kzdStRgWBnclwHgHaE8%26pid%3DApi&f=1&ipt=04bd333e9ded9b9f142960df219221ffcb0465f52ceb40a5af3e87419c31eb7e&ipo=images";
$src3="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fs1.paultan.org%2Fimage%2F2018%2F08%2FHonda_Brio_RS_Ext-11-1200x800.jpg&f=1&nofb=1&ipt=fdc473567394a22795065eefea7395988332f1efbdf54ed30cbfe19ff91a7498&ipo=images";
session_start();

#$_SESSION['name'];

if(isset($_SESSION['name'])){
  $name=$_SESSION['name'];
}
 function verify($name){
  switch ($name) {
    case 'rush':
      // code...
      $src_form=$src1;
      break;
    case 'ayla':
      $src_form=$src2;
    case 'brio':
      // code...
      $src_form=$src3;
      break;

  }
}
$_SESSION['src']=verify($name);


?>
