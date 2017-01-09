<?php get_header(); ?>
<body>
<div id="wrapper">

  <header id="header" class="header">

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
          <h1 class="header-logo text-hide"><a href="/">Maverick Coffee</a></h1>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 xs-no-gutter">
          <nav class="global-nav" role="navigation">
            <button type="button" class="global-nav__toggle text-left visible-xs-block" data-toggle="collapse" data-target="#globalnav-collapse">
              <span class="sr-only">メニューを開閉</span>
              <span class="glyphicon glyphicon-menu-hamburger"></span>MENU
            </button>
            <div class="collapse" id="globalnav-collapse">
              <ul class="global-nav__list clearfix">

                <li><a href="./"><span class="icon icon-home"></span>HOME</a></li>
                <li><a href="./news.html"><span class="icon icon-news"></span>NEWS</a></li>
                <li><a href="./menu.html"><span class="icon icon-menu"></span>MENU</a></li>
                <li><a href="./access.html"><span class="icon icon-access"></span>ACCESS</a></li>
                <li><a href="./gallery.html"><span class="icon icon-gallery"></span>GALLERY</a></li>
                <li><a href="./blog.html"><span class="icon icon-blog"></span>BLOG</a></li>

              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <div class="mainvisual mainvisual--subpage">
      <div class="container page-title">

        <h2 class="page-title--subpage font-serif">BLOG</h2>

      </div>
    </div>

    <nav id="breadcrumb-nav" class="container">
      <ul class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span>HOME</a></li>
        <li><a href="#">BLOG</a></li>
      </ul>
    </nav>

  </header>


  <div id="wrap-container">

    <div class="container">
      <div class="row">

        <main id="main-col" class="col-xs-12 col-md-9" role="main">
          <div class="main-col__inner">

            <?php while (have_post()) :  the_post();?>
 :
              <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' );?>>
                <header class="entry-header">
                  <h1 class="entry-title"><?php the_title(); ?></h1>
                  <?php if (has_post_thumbnail()): ?>
                    <div class="entry-thumbnail">
                      <?php the_post_thumbnail('post_thumbnail', array(
                        'class' => 'img-thumbnail img-responsive',
                        'alt' => the_title_attribute('echo=0'),
                        'title' => the_title_attribute('echo=0')
                      )); ?>
                      <img src="./img/demo/img-postlist-000.jpg" alt="" class="img-thumbnail img-responsive"/>
                    </div>

                  <?php endif; ?>
                </header>
              <div class="entry-content clearfix">
                <?php the_content();
                      wp_link_pages(array(
                        'before' =>'<div class="entry__page-links">',
                        'after' => '</div>',
                        'link_before' => '<span class="btn btn-default">',
                        'link_after' => '</span>',
                        'pagelink' => '%ページ',
                        'separator' => '',
                      ));
                ?>
                </div>
              </footer>
            </article>

            <aside class="recommend">
              <h2 class="recommend-title">関連記事</h2>
              <ul class="row">
                <li class="entry entry--simple recommend__post col-xs-12 col-sm-6 col-md-6">
                  <div class="entry-thumbnail">
                    <a href="#"><img src="./img/demo/img-postlist-005.jpg" alt="" class="img-responsive"/></a>
                  </div>
                  <h3 class="entry-title"><a href="#">７月 新メニューのお知らせ</a></h3>
                </li>
                <li class="entry entry--simple recommend__post col-xs-12 col-sm-6 col-md-6">
                  <div class="entry-thumbnail">
                    <a href="#"><img src="./img/demo/img-postlist-006.jpg" alt="" class="img-responsive"/></a>
                  </div>
                  <h3 class="entry-title"><a href="#">大人気のムーを使用したフレンチトースト</a></h3>
                </li>
                <li class="entry entry--simple recommend__post col-xs-12 col-sm-6 col-md-6">
                  <div class="entry-thumbnail">
                    <a href="#"><img src="./img/demo/img-postlist-007.jpg" alt="" class="img-responsive"/></a>
                  </div>
                  <h3 class="entry-title"><a href="#">パニーニとエスプレッソ</a></h3>
                </li>
                <li class="entry entry--simple recommend__post col-xs-12 col-sm-6 col-md-6">
                  <div class="entry-thumbnail">
                    <a href="#"><img src="./img/demo/img-postlist-008.jpg" alt="" class="img-responsive"/></a>
                  </div>
                  <h3 class="entry-title"><a href="#">暑い夏の特製デザートゼリー</a></h3>
                </li>
              </ul>
            </aside>


            <nav class="prevnext-nav">
              <ul class="list-inline clearfix">
                <li class="prevnext-nav__left pull-left"><a class="text-left font-serif" href="#">PREV</a></li>
                <li class="prevnext-nav__right pull-right"><a class="text-right font-serif" href="#">NEXT</a></li>
              </ul>
            </nav>

          </div>
        </main>

        <div id="sub-col" class="col-xs-12 col-md-3" role="complementary">
          <aside class="widget">
            <h2 class="widget__title font-serif">New Posts</h2>
            <ul>
              <li><a href="#">パニーニとエスプレッソ</a></li>
              <li><a href="#">暑い夏の特製デザートゼリー</a></li>
              <li><a href="#">８月の新メニューが登場しました！ランチタイムに…</a></li>
              <li><a href="#">７月の定休日のお知らせです。第２水曜日を定休日…</a></li>
              <li><a href="#">７月の新メニューが登場しました！中でも３種トマ…</a></li>
            </ul>
          </aside>

          <aside class="widget">
            <div class="widget--nogutter">
              <a href="./gallery.html"><img class="img-responsive" src="./img/img-side-gallery.jpg" alt="Gallery"/></a>
            </div>
          </aside>

          <aside class="widget">
            <div class="widget--nogutter">
              <a href="./access.html"><img class="img-responsive" src="./img/img-side-access.jpg" alt="Access"/></a>
            </div>
          </aside>

          <aside class="widget">
            <div class="widget--nogutter">
              <a href="./menu.html"><img class="img-responsive" src="./img/img-side-menu.jpg" alt="Menu"/></a>
            </div>
          </aside>

        </div>

      </div>
    </div>

  </div>
<?php get_footer(); ?>
