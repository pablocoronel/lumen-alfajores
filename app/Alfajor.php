<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Alfajor extends Model
{
    /**
     * @var string
     */
    protected $table = 'alfajor';

    /**
     * @var array
     */
    protected $fillable = ['id', 'nombre', 'sabor', 'precio'];

    /**
     * @var array
     */
    protected $dates = [];

    /**
     * @var array
     */
    public static $rules = [
        // Validation rules
        'nombre' => 'required|string',
        'sabor' => 'required|string',
        'precio' => 'required|numeric'
    ];

    // Relationships
}
