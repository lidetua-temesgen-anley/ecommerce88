<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

protected $fillable = [ 
    'id' ,     
      'name',       
        'unit', 
        'price',
        'quantity' 
       ];
}
 function up()   
  {         Schema::create('product', function (Blueprint $table) {         
        $table->id();         
            $table->string('name');          
               $table->string('unit')->nullable();  
               $table->double('price')->nullable(); 
               $table->string('quantity')->nullable();        
                  $table->timestamps();        
                 });    
                 }