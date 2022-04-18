<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{  
      //    
       public function register(Request $request){     
           /*  //For testing purpose, use hard coded data, till we design UI        
              $product = product::create([    
                         'id' => '1695/11',  
                         'name' => 'ecommerce product ', 
                         'unit' =>'3125',
                         'price'=>'6546',
                         'quantitiy'=>'578'
                                    
                               ]);       
                              echo 'product: ',$product->name;             
                              
}*/
return view(product.register);
function store($request)
{
$product= new product();
$product->name=$request->name;
$product->unit=$request->unit;
$product->price=$request->price;
$product->quantity=$request->quantity;
$is->seccessed=$product::save();
if($is->seccssed)
{
echo 'record save successfully';}
else {
   echo 'something went wrong try again';}
}
}
       }