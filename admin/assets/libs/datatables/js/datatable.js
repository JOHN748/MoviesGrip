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
                }
            ],

                lengthChange: !1, 
                lengthChange: true,
                scrollX: true,
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

});


$(document).ready(function() {
    var dataTable = $('#datatable').dataTable();
    $("#searchbox").keyup(function() {
        dataTable.fnFilter(this.value);
    });    
});
