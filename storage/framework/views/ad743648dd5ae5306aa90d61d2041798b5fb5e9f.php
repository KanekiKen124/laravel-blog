<?php $__env->startSection('title', 'Blog Page'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
        <section class="page-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="text-content">
                  <h4>Recent Posts</h4>
                  <h2>Our Recent Blog Entries</h2>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      
      <!-- Banner Ends Here -->
  
      <section class="call-to-action">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="main-content">
                <div class="row">
                  <div class="col-lg-8">
                    <span>Stand Blog HTML5 Template</span>
                    <h4>Creative HTML Template For Bloggers!</h4>
                  </div>
                  <div class="col-lg-4">
                    <div class="main-button">
                      <a href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
  
      <section class="blog-posts grid-system">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="all-blog-posts">
                <div class="row">

                  <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6">
                      <div class="blog-post">
                        <div class="blog-thumb">
                          <img src="assets/images/blog-thumb-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                          <span><?php echo e($article->theme); ?></span>
                          <a href="<?php echo e(route('article.show', $article->slug)); ?>"><h4><?php echo e($article->title); ?></h4></a>
                          <ul class="post-info">
                            <li><a href="#"><?php echo e($article->author()->username); ?></a></li>
                            <li><a href="#"><?php echo e($article->created_at->format('M d, Y')); ?></a></li>
                            <li><a href="#"><?php echo e(0); ?>Comments</a></li>
                          </ul>
                          <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                          <div class="post-options">
                            <div class="row">
                              <div class="col-lg-12">
                                <ul class="post-tags">
                                  <li><i class="fa fa-tags"></i></li>
                                  <li><a href="#">Best Templates</a>,</li>
                                  <li><a href="#">TemplateMo</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>                      
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  <div class="col-lg-12">

                      <?php echo e($articles->links('components.pagination')); ?>

                    
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sidebar">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="sidebar-item search">
                      <form id="search_form" name="gs" method="GET" action="#">
                        <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="sidebar-item recent-posts">
                      <div class="sidebar-heading">
                        <h2>Recent Posts</h2>
                      </div>
                      <div class="content">
                        <ul>
                          <li><a href="post-details.html">
                            <h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
                            <span>May 31, 2020</span>
                          </a></li>
                          <li><a href="post-details.html">
                            <h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
                            <span>May 28, 2020</span>
                          </a></li>
                          <li><a href="post-details.html">
                            <h5>Swag hella echo park leggings, shaman cornhole ethical coloring</h5>
                            <span>May 14, 2020</span>
                          </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="sidebar-item categories">
                      <div class="sidebar-heading">
                        <h2>Categories</h2>
                      </div>
                      <div class="content">
                        <ul>
                          <li><a href="#">- Nature Lifestyle</a></li>
                          <li><a href="#">- Awesome Layouts</a></li>
                          <li><a href="#">- Creative Ideas</a></li>
                          <li><a href="#">- Responsive Templates</a></li>
                          <li><a href="#">- HTML5 / CSS3 Templates</a></li>
                          <li><a href="#">- Creative &amp; Unique</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="sidebar-item tags">
                      <div class="sidebar-heading">
                        <h2>Tag Clouds</h2>
                      </div>
                      <div class="content">
                        <ul>
                          <li><a href="#">Lifestyle</a></li>
                          <li><a href="#">Creative</a></li>
                          <li><a href="#">HTML5</a></li>
                          <li><a href="#">Inspiration</a></li>
                          <li><a href="#">Motivation</a></li>
                          <li><a href="#">PSD</a></li>
                          <li><a href="#">Responsive</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\denis-blog\resources\views/blog.blade.php ENDPATH**/ ?>