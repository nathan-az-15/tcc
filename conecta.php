<HTML>
	<HEAD>
		<TITLE> CONEXÃO COM B.D. </TITLE>
	</HEAD>
	<BODY>
		<?php
			function conectar()//conecta com o bd
			{
			$hostdb = 'localhost'; //servidor mysql, pode ser o nome (localhost) OU O ENDEREÇO IP (127.0.0.1) 
			$userdb = 'root';      //usuário do mysql que terá o acesso
			$passdb = 'usbw';          // senha do usuário  

			if ($con = mysql_pconnect ($hostdb, $userdb, $passdb))
			{
			 return $con; // se for bem sucedida, será retornada a variável $con
				
			}
			
			else
			{
				return 0; // se a conexão não ocorrer, será retornado 0
			}
			}
		?>
	</BODY>
</HTML>