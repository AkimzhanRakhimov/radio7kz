<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainFormData extends Model
{
    protected $fillable = ['name', 'phone','order'];
}
