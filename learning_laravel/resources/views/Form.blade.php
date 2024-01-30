<form method="POST" action="method">
    <input type="text" placeholder="nhập tên">
    <input type="text" placeholder="nhập tuổi">
    <input type="text" placeholder="nhập giới tính">
    <input type="hidden" name="_method" value="DELETE"> 
    <!-- value="POST" value="PUT" value="DELETE" value="PATCH"-->
    <input type="hidden" name="_token" value="<?= csrf_token();?>">
    <input type="submit">
</form>