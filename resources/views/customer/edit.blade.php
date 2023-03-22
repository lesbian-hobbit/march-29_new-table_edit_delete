@include('partials.header')
<form action="/updateCustomer" method="POST">
@csrf
        <input type="hidden" class="form-control" name="id" value="{{$customer->id}}">
    <div class="mb-3">
        <div class="mb-3">
        <label for="name" class="form-label">LAST NAME</label>
        <input type="text" class="form-control" name="lastName" value="{{$customer->lastName}}">
    </div>
    <div class="mb-3">
        <div class="mb-3">
        <label for="name" class="form-label">FIRST NAME</label>
        <input type="text" class="form-control" name="firstName" value="{{$customer->firstName}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">EMAIL ADDRESS</label>
        <input type="email" class="form-control" name="email" value="{{$customer->email}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">CONTACT NUMBER</label>
        <input type="text" class="form-control" name="contactNumber" value="{{$customer->contactNumber}}">
    </div>
    <div class="mb-3">
        <label for="confirm" class="form-label">ADDRESS</label>
        <input type="text" class="form-control" name="address" value="{{$customer->address}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Edit</button>   
</form>
@include('partials.footer')