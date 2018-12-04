<?php

namespace App\Models\Demos\CodeGenerator\v21;

use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'code_generator_v21_biographies';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'name',
                  'age',
                  'biography',
                  'sport',
                  'gender',
                  'colors',
                  'is_retired',
                  'photo',
                  'range',
                  'month'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    

    /**
     * Set the colors.
     *
     * @param  string  $value
     * @return void
     */
    public function setColorsAttribute($value)
    {
        $this->attributes['colors'] = json_encode($value);
    }

    /**
     * Get colors in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getColorsAttribute($value)
    {
        return json_decode($value) ?: [];
    }

}
