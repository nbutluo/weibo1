<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(500)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'nbutluo';
        $user->email = 'nbutluo@163.com';
        $user->save();

        $smith = User::find(2);
        $smith->name = 'smith';
        $smith->email = 'smith307@163.com';
        $smith->save();
    }
}
