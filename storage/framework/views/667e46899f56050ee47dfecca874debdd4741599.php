<div class="blog-post">
            <h2 class="blog-post-title">
              <a href="/posts/<?php echo e($post->id); ?>">
                <?php echo e($post->title); ?>

              </a> 
            </h2>
            <p class="blog-post-meta">
              <?php echo e($post->user->name); ?> on
              <?php echo e($post->created_at->toFormattedDateString()); ?>

            </p>

            <p>
              <?php echo $post->body; ?>

            </p>
            <?php if(auth()->check()): ?>
            <div class="interaction">
            <a href="#" class="like"><?php echo e(auth()->user()->likes()->where('post_id' , $post->id)->first() ?
                auth()->user()->likes()->where('post_id' , $post->id)->first()->like == 1 ?
                "You like this post" : "Like" : "Like"); ?></a> |
            <a href="#" class="like"><?php echo e(auth()->user()->likes()->where('post_id' , $post->id)->first() ?
                auth()->user()->likes()->where('post_id' , $post->id)->first()->like == 0 ?
                "You don\'t like this post" : "Dislike" : "Dislike"); ?></a>
            </div>
            <?php endif; ?>


          </div><!-- /.blog-post -->

          
