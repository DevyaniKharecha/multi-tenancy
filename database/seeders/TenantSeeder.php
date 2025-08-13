<?php

namespace Database\Seeders;

use App\Models\Tenants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $t1 = Tenants::create(['name' => 'Tenant 1', 'subdomain' => 'tenant1']);
        $t2 = Tenants::create(['name' => 'Tenant 2', 'subdomain' => 'tenant2']);

        User::create([
            'name' => 'Nayraa',
            'email' => 'nayraa@tenant1.test',
            'password' => Hash::make('password'),
            'tenant_id' => $t1->id
        ]);

        User::create([
            'name' => 'Jaikishan',
            'email' => 'jaikishan@tenant2.test',
            'password' => Hash::make('password'),
            'tenant_id' => $t2->id
        ]);
    }
}
