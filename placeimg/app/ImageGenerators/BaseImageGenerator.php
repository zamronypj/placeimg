<?php namespace App\ImageGenerators;

use Intervention\Image\ImageManager;

/**
 * kelas dasar untuk image generator
 *
 * @author Zamrony P. Juhara
 */
abstract class BaseImageGenerator implements ImageGeneratorIntf
{
    protected $manager;
    
    public function __construct() {
        $this->manager = new ImageManager();
    }
}
