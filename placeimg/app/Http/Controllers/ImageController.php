<?php namespace App\Http\Controllers;

use App\ImageGenerators\ImageGeneratorIntf as ImageGenerator;
use App\Http\Requests\ImageRequest;
use Intervention\Image\ImageManager;
use Config;

/**
 * Controller yang bertanggung jawab menghasilkan gambar 
 *
 * @author Zamrony P. Juhara
 */
class ImageController extends Controller
{
    private $image_generator;
    
    public function __construct(ImageGenerator $img_generator) {
       $this->image_generator = $img_generator;    
    }
    
    private function getCacheFilename($width, $height, $format) {
        return Config::get('image.cachedir').'/'.$width.'x'.$height.'.'.$format;
    }
    
    private function generateImage( $width, $height, $format, $saveimage = true) {
       $img = $this->image_generator->generate($width, $height); 
       if ($saveimage) {
           $img->save($this->getCacheFilename($width, $height, $format));
       }
       return $img->response($format);        
    }
    
    private function loadImage($path, $format) {
        $imgmgr = new ImageManager();
        $img = $imgmgr->make($path);
        return $img->response($format);
    }
    
    private function getCacheImage($width, $height, $format) {        
        $path = $this->getCacheFilename($width, $height, $format);
        if (file_exists($path)) {
            return $this->loadImage($path,$format);
        } else {
            return $this->generateImage($width, $height, $format);
        }
    }
    public function getImageJpg(ImageRequest $request, $width, $height) {        
        if (Config::get('image.cache'))
        {
            return $this->getCacheImage($width, $height,'jpg');
        } else {
            return $this->generateImage($width, $height,'jpg', false);            
        }
    }
    
    public function getImagePng(ImageRequest $request, $width, $height) {
        if (Config::get('image.cache'))
        {
            return $this->getCacheImage($width, $height,'png');
        } else {
            return $this->generateImage($width, $height,'png', false);            
        }
    }
}
