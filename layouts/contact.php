<div id="php">
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    	$from = 'Od: Jan Dočekal.cz'; 
    	$to = 'honza.doc@gmail.com'; 
    	$subject = 'Kontaktní formulář!';
    	$human = $_POST['human'];

    	$body = "Od: $name\n E-Mail: $email\n Zpráva:\n $message\n\n Telefon: $phone";
?>
<?php
if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '4') {				 
            if (mail ($to, $subject, $body, $from)) { 
        echo '<p id="success" class="animated fadeInDown">Zpráva odeslána!</p>';
    } else { 
        echo '<p id="error" class="animated pulse">Něco se pokazilo, zkuste to znovu..</p>'; 
    }
} else if ($_POST['submit'] && $human != '4') {
    echo '<p id="error" class="animated pulse">Anti-spam otázka nebyla zodpovězena správně.</p>';
}
} else {
        echo '<p id="required" class="animated pulse">Prosím vyplňte povinná pole.</p>';
    }
}
?>
</div>
<h1>Kontaktovat mě můžete několika způsoby.</h1>
<p>
<span class="fui-user"></span>&nbsp;777 066 469
<br>
<span class="fui-envelope"></span>&nbsp;honza.doc(a)gmail.com
</p>
<a href="https://twitter.com/Honziek" class="tw">Twitter</a>
<a href="http://www.facebook.com/jandocekalcz" class="fb">Facebook</a>
<br><p>
<i><h3>Nebo využijte kontaktního formuláře níže. (pole označená * jsou povinná)</h3></i>
<form method="post" action="#php">    
    <input type="text" name="name" value="" placeholder="Celé jméno*" class="span3" />
          <input type="text" value="" name="email" placeholder="E-mail*" class="span3" />
<p>
          <input type="text" value="" name="phone" placeholder="Telefon" class="span3" />
<input type="text" name="human" placeholder="Kolik je 2+2? (Anti-spam)*" class="span3" />
</ br><p>
          <textarea type="text" value="" name="message" placeholder="Jsem úplně unešený/á z Vaší práce a s největší radostí Vám chci nabídnout práci na mém projektu :-)" class="span3" /></textarea>
<div class="span2">
  <input class="btn btn-small btn-success" id="submit" name="submit" type="submit" Value="Odeslat"/>
</div>
</form>
</br>
</br>
</html>