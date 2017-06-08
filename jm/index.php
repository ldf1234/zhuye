<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>北极熊安全团队--这个逼我们装定了</title>
<link rel="stylesheet" type="text/css" href="../css/reset.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<div class="header">
<div class="header_wrap">
<a href="/" class="logo.jpg"></a>
<ul class="nav">
<li><a href="/index.php" class="current">漏洞小组</a></li>
<li><a href="#Members" onClick="js_method()">信息展示</a></li>
<li><a href="/jm" target="_blank">在线加密</a></li>
<li><a href="http://blog.74tx.cc" target="_blank">安全博客</a></li>
</ul>
</div>
</div>
<script>
var keyStr = "ABCDEFGHIJKLMNOP" +
"QRSTUVWXYZabcdef" +
"ghijklmnopqrstuv" +
"wxyz0123456789+/" +
"=";
function encode64(input)
{
input = escape(input);
var output = "";
var chr1, chr2, chr3 = "";
var enc1, enc2, enc3, enc4 = "";
var i = 0;
do
{
chr1 = input.charCodeAt(i++);
chr2 = input.charCodeAt(i++);
chr3 = input.charCodeAt(i++);
enc1 = chr1 >> 2;
enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
enc4 = chr3 & 63;
if (isNaN(chr2))
{
enc3 = enc4 = 64;
}
else if (isNaN(chr3))
{
enc4 = 64;
}
output = output +
keyStr.charAt(enc1) +
keyStr.charAt(enc2) +
keyStr.charAt(enc3) +
keyStr.charAt(enc4);
chr1 = chr2 = chr3 = "";
enc1 = enc2 = enc3 = enc4 = "";
} while (i < input.length);
return output;
}
function decode64(input)
{
var output = "";
var chr1, chr2, chr3 = "";
var enc1, enc2, enc3, enc4 = "";
var i = 0;
// remove all characters that are not A-Z, a-z, 0-9, +, /, or =
var base64test = /[^A-Za-z0-9\+\/\=]/g;
if (base64test.exec(input))
{
alert("There were invalid base64 characters in the input text.\n" +
"Valid base64 characters are A-Z, a-z, 0-9, '+', '/', and '='\n" +
"Expect errors in decoding.");
}
input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
do
{
enc1 = keyStr.indexOf(input.charAt(i++));
enc2 = keyStr.indexOf(input.charAt(i++));
enc3 = keyStr.indexOf(input.charAt(i++));
enc4 = keyStr.indexOf(input.charAt(i++));
chr1 = (enc1 << 2) | (enc2 >> 4);
chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
chr3 = ((enc3 & 3) << 6) | enc4;
output = output + String.fromCharCode(chr1);
if (enc3 != 64)
{
output = output + String.fromCharCode(chr2);
}
if (enc4 != 64)
{
output = output + String.fromCharCode(chr3);
}
chr1 = chr2 = chr3 = "";
enc1 = enc2 = enc3 = enc4 = "";
} while (i < input.length);
return unescape(output);
}
</script>
<div class="container projects">


      <div class="row">
	    <div class="col-sm-12">
                  <div class="panel panel-success">
                    <header class="panel-heading font-bold">PHP&#x6587;&#x4EF6;&#x52A0;&#x5BC6;</header>
                    <div class="panel-body">
                    
				<form enctype="&#109;&#117;&#108;&#116;&#105;&#112;&#97;&#114;&#116;&#47;&#102;&#111;&#114;&#109;&#45;&#100;&#97;&#116;&#97;" action="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#119;&#119;&#119;&#46;&#112;&#104;&#112;&#106;&#109;&#46;&#110;&#101;&#116;&#47;&#105;&#110;&#100;&#101;&#120;&#46;&#112;&#104;&#112;&#63;&#109;&#61;&#105;&#110;&#100;&#101;&#120;&#38;&#97;&#61;&#101;&#110;&#99;&#111;&#100;&#101;" method="post">
<!-- &#x6B64;&#x5904;&#x7528;&#x4E86;&#x8F6C;&#x7801;Unicode  - -&#x5174;&#x8DA3;&#x7684;&#x81EA;&#x5DF1;&#x518D;&#x53BB;&#x8F6C;&#x56DE;&#x6765;><!--<form enctype="&#109;&#117;&#108;&#116;&#105;&#112;&#97;&#114;&#116;&#47;&#102;&#111;&#114;&#109;&#45;&#100;&#97;&#116;&#97;" action="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#119;&#119;&#119;&#46;&#112;&#104;&#112;&#106;&#109;&#46;&#110;&#101;&#116;&#47;&#105;&#110;&#100;&#101;&#120;&#46;&#112;&#104;&#112;&#63;&#109;&#61;&#105;&#110;&#100;&#101;&#120;&#38;&#97;&#61;&#101;&#110;&#99;&#111;&#100;&#101;" method="post">  -->
				<div class="alert alert-info" role="alert"><input type="file" name="phpfile" /></div>
                        <input class="btn btn-success btn-block bk-margin-top-10" type="submit" name="btn" value="&#x70B9;&#x51FB;&#x52A0;&#x5BC6;"></form>
                    </div>
                  </div>
                </div>
				
				</div>
				

      

      <div class="row">
	    <div class="col-sm-12">
                  <div class="panel panel-success">
                    <header class="panel-heading font-bold">base64加密解密</header>
                    <div class="panel-body">


<textarea id="contents" rows="10" class="form-control">这里是要加密的内容！</textarea><br>
<div class="text-center">
<input type="button" class="btn btn-primary" onclick="contents.value=encode64(contents.value);" value="BASE64加密">
<input type="button" class="btn btn-danger" onclick="contents.value=decode64(contents.value);" value="BASE64解密">
  
    </div> </div>
	</div>
	
</div>	</div>		

						
						
</div>
</body>

</html>