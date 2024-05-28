var dataTable;
$(document).ready(function () {
  dataTable = $("#table-payment").DataTable({
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
    url: 'config/pay/getPayments.php',
    method: 'POST',
    data: {
      action: 'get_all_payments'
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
        var creationDate = day + '/' + month + '/' + year;

        var formattedDate2 = new Date(result.date_end);
        var day2 = formattedDate2.getDate().toString().padStart(2, '0');
        var month2 = (formattedDate2.getMonth() + 1).toString().padStart(2, '0');
        var year2 = formattedDate2.getFullYear();
        var dateEnd = day2 + '/' + month2 + '/' + year2;


        var newRow = '<tr>' +
          '<td class="align-middle text-center">' + result.id + '</td>' +
          '<td class="align-middle text-center">' + result.correlative + '</td>' +
          '<td class="align-middle text-center">' + result.user_id + '</td>' +
          '<td class="align-middle text-center">' + creationDate + '</td>' +
          '<td class="align-middle text-center">' + result.total + '</td>' +
          '<td class="align-middle">' +
          '<div class="d-flex justify-content-center align-items-center gap-1">' +
          '<button type="button" class="btn btn-sm btn-primary"><i class="bx bx-link-external" ></i></button>' +
          '</div>' +
          '</td>' +
          '</tr>';
        dataTable.row.add($(newRow)).draw(false);
      });
    }
  });
}
