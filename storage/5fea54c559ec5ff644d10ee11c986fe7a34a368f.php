<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main layout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="header" style="height: 150px;border: solid 1px #000000;background:Gray;">
            <?php echo $__env->yieldContent('header'); ?>
        </div>
        <div class="row">
            <div class="col-10" style="">
                <?php echo $__env->yieldContent('main-content'); ?>
            </div>
            <div class="col-2" style="background: grey;">
                <h2></h2>
            </div>
        </div>
        <div class="footer" style="height: 100px; background: brown;">
            <h2>Footer</h2>
        </div>
    </div>

</body>
</html><?php /**PATH E:\XAPP\htdocs\ASS\PHP2-ASS\app\views/layouts/main.blade.php ENDPATH**/ ?>