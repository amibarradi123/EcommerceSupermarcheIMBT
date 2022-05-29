<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function ShowClients()
    {
        $clients = DB::table('clients')
        ->orderby('Id_Client','desc')
        ->get(); 

        return view('admin',compact('clients'));

    }

    public function ShowCommandes()
    {
        $commandes = DB::table('commandes')
        ->orderby('Id_Commande','desc')
        ->get(); 

        return view('admin',compact('commandes'));

    }

    public function ShowCommentaires()
    {
        $commentaires = DB::table('commentaires')
        ->orderby('Id_Commentaire','desc')
        ->get(); 

        return view('admin',compact('commentaires'));

    }

    public function ShowFournisseurs()
    {
        $fournisseurs = DB::table('fournisseurs')
        ->orderby('Id_Fournisseur','desc')
        ->get(); 

        return view('admin',compact('fournisseurs'));

    }

    public function ShowLivraisons()
    {
        $livraisons = DB::table('livraisons')
        ->orderby('Id_Livraison','desc')
        ->get(); 

        return view('admin',compact('livraisons'));

    }

    public function ShowLivreurs()
    {
        $livreurs = DB::table('livreurs')
        ->orderby('Id_Livreur','desc')
        ->get(); 

        return view('admin',compact('livreurs'));

    }
    
    public function ShowProduits()
    {
        $produits = DB::table('produits')
        ->orderby('Id_Produit','desc')
        ->get(); 

        return view('admin',compact('produits'));

    }
    
    public function ShowUsers()
    {
        $users = DB::table('user')
        ->orderby('Id_Utilisateur','desc')
        ->get(); 

        return view('admin',compact('users'));

    }

    public function ShowCategories()
    {
        $categories = DB::table('categories')
        ->orderby('Id_Categorie','desc')
        ->get(); 

        return view('admin',compact('categories'));

    }
    public function ShowCodepromo()
    {
        $codepromo = DB::table('codepromo')
        ->orderby('Id_CodePromo','desc')
        ->get(); 

        return view('admin',compact('codepromo'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         if($id && $request->input('quantite'))
     {
         $cart = session()->get('cart');

         $cart[$id]["quantite"] = $request->input('quantite');

         session()->put('cart', $cart);

         session()->flash('success', 'Cart updated successfully');
     }
     return redirect('cart');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
