<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Races extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'alignment', 'age', 'speed', 'size', 'language', 'subrace' , 'plot', 'img', 'user_id',];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
