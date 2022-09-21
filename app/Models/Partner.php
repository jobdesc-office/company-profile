<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $table = 'mspartner';
    public $timestamps = false;
    protected $primaryKey = 'partnerid';
    protected $fillable = ['partnername','descriptions','createdby','updatedby'];

    public function file()
    {
        return $this->hasMany(File::class, 'refid', 'partnerid');
    }

}
