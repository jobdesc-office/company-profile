<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'msfile';
    public $timestamps = false;
    protected $primaryKey = 'fileid';
    protected $fillable = ['filename','reftypeid','refid','createdby','updatedby', 'isactive'];

    public function type()
    {
    	return $this->belongsTo(Type::class, 'reftypeid');
    }

    public function portofolio()
    {
        return $this->belongsTo(Portofolio::class, 'refid');
    }

    public function team()
    {
    	return $this->belongsTo(Team::class, 'refid');
    }

    public function partner()
    {
    	return $this->belongsTo(Partner::class, 'refid');
    }

    public function info()
    {
        return $this->belongsTo(Info::class, 'refid')->withDefault(['filename' => 'default.jpg']);;
    }

    public function testimoni()
    {
        return $this->belongsTo(Testimoni::class, 'refid');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'refid');
    }

}
