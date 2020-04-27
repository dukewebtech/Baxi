
<script>
  $(document).ready(function(){
    $("button").click(function(){
      $("#cars").load("http://127.0.0.1:8000/dstv");
    });
  });
  </script>


  <!-- The DSTV -->
 
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Modal Heading</h1>
          <button type="button" class="close" data-dismiss="modal">x</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Some text to enable scrolling..</h3>
            <select id="cars" class="form-control">
                @foreach ($mydata["data"] as $package)
                <option value="volvo">{{$package["name"]}}</option>
                 @endforeach
            </select>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 
 
  




















































  <!-- The Gotv -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Modal Heading</h1>
          <button type="button" class="close" data-dismiss="modal">x</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Some text to enable scrolling..</h3>
            <select id="cars" class="form-control">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="audi">Audi</option>
                <option value="audi">Audi</option>
                <option value="audi">Audi</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
                <option value="saab">Saab</option>
                <option value="audi">Audi</option>
                <option value="audi">Audi</option>
                <option value="audi">Audi</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
                <option value="saab">Saab</option>
                <option value="audi">Audi</option>
                <option value="audi">Audi</option>
                <option value="audi">Audi</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- The Startimes -->
  <div class="modal" style="color:#black" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Modal Heading</h1>
          <button type="button" class="close" data-dismiss="modal">x</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h3>Some text to enable scrolling..</h3>
            <select id="cars" class="form-control">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="audi">Audi</option>
                <option value="audi">Audi</option>
                <option value="audi">Audi</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
                <option value="saab">Saab</option>
                <option value="audi">Audi</option>
                <option value="audi">Audi</option>
                <option value="audi">Audi</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
                <option value="saab">Saab</option>
                <option value="audi">Audi</option>
                <option value="audi">Audi</option>
                <option value="audi">Audi</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>