<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Buat role 'admin' jika belum ada
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Ambil user pertama di database
        $user = User::first();

        if ($user && !$user->hasRole('admin')) {
            $user->assignRole($adminRole);
            echo "Role 'admin' berhasil diberikan ke user: {$user->email}\n";
        } else {
            echo "User sudah punya role admin atau belum ada user.\n";
        }
    }
}
