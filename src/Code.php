<?php

namespace zhang003\imgcode;

class Code{
    /**
     * 验证码
     * @var
     */
    private $code;
    /**
     * @var int|mixed
     */
    private $width;
    /**
     * @var int|mixed
     */
    private $height;
    /**
     * @var int|mixed
     */
    private $type;

    public function __construct($type = 1,$width=100,$height = 30){
        $this->width = $width;
        $this->type = $type;
        $this->height = $height;

    }
    public function imgCode($code = 1111){
        switch ($this->type){
            case 1://计算验证码
                $img = (new mathimg())->getValidate($this->width,$this->height);
                break;
            case 2:
                $img = (new gifpng())->ImageCode($code);
                break;
            case 3:
                break;
            case 4:
                break;
            default:
                $img = "";
                break;
        }
        return $img;
    }
}