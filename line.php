<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>保育・習い事ナビお問合せフォーム</title>
<link rel="stylesheet" href="line.css">
</head>
<body class="container">

<!-- コンテンツ表示画面 -->


    <!-- <div> 名前：<input type="text" id="uname"> </div> -->
    <div class="head">お問合せフォーム</div>
    <div id="output" class="outputarea">

      
    </div>
    <div class="messagearea">
        <textarea class="textarea" id="text"></textarea>
        <!-- <div id="str_now"></div> -->
        <button id="send" class="send">送信</button>
  </div>
  

<!--/ コンテンツ表示画面 -->



<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- JQuery -->


<!--** 以下Firebase **-->
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.2/firebase-app.js";
  import { getDatabase, ref, push, set, onChildAdded, remove, onChildRemoved } from "https://www.gstatic.com/firebasejs/9.6.2/firebase-database.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyDX16PbASEcsa8s59iHsB-OyUyIxjQ5yvc",
    authDomain: "chat-233f7.firebaseapp.com",
    projectId: "chat-233f7",
    storageBucket: "chat-233f7.appspot.com",
    messagingSenderId: "766412584522",
    appId: "1:766412584522:web:dadbae37dad563fea498b3"
  }

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const db = getDatabase(app); // データベースへの接続

  const dbRef = ref(db,"line"); // どのデータベースを参照するか
  let utdb;//ユーザーテーブル
  

  $("#send").on("click", function(){
    const msg = {
      // uname: $("#uname").val(),
      text: $("#text").val()
    }
    // let now = new Date()
    // let str_now=JSON.stringify((now.getMonth()+1)+'/'+now.getDate()+''+now.getHours()+':'+now.getMinutes());
    //     let msg = {
    //         time : `${#str_now}`,
    //     }
    const newPostRef = push(dbRef); // データを一意なもの（ユニークなもの）にするための記述
    set(newPostRef, msg) // データを保存
    text: $("#text").val('');

 
     

  });

  onChildAdded(dbRef, function(data){
    const msg = data.val();
    // { uname: "hoge", text: "fugafuga" }
    const key = data.key;
    let h = '<div class="balloon4"><p>';
        // h += msg.uname;
        // h += '<br>';
        h += msg.text;
        h += '</p></div>';
        $("#output").append(h); //#outputの最後に追加
  });

  

   $("#text").on("keydown", function(e){
     if (e.keyCode == 13) {   //EnterKey=13
       const msg = {
        //  uname: $("#uname").val(),
         text: $("#text").val()
       }
       const newPostRef = push(dbRef); //ユニークKEYを生成
       set(newPostRef, msg);           //"chat"にユニークKEYをつけてオブジェクトデータを登録
     }
   });
  
</script>

</body>
</html>