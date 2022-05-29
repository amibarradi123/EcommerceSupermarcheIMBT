<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\Models\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $product=Product::all();
        return view('product',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nom_Produit' => 'required',
            'Prix_Produit' => 'required',
            'Quantite_Produit' => 'required',
            'Id_Categorie' => 'required',


        ]);
  
        Product::create($request->all());
   

        if($request->hasFile("img")){
                $files=$request->file("img");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request['url_Image']=$imageName;
                    $request['Id_Produit']=$product->Id_Produit;
                    $file->move(\public_path("/img"),$imageName);
                    Image::create($request->all());

                }
            }

        return redirect()->route('product.index')
                        ->with('success','Product created successfully.');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addcart($id)
    {
        $product = Product::find($id);
      

        if(!$product) {
   
            abort(404);
   
        }
  
        $cart = session()->get('cart');  
   
        
        if(!$cart) {
   
            $cart = [
                    $id => [
                        "idproduit" => $product->Id_Produit,
                        "nom" => $product->Nom_Produit,
                        "quantite" => 1,
                        "prix" => $product->Prix_Produit,
                       
                        
                    ]
            ];
   
            session()->put('cart', $cart);
   
            return redirect()->back()->with('success', 'added to cart successfully!');
        }
   
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
   
            $cart[$id]['quantite']++;
   
            session()->put('cart', $cart); // this code put product of choose in cart
   
            return redirect()->back()->with('success', 'Product added to cart successfully!');
   
        }
   
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
                "idproduit" => $product->Id_Produit,
                "nom" => $product->Nom_Produit,
                "quantite" => 1,
                "prix" => $product->Prix_Produit,
                        
        ];
   
        session()->put('cart', $cart); // this code put product of choose in cart
   
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function cart()
    {
        
        return view('panier');
    }


    public function remove(Request $request,$id)
    {
 
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
        return redirect('cart');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod=Product::find($id);
    return view('productdetail',compact('prod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      
    }


}
