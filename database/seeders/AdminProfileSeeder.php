<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'admin@admin.com')->first();

        $vendor = new Vendor();
        $vendor->banner = 'uploads/image-1.jpg';
        $vendor->phone = '+45 80.178.22';
        $vendor->email = 'admin@admin.com';
        $vendor->address = 'Huge Street 514';
        $vendor->description = 'Shop description';
        $vendor->user_id = $user->id;
        $vendor->save();
    }
}
