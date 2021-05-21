@extends('frontend.all')
@section('title', '商品列表') {{-- 因應不同頁面給予不同title --}}
@section('content')

<form action="addnew" method="POST">
<div>貨號:<input name="Mid"></div>
<div>商品名稱:<input name="Title"></div>
<div>開賣日期:<input type="date" name="Sdate" id="bookdate" placeholder="2014-09-18"></div>
<div>圖片路徑:<input name="Img"></div> 
<div>商品介紹:<input name="Content"></div>
<div>運費說明:<input name="Freight"></div>
<div>商品規格:<input name="Rule"></div>
<div>商品訂價:<input name="Price"></div>
<div>最後售價:<input name="SalePrice"></div>
<div>上傳者為:<input name="Update_User"></div>
<button type="submit">新增</button>{{ csrf_field() }}

</form>

@endsection