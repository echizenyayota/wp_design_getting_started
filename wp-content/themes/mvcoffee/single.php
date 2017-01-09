<?php get_header(); ?>
  <div id="wrap-container">

    <div class="container">
      <div class="row">

        <main id="main-col" class="col-xs-12 col-md-9" role="main">
          <div class="main-col__inner">

            <?php while( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>"<?php post_class('entry'); ?>>

              <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <?php if (has_post_thumbnail()): ?>
                  <div class="entry-thumbnail">
                    <?php the_post_thumbnail('post_thumbnail', array(
                        'class' => 'img-thumbnail img-responsive',
                        'alt' => the_title_attribute('echo=0'),
                        'title' => the_title_attribute('echo=0')
                      )); ?>
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
              <footer class="entry-footer">
                <div class="entry-meta text-right">
                  <div class="entry-meta__time">
                    <span class="glyphicon glyphicon-time"></span>
                    <span class="vcard author"><?php the_author_posts_link(); ?></span>
                    at <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                  </div>
                  <?php if (has_tag()): ?>
                    <div class="entry-meta__tag">
                      <span class="glyphicon glyphicon-tag"></span><?php the_tags('<span>', '</span><span>', '</span>'); ?>
                    </div>
                  <?php endif; ?>
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
            <?php endwhile; ?>
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
