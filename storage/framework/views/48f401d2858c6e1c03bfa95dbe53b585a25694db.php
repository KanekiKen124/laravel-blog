    <header class="">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><h2>Stand Blog<em>.</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo e(route('home')); ?>">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('about')); ?>">
                    About Us
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('blog')); ?>">
                    Blog Entries
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('contact')); ?>">
                    Contact Us
                  </a>
                </li>

                <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('signin')); ?>">
                    Sign In
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('signup')); ?>">
                    Sign Up
                  </a>
                </li>                    
                <?php endif; ?>  
                <?php if(auth()->guard()->check()): ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('logout')); ?>">
                    Logout
                  </a>
                </li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </nav>
      </header><?php /**PATH C:\OSPanel\domains\denis-blog\resources\views/components/header.blade.php ENDPATH**/ ?>