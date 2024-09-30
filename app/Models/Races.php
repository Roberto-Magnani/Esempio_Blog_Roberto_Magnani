<?php

namespace App\Models;

use App\Models\User;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Races extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'alignment', 'age', 'speed', 'size', 'subrace' , 'plot', 'img'];

    //funzionr di relazione inversa user e races
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }
}
