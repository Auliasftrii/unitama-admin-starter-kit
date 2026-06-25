<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'app_name' => 'Admin Laravel',
            'copyright' => 'Admin Laravel || 2026',
            'login_title' => 'Admin Laravel',
            'description' => 'Gunakan kombinasi bahasa Indonesia dan istilah teknis bahasa Inggris yang sering dicari developer atau klien',
            'keywords' => 'Root Admin Laravel adalah sistem panel kendali (admin panel) modern yang dirancang untuk mengelola data, pengguna, dan konfigurasi aplikasi secara efisien, aman, dan responsif',
        ]);
    }
}
