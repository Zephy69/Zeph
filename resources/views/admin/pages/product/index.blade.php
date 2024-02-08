<table border="2">
    <thead>
        <tr>
            <th>S.N</th>
            <th>Product Name</th>
            <th>Product price</th>
            <th>Product Description</th>
            <th>Product Code</th>
            <th>Product Phone</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ecoms as $key=>$ecom)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$ecom->Name}}</td>
            <td>{{$ecom->Price}}</td>
            <td>{{$ecom->Description}}</td>
            <td>{{$ecom->Code}}</td>
            <td>{{$ecom->Phone}}</td>
            <td><img src="{{asset('Images/'.$ecom->Image)}}" height="100px" width="150px"></td>
            <td>
                <a href="/proedit/{{$ecom->id}}">Edit</a>
                <a href="/prodelete/{{$ecom->id}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>