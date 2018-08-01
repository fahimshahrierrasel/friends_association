<?php

use App\Fund;
use Illuminate\Database\Seeder;

class FundTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $savingFund = new Fund();
        $savingFund->name = "Saving Fund";
        $savingFund->balance = 0.00;
        $savingFund->save();

        $reserveFund = new Fund();
        $reserveFund->name = "Reserve Fund";
        $reserveFund->balance = 0.00;
        $reserveFund->save();

        $investmentFund = new Fund();
        $investmentFund->name = "Invest Fund";
        $investmentFund->balance = 0.00;
        $investmentFund->save();
    }
}
