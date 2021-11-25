@extends("master")

@section("title","Cart")

@section("body")
<h3>Cart</h3>
<form method="POST">
    <table class="table table-default">
    <tr>
        <th>ID</th><th>Nama</th><th>Harga</th><th>Jumlah</th><th>Subtotal</th>
    </tr>
    @for ($i = 0; $i < 3; $i++)
    <tr>
        <td>{{$i}}</td><td><img src="https://dummyimage.com/50x50/ffffff/000000" style="max-width: 50px;">  Barang {{$i}}</td>
        <td>
            <input class="form-control d-inline text-center me-3 txtJumlah" type="number" value="{{$i}}" style="max-width: 6rem">
            <button class="btn btn-outline-dark flex-shrink-0" type="button" name="btnUpdate" value="1">
                <i class="btnUpdate me-1"></i>
                Update
            </button>
        </td>
        <td>{{$i}}</td><td>{{$i*$i}}</td>
    </tr>
    @endfor
    </table>
    <div class="row justify-content-end">
        <div class="col-12 col-md-4 col-sm-3 col-xl-2">
            <h4>Payment type</h4>
            <input type="radio" name="paymentType" value="1"> Debit Card <i class="bi-credit-card-2-front-fill"></i><br/>
            <input type="radio" name="paymentType" value="1"> Credit Card <i class="bi-credit-card-fill"></i><br/>
            <input type="radio" name="paymentType" value="1"> Bank Transfer <i class="bi-bank"></i><br/>
        </div>
    </div>
    <div class="clear-fix  my-3">
    <button class="btn btn-outline-dark float-end d-inline flex-shrink-0" type="button" name="btnCheckout" value="1">
        <i class="bi-cash-coin me-1"></i>
        Checkout
    </button>
    </div>
</form>
@endsection
