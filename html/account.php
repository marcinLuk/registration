

<div class="row">

    <div class="col-4 p-1 d-flex align-items-center border">
        <h4>User name:</h4>
    </div>
    <div class="col-7 p-1 d-flex align-items-center border">
        <h5><?php echo Page::get_username(); ?></h5>
    </div>

    <div class="col-4 p-1 d-flex align-items-center border">
        <h4>User email:</h4>
    </div>
    <div class="col-7 p-1 d-flex align-items-center border">
        <h5><?php echo Page::get_email(); ?></h5>
    </div>

</div>

<div class="row">
    <p class="m-auto"><a href="?page=logout">log out</a></p>
</div>