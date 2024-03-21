<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\Models\Locality;


class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Empty the table first
       // Locality::truncate();
        
        //Define data
       $localities = [
            ['locality'=>'BRUXELLES'],
            ['locality'=>'scénographe'],
            ['locality'=>'auteur'],
        ];
        
        //Insert data in the table
        DB::table('localities')->insert($localities);

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Locality::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

    }
}
