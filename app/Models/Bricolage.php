<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bricolage extends Model
{
    use HasFactory;
    protected $table = 'bricolages';

    protected $guarded=[];
}
