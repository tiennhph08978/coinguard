<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;
    protected $table = "coins";
    protected $fillable = [
        'name', 
        'network',
        'symbol',
        'presale',
        'lauch_date',
        'image',        
        'contract_address',
        'description',
        'custom_chart_link',
        'custom_swap_link',
        'website_link',
        'telegram_link',
        'twitter_link',
        'discord_link'
    ];
    public function votes()
    {
        return $this->hasMany(Votes::class);
    }
}
