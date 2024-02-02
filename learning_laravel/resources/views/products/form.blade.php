<h1>form nhập thông tin</h1>
<form action="" method="POST">
    <input type="text" placeholder="nhập vào đây" name="ten">
    <input type="text" placeholder="nhập vào đây" name="sl">
    <input type="submit">
    <?php echo csrf_field()?>
</form>