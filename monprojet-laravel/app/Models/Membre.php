<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $fillable = ['nom', 'prenom', 'age', 'adresse', 'email', 'tel'];

}
