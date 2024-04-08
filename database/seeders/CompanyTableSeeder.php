<?php

namespace Database\Seeders;

use App\Company;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Company::create([
            'name' => 'شركة وايت الرياض',
            'description' => 'شركة وايت صرف صحي وتسليك مجاري',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'phone' => '966546913538',
            'photo' => 'عن الشركة'
        ]);
    }
}
