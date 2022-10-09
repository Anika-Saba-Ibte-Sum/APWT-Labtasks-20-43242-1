@extends('layouts.app')
@section('content')
<div>
<br>
<table class= "table table-border">
  <tr><br>
    <th>Product Website Name</th>
    <th>Link</th>
  </tr>
  <tr>
    <td>Alibaba</td>
    <td><a href="https://magenest.com/en/top-ecommerce-sites-in-bangladesh/#1_Darazcombd">Alibaba.com.bd</a></td>
    
  </tr>
  <br>
  <tr>
    <td>Realme</td>   
    <td><a href="https://magenest.com/en/top-ecommerce-sites-in-bangladesh/#1_Darazcombd">Realme.com</a></td>
  </tr>
  <tr>
  <td>Rayans</td>
    
    <td><a href="https://magenest.com/en/top-ecommerce-sites-in-bangladesh/#1_Darazcombd">Rayans.com</a></td>
  </tr>
  <tr>
  <td>Apple</td>
    
    <td><a href="https://magenest.com/en/top-ecommerce-sites-in-bangladesh/#1_Darazcombd">Apply.com</a></td>
  </tr>
  <tr>
  <td>Samsung</td>
    
    <td><a href="https://magenest.com/en/top-ecommerce-sites-in-bangladesh/#1_Darazcombd">Samsung.com.bd</a></td>
  </tr>
 
</table>
    
</div>
<br>
<h5>Products are Available</h5><br>
<h6>Product Name: {{$name}}</h6>
<p>Price: {{$price}}</p>
<p>Product Discription: <a href="https://www.gsmarena.com/apple_iphone_13_pro_max-11089.php">iPhone 13 Pro Max</a></p>

@foreach($names as $n)
<li>{{$n}}</li>
@endforeach
<div>

</div>
@endsection