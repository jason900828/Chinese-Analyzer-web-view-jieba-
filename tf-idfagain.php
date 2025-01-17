<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="./css/mystyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.0.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="js/check_tf.js" ></script>
<script src="js/ajax_tf.js" ></script>


</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Tokenize-version</h5>
  </div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" id="Description">
      <h1 class="display-4">TF-IDF</h1>
      <p class="lead">如果你已經做完一次斷詞，你可以依照下方步驟繼續進行TF-IDF<br/>
      如果你還未斷詞，請回上一頁</p>
  </div>
<form action ="calltf-idf.php" name="form1" id = 'calltf-idf' method ="POST" enctype ="multipart/form-data" >
  <div class="card-deck mb-3 text-center" id="bar1" style="width:500px;height:900px; margin:0px auto;" >
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">依照下方步驟輸入</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">文檔編號</small></h1>
        
        <div  class="input">
            編號：<input type="text" id = "id_number" name="id_number" value="<?php echo $_GET['timenamefolder'];?>" readonly="readonly"> <br><br>

            keyword數：<input type = "number"id = "tfidf_rank" name="tfidf_rank" value="50" style="height:30px; width:50px;" >
        </div>
        <br>
        <h1 class="card-title pricing-card-title">輸入停止詞</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>輸入注意事項：</li>
          <li>1.上傳字典檔為一次性使用，輸入詞彙則為永久性</li>
          <li>2.請輸入不想在TF-IDF出現的詞，ex:我、你、他</li>
          <li>3.每一個詞需換行(Enter)</li>
          <br />
        </ul>
        <div  class="input">
          <!--<form  action ="./phpadddict/add_del.php"name="form3" method ="POST"id = "form_d">-->
            <textarea id = "del_word" name="del_word" onclick="delclick()" >你可以選擇在這打上需要的詞彙：</textarea>
            <br />
            <br />
            <div class="custom-file">

              <input type="file" id ="del_file" name="del_file" value="檔案上傳"onchange="delChange()" class="custom-file-input" id="inputGroupFile02">
              <label id = "file_label2" class="custom-file-label" for="inputGroupFile02" >或是上傳字典檔(txt)</label>
              <br />
              <br />
              <a class="btn btn-outline-primary" href="./all_dict/user_stop.txt" download="./all_dict/user_stop.txt">曾上傳過的停止詞</a>
            </div>    
        </div>
         <br />
        <br />
        <button type ="submit" class ="btn btn-primary">提交</button> 
        <button type ="reset" class ="btn btn-primary">重新上傳</button>
      </div>
      
    </div>
  </div>
  
</form >
  <div  id = "load">
    <div class="loader" id = "loader" ></div>
    <br />
    <div id = "loader2" align="center">  loading中  請稍後</div>
  </div>
  
  <div  id = "answer">
    <div id = "result" align="center"></div>
  </div>
  

</body>
</html>