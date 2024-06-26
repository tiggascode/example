<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $table = 'employers';
    protected $guarded = false;

    public function jobs(){
        return $this->belongsToMany(Job::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
