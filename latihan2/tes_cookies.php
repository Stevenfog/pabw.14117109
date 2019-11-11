<?php 
setcookie("test_cookie", "test", time() + 3600, '/'); 
?>
 <html>
 <body>
 <?php if(count($_COOKIE) > 0) {
 echo "Cookies enabled.";
 } else {
 echo "Cookies disabled.";
 } ?>
 //browser menampilkan hal berbeda antara mode normal dengan mode incognito,karena mode incognito tidak akan menyimpan cookies.jika cookies bernilai lebih dari 0, maka cookies enable.selain itu,berarti tidak ada cookies yang tersimpan.  

  </body>
 </html>