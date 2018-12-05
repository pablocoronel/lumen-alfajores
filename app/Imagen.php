<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    /**
     * @var string
     */
    protected $table = 'imagen';

    /**
     * @var array
     */
    protected $fillable = ['file_path', 'alfajor_id'];

    /**
     * @var array
     */
    protected $dates = [];

    /**
     * @var array
     */
    public static $rules = [
        // Validation rules
        'file_path'  => 'required|string',
        'alfajor_id' => 'required|numeric'
    ];

    // Relationships
}
