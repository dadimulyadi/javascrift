<?php
/* sending e-mail with the order to the visitors email*/

$to
= $_POST['jcremite'];

$subject = 'Detail Pesanan Anda';

$jcitems = '<body style="background-color: #333333; none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;">
<table align="center" bgcolor="#ffffff" border="0" cellpadding="10" cellspacing="0" width="600"> 
<tbody>

<tr style="background-color: #333333">

<td bgcolor="#F3F3F3" style="margin: 4px; padding: 4px; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: center;">email ini merupakan email pemberitahuan karena anda atau seseorang dengan email anda telah memesan produk di website kami  <a href="'.$_POST['urlWebsite'].'">' .$_POST['businessName'].' </a><br /></td>
</tr>
<tr>
<td>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td style="background-color: rgb(191, 49, 26);">
<table border="0" cellpadding="12" cellspacing="0" width="100%">
<tbody>
<tr>
<td colspan="1" rowspan="1" style="text-align: center;"><big style="color: white; font-family: Arial Black;"><big>INVOICE PEMBELIAN PRODUK</big></big><span style="font-weight: bold; color: white; font-family: Times New Roman,Times,serif;">&nbsp;</span><br />
<small style="font-family: Verdana;"><span style="color: white; font-weight: bold;">Selamat Datang di Toko Online Kami</span></small></td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td align="center"><br />
</td>
</tr>
<tr>
<td align="center">
<table border="0" cellpadding="10" cellspacing="0" width="100%">
<tbody>
<tr>
<td valign="top" width="324">
<h1 style="font-family: Arial,Helvetica,sans-serif; font-size: 20px; padding-bottom: 2px; margin-bottom: 2px; margin-top: 7px; padding-top: 7px; color: rgb(191, 49, 26); text-align: left; font-weight: normal;">Salam hormat '. $_POST['buyername'] . ', </h1>
<p style="margin: 0pt; padding: 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: left;">&nbsp;</p>
<p style="margin: 0pt; padding: 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: left;">Terima kasih telah melakukan pembelian di Toko kami '. $_POST['businessName'] . '</p>
<p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: left;">Berikut adalah barang yang anda pesanan dari website kami: :</p>
<table style="background-color: rgb(204, 0, 0); width: 324px;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="text-align: center;"><span style="color: white; font-weight: bold;">PESANAN ANDA</span>
</td>
</tr>
<tr style="background-color: rgb(204, 0, 0);">
<td style="background-color: rgb(238, 238, 238);">
<p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: left;">'. $_POST['jcitems'] . '</p>
</td>
</tr>
</tbody>
</table>
<p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: left;">Harga diatas <b>Sudah termasuk dengan ongkos kirim jika Anda berada di wilayah Jawa Barat</b> dan apabila diluar Jawa Barat kami akan segera menghubungi anda via SMS atau EMAIL untuk memberitahukan total biaya yang harus anda transfer. Setelah anda mendapatkan konfirmasi dari kami, Silahkan lakukan pembayaran melalui bank yang dicantumkan di kotak disebelah kanan, kemudian lakukan konfirmasi dengan format konfirmasi:  :</p>
<table style="text-align: left; background-color: white; width: 321px; height: 100px;" border="0" cellpadding="10" cellspacing="2">
<tbody>
<tr style="color: black;">
<td style="background-color: rgb(204, 204, 204); "><p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: left;">'. $_POST['formatsmsKonfirmasi'] . '</span></p></td>
</tr>
<tr style="color: black;">
<td style="background-color: rgb(153, 153, 153);">
<p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: left;">
<strong>Contoh : </strong>'. $_POST['contohformatsmsKonfirmasi'] . '</p>
</td>
</tr>
<tr style="color: black;">
<td style="background-color: silver;">
<p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: left;">Lalu SMS saya di 0877-1055-5556 / '. $_POST['noHP'] . '</span></small></p>
<p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: left;">atau email melalui alamat email : <br>
'. $_POST['email'] . '</span></p>
</td>
</tr>
</tbody>
</table>
<p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: left;">Terima kasih telah berbelanja di  '. $_POST['businessName'] . '</p>

