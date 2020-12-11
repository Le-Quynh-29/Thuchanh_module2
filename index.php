<a href="index.php?page=list">Danh sach san pham</a>
<a href="index.php?page=add">Them</a>
<?php
require __DIR__.'/vendor/autoload.php';
use App\Controller\ProductController;


$page = isset($_REQUEST['page'])?$_REQUEST['page']:'';
$product = new ProductController();

switch ($page){
    case 'list':
        $product->getProduct();
        break;
    case 'add':
        $product->addProduct();
        break;
    case 'delete':
        $id = $_REQUEST['id'];
        $product->delete($id);
        break;
    case 'edit':
        $product->editProduct();
        break;
    case 'search':
        $product->search();
        break;
}
?>
