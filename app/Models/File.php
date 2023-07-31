<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    protected $guarded = [];

    const TYPES_FILE = [
        'image' => 'image',
        'document' => 'document',
    ];

    const TYPES = [
        'products' => Product::TYPE,
    ];

    public function getImageUrlAttribute(){
        return url('storage/'.$this->file_path);
    }
}
