$(document).ready(function(){
    $('form#login_form').submit(function(e){
        e.preventDefault();
        e.stopPropagation();
        var formData = new FormData(this);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: login_url,
            method: 'POST',
            data: formData,
            success: function (res) {
                if(res == 'success'){
                    toastr["success"]("Success!!!");
                    setInterval(function(){ 
                        location.href = dashboard_url; 
                    }, 2000);
                } else {
                    toastr["warning"]("The provided credentials do not match our records");
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    })
})