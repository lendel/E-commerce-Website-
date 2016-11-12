@extends('Admin_panel.index')
@section('Titel','Company Information')
@section('From_content')



<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

      <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
            $("#Basic").click(function(event){
              $('#Advanced').show();
              $('#Basic').hide();
              $('.Advanced_Data').show(1000);
              $('.Basic_Data').show(1000);

            });

            $("#Advanced").click(function(event){
              $('#Basic').show();
              $('#Advanced').hide();
              $('.Advanced_Data').hide(1000);
              $('.Basic_Data').show(1000);
            });
         });
      </script>
<br>
<button style="border:1px #367FA9 solid;font-family:times new roman;color:#367FA9;height: 41px;width: 130px;font-size: 18px;background:#EFEFEF;" type="button" id="Basic"><i class="fa fa-circle" aria-hidden="true"></i>  Basic    </button>
<button style="border:1px #367FA9 solid;font-family:times new roman;color:#367FA9;height: 41px;width: 130px;font-size: 18px;background:#3C8DBC; color:white" type="button" hidden="hidden" id="Advanced"> Advanced <i class="fa fa-circle" aria-hidden="true"></i>        </button>

<br><br>
<div style="font-family:times new roman" class="Basic_Data well">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
            <div class="col-sm-2">Company Name</div>
            <div class="col-sm-3"><input type="text" name="" class="col-xs-8"><span style="font-size:20px; color:red">*</span></div>
            <div class="col-sm-2">Company Mobile Number</div>
            <div class="col-sm-5"><input type="text" name="" class="col-xs-5"><span style="font-size:20px; color:red">*</span></div>
          </div>

          <div class="col-sm-12">
            <div class="col-sm-2">Company Location</div>
            <div class="col-sm-3"><input type="text" name="" class="col-xs-8"><span style="font-size:20px; color:red">*</span></div>
            <div class="col-sm-2">Location Api</div>
            <div class="col-sm-5"><input type="text" name="" class="col-xs-5"></div>
          </div>

          <div class="col-sm-12">
            <div class="col-sm-2">Company Location</div>
            <div class="col-sm-3"><input type="text" name="" class="col-xs-8"><span style="font-size:20px; color:red">*</span></div>
            <div class="col-sm-2">Location Api</div>
            <div class="col-sm-5"><input type="text" name="" class="col-xs-5"></div>
          </div>

          <div class="col-sm-12">
            <div class="col-sm-2">Company Logo</div>
            <div class="col-sm-3"><input type="file" name="" class="col-xs-8"><span style="font-size:20px; color:red">*</span><br>
              <img style="height: 60px;" src="images/Develop/unnamed.png">
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5"></div>
          </div>

      </div>
  </div>
</div>




<div style="font-family:times new roman" hidden="hidden" class="Advanced_Data well">
  <div class="container">

    <div class="col-sm-12">
          <div class="col-sm-2">Company EIIN</div>
          <div class="col-sm-3"><input type="text" name="" class="col-xs-8"></div>
          <div class="col-sm-2">GIN</div>
          <div class="col-sm-5"><input type="text" name="" class="col-xs-5"></div>
    </div>

    <div class="col-sm-12">
          <div class="col-sm-2">Company Tax No</div>
          <div class="col-sm-3"><input type="text" name="" class="col-xs-8"></div>
          <div class="col-sm-2">FAX</div>
          <div class="col-sm-5"><input type="text" name="" class="col-xs-5"></div>
    </div>

    <div class="col-sm-12">
          <div class="col-sm-2">ABN</div>
          <div class="col-sm-3"><input type="text" name="" class="col-xs-8"></div>
          <div class="col-sm-2">Town</div>
          <div class="col-sm-5"><input type="text" name="" class="col-xs-5"></div>
    </div>

    <div class="col-sm-12">
          <div class="col-sm-2">State</div>
          <div class="col-sm-3"><input type="text" name="" class="col-xs-8"></div>
          <div class="col-sm-2">Postal Zip Code</div>
          <div class="col-sm-5"><input type="text" name="" class="col-xs-5"></div>
    </div>

    <div class="col-sm-12">
          <div class="col-sm-2">ABN</div>
          <div class="col-sm-3"><input type="text" name="" class="col-xs-8"></div>
          <div class="col-sm-2">ACN</div>
          <div class="col-sm-5"><input type="text" name="" class="col-xs-5"></div>
    </div>

    <div class="col-sm-12">
          <div class="col-sm-2">Company Address</div>
          <div class="col-sm-8"><textarea rows="5" cols="5" class="form-control"></textarea></div>

    </div>
  </div>
</div>

<div class="col-sm-12 text-center">

      <div><input class="btn btn-success" type="submit"></div>
      <br><br><br>

</div>

@stop
