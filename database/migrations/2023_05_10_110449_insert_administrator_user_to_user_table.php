<?php


use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Illuminate\Support\Facades\Hash;




return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $user = User::create([
            'name' => 'Admin Saya',
            'email' => 'adminsaya@untan.ac.id',
            'password' => Hash::make('password1234'),
        ]);


        $administrator = Role::where('name','administrator')->first();
        $user->addRole($administrator);
       
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrator_user');
    }
};
