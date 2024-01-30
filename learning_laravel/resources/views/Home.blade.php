<h1 style="text-align: center;">Học Laravel</h1>
<?php echo date("Y-m-d h:m:s") . " " ?>
<?php echo env("APP_ENV") . " " ?>
<?php 

if(config("app.env") == "production"){
    echo "Call api live";
} else {
    echo "Call api sanbox";
}

?>