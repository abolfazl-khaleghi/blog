<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
protected $fillable=[
  'category_id','name','description','status','img','page_id','section_id'
];
}
