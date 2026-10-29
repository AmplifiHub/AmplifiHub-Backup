  
$(document).ready(function(){
    $('.btn_download').on('click', function (e) {
        var me = $(this);
        e.preventDefault();
    
        if ( me.data('requestRunning') ) {
            return;
        }
    
        me.data('requestRunning', true);
        var file_name = $(this).attr('file-name');
        $.ajax({
            url: $(this).attr('file'),
            method: 'GET',
            xhrFields: {
                responseType: 'blob'
            },
            success: function (data) {
                var a = document.createElement('a');
                var url = window.URL.createObjectURL(data);
                a.href = url;
                a.download = file_name;
                document.body.append(a);
                a.click();
                a.remove();
                window.URL.revokeObjectURL(url);
            }
        });
    });
});
                    