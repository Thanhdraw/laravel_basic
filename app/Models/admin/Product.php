<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Khai báo các thuộc tính có thể được gán
    protected $fillable = ['name', 'price', 'category_id'];

    // Định nghĩa quan hệ với Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
