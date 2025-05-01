<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Tambahkan baris ini

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'role'];
}
