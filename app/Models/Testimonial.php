<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'sytestimonials';
    public const CREATED_AT = 'CreDate';
    public const UPDATED_AT = 'ModDate';
    protected $primaryKey = 'TestimonNo';
}
