

  

<?php $__env->startSection('header'); ?>
<nav class="nav">
    <a class="nav-link" href="./" style="color:#FFEFD5;">Quản lý sản phẩm</a>
    <a class="nav-link" href="./add-product"style="color:#FFEFD5;">Thêm sản phẩm</a>
    <a class="nav-link" href="./category"style="color:#FFEFD5;">Quản lý danh mục</a>
    <a class="nav-link" href="./add-cate"style="color:#FFEFD5;">Thêm danh mục</a>
</nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
        <p class="text-danger"><?php echo e($errMsg); ?></p>
        <table class="table table-stripped">
            <thead>
                <th>ID</th>
                <th>cate_name</th>
                <th>slug</th>
                <th>show_menu</th>
                <th>
                    <a href="./add-cate" class="btn btn-success">Add new</a>
                </th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $listItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($pro->id); ?></td>
                        <td><?php echo e($pro->cate_name); ?></td>
                        <td><?php echo e($pro->slug); ?></td>
                        <td><?php echo e($pro->show_menu); ?></td>
                        <td>
                            <img src="<?php echo e($pro->image); ?>" class="img-avatar" width="100">
                        </td>
                        <td><?php echo e($pro->price); ?></td>
                        <td>
                            <a href="./edit-cate?id=<?php echo e($pro->id); ?>" class="btn btn-primary">Edit</a>
                            <a href="./remove-category?id=<?php echo e($pro->id); ?>" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\XAPP\htdocs\mvc\app\views/category/show-cate.blade.php ENDPATH**/ ?>