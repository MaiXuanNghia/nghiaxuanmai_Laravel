<h1>add category</h1>
<form method="POST" action="<?php echo route('Categories.add') ?>"> 
    <input type="text" placeholder="ten">
    <input type="text" placeholder="so luong">
    <input type="hidden" name="_token" value="<?= csrf_token() ?>">
    <button type="submit" >Thêm chuyên mục</button>
</form>