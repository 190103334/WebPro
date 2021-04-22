<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buildings;

class Owner extends Model
{
    use HasFactory;

    protected $table = "owners";
    protected $fillable = ['name', 'phone', 'doc_zip', 'email'];

    function index(){
        return $this->hasMany(Buildings::class);
    }
}
