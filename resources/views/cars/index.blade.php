<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="container">
    
<table class="text-center" border="1">
    <thead>
        <th>STT</th>
        <th>Plate Number</th>
        <th>Owner</th>
        <th>Travel Fee</th>
        <th>Plate Image	</th>
        <th></th>
        <th><a href="{{route('car.add')}}">Thêm car</a></th>
    </thead>
     <tbody>
    @foreach ($cars as $item)
 
    <tr>
     <td> {{$item->id}} </td>
     <td> {{$item->plate_number}} </td>
     <td> {{$item->owner}} </td>
     <td> {{$item->travel_fee}} </td>
     <td><img src="{{asset($item->plate_image)}}" alt="" width="100"></td>
     <td> <button> <a href="{{ route('car.edit', ['id'=>$item->id]) }}"> Edit</a></button> </td>
     <td> <button> <a href="{{ route('car.remove', ['id'=>$item->id]) }}"> Delete</a></button> </td>
    </tr>
         
    
 
    @endforeach
    
 </tbody>
 </table>
</div>