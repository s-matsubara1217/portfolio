<meta charset="utf-8" />
<meta name="viewport" content="width=1024" />
<script>
  var metalist = document.getElementsByTagName("meta");
  var ua = navigator.userAgent;
  for (var i = 0; i < metalist.length; i++) {
    var name = metalist[i].getAttribute("name");
    if (name && name.toLowerCase() === "viewport") {
      if (ua.indexOf("iPhone") > 0 || (ua.indexOf("Android") > 0 && ua.indexOf("Mobile") > 0)) {
        metalist[i].setAttribute("content", "width=device-width");
        break;
      }
    }
  }
</script>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<title>SHO MATSUBARA | ポートフォリオサイトaa</title>

<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<meta name="robots" content="noindex" />
<meta name="robots" content="nofollow" />
<meta name="robots" content="noarchive" />

<!-- SNS -->

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Fugaz+One&family=Noto+Sans+JP:wght@500;700&display=swap" rel="stylesheet" />

<!-- styles：functions.phpに記入 -->
