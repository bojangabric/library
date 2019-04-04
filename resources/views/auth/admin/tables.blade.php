<?php
	$selected_table = "authors";
  if (isset($_GET['table']) && !empty($_GET['table']))
  {
    $selected_table = $_GET['table'];
  }
  $columns = DB::getSchemaBuilder()->getColumnListing($selected_table);
  $primkey = $columns[0];
  $seckey = $columns[1];

?>
  @extends('auth.admin.layouts.master') 
  
  @section('title', 'Tables') 
  
  @section('dashboard', 'Tables') 
  @section('content')
  
  <div class="container-flex m-3">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <form method="GET" action="">
              <i class="fas fa-table"></i>
              <select id="table" name="table" onchange="this.form.submit()">
                <?php
                  $alltables = DB::select('SHOW TABLES');
                  foreach ($alltables as $table) {
                    echo '<option ' . ($selected_table == $table->Tables_in_FjN4KIpOaB ? 'selected ' : '') .
                      'value="' . $table->Tables_in_FjN4KIpOaB . '">' . $table->Tables_in_FjN4KIpOaB	 .'</option>';
                  }
                ?>
              </select>
            </form>
          </div>

          <div class="card-body table-responsive ">
            <table id="main-table" class="display">
                <thead>
                  <tr>
                    @foreach ($columns as $col)
                      <th class="text-center">{{ $col }}</th>
                    @endforeach
                  </tr>
                </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $(document).ready(function() {
    var table = $('#main-table').DataTable({
      "processing": true,
      "serverside": true,
      "ajax":{
        type: 'POST',
        url: '/getTableData',
        data: {
          'table': <?php echo json_encode($selected_table); ?>,
          'id': <?php echo json_encode($primkey); ?>,
          'columns': <?php echo json_encode($columns); ?>
        } 
      },
      select: 'single',
      altEditor: true,
      dom: 'Bfrtip',
      buttons: [{
        className: 'dt-button-add',
        text: 'Add',
        name: 'add',
      },
      {
        className: 'dt-button-edit',
        extend: 'selected',
        text: 'Edit',
        name: 'edit'
      },
      {
        className: 'dt-button-delete',
        extend: 'selected',
        text: 'Delete',
        name: 'delete'
      }]
    });

    function str_pad(n) {
      return String("0" + n).slice(-2);
    }

    function get_all_inputs(inputs) {
      $("#altEditor-form :input").each(function(){
        var name = $(this).attr('name');
        var val = $(this).val();
        inputs[name] = val;
      });
    }

    function check_all_inputs(inputs) {
      for (var e in inputs){
        if (inputs[e] == "") {
          if ($(".info-label").hasClass('alert-success'))
            $(".info-label").toggleClass('alert-success alert-danger');
          $(".info-label").text("Fill all inputs!");
          $(".info-label").show();
          return false;
        }
      }
      return true;
    }

    function info_label_response(response, message) {
      if (response == 'success') {
        if ($(".info-label").hasClass('alert-danger'))
          $(".info-label").toggleClass('alert-danger alert-success');
        $(".info-label").text(message);
        $(".info-label").show();
      } else {
        if ($(".info-label").hasClass('alert-success'))
          $(".info-label").toggleClass('alert-success alert-danger');
        $(".info-label").text(response);
        $(".info-label").show();
      }
    }
  
    $('.dt-button-add').on('click', function(e) {
      var d = new Date($.now());
      $("#altEditor-form :input").each(function(){
        if ($(this).attr('name') == 'created_at' || $(this).attr('name') == 'updated_at') {
          $(this).val(d.getFullYear()+"-"+ str_pad(d.getMonth() + 1) +"-"+ str_pad(d.getDate())+" "+str_pad(d.getHours())+":"+str_pad(d.getMinutes())+":"+str_pad(d.getSeconds()));
          $(this).prop('readonly', true);
        } else if ($(this).attr('name') == 'remember_token') {
          $(this).val('null');
          $(this).prop('readonly', true);
        }
      });
    });

    // Add row button
    $('#altEditor-modal').on('click', '#addRowBtn', function(e) {
      e.preventDefault(); 
      var inputs = {};
      get_all_inputs(inputs);
      if (!check_all_inputs(inputs))
        return false;

      var inputs_array = new Array();
      for (var items in inputs){
        inputs_array.push(inputs[items]);
      }

      $.ajax({
        type: 'POST',
        url: '/addTableRow',
        data: {
          'table': <?php echo json_encode($selected_table); ?>,
          'id': <?php echo json_encode($primkey); ?>,
          'data': JSON.stringify(inputs)
        },
        success: function(response) {
          info_label_response(response, "Successfully added!");
          if (response == 'success')
            table.row.add(inputs_array).draw();
        }
      })
    });
    
    // Edit row button
    $('#altEditor-modal').on('click', '#editRowBtn', function(e) {
      e.preventDefault(); 
      var inputs = {};
      get_all_inputs(inputs);
      if (!check_all_inputs(inputs))
        return false;

      var inputs_array = new Array();
      for (var items in inputs){
        inputs_array.push(inputs[items]);
      }

      $.ajax({
        type: 'POST',
        url: '/editTableRow',
        data: {
          'table': <?php echo json_encode($selected_table); ?>,
          'id': <?php echo json_encode($primkey); ?>,
          'secid': <?php echo json_encode($seckey); ?>,
          'data': JSON.stringify(inputs)
        },
        success: function(response) {
          info_label_response(response, "Successfully edited!");
          if (response == 'success')
            table.row({ selected: true }).data(inputs_array);
        }
      })
    });
    
    // Delete row btn
    $('#altEditor-modal').on('click', '#deleteRowBtn', function(e) {
      e.preventDefault(); 
      var inputs = {};
      get_all_inputs(inputs);

      $.ajax({
        type: 'POST',
        url: '/deleteTableRow',
        data: {
          'table': <?php echo json_encode($selected_table); ?>,
          'id': <?php echo json_encode($primkey); ?>,
          'data': JSON.stringify(inputs)
        },
        success: function(response) {
          info_label_response(response, "Successfully deleted!");
        }
      })
    });

  });
</script>
@endpush

