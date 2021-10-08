<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

<h1 class='text-center'>Login</h1>
<form action="sub" method="POST">
    @csrf
    <div>
        @if($errors->any())
        <span class="alert bg-danger fade show"><strong>{{$errors}}</strong></span>
        @endif
    </div>
<div class="row">
    
  <div class="col-md-12">
    <input type="text" name="mail" class="form-control" placeholder="First name" aria-label="First name">
    
    <span>
        @error('mail'){{$message}}
            
        @enderror
    </span>

  </div>
  <div class="col-md-12 mt-5">
    <input type="text" name='pass' class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
  <div class="col-md-4">
      <input class="btn btn-success" value="submit" type="submit">
  </div>
</div>
</form>