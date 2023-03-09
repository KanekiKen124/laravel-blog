<?php $__env->startSection('title', 'Post Page'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
        <section class="page-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="text-content">
                  <h4>Post Details</h4>
                  <h2>Single blog post</h2>
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
                      <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
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
                  <div class="col-lg-12">
                    <div class="blog-post">
                      <div class="blog-thumb">
                        <img src="/assets/images/blog-post-01.jpg" alt="">
                      </div>
                      <div class="down-content">
                        <span><?php echo e($article->theme); ?></span>
                        <a href="<?php echo e(route('article.show', $article->slug)); ?>"><h4><?php echo e($article->title); ?></h4></a>
                        <ul class="post-info">
                          <li><a href="#"><?php echo e($article->author()->username); ?></a></li>
                          <li><a href="#"><?php echo e($article->created_at->format('M d, Y')); ?></a></li>
                          <li><a href="#">12 Comments</a></li>
                        </ul>
                        <p><?php echo e(mb_substr($article['content'], 0, 120)); ?>...</p>
                        <div class="post-options">
                          <div class="row">
                            <div class="col-6">
                              <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li><a href="#">Beauty</a>,</li>
                                <li><a href="#">Nature</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>              
                  <div class="col-lg-12">
                    <div class="sidebar-item comments">
                      <div class="sidebar-heading">
                        <h2><?php echo e(count($article->comments)); ?> comments</h2>
                      </div>
                      <div class="content">
                        <ul>
                          <?php $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li>
                            <div class="author-thumb">
                              <img src="<?php echo e($comment->user()->image_url); ?>" alt="">
                            </div>
                            <div class="right-content">
                              <h4><?php echo e($comment->user()->username); ?><span><?php echo e($comment->user()->created_at->format('M d, Y')); ?></span></h4>
                              <p><?php echo e($comment->text); ?></p>
                            </div>
                          </li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="sidebar-item submit-comment">
                      <div class="sidebar-heading">
                        <h2>Your comment</h2>
                      </div>
                      <div class="content">

                        <?php echo $__env->make('components.alerts.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <form id="comment" action="<?php echo e(route('comment.store')); ?>" method="post">
                          <?php echo csrf_field(); ?>
                          <input type="hidden" name="article_id" value="<?php echo e($article->id); ?>">

                          <div class="row">
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="text" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Submit</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
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
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\denis-blog\resources\views/post.blade.php ENDPATH**/ ?>