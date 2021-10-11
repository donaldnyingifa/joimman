<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
          'site_name' =>'Joimman',
          'address' => 'kdu Nigeria',
          'contact_number' => '09035096583',
          'contact_email' => 'info@joimman.com'
        ]);
    }
}
