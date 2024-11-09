<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',

    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function createCategory(array $data)
    {
        return self::create($data);
    }
    // Phương thức cập nhật category
    public static function updateCategory($id, array $data)
    {
        $category = self::findOrFail($id);
        return $category->update($data);
    }

    public static function deleteCategoryById($id)
    {
        $category = self::findOrFail($id);
        $category->delete();
    }

}
