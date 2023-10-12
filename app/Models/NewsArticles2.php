<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsArticles2 extends Model
{
    protected $table = 'WebText';
    public const CREATED_AT = 'CreDate';
    public const UPDATED_AT = 'ModDate';
    protected $primaryKey = 'TextNo';
}
