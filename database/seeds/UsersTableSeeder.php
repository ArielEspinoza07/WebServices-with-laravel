<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // DB::table('role_user')->delete();
      // DB::table('users')->delete();
      // DB::table('roles')->delete();
      //
      // DB::table('roles')->insert([
      //   'name'          => 'Administrator',
      //   'display_name'  => 'Administrator',
      //   'description'   => 'Administrator',
      // ]);
      //
      // DB::table('users')->insert([
      //   'name'          => 'administrator',
      //   'username'     => 'root',
      //   'email'         => 'administrator',
      //   'password'     => 'root',
      // ]);

      // DB::table('role_user')->insert([
      //   'user_id' => 4,
      //   'role_id' => 8,
      // ]);

    }
}
