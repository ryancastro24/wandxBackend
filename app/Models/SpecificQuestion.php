<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificQuestion extends Model
{
    use HasFactory;
    protected $fillable =  ['text', 'answer', 'language','tourist_spot_id','question_number'];
}
