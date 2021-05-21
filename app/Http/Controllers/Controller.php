<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\model\table;
use App\model\menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function doTestModel()
    {
        $cookie = Cookie::queue('GGGGGGGGG', 'Hello,GGG', 10);
        
    }
    function getcookie(Request $request )
    {
        $cookies = $request->cookie('GGGGGGGGG');
        dump($cookies);
        return view('frontend.test');
    }
    function listModel()
    {
        $users = table::where('id', '<', 100)->take(24)->get();
        $datas = ['products' => []]; //預設$data空間


        foreach ($users as $titt) {

            $datas['products'][] = [
                'id' => $titt->id,
                'Title' => $titt->ProdInfo_Title,
                'Mid' => $titt->ProdInfo_Mid,
                'Price' => $titt->ProdInfo_Price,
                'SalePrice' => $titt->ProdInfo_SalePrice,
                'Img' => $titt->ProdInfo_Img,
            ];
        }


        $users = menu::whereNull('Stage')->orderBy('Ordernum', 'ASC')->get();
        
        $mudatas = ['muproducts' => []]; //預設$data空間
        $i=0;
        foreach ($users as $titt) {
            
            $mudatas['muproducts'][] = [
                'id' => $titt->id,
                'Title' => $titt->Title,
                'Stage' => $titt->Stage,
                'Url' => $titt->Url,
                'son'=>[],
                'Ordernum' => $titt->Ordernum,
                'Update_User' => $titt->Update_User,

            ];
            $users2 = menu::where('Stage', $mudatas['muproducts'][$i]['Title'])->orderBy('Ordernum', 'ASC')->get();
            foreach ($users2 as $titt2) {
            
                $datas2['products2'][] = [
                    'id' => $titt2->id,
                    'Title' => $titt2->Title,
                    'Stage' => $titt2->Stage,
                    'Url' => $titt2->Url,
                    'Ordernum' => $titt2->Ordernum,
                    'Update_User' => $titt2->Update_User,
                ];
            }
            $mudatas['muproducts'][$i]['son']=$datas2['products2'];
            $i=$i+1;
            $datas2['products2']=[];
        }
        // DD($datas);
        return view('frontend.itemlist', $datas,$mudatas);
    }
    function Produpdate()
    {
        //查詢
        $table = table::where('id', '<', 100)->take(100)->get();

        foreach ($table as $titt) {

            $datas['products'][] = [
                'id' => $titt->id,
                'Title' => $titt->ProdInfo_Title,
                'Mid' => $titt->ProdInfo_Mid,
                'Price' => $titt->ProdInfo_Price,
                'SalePrice' => $titt->ProdInfo_SalePrice,
                'Img' => $titt->ProdInfo_Img,
                'Sdate' => $titt->ProdInfo_Sdate,
                'Content' => $titt->ProdInfo_Content,
                'Freight' => $titt->ProdInfo_Freight,
                'Rule' => $titt->ProdInfo_Rule,
                'Update_User' => $titt->ProdInfo_Update_User,
            ];
        }

        //dd($request);
        //$table->save();
        return (view('backctrl.update', $datas));
    }
    function update(Request $request)
    {
        //查詢



        $table2 = table::where('id', $request->id)->first();
        $table2->ProdInfo_Mid = $request->Mid;
        $table2->ProdInfo_Title = $request->Title;
        $table2->ProdInfo_Sdate = $request->Sdate;
        $table2->ProdInfo_Img = $request->Img;
        $table2->ProdInfo_Content = $request->Content;
        $table2->ProdInfo_Freight = $request->Freight;
        $table2->ProdInfo_Rule = $request->Rule;
        $table2->ProdInfo_Price = $request->Price;
        $table2->ProdInfo_SalePrice = $request->SalePrice;
        $table2->ProdInfo_Update_User = $request->Update_User;
        //dd($table2);
        // $table->ProdInfo_Title  = 123 ;
        $table2->save();
        return redirect('/update');
    }
    function detailModel(Request $request, $id = false)
    {
        if ($detail = table::where('id', $id)->first()) {

            return view('frontend.itemdetail', $detail);
        } else {

            return redirect('/');
        }
    }
    function addNew(Request $request)
    {
        $table = new table;
        $table->ProdInfo_Mid = $request->Mid;
        $table->ProdInfo_Title = $request->Title;
        $table->ProdInfo_Sdate = $request->Sdate;
        $table->ProdInfo_Img = $request->Img;
        $table->ProdInfo_Content = $request->Content;
        $table->ProdInfo_Freight = $request->Freight;
        $table->ProdInfo_Rule = $request->Rule;
        $table->ProdInfo_Price = $request->Price;
        $table->ProdInfo_SalePrice = $request->SalePrice;
        $table->ProdInfo_Update_User = $request->Update_User;
        //DD($table);
        $table->save();

        return view('backctrl.addnew');
    }
    function delNew(Request $request)
    {
        $users = table::where('id', '4')->delete();

        return view('frontend.test');
    }
    function menuupdate()
    {
        //查詢
        $table = menu::where('id', '<', 100)->take(100)->get();

        foreach ($table as $titt) {

            $datas['products'][] = [
                'id' => $titt->id,
                'Title' => $titt->Title,
                'Stage' => $titt->Stage,
                'Url' => $titt->Url,
                'Ordernum' => $titt->Ordernum,
                'Update_User' => $titt->Update_User,
            ];
        }

        return (view('backctrl.menuupdate', $datas));
    }
    function menuup(Request $request)
    {
        //查詢
        $table2 = menu::where('id', $request->id)->first();
        $table2->Title = $request->Title;
        $table2->Stage = $request->Stage;
        $table2->Url = $request->Url;
        $table2->Ordernum = $request->Ordernum;
        $table2->Update_User = $request->Update_User;
        //dd($table2);
        // $table->ProdInfo_Title  = 123 ;
        $table2->save();
        return redirect('/menuupdate');
    }
    function menulist()
    {
        
        //dd($datas);
        return view('frontend.test');
        
    }
}
