<!DOCTYPE HTML>
<html lang="en">
   <head>
     <meta charset="UTF-8">
       <title></title>
       <style></style>
     </head>
     <body>

       <h2>Mitä haluat tehdä?</h2>

       <form action="kotitehtava10.php" method="POST">
         <input type="radio" name="nosto" value="Nosto" checked> Nostaa 50 euroa tililtä<br>
         <input type="radio" name="pano" value="Pano"> Lisätä 50 euroa tilille<br>
         <input type="radio" name="uusi" value="Uusi"> Avata tili<br>
         <input type="radio" name="heippa" value="Heippa"> Sulkea tili<br>
         <input type="submit" value="Toteuta toiminto"><br><br>
       </form>


<?php
  class BankAccount {
    public $accountNumber;
    private $balance;
    public $dateOpened;
    public $accountType;

    function __construct($accountNumber, $balance, $dateOpened, $accountType) {
      $this->accountNumber = $accountNumber;
      $this->balance = $balance;
      $this->dateOpened = $dateOpened;
      $this->accountType = $accountType;

      public function get_a() {
        return $this->a;
      }

      public function set_a($value) {
        $this->a = $value;
      }
    }


  if (isset($_POST['submit'])) {
  public function set_a() {
    if ($_POST['nosto'] == 'true') {
    $balance->set_a(-50);
    }
    elseif ($_POST['pano'] == 'true') {
    $balance->set_a(+50);
    }
    elseif ($_POST['uusi'] == 'true') {
    }
    elseif ($_POST['heippa'] == 'true') {
    }
  }
  function puhu() {
    echo "$this->accountNumber <br>$this->balance <br>$this->dateOpened <br>$this->accountType<br><br>";
  }
}


//Olio
$A7652= new BankAccount("A7652", "$500", "5/3/2000", "Cheking");
$B2311= new BankAccount("B2311", "-$50", "1/2/2012", "Cheking");
$S2314= new BankAccount("S2314", "$7500", "1/2/1994", "Saving");


if ((isset($_POST['submit']) && $_POST['toiminto'] == 'true')) {
  $A7652->set_a();
  $B2311->set_a();
  $S2314->set_a();
} else {
$A7652->puhu();
$B2311->puhu();
$S2314->puhu();
}

?>

</body>
</html>
