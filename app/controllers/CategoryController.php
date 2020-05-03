<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController extends BaseController{

    public function show(){
        $categories = Category::all();
        $msg = isset($_GET['msg']) ? $_GET['msg'] : null;
        $this->render('category.show-cate', [
                                            'listItem' => $categories,
                                            'errMsg' => $msg
                                        ]);
    }
    

    public function addCate(){
       $this->render('category.add-cate',[]);
       }
       public function saveAddCate(){
        $requestData = $_POST;
        $model = new Category();

        $model->fill($requestData);
   
        $model->save();
        header('location: ./category');
           
       }

    public function editCate(){
        $removeId = isset($_GET['id']) ? $_GET['id'] : null;
        if(!$removeId){
            header("location: ./category?msg=không đủ thông tin để xóa");
            die;
        }
        // kiểm tra xem id có thật hay không
        $model = Category::find($removeId);
        
        if(!$model){
            $msg = "id không tồn tại!";
            header("location: ./category?msg=$msg");
            die;
        }
        
        $cates = Category::all();
        $this->render('category.edit-cate', [
                                                'cates' => $cates,
                                                'model' => $model
                                            ]);
    }
    public function saveCate(){
        $id = $_GET['id'];
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if(!$id){
            header("location: ./category?msg=không đủ thông tin để xóa");
            die;
        }
        // kiểm tra xem id có thật hay không
        $model = Category::find($id);
        
        if(!$model){
            $msg = "id không tồn tại!";
            header("location: ./category?msg=$msg");
            die;
        }

        $requestData = $_POST;
        $model->fill($requestData);
        $model->save();
        header('location: ./category');
    }

    public function delete(){
        $removeId = isset($_GET['id']) ? $_GET['id'] : null;
        if(!$removeId){
            header("location: ./category?msg=không đủ thông tin để xóa");
            die;
        }
        // kiểm tra xem id có thật hay không
        $model = Category::find($removeId);
        
        if(!$model){
            $msg = "id không tồn tại!";
        }else{
            Category::destroy($removeId);
            $msg = "Xóa sản danh mục thành công";
        }

        header("location: ./category?msg=$msg");
        die;
        
    }
  

}

?>