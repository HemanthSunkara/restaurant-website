<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')
</head>

<body>

    <div class="container-scroller">@include('admin.navbar')
        <div style="position:relative; top:60px; right:-150px">

            <form action="{{ url('/update',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Title</label>
                    <input style="color: black" type="text" name="title" value="{{$data->title}}" required>
                </div>
                <div>
                    <label>Price</label>
                    <input style="color: black" type="num" name="price" value="{{$data->price}}" required>
                </div>

                <div>
                    <label>Descripion</label>
                    <input style="color: black" type="text" name="description" value="{{$data->description}}" required>
                </div>
                <div>
                    <label>Old Image</label>
                    <img src="/foodimage/{{$data->image}}" height="200" width="200">
                </div>
                <div>
                    <label>New Image</label>
                    <input style="color: black" type="file" name="image"  required>
                </div>
                <div>
                    <input type="submit" value="Save">
                </div>
            </form>

            <div>

            </div>

            @include('admin.adminscript')
</body>

</html>
