<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff';

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable =['id','nip', 'email', 'nama', 'tanggal_lahir', 'no_hp'];
    
}
