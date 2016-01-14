<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Input;

/**
 * Request untuk controller ImageController
 *
 * @author Administrator
 */
class ImageRequest extends Request
{
    /**
     * Kita butuh override all() karena isu
     * terkait validasi parameter route
     * Parameter route /{width}x{height} tidak akan tersedia dalam
     * Request secara otomatis sehingga harus diisi manual 
     * @return type
     */
    public function all()
    {
        $request = Input::all();
        $request['width'] = $this->route('width');
        $request['height'] = $this->route('height');
        return $request;
    }

    /**
     * Tentukan apakah user boleh mengakses.
     * kita kembalikan nilai true karena ImageController 
     * boleh diakses publik
     * 
     * @return bool
     */
    public function authorize()
    {        
        return true;
    }

    /**
     * Ambil aturan validasi
     *
     * @return array
     */
    public function rules()
    {
        return [
            'width' => 'required|integer|between:1,5000',
            'height' => 'required|integer|between:1,5000'
        ];
    }
}
