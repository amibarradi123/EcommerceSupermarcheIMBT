@extends('layouts.app')

@section('content')

   
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php $total = 0 ?>
                                @if(session('cart'))

								
                                    @foreach(session('cart') as $id => $details)
                        
                                        <?php $total += $details['prix'] * $details['quantite'] ?>
                        <tr>
                            <td class="align-middle">{{ $details['nom'] }}</td>
                            <td class="align-middle">MAD {{ $details['prix'] }},00</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 150px;">
                                    <form action={{ route('product.update',$id) }} class="form-inline" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group mx-sm-3 mb-2">
                                        <input type="number" name="quantite" value="{{ $details['quantite'] }}" class="form-control form-control-sm bg-secondary text-center"   />
                                    <button class="btn btn-primary btn-sm"
                                    type="submit" style="color: black;background-color:transparent;border:none;"><i class="fa fa-refresh"></i></a></button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </td>
                            <td class="align-middle">MAD {{$total}},00</td>
                            <td class="align-middle"><a href="{{ url('remove-from-cart',$id) }}" class="btn btn-primary btn-sm" ><i class="fa fa-trash"></i></td>
                        </tr>
                       @endforeach
                       @endif
                       
                      
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-5" action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">MAD {{$total}},00</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">MAD {{$total}},00</h5>
                        </div>
                        <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

    
@endsection
