<?php namespace App\ImageGenerators;

/**
 * Membuat mozaik acak yang dikaburkan
 *
 * @author Zamrony P. Juhara
 */
class RandomBlurMozaicGenerator extends RandomMozaicGenerator
{
    public function generate($width, $height) {
        $img = parent::generate($width,$height);
        $img->blur(20);
        return $img;
    }
}
