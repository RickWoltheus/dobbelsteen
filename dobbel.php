<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      img {
        padding: 20px;
      }
      body {
        background-color: purple;
      }
    </style>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="submit" name="gok" value="gok">
    </form>
    <?php
    $random_numb = rand(1,6);
    $random_numb2 = rand(1,6);
    $random_numb3 = rand(1,6);
    $random_numb4 = rand(1,6);
    $random_numb5 = rand(1,6);

    create_image($random_numb);
    print "<img src=" . $random_numb . ".png?".date("U").">";
    print "<img src=" . $random_numb2 . ".png?".date("U").">";
    print "<img src=" . $random_numb3 . ".png?".date("U").">";
    print "<img src=" . $random_numb4 . ".png?".date("U").">";
    print "<img src=" . $random_numb5 . ".png?".date("U").">";
    function  create_image($random_numb){
    //$random_numb = rand(1,6);
     echo "$random_numb";
             $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
             $background_color = imagecolorallocate($im, 255, 255, 0);   // yellow

                              // red
             $blue = imagecolorallocate($im, 0, 0, 255);                 // blue

             if($random_numb == 1 OR $random_numb==3 OR $random_numb==5) {
               imagefilledarc($im, 100, 100, 40, 40, 0, 360, $blue, IMG_ARC_PIE); //4
             }
             if($random_numb ==2 OR $random_numb==3) {
               imagefilledarc($im, 30, 50, 40, 40, 0, 360, $blue, IMG_ARC_PIE); //1
               imagefilledarc($im, 170, 150, 40, 40, 0, 360, $blue, IMG_ARC_PIE);//7
             }
             if($random_numb == 4 OR $random_numb ==5  OR $random_numb == 6) {
              imagefilledarc($im, 30, 50, 40, 40, 0, 360, $blue, IMG_ARC_PIE); //1
              imagefilledarc($im, 170, 50, 40, 40, 0, 360, $blue, IMG_ARC_PIE); //2
              imagefilledarc($im, 30, 150, 40, 40, 0, 360, $blue, IMG_ARC_PIE);//6
              imagefilledarc($im, 170, 150, 40, 40, 0, 360, $blue, IMG_ARC_PIE);//7
             }
             if ($random_numb == 6) {
              imagefilledarc($im, 30, 100, 40, 40, 0, 360, $blue, IMG_ARC_PIE);//3
              imagefilledarc($im, 170, 100, 40, 40, 0, 360, $blue, IMG_ARC_PIE);//5
             }


             imagepng($im,$random_numb . ".png");

             imagedestroy($im);
     }
?>
  </body>
</html>
