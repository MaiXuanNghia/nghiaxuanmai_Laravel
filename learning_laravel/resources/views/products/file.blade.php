<h1>form upload file</h1>
<form action="<?php echo route('product.uploadFile')?>" enctype="multipart/form-data" method="POST">
    <input type="file" name="file_upload">
    <input type="submit" name="upload">
    <?php echo csrf_field()?>
</form>