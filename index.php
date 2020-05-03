<?php
session_start();
// tôi muốn: "tất cả các request tới thư mục mvc phải bắt buộc đi qua file index.php"
// thu thập các url gửi lên project
$url = isset($_GET['url']) ? $_GET['url'] : "/";

require_once './vendor/autoload.php';
require_once './commons/database-config.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;

// routing
switch ($url) {
    case '/':
        $ctr = new HomeController();
        $ctr->index();
        break;
    
    case 'detail':
        $ctr = new HomeController();
        $ctr->detail();
        break;
    case 'insert-cate':
        $ctr = new CategoryController();
        $ctr->addData();
        break;
    
    case 'update-cate':
        $ctr = new CategoryController();
        $ctr->editData();
        break;

    case 'delete-cate':
        $ctr = new CategoryController();
        $ctr->delete();
        break;
    case 'list-cate':
        $ctr = new CategoryController();
        $ctr->index();
        break;
    
    case 'contact':
        $ctr = new HomeController();
        $ctr->contact();
        break;

    case 'add-product':
        $ctr = new ProductController();
        $ctr->addForm();
        break;
    case 'save-add-product':
        $ctr = new ProductController();
        $ctr->saveAdd();
        break;
    case 'remove-product':
        $ctr = new ProductController();
        $ctr->remove();
        break;
    case 'edit-product':
        $ctr = new ProductController();
        $ctr->editForm();
        break;
    case 'save-edit-product':
        $ctr = new ProductController();
        $ctr->saveEdit();
        break;
    case 'category':
        $ctr = new CategoryController();
        $ctr->show();
    break;
    case 'add-cate':
            $ctr = new CategoryController();
            $ctr->addCate();
        break;
    case 'save-add-category':
                $ctr = new CategoryController();
                $ctr->saveAddCate();
            break;
    case 'edit-cate':
        $ctr = new CategoryController();
        $ctr -> editCate();
    break;
    case 'save-edit-cate':
        $ctr = new CategoryController();
        $ctr -> saveCate();
    break;
    case 'remove-category':
        $ctr = new CategoryController();
        $ctr -> delete();
    break;

    case 'giao-dien':
        $ctr = new HomeController();
        $ctr->giaoDien();
        break;
    default:
        echo "Đường dẫn không tồn tại";
        break;
}

?>