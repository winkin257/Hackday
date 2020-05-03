<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('events')->insert([
        'title' => 'Otbor Tigers',
        'description' => 'Приходите будет весело',
        'when' => Carbon::create('15-09-2020'),
        'location' => 'Сзади универа',
        'orgtype' => 1,
        'orgid' => 1,
    ]);

      DB::table('events')->insert([
        'title' => 'Собрание Дебатного Клуба',
        'description' => 'Формирование команд',
        'when' => Carbon::create('24-05-2020'),
        'location' => '403 кабинет',
        'orgtype' =>1,
        'orgId' => 2,
    ]);

      DB::table('events')->insert([
        'title' => 'Мастер класс от John Doe',
        'description' => 'Просьба не опаздывать. Время проведения 18.00',
        'when' => Carbon::create('03-05-2020'),
        'location' => 'Актовый зал, 2 этаж',
        'orgtype' => 4,
    ]);
    }
}