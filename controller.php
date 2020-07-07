<?php

     require_once 'model.php';

     extract($_POST);
     if(isset($prenom)){
          $ok = false;
          $rep = searchPersonne($cni);
          while($row = $rep->fetch()){
              if($row['cni']){
                    $ok = true;
              }
          }
          if(!$ok){
               $rep = insert($cni,$prenom,$nom,$age);
               echo '<p id="notif" class="bg-blue"> Personne ajouter avec succes</p>';
          }else{
               echo '<p id="notif" class="bg-red"> Le CNI existe deja </p>';
          }

     }

     if(isset($seachPersonne)){

          if($seachPersonne!=''){
               $rep = searchPersonne($seachPersonne);
               while($row = $rep->fetch()){
                    echo '<option value="'.$row['cni'].'">';
                    echo '<p>'.$row['prenom'].' '.$row['nom'].' '.$row['age'].' ans.</p>';
               }
          }
    }

?>