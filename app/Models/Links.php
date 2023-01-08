<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    use HasFactory;

    protected $fillable = ['id_base','link','click','max_click'];

    public function redirect()
    {
        return $this-> belongsTo(Redirect::class);
    }

}
