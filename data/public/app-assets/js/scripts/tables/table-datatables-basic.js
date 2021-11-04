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
        }
      ],
      
      columns: [
        { data: 'product' },
        { data: 'price' },
        { data: 'qty' },
        { data: 'subtotal' },
        { data: 'status' }
      ],
      dom:
        '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      displayLength: 100,
      lengthMenu: [100, 200, 300],
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
              title: nowusername + '                              ' +  'Invoice   ' + '                               ' + currenttime,
              exportOptions: { columns: [0, 1, 2, 3]},
              
              customize: function ( doc ) {
                var rcout = doc.content[doc.content.length - 1].table.body.length - 1;
                for (var i = 0; i < rcout; i++) {
                  var obj = doc.content[doc.content.length - 1].table.body[i + 1];
                  // doc.content[doc.content.length - 1].table.body[(i + 1)][0] = { text: obj[0].text, style: [obj[0].style], bold: true };
                  doc.content[doc.content.length - 1].table.body[(i + 1)][0] = {
                      text: obj[0].text,
                      style: [obj[0].style],
                      alignment: 'center',                  
                      // bold: obj[0].text > 60 ? true : false,
                      // fillColor: obj[3].text > 60 ? 'red' : null
                  };
                  doc.content[doc.content.length - 1].table.body[(i + 1)][1] = {
                    text: obj[1].text,
                    style: [obj[1].style],
                    alignment: 'center'
                  };
                  doc.content[doc.content.length - 1].table.body[(i + 1)][2] = {
                    text: obj[1].text,
                    style: [obj[1].style],
                    alignment: 'center'
                  };
                  doc.content[doc.content.length - 1].table.body[(i + 1)][3] = {
                    text: obj[1].text,
                    style: [obj[1].style],
                    alignment: 'center'
                  };
                }
                // doc.content.splice( 0, 0, {
                //   margin: [ 0, 0, 0, 30 ],
                //   alignment: 'left',
                //   text: nowusername,
                // })
                // doc.content.splice( 0, 0, {
                //   margin: [ 0, 0, 0, -13 ],
                //   alignment: 'right',
                //   text: currenttime,
                // })

                doc.content[1].table.widths = [
                  '25%',
                  '25%',
                  '25%',
                  '25%',
                ]
              },
             
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
    $('div.head-label').html('<button class="mb-0 float-left dt-button buttons-collection btn btn-outline-secondary btn-clear">Clear</button>');
  }
    // Add New Record
    // ? Remove/Update this code as per your requirements ?
    var tmpProducts = [];
    if (sessionStorage.getItem('key') != null){
      tmpProducts = JSON.parse(sessionStorage.getItem('key'));
      var allqtyvalue = 0;
      var allsubtotalvalue = 0;
      $.each(tmpProducts, function(index, value){
        dt_basic.row
          .add({
            product: value.product,
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
      var $productid = $(this).data('id');
      var $productname = $(this).data('title');
      var $productprice = $(this).data('price');                
      var $productqty = $('.product_qty' + $productid).val();
      var $subtotal = $productprice * $productqty;

      var $pagesave = { "product": $productname, "price": $productprice, "qty": $productqty, "subtotal": $subtotal }
      
      var allqtyvalue = $('#allqty').text();
      var allsubtotalvalue = $('#allsubtotal').text();
      if ($productqty != 0) {
        var isExist = false;
        for(var i=0; i <tmpProducts.length; i++){
          if (tmpProducts[i].product == $pagesave.product){
            tmpProducts[i].qty = Number(tmpProducts[i].qty) + 1;
            tmpProducts[i].subtotal = Number(tmpProducts[i].subtotal) + Number($productprice);
            isExist = true;
          }
        }
        if(!isExist){
          tmpProducts.push($pagesave);
          // console.log('false');
        }
        
        dt_basic.clear();
        dt_basic.rows.add(tmpProducts);
        dt_basic.draw();
        // dt_basic.row
        //   .add({
        //     Product: $productname,
        //     price: $productprice,
        //     qty: $productqty,
        //     subtotal: $subtotal,
        //     status: '',
        //   })
          
        //   .draw();
          
          allqtyvalue = Number(allqtyvalue) + Number($pagesave.qty);
          allsubtotalvalue = Number(allsubtotalvalue) + Number($pagesave.subtotal);
          $('#allproduct').html(tmpProducts.length);
          $('#allqty').html(allqtyvalue);
          $('#allsubtotal').html(allsubtotalvalue);
        $('.modal').modal('hide');
      }
      // myStorage = window.sessionStorage;
      sessionStorage.setItem('key', JSON.stringify(tmpProducts));
      $('.product_qty' + $productid).val('1');
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
    $('.btn-clear').on('click', function(){
      sessionStorage.removeItem('key');
      $('.delete-record').click();
    })
});
