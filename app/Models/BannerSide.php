<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerSide extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_banner_side';
    protected $guarded = ['id'];
}
