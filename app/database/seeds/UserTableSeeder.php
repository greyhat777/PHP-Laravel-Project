
<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Jesus',
        'username'     => 'greyhat777',
        'email'    => 'greyhat777@mail.fresnostate.edu',
        'password' => Hash::make('people55'),
    ));
}

}