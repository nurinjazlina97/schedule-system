<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory;
    use SoftDeletes;

    //create relationship between models
    //User.php - fk user_id
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

}
