<?php
class BankAccount {
    private $balance = 0;

    function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited: Rs. $amount<br>";
    }

    function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn: Rs. $amount<br>";
        } else {
            echo "Insufficient balance.<br>";
        }
    }

    function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount();

$account->deposit(10000);
echo "Balance: Rs. " . $account->getBalance() . "<br>";

$account->withdraw(3000);
echo "Balance: Rs. " . $account->getBalance() . "<br>";
?>