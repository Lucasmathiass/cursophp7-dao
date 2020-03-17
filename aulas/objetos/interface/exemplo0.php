<?php
 interface modelo{
     public function gravar();
 }


 class formulario implements modelo{
     public function retornar(){
         return "Gravou";
     }
 }

 $imple = new formulario();

  echo $imple -> retornar();