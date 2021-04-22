<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;

class Buildings extends Model
{
    use HasFactory;

    protected $table = "buildings";
    protected $fillable = ['price, type, address, owner_id'];

    function index(){
        return $this->belongsTo(Owner::class);
    }
}
