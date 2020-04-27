
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>DukePay</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#btngotv").click(function(){
        $("#gotv").load("gotv");
      });
    });
    $(document).ready(function(){
      $("#btnstartimes").click(function(){
        $("#btnstartimes").load("startimes");
      });
    });
    $(document).ready(function(){
      $("#btndstv").click(function(){
        $("#dstv").load("dstv");
      });
    });
    </script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/welcome.css" rel="stylesheet">
   
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">DukePay</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">DSTV</a>
            <a class="nav-link" href="#">GoTv</a>
            <a class="nav-link" href="#">StarTimes</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Welcome To DukePay.</h1>
        <p class="lead">Pay Your Utility Bills on Your Prefered Online Payment Solution. Pay Power Bills Now. Sign Up Online.
            find A Biller. Highlights: Android App Available, Live Chat Support Available</p>
        <p class="lead">
          <div class="btn-group">
            <div id="dstv">
              <button type="button" id="btndstv" class="btn btn-success">DSTV</button>
            </div>
          <div id="gotv">
            <button type="button" id="btngotv" class="btn btn-primary">GOTV</button>
          </div>
          <div id="startimes" >
            <button type="button" id="btnstartimes" class="btn btn-info">Startimes</button>
          </div>
           
          </div>
          {{-- <div>
            <button type="button" class="btn btn-primarbtn btn-lg btn-primary" id="dstv" data-toggle="modal" data-target="#myModal">
              DSTV
             </button>
          </div>
           
        
          <button type="button" class="btn btn-primarbtn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">
           GoTv</a>
          </button>
        </p> --}}
        

        {{-- <p class="lead">
        
          <button type="button" class="btn btn-primarbtn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">
            <a href="http://127.0.0.1:8000/startimes" class="btn btn-lg btn-success">StarTimes</a>
          </button>
        </p> --}}

        {{-- <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>
        <button>Get External Content</button> --}}
       
     @if(empty($mydata)){
     {{ "Guy it is null"}}
     }
      @else{
        
                  @foreach ($mydata["data"] as $package)
                <option value="volvo">{{$package["name"]}}</option>
                 @endforeach
      
      }

      @endif




















          
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>2020 <a href="https://dukepay.com/">DUKE WEB TECH GROUP</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body> --}}
</html>
