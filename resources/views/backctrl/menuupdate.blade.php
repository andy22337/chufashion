@extends('frontend.all')
@section('title', '商品列表') {{-- 因應不同頁面給予不同title --}}
@section('content')


<div style="font-size:1.2vw">
修改資料
@foreach($products as $data)

內碼:{{$data['id']}}<br>
<form action="menuup" method="post">
<input type="hidden" name="id" value='{{$data['id']}}'><br>
菜單名稱:<input name="Title" value='{{$data['Title']}}'><br>
上階名稱:<input name="Stage" value='{{$data['Stage']}}'><br>
網頁路徑:<input name="Url" value='{{$data['Url']}}'><br> 
排序順位:<input name="Ordernum" value='{{$data['Ordernum']}}'><br> 
上傳者為:<input name="Update_User" value='{{$data['Update_User']}}'><br>
<button type="submit">更新</button>{{ csrf_field() }}
</form>
<br><br>
@endforeach
</div>
@endsection