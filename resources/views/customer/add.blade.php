@include('partials.header')
<form action="/saveCustomer" method="POST">
@csrf
    <div class="mb-3">
        <div class="mb-3">
        <label for="name" class="form-label">LAST NAME</label>
        <input type="text" class="form-control" name="lastName">
    </div>
    <div class="mb-3">
        <div class="mb-3">
        <label for="name" class="form-label">FIRST NAME</label>
        <input type="text" class="form-control" name="firstName">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">EMAIL ADDRESS</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">CONTACT NUMBER</label>
        <input type="text" class="form-control" name="contactNumber">
    </div>
    <div class="mb-3">
        <label for="confirm" class="form-label">ADDRESS</label>
        <input type="text" class="form-control" name="address">
    </div>
    
    <button type="submit" class="btn btn-primary">Save</button>   
</form>
@include('partials.footer')