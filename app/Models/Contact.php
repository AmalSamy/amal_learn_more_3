<?php

namespace App\Models;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password'
    // ];

    protected $guarded = [];
}
