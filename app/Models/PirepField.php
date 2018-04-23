<?php

namespace App\Models;

use App\Interfaces\Model;

/**
 * Class PirepField
 * @property string name
 * @property string slug
 * @package App\Models
 */
class PirepField extends Model
{
    public $table = 'pirep_fields';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
        'required',
    ];

    protected $casts = [
        'required' => 'boolean',
    ];

    public static $rules = [
        'name' => 'required',
    ];

    /**
     * When setting the name attribute, also set the slug
     * @param $name
     */
    public function setNameAttribute($name): void
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = str_slug($name);
    }
}
