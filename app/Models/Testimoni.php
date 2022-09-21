<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'mstestimonial';
    public $timestamps = false;
    protected $primaryKey = 'testimoniid';
    protected $fillable = ['testimonidesc','testimonifrom','createdby','updatedby'];

    public function file()
    {
        return $this->hasMany(File::class, 'refid', 'testimoniid');
    }
}
