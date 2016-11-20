<?php
class ia
{
//Propiedades
public $mapaCol;
public $mapaFil;
public $numNaves;
//Arrays
//Naves humanas tiene que estar vacio
public $navesHumano=[];
//En este punto, el array de navesIA tambien tiene que estar vacio
public $navesIA=[];
//Getters
public function getColumna() {
    return $this->mapaCol;
  }
  public function getFila() {
    return $this->mapaFil;
  }
  public function getNave() {
    return $this->numNaves;
  }
  public function getNaveshumano(){
    return $this->navesHumano;
  }
//Metemos el array de naves IA en el getter para que te pueda devolver los valores, le ponemos que solo pueda ir hacia alante si no hay ninguna nave enfrente
public function getNavesIA(){
  $puedemover=0;

  foreach ($this->navesIA as $key => &$nave) {
    if ($nave["tipo"]=="tipo1") {

    foreach ($this->navesHumano as $key => $naveH) {

      if (($nave["fil"]-1)==$naveH["fil"] && $nave["col"]==$naveH["col"]) {

        $puedemover=1;

      }
    }

    if ($puedemover==0) {
      $nave["fil"]=($nave["fil"]-1);
    }
   }




  }

  return $this->navesIA;
}
//Setters
public function setMapaCol($mapaCol){
      if($mapaCol>3){
         $this->mapaCol=3;
      }elseif ($mapaCol<0) {
        $this->mapaCol=0;
      }else{
        $this->mapaCol = $mapaCol;
      }
  }
  public function setMapaFil($mapaFil){
      if($mapaFil>3){
         $this->mapaFil=3;
 }    elseif ($mapaFil<0){
        $this->mapaFil=0;
 }    else{
        $this->mapaFil=$mapaFil;
  }
  }
  public function setNaveHumana($id, $tipo, $col, $fil){
    $this->navesHumano[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "fil"=>$fil,
      "col"=>$col,
    ];
  }

  public function setNavesIA($navesIA){
    return $this->navesIA = $navesIA;
  }

    public function setNaveIA($id, $tipo, $col, $fil){
      $this->navesIA[]=[
        "id"=>$id,
        "tipo"=>$tipo,
        "fil"=>$fil,
        "col"=>$col,
      ];
    }
}
 ?>
