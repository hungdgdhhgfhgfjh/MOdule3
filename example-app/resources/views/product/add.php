<h1>thêm chuyên mục</h1>
<form action="<?= route('product.getAdd') ?>" method="POST">
<input type="text" name="add">
<?=  csrf_field(); ?>
<button type="submit">thêm</button>
</form>