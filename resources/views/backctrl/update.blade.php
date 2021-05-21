@extends('frontend.all')
@section('title', '商品列表') {{-- 因應不同頁面給予不同title --}}
@section('content')



修改資料
@foreach($products as $data)

內碼:{{$data['id']}}<br>

<form action="up" method="post">
<input type="hidden" name="id" value='{{$data['id']}}'><br>
貨號:<input name="Mid" value='{{$data['Mid']}}'><br>
商品名稱:<input name="Title" value='{{$data['Title']}}'><br>
開賣日期:<input type="date" name="Sdate" id="bookdate" placeholder="2014-09-18"><br>
圖片路徑:<input name="Img" value='{{$data['Img']}}'><br> 
商品介紹:<input name="Content"  value='{{$data['Content']}}'><br>
運費說明:<input name="Freight"  value='{{$data['Freight']}}'><br>
商品規格:<input name="Rule"  value='{{$data['Rule']}}'><br>
商品訂價:<input name="Price"  value='{{$data['Price']}}'><br>
最後售價:<input name="SalePrice"  value='{{$data['SalePrice']}}'><br>
上傳者為:<input name="Update_User" value='{{$data['Update_User']}}'><br>
<button type="submit">更新</button>{{ csrf_field() }}
</form>
<br><br>
@endforeach

@endsection