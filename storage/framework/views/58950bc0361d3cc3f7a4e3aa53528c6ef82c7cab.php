
      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <a class="nav-link active" href="/">Home</a>

            
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                      <a class="nav-link ml-auto" href="/login">Login</a>
                      <li><a class="nav-link ml-auto" href="/register">Register</a></li>
                    
                <?php else: ?>
                    <a class="nav-link" href="/posts/create">Create Post</a>
                    <a class="nav-link ml-auto" href="#"><?php echo e(Auth::user()->name); ?></a>
                    <li><a class="nav-link ml-auto" href="/logout">Logout</a></li>
                <?php endif; ?>
                
          </nav>
        </div>
      </div>

    