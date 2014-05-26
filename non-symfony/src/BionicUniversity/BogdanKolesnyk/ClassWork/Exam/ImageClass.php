<?php
/**
 * Created by PhpStorm.
 * User: BGDN
 * Date: 14.05.14
 * Time: 20:47
 */

namespace BionicUniversity\BogdanKolesnyk\ClassWork\Exam;


class ImageClass implements ImageInterface {
    private $width = 0;
    private $height = 0;
    private $orientation = 'h'; // 'h' for 'horizontal'
    private $ratio = 1;

    function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
        $this->setRatio();
        $this->setOrientation();
    }

    /**
     * Calculates image ratio
     */
    private function setRatio(){
        $this->ratio = $this->width / $this->height;
    }

    /**
     * Sets image orientation
     */
    private function setOrientation(){
        if ($this->ratio < 1) {
            $this->orientation = 'v'; // 'v' for 'vertical'
        }
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getRatio(){
        return $this->ratio;
    }

    /**
     * @return string
     */
    public function getOrientation() {
        return $this->orientation;
    }
}