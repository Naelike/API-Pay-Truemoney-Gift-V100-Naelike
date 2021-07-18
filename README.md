# API-Pay-Truemoney-Gift-V100-Naelike

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
var token = getParameter('token');
var message = getParameter('message');
var getToken = token;
var gteMessage = message;
var urlGet = '../line-notify/messages' + '?token=' + getToken + '&message=' + gteMessage
```
PHP : GET Service URL.
```
$get_token = $_GET['token'];
$gte_message = $_GET['message'];
$url_get = '../line-notify/messages' . '?token=' . $get_token . '&message=' . $gte_message
```

# PHP GET Service Example 
```
$get_token = $_GET['token'];
$gte_message = $_GET['message'];
$url_get = '../line-notify/messages' . '?token=' . $get_token . '&message=' . $gte_message
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
var token = getParameter('token');
var message = getParameter('message');
var getToken = token;
var gteMessage = message;
var urlGet = '../line-notify/messages' + '?token=' + getToken + '&message=' + gteMessage
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
var token = getParameter('token');
var message = getParameter('message');
var getToken = token;
var gteMessage = message;
var urlGet = '../line-notify/messages' + '?token=' + getToken + '&message=' + gteMessage
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
var token = getParameter('token');
var message = getParameter('message');
var getToken = token;
var gteMessage = message;
var urlGet = '../line-notify/messages' + '?token=' + getToken + '&message=' + gteMessage
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
var token = getParameter('token');
var message = getParameter('message');
var getToken = token;
var gteMessage = message;
var urlGet = '../line-notify/messages' + '?token=' + getToken + '&message=' + gteMessage
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

<img class="rounded" src="https://scontent.fbkk12-3.fna.fbcdn.net/v/t1.6435-9/93648333_2588074381407604_1819990862671642624_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=174925&_nc_eui2=AeGvj3gumsyFQcl_39H8pkjjbBdlahhHOn1sF2VqGEc6fYLe7hnYUzwg9OPQDcxWJ3z0vVRlB0B_wVEX802AGAG4&_nc_ohc=SRG6pWJpWfUAX_kDBPe&tn=R6D5PJFBEcu5wgN6&_nc_ht=scontent.fbkk12-3.fna&oh=8748b4bbb487aa8fe58ba820af103300&oe=60F783E6" width="120" alt="NaeLike"> 

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
