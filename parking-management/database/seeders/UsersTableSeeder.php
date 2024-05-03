<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           //sadmin
           [
            'name'=> 'slt',
            'username'=> 'sadmin',
            'email'=> 'sadmin.slt@gmail.com',
            'role'=> 'sadmin',
            'password'=> Hash::make('slt'),
           ],
           //ssadmin
           [
            'name'=> 'slt',
            'username'=> 'ssadmin',
            'email'=> 'ssadmin.slt@gmail.com',
            'role'=> 'ssadmin',
            'password'=> Hash::make('ipms'),
           ],
           //security
           [
            'name'=> 'slt',
            'username'=> 'security',
            'email'=> 'security.slt@gmail.com',
            'role'=> 'security',
            'password'=> Hash::make('sec'),
           ],   
           //user
           [
            'name'=> 'slt',
            'username'=> 'user',
            'email'=> 'user.slt@gmail.com',
            'role'=> 'user',
            'password'=> Hash::make('user'),
           ],   
           ]);
    }
}
