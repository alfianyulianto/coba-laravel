<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    // untuk menangani mass assignment
    // protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
    protected $guarded = ['id'];
}
