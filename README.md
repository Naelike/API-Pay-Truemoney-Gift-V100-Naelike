# API-Pay-Truemoney-Gift-V100-Naelike

<img class="rounded" src="http://img.in.th/images/92f4aac2d777868b2a45c3454e48530b.png" width="220" alt="NaeLike"> 
> Truemoney Gift

.JS : GET Service URL.
```
function getParameter(name, url = window.location.href) {
  name = name.replace(/[\[\]]/g, '\\$&');
  var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
var phone = getParameter('phone');
var paygift = getParameter('paygift');
var getPhone = phone;
var gtePaygift = paygift;
var urlGet = '../pay-truemoney/gift' + '?phone=' + getPhone + '&paygift=' + gtePaygift
```
PHP : GET Service URL.
```
$get_phone = $_GET['phone'];
$gte_paygift = $_GET['paygift'];
$url_get = '../pay-truemoney/gift' . '?phone=' . $get_phone . '&paygift=' . $gte_paygift
```

# PHP GET Service Example 
```
$get_phone = $_GET['phone'];
$gte_paygift = $_GET['paygift'];
$url_get = '../pay-truemoney/gift' . '?phone=' . $get_phone . '&paygift=' . $gte_paygift
```
```
$api_get_json = file_get_contents($url_get);
$json_jq = json_decode($api_get_json);
echo json_encode($json_jq);
```

# Axios GET Service Example 
```
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
```
```
function getParameter(name, url = window.location.href) {
  name = name.replace(/[\[\]]/g, '\\$&');
  var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
var phone = getParameter('phone');
var paygift = getParameter('paygift');
var getPhone = phone;
var gtePaygift = paygift;
var urlGet = '../pay-truemoney/gift' + '?phone=' + getPhone + '&paygift=' + gtePaygift
```
```
axios({
  method: "get",
  url: urlGet,
})
.then(function(response) {
  console.log(response.data);
})
.catch(function(response) {
  console.log(response);
});
```

# Ajax GET Service Example 
```
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
```
```
function getParameter(name, url = window.location.href) {
  name = name.replace(/[\[\]]/g, '\\$&');
  var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
var phone = getParameter('phone');
var paygift = getParameter('paygift');
var getPhone = phone;
var gtePaygift = paygift;
var urlGet = '../pay-truemoney/gift' + '?phone=' + getPhone + '&paygift=' + gtePaygift
```
```
$.ajax({url: urlGet, success: function(result){
  console.log(result);
}});
```

# JQuery GET Service Example 
```
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
```
```
function getParameter(name, url = window.location.href) {
  name = name.replace(/[\[\]]/g, '\\$&');
  var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
var phone = getParameter('phone');
var paygift = getParameter('paygift');
var getPhone = phone;
var gtePaygift = paygift;
var urlGet = '../pay-truemoney/gift' + '?phone=' + getPhone + '&paygift=' + gtePaygift
```
```
$.get(urlGet, function(data, status){
  console.log(data);
});
```

# JavaScript GET Service Example 
```
function getParameter(name, url = window.location.href) {
  name = name.replace(/[\[\]]/g, '\\$&');
  var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
var phone = getParameter('phone');
var paygift = getParameter('paygift');
var getPhone = phone;
var gtePaygift = paygift;
var urlGet = '../pay-truemoney/gift' + '?phone=' + getPhone + '&paygift=' + gtePaygift
```
```
var xmlHttp = new XMLHttpRequest();
var contentType = "application/x-www-form-urlencoded; charset=utf-8";
xmlHttp.open("GET", urlGet, true);
xmlHttp.setRequestHeader('Content-type', contentType)
xmlHttp.send(null);
xmlHttp.onreadystatechange = function() {
  if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
    console.log(xmlHttp.responseText);
  }
}
```

# Developer : NaeLike เนไลก์

<img class="rounded" src="http://img.in.th/images/c938fdabdf2a1d4b2deda8ffea4fa189.jpg" width="120" alt="NaeLike"> 

> Naelike เนไลก์

@เว็บไซต์ :+1: Web :  <https://naelike.com> ..! :shipit:
<br>
@ติดตาม :+1: Web :  <https://naelike.com/addmee> ..! :shipit:

TikTok :  <https://www.tiktok.com/@naelike6564>
<br>
Facebook :  <https://web.facebook.com/NaeLikePage>
<br>
Instagram :  <https://www.instagram.com/naelike_ig>
<br>


<a href="https://link.ckpzmc.xyz/dispnae"> 
   <img class="rounded" src="https://i.pinimg.com/originals/1a/9a/f1/1a9af177bdcd0bd93568e59bb7600cbe.png" width="120" alt="NaeLike"> 
   </br>
   <b class="fs-12">Discord คลิก..!</b> 
</a>
