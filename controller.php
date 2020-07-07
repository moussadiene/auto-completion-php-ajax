<?php

     require_once 'model.php';

     extract($_POST);
     if(isset($prenom)){
          $rep = insert($cni,$prenom,$nom,$age);
          if($rep!=null){
               echo '<p id="notif" class="bg-blue"> Personne ajouter avec succes</p>';
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