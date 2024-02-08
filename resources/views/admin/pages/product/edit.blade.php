@extends('admin.layouts.master')
@section('content')
<style>
    .form-container{
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 50vh;
         
    }
    form{
        width: 100px;
        height: 100px;
        text-align: center;
        position: absolute;
        color: purple;  
    }
</style>
<div class="form-container">
<form action="{{route('updateproduct',$ecom->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <fieldset>
        <legend><h3>Submission Form</h3></legend>
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{$ecom->Name}}">
    <br><br>

    <label for="price">Price:</label>
    <input type="text" name="price" value="{{$ecom->Price}}">
    <br><br>

    <label for="description">Description:</label>
    <textarea name="desc">{{$ecom->Description}}"</textarea>
    <br><br>
    
    <label for="code">Code:</label>
    <input type="text" name="code" value="{{$ecom->Code}}">
    <br><br>
    
    <label for="phone">Phone:</label>
    <input type="text" name="phone" value="{{$ecom->Phone}}">
    <br><br>
    <label for="image"></label>
    <input type="file" name="img">
    <br><br>
    <button type="submit">Update Product</button>
    </fieldset>
</form>
</div>
@endsection