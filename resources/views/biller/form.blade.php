<div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h2>DukePay: </h2>
      <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>

    <div class="row">
    
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate method="POST" action="/submitForm">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Email:</label>
              <input type="text" class="form-control" id="firstName" placeholder="youremail@example.com" value="" required>
              <div class="invalid-feedback">
                Valid Email is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Mobile Number</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="+234 800 123 4567 " required>
              <div class="invalid-feedback">
                Valid Mobile Number is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="username">Smart Card Number</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">#</span>
              </div>
              <input type="number" class="form-control" id="username" placeholder="Smart Card Number" required>
              {{ csrf_field() }}
              <div class="invalid-feedback" style="width: 100%;">
                Your Smart Card is required.
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">Package</label>
              <select class="custom-select d-block w-100" id="country" required>
                <option value="">Choose...</option>
                @foreach ($mydata["data"] as $package)
                <option>{{$package["name"]}} </option>
                @endforeach
             
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-5 mb-3">
              <label for="country">Months</label>
              <select class="custom-select d-block w-100" id="country" required>
                <option value="">Choose...</option>
                @foreach ($mydata["data"]['availablePricingOptions'] as $package => $data)
                {{-- @foreach ($package["availablePricingOptions"] as $item) --}}
                {{-- <option>{{$item["monthsPaidFor"]}} Months =>{{$item["price"]}} </option> --}}

                {{ $package }}

                {{-- @endforeach --}}
               
                @endforeach
             
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <label for="zip">Amount</label>
              <input type="text" class="form-control" id="zip" placeholder="N5,600" disabled>
              <div class="invalid-feedback">
            
              </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="zip">Biller</label>
                <input type="text" class="form-control" id="zip" placeholder="{{$productName}}" disabled>
                <div class="invalid-feedback">
               
                </div>
              </div>
          </div>
          <hr class="mb-4">
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017-2018 Company Name</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>