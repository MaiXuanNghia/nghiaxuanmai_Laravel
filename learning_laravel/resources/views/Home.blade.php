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
<a href="<?php echo route('admin.show') ?>">view form</a>
<a href="<?php echo route('admin.products.add') ?>">add products</a>
<a href="<?php echo route('admin.tin-tuc', ['id' => '122131213', 'slug' => 'tin-the-gioi']) ?>">view News</a>