<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //Student => students
    //Customer => customers

    //customer =
    //chon table se lam viec
    protected $table = 'students123';
    
    //chon primary key
    protected $primaryKey = 'id';

    //tat che do tu dong tang
    //public $incrementing = false;

    public $timestamps = false;
    //created_at
    //update_at


}
