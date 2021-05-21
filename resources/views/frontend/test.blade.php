@foreach($products as $data)
<ul style="list-style:none;list-style-type:none;padding:0px;line-height:25px;">
    <li><b style="font-weight:bold;">{{$data['Title']}}</li>
    @foreach($data['son'] as $data2)
    　<li>{{$data2['Title']}}</li> 
    @endforeach
</ul>
@endforeach