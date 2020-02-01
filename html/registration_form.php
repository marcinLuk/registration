

<form action="src/registration.php" method="post" class="container p-0">
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