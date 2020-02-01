
function send_request( page, data, inputName) {

    $.ajax({
        method: "POST",
        url: page,
        data: data
        })
        .done( function( errormsg ) {
       
            $('input[name='+inputName+']').next('p')[0].innerText = errormsg;
            
            if(  errormsg ) {

                $('form button')[0].disabled = true;

            }
    });

}


