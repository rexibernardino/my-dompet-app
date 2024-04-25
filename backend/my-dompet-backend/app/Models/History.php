<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = 'history';
    protected $primaryKey = 'id_history';
    
    public function income()
    {
        return $this->belongsTo(Income::class, 'id_income');
    }

    public function spending()
    {
        return $this->belongsTo(Spending::class, 'id_spending');
    }
}
