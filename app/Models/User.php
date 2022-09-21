<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false;
    protected $table = 'msuser';
    protected $primaryKey = 'userid';
    protected $fillable = ['username','userpassword','createdby','updatedby'];

    public function getAuthPassword()
    {
        return $this->userpassword;
    }
}
