<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Upload;

class VerifUpload extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    public function seleksi()
    {
        return $this->hasOne(Upload::class);
    }
}
