<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'mstype';
    public $timestamps = false;
    protected $primaryKey = 'typeid';
    protected $fillable = ['typename','masterid','createdby','updatedby'];

    public function type()
    {
        return $this->hasOne(Type::class, 'typeid', 'masterid')->withDefault(['masterid' => '']);
    }

    public function info()
    {
        return $this->hasMany(Info::class, 'infotypeid', 'typeid');
    }

    public function file()
    {
        return $this->hasMany(File::class, 'reftypeid', 'typeid');
    }
}
