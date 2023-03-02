@extends('layout.layout')

@section('title', 'Home Page')

@section('content')
        <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
        <div class="container-fluid">
          <div class="owl-banner owl-carousel">
            <div class="item">
              <img src="assets/images/banner-item-01.jpg" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>Fashion</span>
                  </div>
                  <a href="post-details.html"><h4>Morbi dapibus condimentum</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 12, 2020</a></li>
                    <li><a href="#">12 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/banner-item-02.jpg" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>Nature</span>
                  </div>
                  <a href="post-details.html"><h4>Donec porttitor augue at velit</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 14, 2020</a></li>
                    <li><a href="#">24 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/banner-item-03.jpg" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>Lifestyle</span>
                  </div>
                  <a href="post-details.html"><h4>Best HTML Templates on TemplateMo</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 16, 2020</a></li>
                    <li><a href="#">36 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/banner-item-04.jpg" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>Fashion</span>
                  </div>
                  <a href="post-details.html"><h4>Responsive and Mobile Ready Layouts</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 18, 2020</a></li>
                    <li><a href="#">48 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/banner-item-05.jpg" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>Nature</span>
                  </div>
                  <a href="post-details.html"><h4>Cras congue sed augue id ullamcorper</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 24, 2020</a></li>
                    <li><a href="#">64 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/banner-item-06.jpg" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>Lifestyle</span>
                  </div>
                  <a href="post-details.html"><h4>Suspendisse nec aliquet ligula</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">May 26, 2020</a></li>
                    <li><a href="#">72 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
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
  
  
      <section class="blog-posts">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="all-blog-posts">
                <div class="row">

                  @foreach ($articles as $article)
                    <div class="col-lg-12">
                      <div class="blog-post">
                        <div class="blog-thumb">
                          <img src="assets/images/blog-post-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                          <span>{{ $article->theme }}</span>
                          <a href="{{ route('article.show', $article->slug) }}"><h4>{{ $article->title }}</h4></a>
                          <ul class="post-info">
                            <li><a href="#">{{ $article->author()->username }}</a></li>
                            <li><a href="#">{{ $article->created_at->format('M d, Y') }}</a></li>
                            <li><a href="#">12 Comments</a></li>
                          </ul>
                          <p>{{ mb_substr($article['content'], 0, 120) }}...</p>
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
                  @endforeach
                  
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="blog.html">View All Posts</a>
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
@endsection