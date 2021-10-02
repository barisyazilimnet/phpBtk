<?php

namespace calculator_transactions; 
//? namesace ler harici dosyada kullanılması önerilir
//? eger aynı dosyada kullanılacaksa dosyanın en üstünde kullanılması gereklidir
//? harici dosyada oldugu zaman bir den fazla namespace kullanılabilir

class transactions
{
    public function plus($number1, $number2)
    {
        return $number1 + $number2;
    }
}
