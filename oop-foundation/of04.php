<?php
class Fund {
    private $fund;

    public function __construct($initialBalance = 0) {
        $this->fund = $initialBalance;
    }

    public function addFund(int $money) {
        $this->fund += $money;
    }

    public function deductFund(int $money) {
        $this->fund -= $money;
    }

    public function getBalance() {
        printf("Your total balance is : %d TK", $this->fund);
    }
}
$ourFund = new Fund(100);
$ourFund->addFund(50);
$ourFund->getBalance();
$ourFund->deductFund(20);
$ourFund->getBalance();