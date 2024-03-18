<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\domains;
use App\Models\level;
use App\Models\technicals;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('technicals')->insert([[
            'name' => 'PHP',
        ],[
            'name' => 'RUBY',
        ],[
            'name' => 'GOLANG',
        ],[
            'name' => 'JAVA',
        ],[
            'name' => 'Javascript',
        ],[
            'name' => 'C#',
        ]]);

        DB::table('domains')->insert([[
            'name' => 'marketing',
            'is_active' => 0
        ],[
            'name' => 'Công nghệ thông tin',
            'is_active' => 0
        ],[
            'name' => 'Thiết kế đồ họa',
            'is_active' => 0
        ],[
            'name' => 'Chăm sóc sắc đẹp',
            'is_active' => 0
        ]]);

        DB::table('levels')->insert([[
            'name' => 'Cấp 1',
            'description' => 'Mô tả cấp độ',
        ],[
            'name' => 'Cấp 2',
            'description' => 'Mô tả cấp độ',
        ],[
            'name' => 'Cấp 3',
            'description' => 'Mô tả cấp độ',
        ],[
            'name' => 'Cấp 4',
            'description' => 'Mô tả cấp độ',
        ]]);
    }
}
