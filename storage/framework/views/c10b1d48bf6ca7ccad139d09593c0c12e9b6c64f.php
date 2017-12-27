
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    
  </head>

  <body>

    
  	<?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php if($flash = session('message')): ?>
    <div id="flash-message" class="alert alert-success" role="alert">
      <?php echo e($flash); ?>

    </div>
    <?php endif; ?>

    <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">The Bootstrap Blog</h1>
          <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
      </div>



  	<div class="container">
      <div class="row">
        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
  	</div>
    

   	<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
   
  </body>
</html>
