<?php
/**
 * Created by PhpStorm.
 * User: BGDN
 * Date: 14.05.14
 * Time: 20:41
 */

namespace BionicUniversity\BogdanKolesnyk\ClassWork\Exam;


interface ImageInterface {
    public function getWidth();
    public function getHeight();
    public function getRatio();
    public function getOrientation();
} 