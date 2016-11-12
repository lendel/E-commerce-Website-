@extends('Admin_panel.index')
@section('Titel','Company Information')
@section('From_content')



<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

      <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
            $("#Add_new").click(function(event){
              $('.Basic_Data').toggle();


            });


         });
      </script>







<div class="col-sm-12 text-left">
  <div><a id="Add_new" class="btn btn-success"><i class="fa fa-plus-square " aria-hidden="true"></i>  Add New</a></div>
</div>
<br><br>








<div id="report" style="width:100%" class="container">
  <div class="row">


      <table style="font-family:times new roman" class="table table-bordered">
        <thead>
          <tr style="background:#F5F5F5">
            <th>Friendly Name</th>
            <th>System Name</th>
            <th>Logo</th>

            <th>Tran. Acount</th>
            <th>Tran. Bank Name</th>
            <th>Is Active</th>
            <th>Configure</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>Check / Money Order</td>
            <td>Payments.CheckMoneyOrder</td>
            <td><img src="images\Develop\logo.jpg"></td>

            <td>AC0014578368</td>
            <td>Dutch Bangla Bank</td>
            <td>Active</td>
            <td><a href="#">configure</a></td>
            <td><a href="#">Edit</a></td>
          </tr>

          <tr>
            <td>Check / Money Order</td>
            <td>Payments.CheckMoneyOrder</td>
            <td><img src="images\Develop\logo.jpg"></td>

            <td>AC0014578368</td>
            <td>Dutch Bangla Bank</td>
            <td>Active</td>
            <td><a href="#">configure</a></td>
            <td><a href="#">Edit</a></td>
          </tr>

          <tr>
            <td>Check / Money Order</td>
            <td>Payments.CheckMoneyOrder</td>
            <td><img src="images\Develop\logo.jpg"></td>

            <td>AC0014578368</td>
            <td>Dutch Bangla Bank</td>
            <td>Active</td>
            <td><a href="#">configure</a></td>
            <td><a href="#">Edit</a></td>
          </tr>

        </tbody>
      </table>
      </div>

</div>



<div hidden="hidden" style="font-family:times new roman" class="Basic_Data well">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
            <div class="col-sm-2">Friendly Name</div>
            <div class="col-sm-3"><input type="text" name="" class="col-xs-8"><span style="font-size:20px; color:red">*</span></div>
            <div class="col-sm-2">Tran. Bank Name</div>
            <div class="col-sm-5"><input type="text" name="" class="col-xs-5"><span style="font-size:20px; color:red">*</span></div>
          </div>

          <div class="col-sm-12">
            <div class="col-sm-2">system Name</div>
            <div class="col-sm-3"><input type="text" name="" class="col-xs-8"><span style="font-size:20px; color:red">*</span></div>
            <div class="col-sm-2">Tran. Acount</div>
            <div class="col-sm-5"><input type="text" name="" class="col-xs-5"></div>
          </div>

          <div class="col-sm-12">
            <div class="col-sm-2">Tran. Country</div>
            <div class="col-sm-3"><input type="text" name="" class="col-xs-8"><span style="font-size:20px; color:red">*</span></div>
            <div class="col-sm-2">Active</div>
            <div class="col-sm-5"><select  class="col-xs-5">
                                    <option>Bangladesh</option>
                                    <option>America</option>
                                    <option>India</option>
                                  </select>
          </div>
          </div>

          <div class="col-sm-12">
            <div class="col-sm-2">Logo</div>
            <div class="col-sm-3"><input type="file" name="" class="col-xs-8"><span style="font-size:20px; color:red">*</span><br>
              <img style="height: 60px;" src="images/Develop/unnamed.png">
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5"><button type="submit" class="btn btn-primary" ><i class="fa fa-floppy-o" aria-hidden="true"></i>   Save</button></div>
          </div>

      </div>
  </div>
</div>

@stop
