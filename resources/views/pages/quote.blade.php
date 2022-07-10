@extends('layouts.main')

@section('content')

<section class="quotePage">
    <div class="container">

    <div class="row">
        <div class="col-sm-12">
            <form>
                <h3>Your lawn won't  be a problem mch longer</h3>
                <h1>Let us tailor a plan for you.</h1>
                <div class="row f-row">
                    <div class="col">
                      <label for="inputEmail4">First name</label>
                      <input type="text" class="form-control" placeholder="John">
                    </div>
                    <div class="col">
                      <label for="inputEmail4">Last name</label>
                      <input type="text" class="form-control" placeholder="Smith">
                    </div>
                  </div>
                  <div class="row f-row">
                    <div class="col">
                    <label for="inputEmail4">Phone</label>
                      <input type="text" class="form-control" placeholder="555-123-4354">
                    </div>
                    <div class="col">
                        <label for="inputEmail4">Email</label>
                      <input type="text" class="form-control" placeholder="name@email.com">
                    </div>
                  </div>
                  <div class="row f-row">
                    <div class="col">
                        <label for="inputEmail4">Address</label>
                      <input type="text" class="form-control" placeholder="1224 west 23rd Street">
                    </div>
                    <div class="col">
                        <label for="inputEmail4">Zip Code</label>
                      <input type="text" class="form-control" placeholder="44052">
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
    </div>
</section>

@endsection
