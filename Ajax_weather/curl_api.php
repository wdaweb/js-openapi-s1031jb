<?php
//使用curl函式去取得API

//初始化curl
$mycurl=curl_init();

//用戶代理作為識別身分，使對方能信任且取得請求端的相關資訊而不是惡意請求。
curl_setopt($mycurl,CURLOPT_USERAGENT,"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");

//驗證SSL伺服器憑證，當你拜訪HTTPS網站時如果沒有做SSL設定會失敗
curl_setopt($mycurl,CURLOPT_SSL_VERIFYPEER,false);

//設定URL
curl_setopt($mycurl,CURLOPT_URL,"https://data.ntpc.gov.tw/od/data/api/54DDDC93-589C-4858-9C95-18B2046CC1FC?\$format=json");

/*
//關閉預設exec的預設輸出，改為return
curl_setopt($mycurl,CURLOPT_RETURNTRANSFER,true);

//執行
$result=curl_exec($mycurl);

$result=json_decode(curl_exec($mycurl));
print_r($result);
*/
?>