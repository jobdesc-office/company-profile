<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $table = 'msinfo';
    public $timestamps = false;
    protected $primaryKey = 'infoid';
    protected $fillable = ['infotypeid','descriptions','createdby','updatedby'];

    public function type()
    {
    	return $this->belongsTo(Type::class, 'infotypeid')->withDefault(['typeid' => '']);
    }

    public function file()
    {
        return $this->hasMany(File::class, 'refid', 'infoid');
    }

    public function gambarAbout()
    {
        $this->hasOne(File::class, 'refid', 'infoid');
    }
}
