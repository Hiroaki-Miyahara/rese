<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop = [
            'title' =>'仙人',
            'area' =>'東京都',
            'genre' =>'寿司',
            'image' =>'storage/sushi.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'牛助',
            'area' =>'大阪府',
            'genre' =>'焼肉',
            'image' =>'storage/yakiniku.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'戦慄',
            'area' =>'福岡県',
            'genre' =>'居酒屋',
            'image' =>'storage/izakaya.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'ルーク',
            'area' =>'東京都',
            'genre' =>'イタリアン',
            'image' =>'storage/itarian.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'志摩屋',
            'area' =>'福岡県',
            'genre' =>'ラーメン',
            'image' =>'storage/ramen.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'香',
            'area' =>'東京都',
            'genre' =>'焼肉',
            'image' =>'storage/yakiniku.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'JJ',
            'area' =>'大阪府',
            'genre' =>'イタリアン',
            'image' =>'storage/itarian.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'らーめん極み',
            'area' =>'東京都',
            'genre' =>'ラーメン',
            'image' =>'storage/ramen.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'鳥雨',
            'area' =>'大阪府',
            'genre' =>'居酒屋',
            'image' =>'storage/izakaya.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'築地色合',
            'area' =>'東京都',
            'genre' =>'寿司',
            'image' =>'storage/sushi.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'晴海',
            'area' =>'大阪府',
            'genre' =>'焼肉',
            'image' =>'storage/yakiniku.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'三子',
            'area' =>'福岡県',
            'genre' =>'焼肉',
            'image' =>'storage/yakiniku.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'八戒',
            'area' =>'東京都',
            'genre' =>'居酒屋',
            'image' =>'storage/izakaya.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'福助',
            'area' =>'大阪府',
            'genre' =>'寿司',
            'image' =>'storage/sushi.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'ラー北',
            'area' =>'東京都',
            'genre' =>'ラーメン',
            'image' =>'storage/ramen.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'翔',
            'area' =>'大阪府',
            'genre' =>'居酒屋',
            'image' =>'storage/izakaya.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'経緯',
            'area' =>'東京都',
            'genre' =>'寿司',
            'image' =>'storage/sushi.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'漆',
            'area' =>'東京都',
            'genre' =>'寿司',
            'image' =>'storage/sushi.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'THE TOOL',
            'area' =>'福岡県',
            'genre' =>'イタリアン',
            'image' =>'storage/itarian.jpg'
        ];
        DB::table('shops')->insert($shop);

        $shop = [
            'title' =>'木船',
            'area' =>'大阪府',
            'genre' =>'寿司',
            'image' =>'storage/sushi.jpg'
        ];
        DB::table('shops')->insert($shop);
    }
}
