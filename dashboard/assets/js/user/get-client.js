var dataTable;
$(document).ready(function () {
  dataTable = $("#table-client").DataTable({
    ordering: false,
    language: {
      sProcessing: "Processing...",
      sLengthMenu: "Show _MENU_ entries",
      sZeroRecords: "No matching records found",
      sEmptyTable: "No data available in table",
      sInfo: "Showing _START_ to _END_ of _TOTAL_ entries",
      sInfoEmpty: "Showing 0 to 0 of 0 entries",
      sInfoFiltered: "(filtered from _MAX_ total entries)",
      sInfoPostFix: "",
      sSearch: "Search:",
      sUrl: "",
      sInfoThousands: ",",
      sLoadingRecords: "Loading...",
      oPaginate: {
        sFirst: "First",
        sLast: "Last",
        sNext: "Next",
        sPrevious: "Previous",
      },
      oAria: {
        sSortAscending: ": activate to sort column ascending",
        sSortDescending: ": activate to sort column descending",
      },
      buttons: {
        copy: "Copy",
        colvis: "Columns",
      },
    }
  });

  getTable(dataTable);

});

function getTable(dataTable) {

  $.ajax({
    url: 'config/user/getUser.php',
    method: 'POST',
    data: {
      action: 'get_all_client'
    },
    dataType: 'json',
    success: function (data) {

      // Clear DataTable before adding new rows
      dataTable.clear();

      // Iterate over the data and add rows to the table
      $.each(data, function (index, result) {

        var formattedDate = new Date(result.creation_date);
        var day = formattedDate.getDate().toString().padStart(2, '0');
        var month = (formattedDate.getMonth() + 1).toString().padStart(2, '0');
        var year = formattedDate.getFullYear();
        var hour = formattedDate.getHours().toString().padStart(2, '0');
        var minutes = formattedDate.getMinutes().toString().padStart(2, '0');
        var finalDate = day + '/' + month + '/' + year + ' ' + hour + ':' + minutes;


        var newRow = '<tr>' +
          '<td class="align-middle text-center">' + result.id + '</td>' +
          '<td class="align-middle text-center">' + result.name + '</td>' +
          '<td class="align-middle text-center">' + result.lastname + '</td>' +
          '<td class="align-middle text-center">' + result.email + '</td>' +
          '<td class="align-middle text-center">' + result.country + '</td>' +
          '<td class="align-middle text-center">' + result.phone + '</td>' +
          '<td class="align-middle text-center">' + finalDate + '</td>' +
          '</tr>';
        dataTable.row.add($(newRow)).draw(false);
      });
    }
  });
}
