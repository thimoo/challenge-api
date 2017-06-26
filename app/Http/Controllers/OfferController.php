<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return all offers.
     *
     * @return Response
     */
    public function index()
    {
        return Offer::all();
    }

    /**
     * Return a specifig offer.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Offer::with('products')->findOrFail($id);
    }

    /**
     * Store a new offer.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $offer = new Offer($request->only([
            'name', 'client_name', 'description',
        ]));
        $offer->save();

        foreach ($request->input('products') as $product) {
            $offer->products()->attach([$product['id'] => ['qte' => $product['qte']]]);
        }

        return $offer->load('products');
    }
}
