@include('partials.header')
<x-nav/>
<form action="/store" method="POST">
@csrf
    <div class="mb-3">
        <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="mb-3">
        <label for="confirm" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="password_confirmation">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>   
</form>
@include('partials.footer')