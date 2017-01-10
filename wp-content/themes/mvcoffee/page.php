<?php get_header(); ?>

  <div id="wrap-container">

    <div class="container">
      <div class="row">

        <main id="main-col" class="col-xs-12 col-md-12" role="main">
          <div class="main-col__inner">
            <?php while ( have_posts() ): the_post(); ?>
            <article class="page">
              <h1 class="entry-title">メニュー</h1>
              <div class="entry-content clearfix">
                <div class="row row-centered">
                  <div class="col-xs-12 col-md-9 col-centered">
                    <h2 id="menu-cafe">カフェメニュー</h2>
                    <table class="price-menu table table-condensed table-striped">
                      <tbody>
                      <tr>
                        <td>エスプレッソ（シングル）</td><td>￥200</td>
                      </tr>
                      <tr>
                        <td>エスプレッソ（ダブル）</td><td>￥250</td>
                      </tr>
                      <tr>
                        <td>アメリカン</td><td>￥300</td>
                      </tr>
                      <tr>
                        <td>カフェラテ</td><td>￥350</td>
                      </tr>
                      <tr>
                        <td>カフェモカ</td><td>￥400</td>
                      </tr>
                      <tr>
                        <td>ティー</td><td>￥300</td>
                      </tr>
                      <tr>
                        <td>オレンジジュース</td><td>￥200</td>
                      </tr>
                      <tr>
                        <td>コーラ</td><td>￥200</td>
                      </tr>
                      </tbody>
                    </table>

                    <h2 id="menu-lunch">ランチメニュー</h2>
                    <table class="price-menu table table-condensed table-striped">
                      <tbody>
                      <tr>
                        <td>パニーニセット</td><td>￥800</td>
                      </tr>
                      <tr>
                        <td>フレンチトーストセット</td><td>￥900</td>
                      </tr>
                      <tr>
                        <td>カレーセット</td><td>￥1000</td>
                      </tr>
                      </tbody>
                    </table>

                    <h2 id="menu-dinner">ディナーメニュー</h2>
                    <table class="price-menu table table-condensed table-striped">
                      <tbody>
                      <tr>
                        <td>パニーニ</td><td>￥600</td>
                      </tr>
                      <tr>
                        <td>フレンチトースト</td><td>￥700</td>
                      </tr>
                      <tr>
                        <td>カレー</td><td>￥800</td>
                      </tr>
                      <tr>
                        <td>ミックスナッツ</td><td>￥300</td>
                      </tr>
                      <tr>
                        <td>ドライフルーツ</td><td>￥400</td>
                      </tr>
                      <tr>
                        <td>オリーブ、ドライトマト</td><td>￥400</td>
                      </tr>
                      <tr>
                        <td>チーズ盛り合わせ</td><td>￥400</td>
                      </tr>
                      <tr>
                        <td>３種トマトの卵炒め</td><td>￥500</td>
                      </tr>
                      <tr>
                        <td>ソーセージ盛り合わせ</td><td>￥600</td>
                      </tr>
                      <tr>
                        <td>ハム盛り合わせ</td><td>￥600</td>
                      </tr>
                      <tr>
                        <td>アフォガート</td><td>￥500</td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </article>
          <?php endwhile; ?>

          </div>
        </main>

      </div>
    </div>

  </div>

<?php get_footer(); ?>
