<?php
//function timer login
function timer()
{
   $timeout = 100000000000; // dalam satuan detik
   $_SESSION['timeout'] = $timeout;
}

function cek_login() {
   if (isset($_SESSION['timeout']))
   {
      $exp_time = $_SESSION['timeout'];

      if (time() < $exp_time) {
         timer();
         return true;
      } else {
         return false;
      }
   }
}
