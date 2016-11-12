@extends('Admin_panel.index')
@section('Titel','Company Information')
@section('From_content')

<br>
<div style="font-family:times new roman" class="Basic_Data well">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
            <div class="col-sm-2">SK</div>
            <div class="col-sm-3"><input type="text" name="" class="col-xs-8"><span style="font-size:20px; color:red">*</span></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5"></div>
          </div>

          <div class="col-sm-12">
            <div class="col-sm-2">Manufacture(Brand) Name</div>
            <div class="col-sm-3"><input type="text" name="" class="col-xs-8"><span style="font-size:20px; color:red">*</span></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5"></div>
          </div>

          <div class="col-sm-12">
            <div class="col-sm-2">Category Name</div>
            <div class="col-sm-3"><input type="text" name="" class="col-xs-8"><span style="font-size:20px; color:red">*</span></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5"></div>
          </div>
          <div class="col-sm-12">
            <div class="col-sm-2">Category Status</div>
            <div class="col-sm-3">
              <input type="checkbox" name="">Active
              <input type="checkbox" name="">Deactive<span style="font-size:20px; color:red">*</span>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5"></div>
          </div>

          <div class="col-sm-12">
            <div class="col-sm-2"></div>
            <div class="col-sm-3"><input type="submit" name=""  value="Add"><br>

            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-5"></div>
          </div>

      </div>
  </div>
</div>

<div id="report" style="width:100%" class="container">
  <div class="row">


      <table style="font-family:times new roman" class="table table-bordered">
        <thead>
          <tr style="background:#F5F5F5">
            <th>SK</th>
            <th>Manufacture(Brand) Name</th>
            <th>Category Name</th>
            <th>Status</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>1</td>
            <td>HP</td>
            <td>Laptop</td>
            <td>Active</td>
            <td><a href="#">Edit</a></td>
          </tr>

          <tr>
            <td>1</td>
            <td>HP</td>
            <td>Laptop</td>
            <td>Active</td>
            <td><a href="#">Edit</a></td>
          </tr>

          <tr>
            <td>1</td>
            <td>HP</td>
            <td>Laptop</td>
            <td>Active</td>
            <td><a href="#">Edit</a></td>
          </tr>

        </tbody>
      </table>
      </div>

</div>

@stop