<p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: left;">Harap jangan ragu untuk memberitahu kepada orang lain jika Anda menyukai produk dan layanan kami dan silahkan memberitahu kami apabila barang tersebut tidak bisa diinstal atau ada beberapa kesalahan dalam layanan kami, Tanggapan Anda penting bagi kami dan kami selalu menunggu kunjungan Anda di toko online kami.. </p>

<p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: left;">Hormat Saya : Dadi Mulyadi</p>
<p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: left;"><b>'. $_POST['businessName'] . '</b><br />
<span style="font-style: italic;">'. $_POST['urlWebsite'] . '</span></p>
<br/><br/><hr>
<p style="font-family: Arial,Helvetica,sans-serif; font-size: 10px; color: rgb(51, 51, 51); text-align: left;"></p>
<div style="text-align: center;"><p style="font-family: Arial,Helvetica,sans-serif; font-size: 18px; text-align: center;">PERHATIAN</p>
<p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: center;">Teliti sebelum membeli, barang yang sudah dibeli tidak bisa ditukar atau dikembalikan
<br /></div>
</td>
<td valign="top">
<table style="padding-top: 5px; margin-top: 5px;" border="0" cellpadding="10" cellspacing="0" width="100%">
<tbody>
<tr>
<td align="center" style="border-left: 2px solid rgb(191, 49, 26);"><span style="font-family: Arial,Helvetica,sans-serif;"><span style="font-weight: bold;">Data diri anda<br />--------------------------------------</span><br />
<big><font size="-2"><big><span style="font-weight: bold;"></span></big></font></big></span>
<table style="text-align: center; width: 100%;" border="0" cellpadding="5" cellspacing="2">
<tbody>
<tr>
<td style="background-color: rgb(204, 204, 204);"><p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: center;"><strong>Nama : </strong><br />
'. $_POST['buyername'] .' </p></td>
</tr>
<tr align="center">
<td style="background-color: rgb(228, 228, 228);"><p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: center;"><strong>Email:</strong><br />
'. $_POST['jcremite'] . '</p></td>
</tr>
<tr align="center">
<td style="background-color: silver;"><p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: center;"><strong>Alamat:</strong><br />
'. $_POST['buyeralamat'] . '</p></td>
</tr>
<tr align="center">
<td style="background-color: rgb(228, 228, 228);"><p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: rgb(51, 51, 51); text-align: center;"><strong>Nomor HP : </strong><br /> 
'. $_POST['buyerhp'] . '</p></td>
</tr>
</tbody>
</table>
<span style="font-family: Arial,Helvetica,sans-serif;"><big><font size="-2"><big><br />
</big></font></big></span></td>
</tr>
</tbody>
</table>
<br />
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td style="background-color: rgb(191, 49, 26);">
<h2 style="margin: 8px 8px 0pt; padding: 8px 8px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 15px; color: rgb(255, 255, 255); font-weight: bold; text-align: center;"><big>Metode Pembayaran
</big><br />
</h2>
<p style="margin: 0pt 8px 8px; padding: 0pt 8px 8px; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: rgb(255, 255, 255); text-align: center;">Anda bisa melakukan pembayaran melalui salah satu dari bank berikut &nbsp;</p>
<p style="margin: 0pt 8px 8px; padding: 0pt 8px 8px; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: rgb(255, 255, 255); text-align: center;">----------------------------------------------</p>

