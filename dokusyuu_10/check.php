<!--
 10章 この章の理解度チェック
4. 練習問題10.5の2.の回答をインターフェイスを使って書き換えましょう。
[練習問題10.5回答]
  abstract class Animal {
    public abstract function outputVoice(): string{
  }

  class Cat extends Animal {
    public final function outputVoice(): string {
      return 'ニャァ';
    }
  }

  class Dog extends Animal {
    public final function outputVoice(): string {
      return 'バゥ';
  }

  $cat = new Cat();
  print $cat->outputVoice() . "</br>";
  $dog = new Dog();
  print $dog->outputVoice() . "</br>";
?>
-->

<!-- [4.回答] -->
<?php
interface IFanimal {
  function outputVoice(): string;
}

class Cat implements IFanimal {
  function outputVoice(): string {
    return 'ニャァ';
  }
}

class Dog implements IFanimal {
  function outputVoice(): string {
    return 'バゥ';
  }
}

$cat = new Cat();
print $cat->outputVoice() . "</br>";
$dog = new Dog();
print $dog->outputVoice() . "</br>";
?>
