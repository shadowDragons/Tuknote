<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 17-12-27
 * Time: 下午5:54
 */

namespace App\Http\Controllers;


use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function createCar(Request $request)
    {
        $car = Car::create($request->all());
        return response()->json($car);
    }

    public function updateCar(Request $request, $id)
    {
        $car = Car::find($id);
        $car->make = $request->input('make');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->save();

        return response()->json($car);
    }

    public function deleteCar($id)
    {
        $car = Car::find($id);
        $car->delete();

        return response()->json('删除成功');
    }

    public function index()
    {
        $cars = Car::all();
        return response()->json($cars);
    }
}