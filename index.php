<?php
$spots = [
  ["name"=>"箱根湯本 はつ花そば","category"=>"そば・和食","tag"=>"名物の自然薯そば","desc"=>"箱根湯本の定番として知られる、自然薯を使ったそば。旅の始まりにも、散策のひと休みにも。","price"=>"目安：¥1,000〜¥2,000","tone"=>"soba","mark"=>"蕎"],
  ["name"=>"湯葉丼 直吉","category"=>"湯葉・丼もの","tag"=>"とろり、やさしい湯葉丼","desc"=>"湯葉を主役にした、箱根らしい滋味深い一杯。落ち着いた和のランチに。","price"=>"目安：¥1,000〜¥2,000","tone"=>"yuba","mark"=>"湯"],
  ["name"=>"ちもと","category"=>"和菓子・甘味","tag"=>"散策のおともに和菓子","desc"=>"箱根土産にも選ばれる和菓子店。甘味とお茶で、街歩きに小さな休憩を。","price"=>"甘味・手土産","tone"=>"sweets","mark"=>"甘"],
  ["name"=>"菊川商店","category"=>"テイクアウト","tag"=>"焼きたての温泉まんじゅう","desc"=>"湯本商店街で気軽に楽しみたい、食べ歩きの定番。できたてを頬張って。","price"=>"手軽なおやつ","tone"=>"manju","mark"=>"♨"]
];
$filters = ["すべて","そば・和食","湯葉・丼もの","和菓子・甘味","テイクアウト"];
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="箱根湯本駅周辺のそば、湯葉丼、和菓子、食べ歩きグルメを紹介する旅の食ガイド。">
<title>HAKONE TABLE | 箱根湯本 おいしい寄り道案内</title>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
<header class="site-header">
  <a class="brand" href="#"><span class="brand-mark">H</span><span>HAKONE <b>TABLE</b><small>YUMOTO FOOD JOURNAL</small></span></a>
  <nav><a href="#features">食べる</a><a href="#guide">楽しみ方</a><a href="#about">このサイトについて</a></nav>
  <a class="header-cta" href="#features">おいしい寄り道 <span>↗</span></a>
</header>
<main>
<section class="hero">
  <div class="hero-photo" role="img" aria-label="温かいそばと和の食卓をイメージした写真"></div>
  <div class="hero-shade"></div>
  <div class="hero-content">
    <p class="eyebrow"><span></span> A LITTLE FOOD JOURNEY IN HAKONE</p>
    <h1>旅のたのしみは、<br><em>おいしい寄り道。</em></h1>
    <p class="hero-copy">湯けむりの街、箱根湯本。<br>駅から歩いて出会える、心ほどける一皿を。</p>
    <a class="button button-light" href="#features">グルメを探す <span>↓</span></a>
  </div>
  <div class="hero-note"><span>01</span> YUMOTO, HAKONE <i>—</i> FOOD & LOCAL STORIES</div>
  <div class="hero-stamp">箱根<br>湯本</div>
</section>

<section class="intro section-wrap">
  <div class="intro-kicker">THE TASTE OF YUMOTO <span>✳</span></div>
  <div><h2>歩くほど、<br>お腹がすく街。</h2></div>
  <p>川のせせらぎ、湯けむり、昔ながらの商店街。箱根湯本には、旅の記憶に残る味がそろっています。今日は何を食べよう？そんな気分で、気になる一軒を見つけてください。</p>
</section>

<section id="features" class="food-section">
 <div class="section-wrap">
  <div class="section-heading"><div><p class="eyebrow dark">FIND YOUR FAVORITE</p><h2>箱根湯本、<em>おいしい案内。</em></h2></div><span class="heading-aside">駅周辺のグルメセレクト<br>※営業時間・価格は訪問前にご確認ください</span></div>
  <div class="filters" role="group" aria-label="ジャンルで絞り込む">
    <?php foreach($filters as $i=>$filter): ?><button class="filter <?= $i===0?'active':'' ?>" data-filter="<?= htmlspecialchars($filter,ENT_QUOTES,'UTF-8') ?>"><?= htmlspecialchars($filter,ENT_QUOTES,'UTF-8') ?></button><?php endforeach; ?>
  </div>
  <div class="food-grid">
   <?php foreach($spots as $i=>$spot): ?>
   <article class="food-card" data-category="<?= htmlspecialchars($spot['category'],ENT_QUOTES,'UTF-8') ?>">
    <div class="food-art art-<?= $spot['tone'] ?>">
      <span class="art-index">0<?= $i+1 ?> / YUMOTO</span><span class="art-mark"><?= $spot['mark'] ?></span>
      <span class="art-caption"><?= htmlspecialchars($spot['tag'],ENT_QUOTES,'UTF-8') ?></span>
    </div>
    <div class="card-body"><div class="card-meta"><span><?= htmlspecialchars($spot['category'],ENT_QUOTES,'UTF-8') ?></span><span>● お店の候補</span></div>
      <h3><?= htmlspecialchars($spot['name'],ENT_QUOTES,'UTF-8') ?></h3><p><?= htmlspecialchars($spot['desc'],ENT_QUOTES,'UTF-8') ?></p>
      <div class="card-bottom"><span><?= htmlspecialchars($spot['price'],ENT_QUOTES,'UTF-8') ?></span><span class="arrow">↗</span></div>
    </div>
   </article>
   <?php endforeach; ?>
  </div>
  <p class="source-note">掲載内容はお出かけ先の候補を紹介する編集サンプルです。最新の営業情報、価格、提供内容は各店舗の公式情報でご確認ください。</p>
 </div>
</section>

<section id="guide" class="guide section-wrap">
 <div class="guide-image"><div class="guide-label">TAKE A SLOW BITE</div></div>
 <div class="guide-copy"><p class="eyebrow dark">MAKE A DAY OF IT</p><h2>おいしい、の先まで。<br><em>湯本を歩こう。</em></h2><p>ランチのあとは、早川沿いを散歩したり、商店街でおやつを探したり。予定を詰め込みすぎず、気になる香りに誘われるままに。</p><a class="text-link" href="#about">このガイドについて <span>→</span></a></div>
</section>
<section id="about" class="about"><div class="section-wrap about-inner"><div><p class="eyebrow">HAKONE TABLE</p><h2>旅先の「おいしい」を、<br>もっと身近に。</h2></div><p>HAKONE TABLEは、箱根湯本駅周辺で食事や甘味を楽しみたい人のための小さなグルメガイドです。掲載情報は参考用です。訪問前に店舗の公式案内をご確認ください。</p></div></section>
</main>
<footer><a class="brand footer-brand" href="#"><span class="brand-mark">H</span><span>HAKONE <b>TABLE</b><small>YUMOTO FOOD JOURNAL</small></span></a><span>© <?= date('Y') ?> HAKONE TABLE</span><a href="#top">BACK TO TOP ↑</a></footer>
<script src="script.js"></script>
</body></html>