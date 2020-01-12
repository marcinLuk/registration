

<form action="registration.php" method="post" class="container p-0">
    <!-- name  -->
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Name">
        <p class="text-danger"></p>
    </div>
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
    <!-- password 2   -->
    <div class="form-group">
        <input type="password" class="form-control" name="pass2" placeholder="Repeat Password">
        <p class="text-danger"></p>
    </div>
    <!-- submit -->
    <div class="form-group row">
        <button type="submit" class="btn btn-primary m-auto">Submit</button>
    </div>
    <div class="row">
        <p class="m-auto"><a href="./">Go Back</a></p>
    </div>
</form>

<script type="text/javascript">

    jQuery(document).ready(function() {

        let obj = {
            name: false,
            email :false,
            pass1 : false,
            pass2 :  false,
        }

        formValidation.disableForm();

        let name = jQuery("input[name='name']");
        let email = jQuery("input[name='email']");
        let pass1 = jQuery("input[name='pass1']");
        let pass2 = jQuery("input[name='pass2']");


        name.keyup(function(){
            if(formValidation.checkName(this)) {
                obj.name = true;
            } else {
                obj.name = false;
            }
            formValidation.validateForm(obj);
        });


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

        pass2.keyup(function(){
            if(formValidation.checkPass(this) && formValidation.checkIfPasswordIsTheSame(pass1, this)) {
                obj.pass2 = true;
            }
            else {
                obj.pass2 = false;
            }
            formValidation.validateForm(obj);
        });

    });
</script>