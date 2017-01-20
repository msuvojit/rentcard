<? 
 if((isset($_POST['name'])&&$_POST['name']!="")&&
(isset($_POST['street'])&&$_POST['street']!="")&&
(isset($_POST['town'])&&$_POST['town']!="")&&
(isset($_POST['postcode'])&&$_POST['postcode']!="")&&
(isset($_POST['email'])&&$_POST['email']!="")&&
(isset($_POST['properties'])&&$_POST['properties']!="")){
	
	$to = 'derek@rentcard.co.uk'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'New message from Rentcard'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Name: '.$_POST['name'].'</p>
                        <p>Street: '.$_POST['street'].'</p>   
						<p>Town: '.$_POST['town'].'</p>
                        <p>County: '.$_POST['county'].'</p>
						<p>Postcode: '.$_POST['postcode'].'</p>
                        <p>Country: '.$_POST['country'].'</p>
						<p>Telephone: '.$_POST['telephone'].'</p>
                        <p>Email: '.$_POST['email'].'</p>
                        <p>Properties: '.$_POST['properties'].'</p>						
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: ".$_POST['email']."\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
	 


?>