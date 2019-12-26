<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
