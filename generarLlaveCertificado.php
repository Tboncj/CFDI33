<?php
/*

	Generar LlaveCertificado
	creditos a quien corresponda
	post: http://validacfd.com/phpbb3/viewtopic.php?t=3317

	exportar a txt
	openssl rsa -inform PEM -outform PEM -in CSD_Pruebas_CFDI_LAN7008173R5.key.pem -out lan70.txt -text

*/

#contenido del archivo, separado de forma manual
// $Modulus =
// "00:82:fb:c2:88:21:43:15:56:98:5f:bc:5d:55:18:69:ff:7f:14:2d:6b:68:fc:b2:83:49:9c:b5:ca:b5:ca:a5:aa:85:5e:a1:11:25:61:7b:f1:81:ca:7f:73:79:18:1a:17:83:3c:05:3e:e0:d7:fb:99:2f:63:9c:2d:60:dc:71:fc:ec:2e:da:c8:4d:66:a1:45:87:a1:0a:b3:2b:10:31:e3:f9:af:3e:a4:13:58:05:61:e9:da:3c:45:0f:f7:38:fe:87:46:cb:df:14:79:6a:aa:13:b2:a1:85:db:89:8a:04:ba:22:68:ae:38:a5:70:73:1b:38:2c:c5:98:ac:85:52:55:33:a5:db:cc:d2:55:a2:71:14:35:b2:36:e4:38:60:58:07:7c:e9:fd:9a:53:70:66:38:7d:8a:d5:16:71:e3:57:6d:4d:3e:7a:52:cb:33:26:5b:38:b4:f1:4e:0e:bf:dc:69:6b:99:12:e5:2f:2e:9d:4c:de:78:fb:0f:2b:bc:f2:68:43:d9:ff:b5:7c:0f:e0:ee:4c:dc:53:fd:6d:72:91:57:17:fa:c8:cb:dd:c0:3e:f9:14:ef:68:f0:be:4a:e7:a6:bc:ec:f9:29:c6:f3:5f:bf:17:5e:9a:86:e1:ac:6f:61:19:f3:c7:4a:1f:0a:b1:12:4c:33:84:cc:93:6d";
// $PrivateExponent =
// "66:69:43:e3:3d:e6:7e:83:93:65:9f:18:76:55:3d:63:57:cf:c5:e7:6a:51:d1:9d:56:eb:e1:33:9a:49:d4:97:eb:e9:5e:13:d2:df:52:92:34:81:c8:7e:d7:9a:61:a4:2a:a6:be:0f:38:ab:86:7b:72:12:f6:e4:80:0c:3c:4f:9d:b6:d0:b6:b5:d5:dd:98:48:80:40:a6:6f:b0:1c:e1:fb:b1:ea:4f:4d:14:90:38:cb:28:27:e1:73:a7:3f:77:ba:fb:3e:a1:b0:17:72:af:81:f1:33:db:3e:18:5e:c2:6d:6a:43:e0:9c:47:b6:11:39:a2:05:57:85:94:b6:33:d3:db:2a:e1:e3:e2:f5:2a:16:99:d5:38:1d:ed:17:03:11:30:49:4e:75:9c:5f:af:f3:38:e6:1d:30:7a:ba:81:2f:fa:36:e6:be:11:bc:9c:c9:58:33:e1:34:90:bb:1c:b4:9e:04:c9:10:b9:48:7c:69:38:61:32:13:1a:1c:fe:6a:96:d7:e9:8c:d0:97:df:41:36:e4:a2:d5:c8:31:1a:ec:34:6d:df:50:ce:cb:83:c3:d6:0e:8a:68:dd:7e:c8:f2:7f:56:b2:c1:9c:18:ad:fa:84:61:e8:51:1d:04:c6:a5:c2:2a:ba:4e:14:22:99:22:b6:53:cc:7a:27:70:41";
// $Prime1 =
// "00:d9:e7:83:d8:68:a2:0f:70:6a:7d:99:5c:4e:01:7f:eb:57:82:66:53:40:38:9b:3c:c4:4d:d1:06:2d:06:aa:5c:60:6f:8d:34:38:ba:f3:48:39:fe:c5:f1:35:1d:da:2d:4c:40:d3:95:3c:69:4f:94:a3:4a:4e:71:ba:32:ec:68:1d:13:71:58:f0:98:2d:8b:75:1f:a6:ec:c5:83:75:95:59:fe:76:a3:bd:f3:7c:36:00:d9:b6:50:14:e2:ca:29:9f:4c:ce:ad:6e:a6:e3:b6:87:50:66:f2:7f:98:dd:cd:36:af:e5:d7:2f:23:46:0c:9f:a9:88:70:08:0d:f9:bd";
// $Prime2 =
// "00:99:e2:07:75:8f:a3:b8:b4:17:be:b6:e7:91:3d:62:1c:43:18:44:95:50:fa:b7:2d:07:39:f0:51:86:43:9c:eb:f7:6d:c9:3a:59:0d:4d:0b:d7:96:7b:0f:97:96:82:92:a7:86:b7:67:89:12:f9:f4:f7:17:e8:8f:67:20:f6:3e:04:c8:33:cf:2a:f8:b1:4d:cd:ee:d2:bb:33:8d:da:55:0b:2f:50:1c:80:37:37:ec:ef:d7:53:4f:21:6a:60:59:e4:10:ae:ee:f5:84:2e:1f:51:6f:05:92:13:1e:8b:fc:10:d0:a7:eb:ed:e5:58:c0:f8:6a:bc:4e:39:f6:a3:71";
// $Exponent1 =
// "00:91:84:90:81:d6:ee:53:0d:29:b0:92:d8:17:a7:dc:bb:57:87:57:ba:44:eb:08:90:7e:2f:d1:65:24:70:8d:18:7f:b6:3f:40:1e:9a:8a:99:33:51:b6:f2:ac:1c:31:75:8a:b4:c8:17:a3:6e:58:9c:d4:a7:6c:d7:7a:17:43:d5:0b:85:ce:6e:2c:ce:13:ac:4c:1d:45:26:5d:88:ba:df:70:68:04:e6:b8:95:7f:df:b8:95:ab:b0:b3:21:f9:0b:ee:bc:26:51:9f:d1:87:c4:7f:7c:ec:23:09:9f:16:90:52:f3:08:b4:b9:5f:ff:09:b3:1e:4e:65:32:9b:d2:a9";
// $Exponent2 =
// "68:de:c0:44:9f:02:6d:a2:d6:37:d3:c0:96:9b:a5:9c:2b:21:83:c3:da:af:32:5c:8e:7b:2e:ca:f0:5c:6d:b9:e6:22:bc:ab:75:fa:f9:91:e3:77:9b:20:32:27:91:8e:ce:7a:a1:cc:fe:7e:9f:38:11:99:0a:95:88:2b:cf:84:ce:8f:7d:b7:66:ca:9b:52:b1:d0:5b:6e:d6:a0:8a:b5:c0:6c:9b:05:01:60:20:4d:e9:d9:ed:dd:94:a1:41:4e:a1:7d:b9:2a:02:c9:f5:00:c4:e7:8b:7d:54:68:51:f0:13:a9:8f:76:da:e6:9d:08:cd:83:38:17:7b:ab:19:11";
// $Coefficient =
// "52:ae:3b:53:80:88:90:86:29:d5:27:5c:30:22:f9:cc:3f:60:c3:0d:90:7f:df:e0:e0:a9:c0:73:2f:84:73:a1:2d:05:94:39:59:fe:a3:d7:7d:6f:7c:3e:86:c4:23:2e:08:92:78:45:4b:a1:6b:b9:b3:19:5a:96:b6:50:c9:c2:65:39:9f:a6:f4:86:90:15:0d:ff:74:07:d0:28:22:9c:bf:95:56:dc:d1:6c:91:d5:09:ef:c0:17:94:4a:32:fc:d3:2a:8f:de:9e:a7:5c:1a:21:b3:8e:57:b1:b1:75:90:41:b1:e7:45:fc:cf:bc:8b:18:d6:18:df:86:03:3c:85";

