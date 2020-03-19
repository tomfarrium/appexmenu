<html>
<head><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<title>New page.</title><script></script>

    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "600px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</head>
<body>
<img src="logo.png">
<div id="menu"></div>
<div id="tbody">

<div id="mySidenav" class="sidenav">
    <div id="navigation">
    <ul ><span style="font-size:30px;cursor:pointer" onclick="openNav()">menu</span>
        <li></li>
        <li>first</li>
    </li>
        <li>second</li>
        <li> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
    </ul>
</div>
</div>
</div>
</body>
</html>