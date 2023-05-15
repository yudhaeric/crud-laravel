<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentsSeeder extends Seeder
{

    public function run(): void
    {
        // $data = [
        //     ["nim" => "41519010071", "name" => "Yudha", "email" => "yudha@gmail.com", "address" => "Tangerang", "class_id" => 1, "active" => 1],
        //     ["nim" => "41519010072", "name" => "Eric", "email" => "eric@gmail.com", "address" => "Tangerang", "class_id" => 2, "active" => 1],
        //     ["nim" => "41519010073", "name" => "Pamungkas", "email" => "pamungkas@gmail.com", "address" => "Tangerang", "class_id" => 3, "active" => 1],
        // ];
        
        // foreach ($data as $value) {
        //     Student::insert([
        //         "nim" => $value["nim"],
        //         "name" => $value["name"],
        //         "email" => $value["email"],
        //         "address" => $value["address"],
        //         "class_id" => $value["class_id"],
        //         "active" => $value["active"],
        //         "created_at" => Carbon::now(),
        //         "updated_at" => Carbon::now(),
        //     ]);
        // }

        Student::factory()->count(17)->create();
    }
}
