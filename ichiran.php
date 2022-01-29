<?php
$_name = $_GEt["name"];
$mail = $_GET["mail"];
echo $name."<br>";
echo $mail."<br>";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>保育園&幼稚園NAVI</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="/static/assets/css/image.css">
  <link rel="stylesheet" href="ranking.css">
</head>

<body>
  <!-- Navbar -->
  <div class="navbar-fixed">
    <!-- Dropdown Structure -->
    <nav class="">
      <div class="nav-wrapper row">
        <div class="col s5 l4 offset-s1 offset-l1">
          <a href="/" class="brand-logo">保育園&幼稚園NAVI</a>
        </div>
        <div class="col s5 l6">
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="./login2.php" class="">ログアウト</a></li>
            <li><a href="./ranking/" class="">一覧から探す</a></li>
            <li><a href="./image" class="">画像から探す</a></li>
            <li><a href="./mm.php" class="">地図から探す</a></li>
            <li><a href="./smart.php" class="">スマート保育申請</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  

<div class="row">
  <div class="col s6 offset-s3">
    <div class="overview">
      <p>
      xxママ、保活のステップは保育園を知ることからだよ！
      <br>
      ママの登録した地域の保育園一覧はこちら！
      </p>
    </div>
    <div >
      <h3>近くの保育園一覧</h3>
    </div>

    
    <div class="u_areaListRankingBox row">
      <div class="u_title col s12">
        <p><h2><span class="badge">1</span>元麻布保育園</h2></p>
      </div>
      <!-- 保育園イメージ -->
      <div class="place_img col s12">
        <img src="./smart_phone_219038d6.jpg" alt="">
      </div>
      <!-- 総合評価 -->
      <div class="u_rankBox col s12">
        <span style="--rate: 94.0%;"></span><span class="evaluateNumber">4.7</span><br/>
      </div>
      <!-- 各カテゴリ評価 -->
      <div class="u_categoryTipsItem col s12">
        <dl >
          <dt>楽しさ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.6</span></dd>
          <dd class="comment">楽しくて帰りたくなかった</dd>
        </dl>
        <dl >
          <dt>人混みの多さ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.5</span></dd>
          <dd class="comment">非常に空いていた</dd>
        </dl>
        <dl >
          <dt>景色</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.9</span></dd>
          <dd class="comment">山頂からの景色は絶景であった</dd>
        </dl>
        <dl >
          <dt>アクセス</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.2</span></dd>
          <dd class="comment">渋滞に巻き込まれて3時間以上かかった</dd>
        </dl>
      </div>
      <div class="divider">
      </div>
    </div>
    
    <div class="u_areaListRankingBox row">
      <div class="u_title col s12">
        <p><h2><span class="badge">2</span>観光地 2</h2></p>
      </div>
      <!-- 観光地イメージ -->
      <div class="place_img col s12">
        <img src="/static/assets/img/img2.JPG" alt="">
      </div>
      <!-- 総合評価 -->
      <div class="u_rankBox col s12">
        <span style="--rate: 94.0%;"></span><span class="evaluateNumber">4.7</span><br/>
      </div>
      <!-- 各カテゴリ評価 -->
      <div class="u_categoryTipsItem col s12">
        <dl >
          <dt>楽しさ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.6</span></dd>
          <dd class="comment">非常に楽しい場所であった</dd>
        </dl>
        <dl >
          <dt>人混みの多さ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.5</span></dd>
          <dd class="comment">まぁまぁ混んでいた</dd>
        </dl>
        <dl >
          <dt>景色</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.9</span></dd>
          <dd class="comment">海が非常に綺麗であった</dd>
        </dl>
        <dl >
          <dt>アクセス</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.2</span></dd>
          <dd class="comment">市内から車で2時間ほどであった</dd>
        </dl>
      </div>
      <div class="divider">
      </div>
    </div>
    
    <div class="u_areaListRankingBox row">
      <div class="u_title col s12">
        <p><h2><span class="badge">3</span>観光地 3</h2></p>
      </div>
      <!-- 観光地イメージ -->
      <div class="place_img col s12">
        <img src="/static/assets/img/img3.JPG" alt="">
      </div>
      <!-- 総合評価 -->
      <div class="u_rankBox col s12">
        <span style="--rate: 91.99999999999999%;"></span><span class="evaluateNumber">4.6</span><br/>
      </div>
      <!-- 各カテゴリ評価 -->
      <div class="u_categoryTipsItem col s12">
        <dl >
          <dt>楽しさ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.5</span></dd>
          <dd class="comment">とてもエンジョイした</dd>
        </dl>
        <dl >
          <dt>人混みの多さ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.4</span></dd>
          <dd class="comment">時間帯によって混雑具合は違った</dd>
        </dl>
        <dl >
          <dt>景色</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.8</span></dd>
          <dd class="comment">海が非常に綺麗であった</dd>
        </dl>
        <dl >
          <dt>アクセス</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.1</span></dd>
          <dd class="comment">交通の便が悪かった</dd>
        </dl>
      </div>
      <div class="divider">
      </div>
    </div>
    
    <div class="u_areaListRankingBox row">
      <div class="u_title col s12">
        <p><h2><span class="badge">4</span>観光地 4</h2></p>
      </div>
      <!-- 観光地イメージ -->
      <div class="place_img col s12">
        <img src="/static/assets/img/img4.JPG" alt="">
      </div>
      <!-- 総合評価 -->
      <div class="u_rankBox col s12">
        <span style="--rate: 90.0%;"></span><span class="evaluateNumber">4.5</span><br/>
      </div>
      <!-- 各カテゴリ評価 -->
      <div class="u_categoryTipsItem col s12">
        <dl >
          <dt>楽しさ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.4</span></dd>
          <dd class="comment">THE非日常</dd>
        </dl>
        <dl >
          <dt>人混みの多さ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.4</span></dd>
          <dd class="comment">非常に混んでいた</dd>
        </dl>
        <dl >
          <dt>景色</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.8</span></dd>
          <dd class="comment">目を疑う超絶景であった</dd>
        </dl>
        <dl >
          <dt>アクセス</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.0</span></dd>
          <dd class="comment">飛行機で1時間ほどで着きました</dd>
        </dl>
      </div>
      <div class="divider">
      </div>
    </div>
    
    <div class="u_areaListRankingBox row">
      <div class="u_title col s12">
        <p><h2><span class="badge">5</span>観光地 5</h2></p>
      </div>
      <!-- 観光地イメージ -->
      <div class="place_img col s12">
        <img src="/static/assets/img/img5.JPG" alt="">
      </div>
      <!-- 総合評価 -->
      <div class="u_rankBox col s12">
        <span style="--rate: 90.0%;"></span><span class="evaluateNumber">4.5</span><br/>
      </div>
      <!-- 各カテゴリ評価 -->
      <div class="u_categoryTipsItem col s12">
        <dl >
          <dt>楽しさ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.4</span></dd>
          <dd class="comment">１日中飽きることなく遊び続けられた</dd>
        </dl>
        <dl >
          <dt>人混みの多さ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.3</span></dd>
          <dd class="comment">お昼の時間はかなり混んでいた</dd>
        </dl>
        <dl >
          <dt>景色</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.7</span></dd>
          <dd class="comment">山頂からの景色は絶景であった</dd>
        </dl>
        <dl >
          <dt>アクセス</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.0</span></dd>
          <dd class="comment">船で1時間ほどであった</dd>
        </dl>
      </div>
      <div class="divider">
      </div>
    </div>
    
    <div class="u_areaListRankingBox row">
      <div class="u_title col s12">
        <p><h2><span class="badge">6</span>観光地 6</h2></p>
      </div>
      <!-- 観光地イメージ -->
      <div class="place_img col s12">
        <img src="/static/assets/img/img6.JPG" alt="">
      </div>
      <!-- 総合評価 -->
      <div class="u_rankBox col s12">
        <span style="--rate: 88.00000000000001%;"></span><span class="evaluateNumber">4.4</span><br/>
      </div>
      <!-- 各カテゴリ評価 -->
      <div class="u_categoryTipsItem col s12">
        <dl >
          <dt>楽しさ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.3</span></dd>
          <dd class="comment">満喫できた</dd>
        </dl>
        <dl >
          <dt>人混みの多さ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.3</span></dd>
          <dd class="comment">まぁまぁ混んでいた</dd>
        </dl>
        <dl >
          <dt>景色</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.7</span></dd>
          <dd class="comment">時を忘れるような壮大さであった</dd>
        </dl>
        <dl >
          <dt>アクセス</dt>
          <dd class="is_rank"><span class="evaluateNumber">3.9</span></dd>
          <dd class="comment">船で1時間ほどであった</dd>
        </dl>
      </div>
      <div class="divider">
      </div>
    </div>
    
    <div class="u_areaListRankingBox row">
      <div class="u_title col s12">
        <p><h2><span class="badge">7</span>観光地 7</h2></p>
      </div>
      <!-- 観光地イメージ -->
      <div class="place_img col s12">
        <img src="/static/assets/img/img7.JPG" alt="">
      </div>
      <!-- 総合評価 -->
      <div class="u_rankBox col s12">
        <span style="--rate: 86.0%;"></span><span class="evaluateNumber">4.3</span><br/>
      </div>
      <!-- 各カテゴリ評価 -->
      <div class="u_categoryTipsItem col s12">
        <dl >
          <dt>楽しさ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.2</span></dd>
          <dd class="comment">また行きたいと思える場所でした！！</dd>
        </dl>
        <dl >
          <dt>人混みの多さ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.2</span></dd>
          <dd class="comment">お昼の時間はかなり混んでいた</dd>
        </dl>
        <dl >
          <dt>景色</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.6</span></dd>
          <dd class="comment">景色に魅了された</dd>
        </dl>
        <dl >
          <dt>アクセス</dt>
          <dd class="is_rank"><span class="evaluateNumber">3.8</span></dd>
          <dd class="comment">飛行機で1時間ほどで着きました</dd>
        </dl>
      </div>
      <div class="divider">
      </div>
    </div>
    
    <div class="u_areaListRankingBox row">
      <div class="u_title col s12">
        <p><h2><span class="badge">8</span>観光地 8</h2></p>
      </div>
      <!-- 観光地イメージ -->
      <div class="place_img col s12">
        <img src="/static/assets/img/img8.JPG" alt="">
      </div>
      <!-- 総合評価 -->
      <div class="u_rankBox col s12">
        <span style="--rate: 86.0%;"></span><span class="evaluateNumber">4.3</span><br/>
      </div>
      <!-- 各カテゴリ評価 -->
      <div class="u_categoryTipsItem col s12">
        <dl >
          <dt>楽しさ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.2</span></dd>
          <dd class="comment">非常に楽しい場所であった</dd>
        </dl>
        <dl >
          <dt>人混みの多さ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.2</span></dd>
          <dd class="comment">非常に混んでいた</dd>
        </dl>
        <dl >
          <dt>景色</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.6</span></dd>
          <dd class="comment">目を疑う超絶景であった</dd>
        </dl>
        <dl >
          <dt>アクセス</dt>
          <dd class="is_rank"><span class="evaluateNumber">3.8</span></dd>
          <dd class="comment">市内から車で2時間ほどであった</dd>
        </dl>
      </div>
      <div class="divider">
      </div>
    </div>
    
    <div class="u_areaListRankingBox row">
      <div class="u_title col s12">
        <p><h2><span class="badge">9</span>観光地 9</h2></p>
      </div>
      <!-- 観光地イメージ -->
      <div class="place_img col s12">
        <img src="/static/assets/img/img9.JPG" alt="">
      </div>
      <!-- 総合評価 -->
      <div class="u_rankBox col s12">
        <span style="--rate: 84.0%;"></span><span class="evaluateNumber">4.2</span><br/>
      </div>
      <!-- 各カテゴリ評価 -->
      <div class="u_categoryTipsItem col s12">
        <dl >
          <dt>楽しさ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.1</span></dd>
          <dd class="comment">また行きたいと思える場所でした！！</dd>
        </dl>
        <dl >
          <dt>人混みの多さ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.1</span></dd>
          <dd class="comment">空いていた</dd>
        </dl>
        <dl >
          <dt>景色</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.5</span></dd>
          <dd class="comment">大自然を感じることができた</dd>
        </dl>
        <dl >
          <dt>アクセス</dt>
          <dd class="is_rank"><span class="evaluateNumber">3.7</span></dd>
          <dd class="comment">アクセスはあまり良くなかった</dd>
        </dl>
      </div>
      <div class="divider">
      </div>
    </div>
    
    <div class="u_areaListRankingBox row">
      <div class="u_title col s12">
        <p><h2><span class="badge">10</span>観光地 10</h2></p>
      </div>
      <!-- 観光地イメージ -->
      <div class="place_img col s12">
        <img src="/static/assets/img/img10.JPG" alt="">
      </div>
      <!-- 総合評価 -->
      <div class="u_rankBox col s12">
        <span style="--rate: 81.99999999999999%;"></span><span class="evaluateNumber">4.1</span><br/>
      </div>
      <!-- 各カテゴリ評価 -->
      <div class="u_categoryTipsItem col s12">
        <dl >
          <dt>楽しさ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.0</span></dd>
          <dd class="comment">一人旅には最適でした</dd>
        </dl>
        <dl >
          <dt>人混みの多さ</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.1</span></dd>
          <dd class="comment">非常に空いていた</dd>
        </dl>
        <dl >
          <dt>景色</dt>
          <dd class="is_rank"><span class="evaluateNumber">4.4</span></dd>
          <dd class="comment">信じられないような絶景であった</dd>
        </dl>
        <dl >
          <dt>アクセス</dt>
          <dd class="is_rank"><span class="evaluateNumber">3.6</span></dd>
          <dd class="comment">アクセスはあまり良くなかった</dd>
        </dl>
      </div>
      <div class="divider">
      </div>
    </div>
    



    <div class="divider white">
    </div>
    <div id="pagination" class="center-align">
      <ul class="pagination">
        <li class="disabled"><a href="/ranking/?page=prev"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="/ranking/?page=1">1</a></li>
        <li class="waves-effect"><a href="/ranking/?page=2">2</a></li>
        <li class="waves-effect"><a href="/ranking/?page=3">3</a></li>
        <li class="waves-effect"><a href="/ranking/?page=next"><i class="material-icons">chevron_right</i></a></li>
      </ul>
    </div>

  </div>

</div>

</body>

</html>