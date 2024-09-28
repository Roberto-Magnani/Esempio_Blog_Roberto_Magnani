<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Races extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'alignment', 'age', 'speed', 'size', 'language', 'subrace' , 'plot', 'img'];

    //funzionr di relazione inversa user e races
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
