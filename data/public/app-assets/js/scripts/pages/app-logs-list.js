$(function() {
    'use strict';

    var dtUserTable = $('.user-list-table'),
        newUserSidebar = $('.new-user-modal'),
        newUserForm = $('.add-new-user')

    var assetPath = '../../../app-assets/';

    if ($('body').attr('data-framework') === 'laravel') {
        assetPath = $('body').attr('data-asset-path');
    }

    // Users List datatable
    if (dtUserTable.length) {
        dtUserTable.DataTable({
            // ajax: assetPath + 'data/user-list.json', // JSON file to add data
            columns: [
                // columns according to JSON
                { data: 'responsive_id' },
                { data: 'username' },
                { data: 'where' },
                { data: 'crudevent' },
                { data: 'description' },
                { data: 'created_at' }
            ],
            columnDefs: [{
                // For Responsive
                // className: 'control',
                // orderable: false,
                // responsivePriority: 2,
                // targets: 0
            }, ],
            order: [
                [2, 'desc']
            ],
            dom: '<"d-flex justify-content-between align-items-center header-actions mx-1 row mt-75"' +
                '<"col-lg-12 col-xl-6" l>' +
                '<"col-lg-12 col-xl-6 pl-xl-75 pl-0"<"dt-action-buttons text-xl-right text-lg-left text-md-right text-left d-flex align-items-center justify-content-lg-end align-items-center flex-sm-nowrap flex-wrap mr-1"<"mr-1"f>B>>' +
                '>t' +
                '<"d-flex justify-content-between mx-2 row mb-1"' +
                '<"col-sm-12 col-md-6"i>' +
                '<"col-sm-12 col-md-6"p>' +
                '>',
            language: {
                sLengthMenu: 'Show _MENU_',
                search: 'Search',
                searchPlaceholder: 'Search..'
            },
            // Buttons with Dropdown
            buttons: [{
                // text: 'Add New Voter',
                // className: 'add-new btn btn-primary mt-50',
                attr: {
                    'data-toggle': 'modal',
                    'data-target': '#modals-slide-in'
                },
                init: function(api, node, config) {
                    $(node).removeClass('btn-secondary');
                }
            }],
            // For responsive popup
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Details of ' + data['name'];
                        }
                    }),
                    type: 'column',
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                        tableClass: 'table',
                        columnDefs: [{
                                targets: 1,
                                visible: false
                            },
                            {
                                targets: 2,
                                visible: false
                            },
                            {
                                targets: 3,
                                visible: false
                            },
                            {
                                targets: 4,
                                visible: false
                            },
                            {
                                targets: 5,
                                visible: false
                            }
                        ]
                    })
                }
            },
            language: {
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            },
            initComplete: function() {


                // Adding role filter once table initialized
                this.api()
                    .columns(1)
                    .every(function() {
                        var column = this;
                        var select = $(
                                '<select id="UserRole" class="form-control text-capitalize mb-md-0 mb-2"><option value=""> Select  User </option></select>'
                            )
                            .appendTo('.user_role')
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function(d, j) {
                                select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
                            });
                    });
                this.api()
                    .columns(2)
                    .every(function() {
                        var column = this;
                        var select = $(
                                '<select id="UserRole" class="form-control text-capitalize mb-md-0 mb-2"><option value=""> Select  Where </option></select>'
                            )
                            .appendTo('.user_where')
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function(d, j) {
                                select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
                            });
                    });
                this.api()
                    .columns(3)
                    .every(function() {
                        var column = this;
                        var select = $(
                                '<select id="UserRole" class="form-control text-capitalize mb-md-0 mb-2"><option value=""> Select  Event </option></select>'
                            )
                            .appendTo('.user_event')
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function(d, j) {
                                select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
                            });
                    });
            }
        });
    }

    // Check Validity
    function checkValidity(el) {
        if (el.validate().checkForm()) {
            submitBtn.attr('disabled', false);
        } else {
            submitBtn.attr('disabled', true);
        }
    }

    $('body').tooltip({
        selector: '[data-toggle="tooltip"]',
        container: 'body'
    });
});