<?php

class Character{
  protected $name;
  protected $img;
  public function __construct($name, $img){
    $this->name = $name;
    $this->img = $img;
  }
  public function getName(){
    return $this->name;
  }
  public function getImg(){
    return $this->img;
  }
  public function setImg($img){
    $this->img = $img;
  }
}

class Warrior extends Character{
  protected $hp;
  protected $attackMin;
  protected $attackMax;
  public function __construct($name, $img, $hp, $attackMin, $attackMax){
    parent::__construct($name, $img);
    $this->hp = $hp;
    $this->attackMin = $attackMin;
    $this->attackMax = $attackMax;
  }
  public function getHp(){
    return $this->hp;
  }
  public function setHp($str){
    $this->hp = $str;
  }
  public function getAttackMin(){
    return $this->attackMin;
  }
  public function getAttackMax(){
    return $this->attackMax;
  }
  public function setAttack($target){
    $atMin = $this->getAttackMin();
    $atMax = $this->getAttackMax();
    $attackPt = ceil( mt_rand($atMin, $atMax) );
    $target->setHp( $target->getHp() - $attackPt );
    return $attackPt;
  }
  public function attack($target){
    $attackPt = $this->setAttack($target);
    //セリフを表示。
    Sentence::set(
      $this->getName().'は攻撃した。'.$target->getName().'に'
    .$attackPt.'ポイントのダメージっぽい！'
    );
  }
  public function still($target){
    $attackPt = $this->setAttack($target);
    //セリフを表示。
    Sentence::set(
      $target->getName().'は、呆然として動けない！</br>'.
      $this->getName().'はツタを伸ばして攻撃した！'.$target->getName().'に'
    .$attackPt.'ポイントのダメージっぽい！'
    );
  }
}

require('class-common.php');


 ?>
