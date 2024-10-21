<?php

namespace Database\Seeders;

use App\Models\AccountGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accountGroups = array(
            array('name' => 'Capital Account', 'parent' => 'Root', 'type' => 'Liabilities'),
        );

        foreach ($accountGroups as $accountGroup)
            AccountGroup::factory()->create($accountGroup);
    }
}
