<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classes extends Model
{
    use HasFactory;

    public $fillable = ['name', 'class', 'pf_dice', 'pf_first', 'pf_higher', 'armors', 'weapons', 'tools', 'saving_throws', 'abilities', 'equipments', 'img', 'others'];

    //funzionr di relazione inversa user e races
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
