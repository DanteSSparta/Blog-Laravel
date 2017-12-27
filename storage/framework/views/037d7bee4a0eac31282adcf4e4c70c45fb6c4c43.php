<?php $__env->startComponent('mail::message'); ?>
# Introduction

Thanks so much for registering!

<?php $__env->startComponent('mail::button', ['url' => 'https://laracasts.com']); ?>
Start Browsing
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::panel', ['url' => '']); ?>
Some inspirational qoute to go here. :)
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
