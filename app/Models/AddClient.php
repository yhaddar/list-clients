<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddClient extends Model
{
    use HasFactory;

    protected $fillable  = ['Name', 'Email', 'Phone', 'Adress'];
}
