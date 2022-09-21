<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'msmail';
    protected $primaryKey = 'mailid';
    protected $fillable = ['name','email','email_body'];
}
