<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    use HasFactory;

    protected $fillable = ['name_link', 'url_link','total_click'];

    public function links(){
        return $this->hasMany(Links::class);
    }
    
}
