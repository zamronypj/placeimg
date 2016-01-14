<?php namespace App\ImageGenerators;

use Intervention\Image\Image;

/**
 * Membuat mozaik dengan warna dan ukuran tiap mozaik acak
 *
 * @author Zamrony P. Juhara
 */
class RandomMozaicGenerator extends BaseImageGenerator
{
    private function drawRect(Image $img, $xstart, $ystart, $rectwidth, $rectheight) {
        $img->rectangle($xstart, $ystart, $xstart+$rectwidth, $ystart + $rectheight, function($draw){
            $draw->background('rgba('.rand(0,255).','.rand(0,255).','.rand(0,255).',1.0)');
        });            
    }
    
    public function generate($width, $height) {
        $img = $this->manager->canvas($width,$height);
        $rectSize = rand(1,5) * 10;
        for ($y=0; $y < $height; $y++){
           for ($x=0; $x < $width; $x++) {
               $this->drawRect($img, $x, $y, $rectSize, $rectSize);
               $x+=$rectSize;
           }
           $y+=$rectSize;
        }
        return $img;
    }
}
