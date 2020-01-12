

<form action="login.php" method="post" class="container p-0">
    <!-- email  -->
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <p class="text-danger"></p>
    </div>
    <!-- password 1  -->
    <div class="form-group">
        <input type="password" class="form-control" name="pass1" placeholder="Enter Password">
        <p class="text-danger"></p>
    </div>
    <!-- submit -->
    <div class="form-group row">
        <button type="submit" class="btn btn-primary m-auto">Submit</button>
    </div>
    <div class="row">
        <p class="m-auto">If you are new here, <a href="?page=registration">sign up</a></p>
    </div>
</form>

<script type="text/javascript">

    jQuery(document).ready(function() {

        let obj = {
            email :false,
            pass1 : false,
        }

        formValidation.disableForm();

        let email = jQuery("input[name='email']");
        let pass1 = jQuery("input[name='pass1']");

        email.keyup(function(){
            if(formValidation.checkEmail(this)) {
                obj.email = true;
            } else {
                obj.email = false;
            }
            formValidation.validateForm(obj);
        });
        
        pass1.keyup(function(){
            if(formValidation.checkPass(this)) {
                obj.pass1 = true;
            }
            else {
                obj.pass1 = false;
            }
            formValidation.validateForm(obj);
        });

    });
</script>