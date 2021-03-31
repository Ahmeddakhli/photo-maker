<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'name', 'kind', 'phone', 'email', 'photos_num', 'new_service', 'services', 'file_name','masseg'
        
      ];
}
