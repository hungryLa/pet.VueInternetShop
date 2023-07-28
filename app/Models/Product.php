<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class,'product_tags','product_id');
    }

    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class,'color_products','product_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class,'group_id');
    }

    public function getImageUrlAttribute(){
        return url('storage/'.$this->preview_image);
    }
}
