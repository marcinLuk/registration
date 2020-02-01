$(document).ready( function () {
    
    
    $('form button')[0].disabled = true;  

    $('input').on( 'input', function() {

        $('form input').each( function() {

            data = { value : this.value, type: this.name };

            if (data.value != "") {

                $('form button')[0].disabled = false;

                send_request( 'src/validate.php', data , this.name );
                
            } else {

                $('form button')[0].disabled = true;

            }

        } );

    } );

} ); 