<?php
$_name = $_GEt["name"];
$mail = $_GET["mail"];
echo $name."<br>";
echo $mail."<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mm.css">

    <title>Document</title>




  <body>
    <h1>NAVI</h1>

    <div id="nav">
        <ul>
         <li>HOME</li>
         <li>園種別に探す</li>
         <!-- <li>習い事を探す</li> -->
         <li>地図から探す</li>
         <li>スマート保育申請</li>
       </ul>
      </div>

  <!-- メニュー開始 --> 

        <input type="checkbox" id="overlay-input" />
        <label for="overlay-input" id="overlay-button"><span></span></label>
          <div id="overlay">
            <ul>
            <h1 class="arigatou">ママ、いつもありがとう</h2>
              <!-- <li><a href="#">Home</a></li>  -->
              <!-- <li><a href="#">認可保育園</a></li>
              <li><a href="#">認可外保育園</a></li> -->
              <li><a href="#">About</a></li>
              <li><a href="./line.php">Contact</a></li>
              <li><a href="#">ママの口コミから探す</a></li>
              <li><a href="./smart.php">保育スマート申請</a></li>
            </ul>
          </div>

<!-- メニューここまで -->
      

<!-- ディズプレイフレックスの定義 -->
<div class="all">



<!-- カード全体の定義 -->
<div class="cardall">

<!-- カード１つ目 -->

    <div class="l-wrapper">
        <article class="card">
          <div class="card__header">
            <h3 class="card__title">Etonhouse International School</h3>
            <figure class="card__thumbnail">
              <img src="smart_phone_219038d6.jpg">
          </figure>
          </div>
          <div class="card__body">
            <p class="card__text">東京都港区赤坂</p>
            <p class="card__text">非認知能力教育に重点を置いたバイリンガル教育スクール</p>
            <!-- <p class="card__text -number">&yen; 20000/月</p> -->
          </div>
          <div class="card__footer">
            <p class="card__text"><a href="#" class="button -compact">Etonhouseの詳細を見る</a></p>
          </div>
          
        </article>
      </div>

      <!-- カード２つ目 -->
      <div class="l-wrapper">
        <article class="card">
          <div class="card__header">
            <h3 class="card__title">Etonhouse International School</h3>
            <figure class="card__thumbnail">
              <img src="smart_phone_219038d6.jpg">
          </figure>
          </div>
          <div class="card__body">
            <p class="card__text">東京都港区赤坂</p>
            <p class="card__text">非認知能力教育に重点を置いたバイリンガル教育スクール</p>
            <!-- <p class="card__text -number">&yen; 20000/月</p> -->
          </div>
          <div class="card__footer">
            <p class="card__text"><a href="#" class="button -compact">Etonhouseの詳細を見る</a></p>
          </div>
          
        </article>
      </div>

    <!-- カード３つ目 -->
      <div class="l-wrapper">
        <article class="card">
          <div class="card__header">
            <h3 class="card__title">Etonhouse International School</h3>
            <figure class="card__thumbnail">
              <img src="smart_phone_219038d6.jpg">
          </figure>
          </div>
          <div class="card__body">
            <p class="card__text">東京都港区赤坂</p>
            <p class="card__text">非認知能力教育に重点を置いたバイリンガル教育スクール</p>
            <!-- <p class="card__text -number">&yen; 20000/月</p> -->
          </div>
          <div class="card__footer">
            <p class="card__text"><a href="#" class="button -compact">Etonhouseの詳細を見る</a></p>
          </div>
          
        </article>
      </div>

    <!-- カード４つ目 -->
      <div class="l-wrapper">
        <article class="card">
          <div class="card__header">
            <h3 class="card__title">Etonhouse International School</h3>
            <figure class="card__thumbnail">
              <img src="smart_phone_219038d6.jpg">
          </figure>
          </div>
          <div class="card__body">
            <p class="card__text">東京都港区赤坂</p>
            <p class="card__text">非認知能力教育に重点を置いたバイリンガル教育スクール</p>
            <!-- <p class="card__text -number">&yen; 20000/月</p> -->
          </div>
          <div class="card__footer">
            <p class="card__text"><a href="#" class="button -compact">Etonhouseの詳細を見る</a></p>
          </div>
        </article>
      </div>

 <!-- カードここまで -->

<!-- カード全体の定義ここまで -->
</div>








<div class="google" id="myMap" style='position:relative;width:80%;height:650px;'></div>
</div>




<!-- [ infobox Object ] https://msdn.microsoft.com/en-us/library/mt712658.aspx -->
<script src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AqMjB41RPe2MNYldexPjMgDQ4Z0THRpgj4tcOTFch0XpT5zalb2ruK-ICASjqZy8' async defer></script>
<script>
function GetMap() {
    let map = new Microsoft.Maps.Map('#myMap', {
        center: new Microsoft.Maps.Location(35.658, 139.7515),
        zoom: 18
    });
   
    //Get MAP Infomation
    let center = map.getCenter();
    console.log(center);
    //Create a pushpin.
    let pushpin = new Microsoft.Maps.Pushpin(map.getCenter());
    map.entities.push(pushpin); //Add pin to Map

    //Point!!: Add mouse events to the pushpin.
    Microsoft.Maps.Events.addHandler(pushpin, 'click', function () { highlight('pushpinClick'); });

// alert("OK");
function highlight(id="motoazabu") {
    //Highlight the mouse event div to indicate that the event has fired.
    document.getElementById(id="motoazabu").style.background = 'Lightyellow';
    //Remove the highlighting after a second.
    setTimeout(function () { document.getElementById(id="motoazabu").style.background = ''; }, 2000);
}

    //Infobox:html
    // let title = 'This is the title';
    // let description = '<img src="https://www.bingmapsportal.com/Content/images/poi_custom.png" align="left" style="margin-right:5px;"/>This is a description with custom html. <a href="http://bing.com/maps" target="_blank">Link</a>';
    // let infoboxTemplate = '<div class="customInfobox"><div class="title">{title}</div>{description}</div>';
    //Infobox
    // let infobox = new Microsoft.Maps.Infobox(center, {
    //     htmlContent: infoboxTemplate.replace('{title}', title).replace('{description}', description)
    // });
    // infobox.setMap(map); 
    //Add infobox to Map

    // console.log();


}

document.getElementById("tour").onclick = function() {
  alert("オンラインツアーの予約時間になりました");
};

</script>
<!-- <style>
    /* Infobox Style */
    .customInfobox {
        background-color: rgba(0,0,0,0.5);
        color: white;
        max-width: 200px;
        border-radius: 10px;
        margin: 10;
        padding: 10px;
        font-size:12px;
        pointer-events:auto !important;
    }
    .customInfobox .title {
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 5px;
    }
</style> -->











</div>
    </body>
</html>



  