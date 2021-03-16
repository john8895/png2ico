<?php

echo $_POST['product'];

# 檢查檔案是否上傳成功
//if ($_FILES['product']['error'] === UPLOAD_ERR_OK){
//  echo '檔案名稱: ' . $_FILES['product']['name'] . '<br/>';
//  echo '檔案類型: ' . $_FILES['product']['type'] . '<br/>';
//  echo '檔案大小: ' . ($_FILES['product']['size'] / 1024) . ' KB<br/>';
//  echo '暫存名稱: ' . $_FILES['product']['tmp_name'] . '<br/>';
//
//  # 檢查檔案是否已經存在
//  if (file_exists('upload/' . $_FILES['product']['name'])){
//    echo '檔案已存在。<br/>';
//  } else {
//    $file = $_FILES['product']['tmp_name'];
//    $dest = 'upload/' . $_FILES['product']['name'];
//
//    # 將檔案移至指定位置
//    move_uploaded_file($file, $dest);
//  }
//} else {
//  echo '錯誤代碼：' . $_FILES['product']['error'] . '<br/>';
//}