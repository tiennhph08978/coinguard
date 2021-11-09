<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'site_name',
        'site_description',
        'telegram_link',
        'twitter_link'
    ];
    public $timestamps = false;

}
