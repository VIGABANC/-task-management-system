<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rendezvous extends Model
{
    protected $fillable = ['date', 'time', 
    'statut', 'person','subject','notes',
    'superadmin_id','admin_id'];
    
}

