<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    

    // Relation between Sub-category & Category 
    public function category()
    {
        // return $this->belongsTo(Category::class, 'category_id');
        return $this->belongsTo(Category::class);
    }

    public function childCategories(){
        return $this->hasMany(ChildCategory::class);
    }

}
