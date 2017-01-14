<?php get_header(); ?>

  <div id="wrap-container">

    <div class="container">
      <div class="row">

        <main id="main-col" class="col-xs-12 col-md-9" role="main">
          <div class="main-col__inner">

            <section class="not-found">

              <h1 class="not-found__title">ページが見つかりませんでした</h1>

              <p>お探しのページは一時的にアクセスができない状態にあるか、ページが移動もしくは削除されてしまった可能性があります。</p>
              <p>以下の方法をお試し下さい。</p>
              <ul>
                <li>アドレスを再入力する。</li>
                <li><a href="javascript:history.back();">前のページに戻る。</a></li>
                <li><a href="<?php echo esc_url( home_url ); ?>">トップページに戻る</a></li>
                <li>下部の検索バーよりキーワード検索を試す</li>
              </ul>
              <?php get_search_form(); ?>
            </section>

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
