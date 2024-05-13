<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'sex',
        'birthday',
        'program_id'
    ];


    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

}
