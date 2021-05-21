@extends('frontend.all')
@section('title', '商品')   {{-- 因應不同頁面給予不同title --}}
@section('content')


<br>
<div>
    <table style="font-weight:lighter;width:100%;text-align:center;" width="100%">
        <tr>
            <td width="15%" style="text-align:left;" valign="top">
                
            @include('frontend.menu')

            </td>

            <td valign="top">
                <div>
                    <table width="100%">
                        <tr>
                            <td style="text-align:left;">
                                CHU首頁>優惠活動>春夏絕版現貨　
                            </td>
                        </tr>
                    </table>
                    　
                </div>
                <div>
                    <table width="100%">
                        <tr valign="top">
                            <td style="text-align:left;" width="50%">
                                <img src="{{URL('/')}}/img/fb/{{$ProdInfo_Img}}" alt="" style="width: 35vw;">
                            </td>
                            <td style="text-align:left;"  width="50%" > 
                                {{$ProdInfo_Title}}
                                <br>
                                商品編號:{{$ProdInfo_Mid}}
                                <br>
                                <STRIKE>NT{{$ProdInfo_Price}}</STRIKE>　優惠價 NT{{$ProdInfo_SalePrice}}
                                <hr>
                                酒紅<br>
                                <div>
                                    <div style="background-color: red;width:20px;height:20px;float:left;margin:5px"></div>　
                                    <div style="background-color: black;width:20px;height:20px;float:left;margin:5px"></div>　
                                    <div style="background-color: blue;width:20px;height:20px;float:left;margin:5px"></div>
                                </div>
                                <br>
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <form style="margin:5px">
                                                <select  style="width:10vw;height:4vw;text-align:center;text-align-last:center;" name="SIZE">
                                                    　<option value="null">SIZE</option>
                                                    　<option value="S">S</option>
                                                    　<option value="M">M</option>
                                                    　<option value="L">L</option>
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <form style="margin:5px">
                                                <select  style="width:10vw;height:4vw;text-align:center;text-align-last:center;" name="SIZE">
                                                    　<option value="null">1</option>
                                                    　<option value="S">2</option>
                                                    　<option value="M">3</option>
                                                    　<option value="L">4</option>
                                                </select>
                                            </form> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="text-align:center;background-color:slategray;color:white;width:10vw;line-height:4vw;height:4vw;margin:5px">
                                                加入購物車
                                            </div>
                                        </td>
                                        <td>
                                            <div style="text-align:center;width:10vw;height:4vw;line-height:4vw;margin:5px">
                                                加入我的收藏
                                            </div> 
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <div>
                                    本商品適用活動
                                    <br>
                                    <img src="{{URL('/')}}/img/UI/freeshipping.png">　全館800免運(離島國外不適用)
                                    <br>
                                    <img src="{{URL('/')}}/img/UI/newfriend.png">　新會員家臉書粉絲團@好友送50元
                                    <br>
                                    <img src="{{URL('/')}}/img/UI/fulldiscount.png">　全館滿1000現折100
                                    <br>
                                </div>
                                <hr>
                                <div style="text-align:center;">
                                    商品說明　|　MODEL　|　尺寸表
                                </div>
                                
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</div>

@endsection