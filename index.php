<html>
<head><!-----script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"----></!-----script>
<title>New page.</title>

    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <script>
function navopenclose() {
  if (document.getElementById("mySidenav").style.width == "22px") {
    document.getElementById("mySidenav").style.width = "600px";
    document.getElementById("mySidenav").style.height = "200px";
    console.log="ok";
  } else {
    document.getElementById("mySidenav").style.width = "22px";
    document.getElementById("mySidenav").style.height = "22px";
  }
}

  function closeNav() {
  document.getElementById("mySidenav").style.width = "22px";
  document.getElementById("mySidenav").style.height = "22px";
}
</script>
</head>
<body>
<img src="logo.png">
<div id="menu"></div>
<div id="tbody">

<div id="mySidenav" class="sidenav" style="width: 22px;">
    <ul ><a href=# onClick="navopenclose();">
    <img width="20px" src="apps-24px.svg" style="align: center; margin: auto;"></a>
        <li>Menu</li>
        <li>first</li>
        <li>thirt</li>
        <li>forth</li>
        <li>fiveth</li>
        <li> <a href=# onClick="closeNav();">&times;</a></li>
    </ul>
</div>
</div>
<div><!---------img src="test.png"--------></div>
</body>
</html>