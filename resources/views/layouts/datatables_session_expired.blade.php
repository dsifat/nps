<script>
    $.fn.dataTable.ext.errMode = 'none';
    $('#dataTableBuilder').on( 'error.dt', function ( e, settings, techNote, message ) {
        settings.jqXHR.statusText === 'Unauthorized' ? window.location = '/login' : alert(message);
        console.log(message);

        return true;
    });
</script>
