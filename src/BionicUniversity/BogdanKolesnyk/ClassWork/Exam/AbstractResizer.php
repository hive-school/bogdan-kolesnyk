<?php
/**
 * Created by PhpStorm.
 * User: BGDN
 * Date: 14.05.14
 * Time: 20:41
 */

namespace BionicUniversity\BogdanKolesnyk\ClassWork\Exam;


abstract class AbstractResizer {

    public function createThumbnail($imgObj){
        $gutterX = 0;
        $gutterY = 0;
        $thmbWidth = 0;
        $thmbHeight = 0;
        $imgWidth = $imgObj->getWidth();
        $imgHeight = $imgObj->getHeight();
        $imgOrientation = $imgObj->getOrientation();

        if ($imgOrientation == 'h') {
            $gutterX = ($imgWidth - $imgHeight) / 2;
            $thmbWidth = $thmbHeight = $imgWidth;
        } else {
            $gutterY = ($imgHeight - $imgWidth) / 2;
            $thmbWidth = $thmbHeight = $imgHeight;
        }
        return array(
            'Start X' => $imgWidth - $gutterX,
            'Start Y' => $imgWidth - $gutterY,
            'Thmb W' => $thmbWidth,
            'Thub H' => $thmbHeight
        );
    }
}