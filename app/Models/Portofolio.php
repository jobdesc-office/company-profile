<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $table = 'msportofolio';
    public $timestamps = false;
    protected $primaryKey = 'portofolioid';
    protected $fillable = ['portofolioname','descriptions','createdby','updatedby'];

    public function file()
    {
        return $this->hasMany(File::class, 'refid', 'portofolioid');
    }

}
