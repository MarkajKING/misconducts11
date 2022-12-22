<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confidant extends Model
{
    protected $table = 'confidants';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'gender', 'age', 'speciality', 'background', 'email', 'phone', 'photo', 'excerpt', 'about', 'experiences', 'motto'];

    use HasFactory;
=======

    protected  $guarded = [];


}
