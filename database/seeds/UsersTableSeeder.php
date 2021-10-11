<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = App\User::create([
          'name' => 'Donald Nyingifa',
          'email' => 'donaldnyingifa@gmail.com',
          'password' => bcrypt('amaebite'),
          'admin' => 1
        ]);

        App\Profile::create([
          'user_id' => $user->id,
          'avatar' => 'uploads/avatars/1.jpeg',
          'about' => 'I am a cool user',
          'facebook' => 'https://web.facebook.com/thejoimman/',
          'twitter' => 'https://twitter.com/joimman'
          'instagam' => 'https://www.instagram.com/joimman/'
        ]);
    }
}
