        <aside class="col-sm-3 ml-sm-auto blog-sidebar">
          
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                  <a href="/?month=<?php echo e($stats['month']); ?>&year=<?php echo e($stats['year']); ?>"><?php echo e($stats['month'] . ' '. $stats['year']); ?></a>
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
          </div>

          <div class="sidebar-module">
            <h4>Tags</h4>
            <ol class="list-unstyled">
              <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                  <a href="/posts/tags/<?php echo e($tag); ?>">
                    <?php echo e($tag); ?>

                  </a>
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
          </div>

        </aside><!-- /.blog-sidebar -->