<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonne extends Model
{
    use HasFactory;
    protected $table = 'bonnes';

    protected $guarded=[];
}