<p style="margin: 0pt 8px 8px; padding: 0pt 8px 8px; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: rgb(255, 255, 255); text-align: center;"><big><span style="font-weight: bold;">'. $_POST['akunbank1'] . '</span></big><br />'. $_POST['namarek1'] . '<br />'. $_POST['norek1'] . '</p>
<p style="margin: 0pt 8px 8px; padding: 0pt 8px 8px; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: rgb(255, 255, 255); text-align: center;"><big><span style="font-weight: bold;">'. $_POST['akunbank2'] . '</span></big><br />
'. $_POST['namarek2'] . '<br />
'. $_POST['norek2'] . '</p>
<p style="margin: 0pt 8px 8px; padding: 0pt 8px 8px; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: rgb(255, 255, 255); text-align: center;"><big><span style="font-weight: bold;">'. $_POST['akunbank3'] . '</span></big><br />
'. $_POST['namarek3'] . '<br />
'. $_POST['norek3'] . '</p>
<p style="margin: 0pt 8px 8px; padding: 0pt 8px 8px; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: rgb(255, 255, 255); text-align: center;"><big><span style="font-weight: bold;">'. $_POST['akunbank4'] . '</span></big><br />
'. $_POST['namarek4'] . '<br />
'. $_POST['norek4'] . '</p>
<p style="margin: 0pt 8px 8px; padding: 0pt 8px 8px; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: rgb(255, 255, 255); text-align: center;"><big><span style="font-weight: bold;">'. $_POST['akunbank5'] . '</span></big><br />
'. $_POST['namarek5'] . '<br />
'. $_POST['norek5'] . '</p>
<p style="margin: 0pt 8px 8px; padding: 0pt 8px 8px; font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: rgb(255, 255, 255); text-align: center;"><big><span style="font-weight: bold;">'. $_POST['akunbank6'] . '</span></big><br />
'. $_POST['namarek6'] . '<br />
'. $_POST['norek6'] . '</p>
</td>
</tr>
</tbody>
</table>



</td>


</tr>

</tbody>

</table>

<table border="0" cellpadding="0" cellspacing="0" width="100%">

<tbody>


<tr>


<td>

</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr style="background-color: rgb(204, 0, 0);">
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>

<tr style="font-family: Arial,Helvetica,sans-serif; font-size: 11px; color: rgb(255, 255, 255); text-align: center;">

<td colspan="1" rowspan="1"><p>Terima kasih atas kunjungan Anda<br />
<p style="margin: 4px 0pt; padding: 4px 0pt; font-family: Arial,Helvetica,sans-serif; font-size: 12px; line-height: 18px; color: orange; text-align: left;">* Apabila ada pertanyaan atau keluhan, Silahkan Anda kirim email ke '. $_POST['email'] . '</p><br />

LINK MENUJU TOKO ONLINE KAMI : <a href="'.$_POST['urlWebsite'].'">' .$_POST['businessName'].' </a><br />

</span></td>

</tr>
</tbody>
</table>
</td>
</tr> </tbody></table></body>';
$headers = 'From: ' . $_POST['businessName'] . '<' . $_POST['email'] . '>'."\r\n" ;

'Reply-To:' . $_POST['email'] . "\r\n" ;
$headers .= 'MIME-Version: 1.0' . "\r\n";   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to, $subject, $jcitems, $headers); 


// /* sending e-mail to the shop email */   
$to
= $_POST['email'];  $subjectAdmin = 'Notifikasi Order Web Anda';    $jcitemsAdmin = '<html><body>Halo admin, ada pembelian terjadi di Toko Online anda <b>' . $_POST['businessName'] . '</b><br/><br/> Berikut adalah barang-barang yang dipesan oleh pemesan :<br/>' . $_POST['jcitems'] . '<br/>    <br/>Berikut adalah data diri pemesan :   <br/>===============================================    <br/>Email : ' . $_POST['jcremite'] . '<br/>Name : ' . $_POST['buyername'] .    '<br/>Address :'. $_POST['buyeralamat'] . '<br/>Phone Number : '. $_POST['buyerhp'] . '<br/>===============================================  <br/><br/> Disarankan anda segera menghubungi konsumen melalui EMAIL dan SMS untuk memberitahukan pada mereka TOTAL biaya yang harus ditransfer (termasuk ongkos kirim), jangan menunggu sampai mereka yang menghubungi lebih dulu, karena lebih dari 60% konsumen adalah konsumen pasif. Sebaiknya anda yang mengirimkan SMS atau/dan EMAIL kepada konsumen. 

<br/><br/>Salam Sukses!</body></html>';  $headers = 'From:Pesanan Baru <'.$_POST['jcremite'].'>'."\r\n" ;

'Reply-To:' . $_POST['jcremite'] . "\r\n" ; $headers .= 'MIME-Version: 1.0' . "\r\n";   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to, $subjectAdmin, $jcitemsAdmin, $headers);


/*Clearing the cart info after succesfull order is made*/

setcookie ("simpleCart", "", time() - 3600);

header('location:' . $_SERVER['HTTP_REFERER'].'p/terima-kasih.html');

die;

?>
