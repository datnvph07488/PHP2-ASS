<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật sản phẩm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <nav class="nav">
            <a class="nav-link" href="./">Quản lý sản phẩm</a>
            <a class="nav-link" href="./add-product">Thêm sản phẩm</a>
            <a class="nav-link" href="./category">Quản lý danh mục</a>
            <a class="nav-link" href="./add-cate">Thêm danh mục</a>
        </nav>
        
        
        <h3>Edit danh mục</h3>
        <form action="./save-edit-cate?id=<?php echo e($model->id); ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">cate_name</label>
                        <input type="text" name="cate_name" class="form-control" value="<?php echo e($model->cate_name); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">slug</label>
                        <input type="text" name="slug" class="form-control" value="<?php echo e($model->slug); ?>">
                    </div>
                    <div class="form-group">
                        <label for="">show_menu</label>
                        <input type="text" name="show_menu" class="form-control" value="<?php echo e($model->show_menu); ?>">
                    </div>
               
                  
                  
                </div>
              
            
                <div class=" col-12 text-center">
                    <button type="submit" class="btn btn-info">Lưu</button>
                    <a href="./category" class="btn btn-danger">Hủy</a>
                </div>
            </div>
        </form>
    </div>
    
    
</body>
</html><?php /**PATH E:\XAPP\htdocs\mvc\app\views/category/edit-cate.blade.php ENDPATH**/ ?>