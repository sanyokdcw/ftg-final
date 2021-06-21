<?php

namespace App\Models;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    use Translatable;

    protected $translatable = ['title', 'text'];
}
