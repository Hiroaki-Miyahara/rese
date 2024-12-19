<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop_all(Request $request)
    {
        $shops = Shop::all();

        $keyword = $request->input('keyword');

        if(!empty($keyword)) //$keywordが空ではない場合、検索処理を実行します
            $shops->where('name', 'LIKE', "%{$keyword}%")
            ->orwhereHas('shop', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%");
            })->get();
        return view('auth.shop_all', ['shops'=>$shops, 'keyword'=>$keyword]);
    }
}
