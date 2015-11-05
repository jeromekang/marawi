@extends('layouts.default')
@section('content')
 
  <!-- Begin page content -->
  <div class="col-lg-12" >
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#addSupplier">Add Supplier</button>
      <div id="addSupplier" class="collapse">
        <form class="form-horizontal">
          <fieldset>
            <!-- Form Name -->
            <legend>Add Supplier</legend>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="supplierName">Supplier Name</label>  
              <div class="col-md-4">
              <input id="supplerName" name="supplerName" type="text" placeholder="" class="form-control input-md" required="">      
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="supplierAddress">Supplier Address</label>  
              <div class="col-md-6">
              <input id="supplierAddress" name="supplierAddress" type="text" placeholder="" class="form-control input-md">     
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="tinNumber">TIN Number</label>  
              <div class="col-md-4">
              <input id="tinNumber" name="tinNumber" type="text" placeholder="" class="form-control input-md">            
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="contactPerson">Contact Person</label>  
              <div class="col-md-4">
              <input id="contactPerson" name="contactPerson" type="text" placeholder="" class="form-control input-md">                
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="contactNumber">Contact Number</label>  
              <div class="col-md-4">
              <input id="contactNumber" name="contactNumber" type="text" placeholder="" class="form-control input-md">               
              </div>
            </div>
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="addSupplier"></label>
              <div class="col-md-4">
                <button id="addSupplier" name="addSupplier" class="btn btn-success">Add Supplier</button>
              </div>
            </div>
          </fieldset>
          <!--END FORM-->
        </form>
      </div>

      <br><br><br>

      <div>
      <table id="table_id" class="table table-bordered table-striped"  cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Supplier Name</th>
                  <th>Address</th>
                  <th>TIN Number</th>
                  <th>Contact Person</th>
                  <th>Contact Number</th>
                  <th>Terms</th>
              </tr>
          </thead>
          <tbody>
          <?php
            foreach ($supplier as $supplier) {
              echo "<tr>";
                echo "<td> $supplier->name </td>";
                echo "<td> $supplier->address </td>";
                echo "<td> $supplier->tinNumber </td>";
                echo "<td> $supplier->contactPerson </td>";
                echo "<td> $supplier->contactNumber </td>";
                if ($supplier->dayTerms != NULL) {
                  echo "<td> $supplier->dayTerms Days</td>";
                }else{
                  echo "<td></td>";
                }

              echo "</tr>";
            }
          ?>
          </tbody>
      </table>
      </div>

      <script>
        $(document).ready( function () {
          $('#table_id').DataTable();
      } );
      </script>


      <script>
        $(".btn[data-toggle='collapse']").click(function() {
            if ($(this).text() == 'Add Supplier') {
                $(this).text('Fill Up the Form');
            } else {
                $(this).text('Add Supplier');
            }
        });
      </script>

  </div>
@stop
@include('includes.footer')
</html>