<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $newCustomer = new Customer();
        $newCustomer->name = "John Doe";
        $newCustomer->email = "JohnDoe@gmail.com";
        $newCustomer->phone = "01142558153";
        $newCustomer->address1 = "21 Osborne Road";
        $newCustomer->address2 = "";
        $newCustomer->postcode = "S11 9AY";
        $newCustomer->city = "Sheffield";
        $newCustomer->save();

        $newCustomer = new Customer();
        $newCustomer->name = "Matthew Tansey";
        $newCustomer->email = "matty.tansley@gmail.com";
        $newCustomer->phone = "07534214287";
        $newCustomer->address1 = "3 Brearley Drive";
        $newCustomer->address2 = "";
        $newCustomer->postcode = "S5 8BF";
        $newCustomer->city = "Sheffield";
        $newCustomer->save();

        //dump(Customer::all()->toArray());
    }
}
