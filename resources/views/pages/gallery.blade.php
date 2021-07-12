@extends('layouts.base')
@section('title')
Gallery
@endsection
@section('content')
<div class="container mx-auto mb-5">
    <section class="flex flex-col items-center justify-center" x-data="{ tab: 'all' }">

          <div class="flex flex-row items-center justify-between mt-4 mb-4">

              <a class="px-6 py-1 mr-4 text-white rounded-lg bg-gradient-to-r from-green-400 to-blue-500" href="#" @click.prevent="tab = 'all'" :class="{ 'active' : tab === 'all' }">All</a>


              <a class="px-6 py-1 mr-4 text-white rounded-lg bg-gradient-to-r from-green-400 to-blue-500" href="#" @click.prevent="tab = 'cats'" :class="{ 'active' : tab === 'cats' }">Cats</a>


              <a class="px-6 py-1 mr-4 text-white rounded-lg bg-gradient-to-r from-green-400 to-blue-500" href="#" @click.prevent="tab = 'elefants'" :class="{ 'active' : tab === 'elefants' }">Elefants</a>

          </div>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 ">
          <div class="" x-show="tab === 'cats' || tab === 'all'"><img src="https://images.unsplash.com/photo-1587351263245-0c0721f5d97d?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM3fEpwZzZLaWRsLUhrfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Running Kitty" title="Running Kitty"></div>
          <div class="" x-show="tab === 'elefants' || tab === 'all'"><img src="https://images.unsplash.com/photo-1563994798145-aac79dece602?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=755&q=80" alt="Tiny puppy" title="Tiny puppy"></div>
          <div class="" x-show="tab === 'cats' || tab === 'all'"><img src="https://images.unsplash.com/photo-1557166984-b00337652c94?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNhdHN8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Shocked Kitty" title="Shocked Kitty"></div>
          <div class="" x-show="tab === 'elefants' || tab === 'all'"><img src="https://images.unsplash.com/photo-1562001136-cba835586d96?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8ZWxlZmFudHxlbnwwfDB8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Jumping puppy" title="Jumping puppy"></div>
          <div class="" x-show="tab === 'cats' || tab === 'all'"><img src="https://images.unsplash.com/photo-1488740304459-45c4277e7daf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjB8fGNhdHN8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Sleeping Kitty" title="Sleeping Kitty"></div>
          <div class="" x-show="tab === 'elefants' || tab === 'all'"><img src="https://images.unsplash.com/photo-1612357437673-7f14f978a916?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGVsZWZhbnR8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Happy Puppy" title="Happy Puppy"></div>
          <div class="" x-show="tab === 'cats' || tab === 'all'"><img src="https://images.unsplash.com/photo-1587351263245-0c0721f5d97d?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM3fEpwZzZLaWRsLUhrfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Running Kitty" title="Running Kitty"></div>
          <div class="" x-show="tab === 'elefants' || tab === 'all'"><img src="https://images.unsplash.com/photo-1563994798145-aac79dece602?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=755&q=80" alt="Tiny puppy" title="Tiny puppy"></div>
          <div class="" x-show="tab === 'cats' || tab === 'all'"><img src="https://images.unsplash.com/photo-1557166984-b00337652c94?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGNhdHN8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Shocked Kitty" title="Shocked Kitty"></div>
          <div class="" x-show="tab === 'elefants' || tab === 'all'"><img src="https://images.unsplash.com/photo-1562001136-cba835586d96?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8ZWxlZmFudHxlbnwwfDB8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Jumping puppy" title="Jumping puppy"></div>
          <div class="" x-show="tab === 'cats' || tab === 'all'"><img src="https://images.unsplash.com/photo-1488740304459-45c4277e7daf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjB8fGNhdHN8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Sleeping Kitty" title="Sleeping Kitty"></div>
          <div class="" x-show="tab === 'elefants' || tab === 'all'"><img src="https://images.unsplash.com/photo-1612357437673-7f14f978a916?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGVsZWZhbnR8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Happy Puppy" title="Happy Puppy"></div>
        </div>
      </section>

</div>
@endsection
