<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confidant extends Model
{
    protected $table = 'confidants';
    protected $primaryKey = 'id';
    protected $fillable = ['first_name', 'last_name', 'gender', 'age', 'background', 'email', 'phone_number', 'photo', 'excerpt', 'about', 'experiences', 'motto'];

    use HasFactory;
}
