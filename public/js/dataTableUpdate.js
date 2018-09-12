$(document).ready(function() {
    $('#example').DataTable({
      "processing": true,
      "serverSide": true,
      "ajax": "/dataTableUpdate",
      "sPaginationType": "full_numbers",
      dom: 'Bfrtip',
      select: 'single',
      altEditor: true,  
      buttons: [
        {text: 'Add', name: 'add'},
        {extend: 'selected', text: 'Edit', name: 'edit'},
        {extend: 'selected', text: 'Delete', name: 'delete'}
      ],
      "columnDefs": [{
        "targets": [0],
        "visible": false,
        "searchable": false
      }]
    });
  });