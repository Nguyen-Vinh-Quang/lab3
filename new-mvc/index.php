<?php
// require_once 'App/Controllers/Controller.php';
// require_once 'App/Controllers/ProductController.php';
// require_once 'App/Models/BaseModel.php';
// require_once 'App/Models/Product.php';

const BASE_URL = 'http://localhost:8080/web3014/new-mvc/';

require_once './vendor/autoload.php';
require_once './configs/router.php';

use App\Controllers\ProductController;

$pc = new ProductController();
$pc->getProducts();

// Cần autoload để tránh việc require quá nhiều ở code có thể gây nhầm lẫn
// Cần composer để việc autoload có thể làm tự động
// getcomposer.org

//reder()
// 1. biet view nao duoc dung
// 2. biet bien nao truyen vao do
// 3. thu muc view : giao dien , ten thu muc. ten fie
// 
