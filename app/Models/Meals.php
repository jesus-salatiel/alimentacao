<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meals extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['days_meal','snack_mornig','snack+ajternoon','lunch','lunch_repeat','dinner','dinner_repeat','number_students_mornig','number_students_afternoon',];

}