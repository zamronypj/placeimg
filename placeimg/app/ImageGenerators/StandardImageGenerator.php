<?php namespace App\ImageGenerators;

/**
 * Menghasilkan gambar satu warna dengan ukuran 
 * sesuai yang ditentukan
 *
 * @author Zamrony P. Juhara
 */
class StandardImageGenerator extends BaseImageGenerator
{
    public function generate($width, $height) {
        return $this->manager->canvas($width,$height, 
                'rgba('.rand(0,255).','.rand(0,255).','.rand(0,255).',1.0)');
    }
}
