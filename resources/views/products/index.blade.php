<table>
    <tr>
        <th>
            Name
        </th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach ( $products as $product  )
        
    
    <tr> 
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
        <td> <img src="/image/{{$product->image}}"></td>
        <td>Edit, Delete</td>
    </tr>
    @endforeach
</table>