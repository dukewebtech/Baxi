<div class="btn-group"  >
    <ul class="menu" >
        
        @foreach ($mydata["data"] as $package)
        <li><a href="/{{$serviceTypes}}/{{$package["code"]}}" >{{$package["name"]}}</a></li>
        {{-- <option value="volvo">{{$package["name"]}}</option> --}}
         {{-- {{$serviceTypes}} --}}
         @endforeach
         {{$serviceTypes}}
    </ul>
  </div>