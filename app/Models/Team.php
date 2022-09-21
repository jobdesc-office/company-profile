<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'msteam';
    public $timestamps = false;
    protected $primaryKey = 'teamid';
    protected $fillable = ['teamname','teamjob','descriptions','createdby','updatedby'];

    public function file()
    {
        return $this->hasMany(File::class, 'refid', 'teamid');
    }
    
    public function gambarTeam()
    {
        return $this->hasOne(File::class, 'refid', 'teamid');
    }
}
