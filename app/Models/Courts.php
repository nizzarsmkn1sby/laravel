<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Court_type;

class Courts extends Model
{
   public function type() {
       return $this ->belongsTo(Court_types::class, 'court_type_id');  
   }
}
