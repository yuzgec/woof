<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    protected $translationForeignKey = 'slider_id';
}
