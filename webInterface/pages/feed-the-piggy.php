<?php
$ip = gethostbyname(HOSTNAME);
?>
<h1>Feed The Three Little Pigs</h1>
<h2>This procedure is only for an iPhone 4S</h2>
<p>Below is a guide how to feed the Piggy a 4S key.
<ol>		
    <li>Install this certificate on the iPhone 4S <a href="/certificates/global.crt">global.crt</a></li>
    <li>If the above certificate doesnt install then download it to your PC/Mac/Linux, and mail it to yourself. </li>
    <li>Go to Settings > Wifi, press the blue arrow and change the dns to <?= $ip ?></li>
    <li>Use Siri</li>
    <li>Done! <b>If Siri replied back to you then you just fed the Piggy another key.</b> Now check the <a href="?page=server-status">server status</a> to see that a key has been added!</li>
    <li>In order to rollback to your old dns just put the old dns or renew lease</li>
</ol>

<p class="notification yellow">Warning! This is an Alpha server and the validation data will be shared with more than one device!<br />
If you are having problems connecting, that's because you are banned.I take no responsibility, you agree that you do this on your own risk. </br>
        But dont be feared by this because there is a <a href="?page=unban-your-device">work around for the ban</a>. This key will be available public as soon as this server goes beta.
</p>

<br />

<h2>Contribute to help us to keep the server up and for further development.</h2>
<div style="overflow: hidden;">
    <div style="float: left; width: 600px;">
    	<p>If you like this server, please help us paying for the server costs.<br />Donations are welcome in order to keep me developing this project at these hard times. </p>
    </div>
    <div style="float: right; width: 300px; padding-top: 20px;">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
    </div>
</div>