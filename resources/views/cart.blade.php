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
        <td>{{$i}}</td><td>Barang {{$i}}</td><td>{{$i}}</td><td>{{$i}}</td><td>{{$i*$i}}</td>
    </tr>
    @endfor
    </table>
</form>
@endsection
