@extends('frontend.all')
@section('title', '商品列表') {{-- 因應不同頁面給予不同title --}}
@section('content')



<br>
<div>
    <table style="font-weight:lighter;width:100%;text-align:center" width="100%">
        <tr>
            <td width="15%" style="text-align:left;" valign="top">
                @foreach($muproducts as $mudata)
                <ul style="list-style:none;list-style-type:none;padding:0px;line-height:25px;">
                    <li><b style="font-weight:bold;">{{$mudata['Title']}}</b></li>
                    @foreach($mudata['son'] as $mudata2)
                    <li><a href="{{$mudata2['Url']}}">{{$mudata2['Title']}}</a></li>
                    @endforeach
                </ul>
                @endforeach


            </td>

            <td valign="top">
                <div>
                    <table width="100%">
                        <tr>
                            <td style="text-align:left;">
                                CHU首頁>優惠活動>春夏絕版現貨　
                            </td>
                            <td style="text-align:right;">

                                <form style="float:right">
                                    <select name="order">
                                        　<option value="null">最新上架排列</option>
                                        　<option value="HtoL">價錢高至低</option>
                                        　<option value="LtoH">價錢低至高</option>
                                        　<option value="hot">熱門商品</option>
                                    </select>
                                </form>
                                <div style="float:right" width="50px">
                                    　
                                </div>
                                <form style="float:right">
                                    <select name="SIZE">
                                        　<option value="null">SIZE</option>
                                        　<option value="S">S</option>
                                        　<option value="M">M</option>
                                        　<option value="L">L</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    </table>
                    　
                </div>
                <div>
                    <div class="row">
                        @foreach($products as $data)

                        <div class="col-lg-3 col-md-4 col-6">
                            <div>
                                <a href="/itemdetail/{{$data['id']}}"><img src="./img/fb/{{$data['Img']}}" alt="" width="100%"></a>
                                <div>
                                    <br>
                                    <img src="./img/UI/New-arrival.png" alt="" style="margin-bottom:1rem;">




                                    <p style="margin-bottom:0.1rem;">{{$data['Title']}}</p>
                                    <p style="margin-bottom:0.1rem;"><STRIKE>NT{{$data['Price']}}</STRIKE>　優惠價 NT{{$data['SalePrice']}}</p>
                                </div>

                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>
@endsection