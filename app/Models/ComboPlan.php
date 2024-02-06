<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComboPlan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'plan_ids'];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
