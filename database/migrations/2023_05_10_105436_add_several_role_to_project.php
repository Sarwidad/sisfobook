<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $administrator = Role::create([
            'name' => 'administrator',
            'display_name' => 'Administrator', // optional
            'description' => 'User yang mengatur semuanya', // optional
        ]);
        $visitor = Role::create([
            'name' => 'visitor',
            'display_name' => 'Visitor', // optional
            'description' => 'User yang hanya visitor', // optional
        ]);
        $contributor = Role::create([
            'name' => 'contributor',
            'display_name' => 'Contributor', // optional
            'description' => 'User yang contributor', // optional
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('project', function (Blueprint $table) {
            //
        });
    }
};
