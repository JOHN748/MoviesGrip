    $(document).ready(function() {

    // DataTable initialisation
    $('#datatable').DataTable({
            
            dom: '<"float-right"f>rt<"row"<"col-sm-4"l><"col-sm-4"i><"col-sm-4"p>>',

            buttons: [
                {
                    extend: 'copy',
                    titleAttr: 'Copy'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel'
                },
                {
                    extend: 'pdf',
                    text: 'Pdf'
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV'
                },
                {
                    extend: 'print',
                    text: 'Print'
                },
                {
                    extend: 'colvisGroup',
                    text: 'Show Default',
                    show: [ 1, 2 ,3, 4, 12, 13, 14 ],
                    hide: [ 5, 6, 7, 8, 9, 10, 11, 15 ]
                },
                {
                    extend: 'colvisGroup',
                    text: 'Movie Info',
                    show: [ 1, 2, 3, 5 ,6 , 7, 8 ],
                    hide: [ 4, 9, 10, 11, 12, 13, 14, 15 ]
                },
                {
                    extend: 'colvisGroup',
                    text: 'Movie Details',
                    show: [ 1, 2 ,3, 4, 9, 10 ],
                    hide: [ 5, 6, 7, 8, 11, 12, 13, 14, 15 ]
                },
                {
                    extend: 'colvisGroup',
                    text: 'Movie Images',
                    show: [ 1, 2 ,3, 4 ],
                    hide: [ 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15 ]
                },
                {
                    extend: 'colvisGroup',
                    text: 'Manage Movies',
                    show: [ 1, 2, 3, 14, 15 ],
                    hide: [ 4, 5, 6 ,7 ,8 ,9 ,10 ,11, 12, 13 ]
                },
                {
                    extend: 'colvisGroup',
                    text: 'Show all',
                    show: ':hidden'
                }

            ],

            columnDefs: [
                { 
                    targets: [ 5, 6, 7, 8, 9, 10, 11 ], 
                    visible: false 
                }
            ],

                lengthChange: !1, 
                lengthChange: true,
                scrollX: true,
                ordering: false,
                searching: true

        });
    
	$('.btn-copy').on('click',function(){
        var table = $('#datatable').DataTable();
        table.button( '0' ).trigger();
    });
    
    $('.btn-excel').on('click',function(){
        var table = $('#datatable').DataTable();
        table.button( '1' ).trigger();
    });
    
    $('.btn-pdf').on('click',function(){
        var table = $('#datatable').DataTable();
        table.button( '2' ).trigger();
    });
    
    $('.btn-csv').on('click',function(){
        var table = $('#datatable').DataTable();
        table.button( '3' ).trigger();
    });

    $('.btn-print').on('click',function(){
        var table = $('#datatable').DataTable();
        table.button( '4' ).trigger();
    });

    $('.btn-default').on('click',function(){
        var table = $('#datatable').DataTable();
        table.button( '5' ).trigger();
    });

    $('.btn-info').on('click',function(){
        var table = $('#datatable').DataTable();
        table.button( '6' ).trigger();
    });

    $('.btn-details').on('click',function(){
        var table = $('#datatable').DataTable();
        table.button( '7' ).trigger();
    });

    $('.btn-images').on('click',function(){
        var table = $('#datatable').DataTable();
        table.button( '8' ).trigger();
    });

    $('.btn-manage').on('click',function(){
        var table = $('#datatable').DataTable();
        table.button( '9' ).trigger();
    });

    $('.btn-showall').on('click',function(){
        var table = $('#datatable').DataTable();
        table.button( '10' ).trigger();
    });        

});


$(document).ready(function() {
    var dataTable = $('#datatable').dataTable();
    $("#searchbox").keyup(function() {
        dataTable.fnFilter(this.value);
    });    
});
