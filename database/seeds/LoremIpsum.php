<?php

use Illuminate\Database\Seeder;

class LoremIpsum extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = file_get_contents('http://loripsum.net/api/10/short/headers');

        DB::table('pages')->insert([
            'text' => $content
        ]);
    }
}
