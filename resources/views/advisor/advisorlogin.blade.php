
 <head>
    <style>
    @media (min-width: 1025px) {
        .h-custom {
          height: 100vh !important;
        }
      }
      </style>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
  
  </head>
  <section class="h-100 h-custom" style="background-color:#0399df;
  ;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
           
            <div class="card-body p-4 p-md-5">
              <h3 class="text-center">Login Here</h3><br>
  
              <form action="{{route('validate')}}" method="post" id="login_form" class="form_class"> 
                @csrf
  
                <div class="row mb-3">
                    <label for="" class="col-md-4 col-form-label text-md-end">{{ __(' Name') }}</label>
  
                    <div class="col-md-6">
                        <input id="" type="" class="form-control @error('') is-invalid @enderror" name="" value="{{ old('') }}" required autocomplete="" autofocus>
  
                       
                    </div>
                </div>
  
                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
  
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
  
                     
                    </div>
                </div>
  
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                           Add
                        </button>
  
                       
                    </div>
                </div>
            </form>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  {{--@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Login') }}</div>
  
                  <div class="card-body">
                    
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection --}}
  
  
 