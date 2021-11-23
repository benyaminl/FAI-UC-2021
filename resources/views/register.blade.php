@extends("master")

@section("title","Login")

@section("body")
<form method="POST">
    <label>Full Name</label>
    <input type="text" class="form-control" name="full_name"><br/>
    <label>Username</label>
    <input type="text" class="form-control" name="user"><br/>
    <label>Email</label>
    <input type="text" class="form-control" name="email">
    <br/>
    <label>Password</label>
    <input type="password" class="form-control" name="pass">
    <br/>
    <label>Verify Password</label>
    <input type="password_verify" class="form-control" name="pass">
    <br/>
    <label>Address</label>
    <input type="text" class="form-control" name="address">
    <br/>
    <label>City</label>
    <input type="text" class="form-control" name="city">
    <br/>
    <label>Country</label>
    <select class="form-control" name="country" id="country">
        <option>Loading...</option>
    </select>
    <br/><br/>
    <button class="btn btn-secondary">Login</button>
</form>
@endsection

@push("css")
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
@endpush

@push("js")
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
// $(function() {
    $.get("{{ asset('countries.json') }}", function(r) {
        var html = "";
        console.log(r);
        r.forEach(function(c) {
            html += "<option>"+c.name+"</option>";
        });

        $("#country").html(html).select2({theme: 'bootstrap4'});
    }).fail(function(e) {
        console.log(e);
    });
// });
</script>
@endpush
