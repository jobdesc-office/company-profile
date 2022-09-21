<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'msservice';
    public $timestamps = false;
    protected $primaryKey = 'serviceid';
    protected $fillable = ['servicename', 'servicedesc','createdby','updatedby'];

    public function file()
    {
        return $this->hasMany(File::class, 'refid', 'serviceid');
    }
}
