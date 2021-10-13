/**
 * DataTables Basic
 */

$(function () {
  'use strict';

  var dt_basic_table = $('.datatables-basic'),
    dt_date_table = $('.dt-date'),
    assetPath = '../../../app-assets/';

  if ($('body').attr('data-framework') === 'laravel') {
    assetPath = $('body').attr('data-asset-path');
  }

  // DataTable with buttons
  // --------------------------------------------------------------------

  if (dt_basic_table.length) {
    var dt_basic = dt_basic_table.DataTable({
      
        "ordering": false,
      columnDefs: [
        {
          // Actions
          targets: -1,
          title: 'Actions',
          orderable: false,
          render: function () {
            return (
              '<a href="javascript:;" class="delete-record">' +
              feather.icons['trash-2'].toSvg({ class: 'font-small-4' }) +
              '</a>'
            );
          }
        },
        
        { "bSortable": false, "aTargets": [ 0, 1, 2, 3] }, 
        { "bSearchable": false, "aTargets": [ 0, 1, 2, 3] }
      ],
      
      columns: [
        { data: 'Product' },
        { data: 'price' },
        { data: 'qty' },
        { data: 'subtotal' },
        { data: 'status' }
      ],
      dom:
        '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      buttons: [
        {
          extend: 'collection',
          className: 'btn btn-outline-secondary dropdown-toggle mr-2',
          text: feather.icons['share'].toSvg({ class: 'font-small-4 mr-50' }) + 'Export',
          buttons: [
            {
              extend: 'print',
              text: feather.icons['printer'].toSvg({ class: 'font-small-4 mr-50' }) + 'Print',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3] }
            },
            {
              extend: 'csv',
              text: feather.icons['file-text'].toSvg({ class: 'font-small-4 mr-50' }) + 'Csv',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3] }
            },
            {
              extend: 'excel',
              text: feather.icons['file'].toSvg({ class: 'font-small-4 mr-50' }) + 'Excel',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3] }
            },
            {
              extend: 'pdf',
              text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 mr-50' }) + 'Pdf',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3] }
            },
            {
              extend: 'copy',
              text: feather.icons['copy'].toSvg({ class: 'font-small-4 mr-50' }) + 'Copy',
              className: 'dropdown-item',
              exportOptions: { columns: [0, 1, 2, 3] }
            }
          ],
          init: function (api, node, config) {
            $(node).removeClass('btn-secondary');
            $(node).parent().removeClass('btn-group');
            setTimeout(function () {
              $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex');
            }, 50);
          }
        },
        // {
        //   text: feather.icons['plus'].toSvg({ class: 'mr-50 font-small-4' }) + 'Add New Record',
        //   className: 'create-new btn btn-primary',
        //   attr: {
        //     'data-toggle': 'modal',
        //     'data-target': '#modals-slide-in'
        //   },
        //   init: function (api, node, config) {
        //     $(node).removeClass('btn-secondary');
        //   }
        // }
      ],
     
    });
  }

    // Add New record
    // ? Remove/Update this code as per your requirements ?
    var tmpProducts = [];
    if (sessionStorage.getItem('key') != null){
      tmpProducts = JSON.parse(sessionStorage.getItem('key'));
      var allqtyvalue = 0;
      var allsubtotalvalue = 0;
      $.each(tmpProducts, function(index, value){
        dt_basic.row
          .add({
            Product: value.name,
            price: value.price,
            qty: value.qty,
            subtotal: value.subtotal,
            status: '',
          })
          .draw();
          allqtyvalue = Number(allqtyvalue) + Number(value.qty);
          allsubtotalvalue = Number(allsubtotalvalue) + Number(value.subtotal);
          $('#allproduct').html(tmpProducts.length);
          $('#allqty').html(allqtyvalue);
          $('#allsubtotal').html(allsubtotalvalue);
        $('.modal').modal('hide');
      })     
      
    }
    $('.add-to-cart-send').on('click', function () {
      // var $Product = $('.dt-full-name').val(),
        // $price = $('.dt-post').val(),
        // $qty = $('.dt-posts').val(),
        // $subtotal = $('.dt-salary').val();
        
      var $productid = $(this).data('id');
      var $productname = $(this).data('title');
      var $productprice = $(this).data('price');                
      var $productqty = $('.product_qty' + $productid).val();
      var $subtotal = $productprice * $productqty;

      var $pagesave = { "name": $productname, "price": $productprice, "qty": $productqty, "subtotal": $subtotal }
      
      var allqtyvalue = $('#allqty').text();
      var allsubtotalvalue = $('#allsubtotal').text();
      if ($productqty != 0) {
        
        dt_basic.row
          .add({
            Product: $productname,
            price: $productprice,
            qty: $productqty,
            subtotal: $subtotal,
            status: '',
       
          })
          .draw();
          tmpProducts.push($pagesave);
          allqtyvalue = Number(allqtyvalue) + Number($pagesave.qty);
          allsubtotalvalue = Number(allsubtotalvalue) + Number($pagesave.subtotal);
          $('#allproduct').html(tmpProducts.length);
          $('#allqty').html(allqtyvalue);
          $('#allsubtotal').html(allsubtotalvalue);
        $('.modal').modal('hide');
      }
      // myStorage = window.sessionStorage;
      sessionStorage.setItem('key', JSON.stringify(tmpProducts));
      $('.product_qty' + $productid).val('0');
    });
  
    // Delete Record
    $('.datatables-basic tbody').on('click', '.delete-record', function () {
      var valnum = $(this).parents('tr').index();
  
      var qtyvalue = tmpProducts[valnum]['qty'];
      var subtotal = tmpProducts[valnum]['subtotal'];
      dt_basic.row($(this).parents('tr')).remove().draw();
      
      tmpProducts.splice(valnum, 1);
      sessionStorage.setItem('key', JSON.stringify(tmpProducts));
      $('#allproduct').html(tmpProducts.length);

      var allqtyvalue = $('#allqty').text();
      var allsubtotalvalue = $('#allsubtotal').text();
      
      allqtyvalue = Number(allqtyvalue) - Number(qtyvalue);
      allsubtotalvalue = Number(allsubtotalvalue) - Number(subtotal);
    
      $('#allqty').html(allqtyvalue);
      $('#allsubtotal').html(allsubtotalvalue);
        
      
    });
});