function obtenerCadena($contenido,$inicio,$fin){
	$r = explode($inicio, $contenido);
	if (isset($r[1])){
		$r = explode($fin, $r[1]);
		$saltos = array("\r\n", "\n\r", "\n", "\r");
		$r[0] = str_replace ($saltos, "", $r[0]);
		$r[0] = str_replace(" ", "", $r[0]);
		return $r[0];
	}
	return '';
}

function SSLDataExtractedToXMLData($SSLData, $JumpFirst = false) {
	$ArrVals = explode(":", $SSLData);
	$a = "";
	if ($JumpFirst)
	{
		$inicio = 1;
	} else {
		$inicio = 0;
	}
	for($i = $inicio; $i < count($ArrVals); $i = $i + 1)
	{
		$a = $a.hexToStr($ArrVals[$i]);
	}
	return base64_encode($a);
}

function hexToStr($hex)
{
    $string='';
    for ($i=0; $i < strlen($hex)-1; $i+=2)
    {
        $string .= chr(hexdec($hex[$i].$hex[$i+1]));
    }
    return $string;
}

#Obtener el contenido del archivo
$LLaveCertif = file_get_contents("lan70.txt");

#Obtener contenido del archivo separado por modulos
$Modulus 	= obtenerCadena($LLaveCertif, 'modulus:', 'publicExponent:');
$PrivateExponent 	= obtenerCadena($LLaveCertif, 'privateExponent:', 'prime1:');
$Prime1 	= obtenerCadena($LLaveCertif, 'prime1:', 'prime2:');
$Prime2 	= obtenerCadena($LLaveCertif, 'prime2:', 'exponent1:');
$Exponent1 	= obtenerCadena($LLaveCertif, 'exponent1:', 'exponent2:');
$Exponent2 	= obtenerCadena($LLaveCertif, 'exponent2:', 'coefficient:');
$Coefficient 	= obtenerCadena($LLaveCertif, 'coefficient:', '-----BEGIN RSA PRIVATE KEY-----');

#Reemplazar
$Modulus 			= SSLDataExtractedToXMLData($Modulus, true);
$PublicExponent 	= "AQAB";
$PrivateExponent 	= SSLDataExtractedToXMLData($PrivateExponent, false);
$Prime1 			= SSLDataExtractedToXMLData($Prime1, true);
$Prime2 			= SSLDataExtractedToXMLData($Prime2, true);
$Exponent1 			= SSLDataExtractedToXMLData($Exponent1, true);
$Exponent2 			= SSLDataExtractedToXMLData($Exponent2, false);
$Coefficient 		= SSLDataExtractedToXMLData($Coefficient, false);

#Formar cadena y convertir a base64
$KeyInXML 			= base64_encode(
"<RSAKeyValue><Modulus>".$Modulus."</Modulus><Exponent>".$PublicExponent."</Exponent><P>".$Prime1."</P><Q>".$Prime2."</Q><DP>".$Exponent1."</DP><DQ>".$Exponent2."</DQ><InverseQ>".$Coefficient."</InverseQ><D>".$PrivateExponent."</D></RSAKeyValue>");

#Grabar contenido de la variable
file_put_contents("key64.txt",  $KeyInXML );

?>
