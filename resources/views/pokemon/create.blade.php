@extends('layouts.base')

@section('content')
<form class="max-w-sm mx-auto" action="{{ url('pokemon') }}" method="POST" enctype="multipart/form-data" >
  @csrf
  <div class="mb-5">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
      <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div class="mb-5">
      <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
      <input type="text" id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div class="mb-5">
      <label for="power" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Power</label>
      <input type="text" id="power" name="power" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <div>

  </div>
   <div class="mb-5">
    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >Image</label>
    <input type="file" name="image" id="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> 
    </div>
    <div class="mb-5">
    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >Image</label>
    <input for="coach_id" name="image" id="coach_id" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> 
<select name="coach_id" id="coach_id">

<option value="">Select a Coach</option>
@foreach ($coaches as $coach)
<option value="{{$coach->id}}">{{$coach->name}}</option>

@endforeach
</select>
    </div>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
  Create Pokemon
</button>
</form>
@endsection


    

