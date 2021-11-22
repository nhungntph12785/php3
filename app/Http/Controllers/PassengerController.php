<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PassengerController extends Controller
{
    public function index(){
        $passengers = Passenger::all();
    return view('passengers.index', [
        'passengers' => $passengers
    ]);
    }
    public function addForm(){
        $cars = Passenger::all();
        return view('car.add', compact('cars'));
    }

    public function saveAdd(Request $request){
        $model = new Passenger();
        if($request->hasFile('image')){
            $imgPath = $request->file('plate_image')->store('public/passengers');
            $imgPath = str_replace('public/', 'storage/', $imgPath);
            $model->plate_image = $imgPath;
        }
        
        $model->fill($request->all());
        $model->save();
        return redirect(route('passenger.index'));
    }

    public function remove($id)
    {
        $model=Car::find($id);
        $pros=Passenger::where('car_id','=',$id)->get();
        foreach($pros as $key=>$value){
        $value->delete();
        }
        if(!empty($model->place_image)){
            $imgPath = str_replace('storage/', 'public/', $model->place_image);
            Storage::delete($imgPath);
        }
        $model->delete(); 
        Car::destroy($id);  
        return redirect(route('car.index'));
    }
    public function editForm($id)
    {
        $car = Car::find($id);
        
        if (!$car) {
            return back();
        }
        
        return view(
            'cars.edit',
            compact('car')
        );
    }
    public function saveEdit(Request $request,$id)
    {   
        $model = Car::find($id);

        if (!$model) {
            return back();
        }
        
        if($request->hasFile('place_image')){
            $oldImg = str_replace('storage/', 'public/', $model->place_image);
            Storage::delete($oldImg);

            $imgPath = $request->file('place_image')->store('public/cars');
            $imgPath = str_replace('public/', 'storage/', $imgPath);
            $model->place_image = $imgPath;
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('car.index'));
    }
}



