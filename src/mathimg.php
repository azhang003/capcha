<?php
namespace zhang003\imgcode;
class mathimg{
    function getValidate($w,$h){

        $img = imagecreate($w,$h);

        $gray = imagecolorallocate($img,255,255,255);

        $black = imagecolorallocate($img,rand(0,200),rand(0,200),rand(0,200));

        $red = imagecolorallocate($img, 255, 0, 0);

        $white = imagecolorallocate($img, 255, 255, 255);

        $green = imagecolorallocate($img, 0, 255, 0);

        $blue = imagecolorallocate($img, 0, 0, 255);

        imagefilledrectangle($img, 0, 0, 100, 30, $black);

        for($i = 0;$i < 80;$i++){

            imagesetpixel($img, rand(0,$w), rand(0,$h), $gray);

        }

        $num1 = rand(1,99);

        $num2 = rand(1,99);

        imagestring($img, 5, 5, rand(1,10), $num1, $red);

        $rand = $this->getRand();

        imagestring($img,5,30,rand(1,10),$rand, $white);

        imagestring($img,5,45,rand(1,10),$num2, $green);

        imagestring($img,5,65,rand(1,10),"=", $blue);

        imagestring($img,5,80,rand(1,10),"?", $red);

        header("content-type:image/png");

        imagepng($img);

        return [
            'src'=>imagepng($img),
            'code'=>$num1.$rand.$num2,
        ];

    }

    function getRand(){

        $code = rand(0,1);

        switch ($code) {

            case 0:

                return "+";

                break;

            case 1:

                return "-";

                break;

            default:

# code...

                break;

        }

    }
}
