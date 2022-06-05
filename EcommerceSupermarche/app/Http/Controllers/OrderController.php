<?php

namespace App\Http\Controllers;

use App\Models\DetailsCommande;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function checkout(Request $request)
    {
        $total = 0;
        if (session()->get('cart')) {
            $cart = session()->get('cart');
            foreach ($cart as $key => $product) {
                $total += $product['prix'] * $product['quantite'];
            }
        }
        $order = Order::create([
            'Date_Commande' => Date('Y-m-d'),
            'Adresse_Liv_Commande' => $request->address,
            'Montant_Commande' => $total,
            'Id_Client' => Auth::user()->id,
            'Etat_Commande' => 'En cours',
            'ModePaiement' => $request->mode_paiement
        ]);
        foreach ($cart as $key => $product) {
            DetailsCommande::create([
                'Id_Commande' => $order->id,
                'Id_Produit' => $key,
                'Quantite' => $product['quantite']
            ]);
        }
        session()->forget('cart');
        return redirect()->route('index');
    }
}
