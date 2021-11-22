<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="container">
    
<table class="text-center" border="1">
    <thead>
        <th>STT</th>
        <th>Name</th>
        <th>Car</th>
        <th>Travel Time</th>
        <th>Avatar 	</th>
        <th></th>
        <th><a href="{{route('passenger.add')}}">Thêm passenger</a></th>
    </thead>
     <tbody>
    @foreach ($passengers as $item)
 
    <tr>
     <td> {{$item->id}} </td>
     <td> {{$item->name}} </td>
     <td>
        <a href="{{route('car.index', ['id' => $item->car->id])}}">{{$item->car->owner}}</a>
    </td>
     <td> {{$item->travel_time}} </td>
     <td> {{$item->avatar}} </td>
     <td> <button> <a href=""> Edit</a></button> </td>
     <td> <button> <a href=""> Delete</a></button> </td>
    </tr>
         
    
 
    @endforeach
    
 </tbody>
 </table>
</div>