<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    use HasFactory;
    protected $fillable = [ 
        
        'name', 
              
         ];

         //relation
         public function product()
         {
             return $this->hasmany(product::class);
        }

}
