@extends('layouts.base')
@section('title')
Services
@endsection
@section('content')
<div class="container mx-auto">
    <div class="text-5xl font-extrabold text-center">
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
          Services
        </span>
      </div>
    <ul class="block w-11/12 mx-auto my-4" x-data="{selected:null}">
        <li class="flex flex-col align-center">
            <h4 @click="selected !== 0 ? selected = 0 : selected = null"
                class="inline-block px-5 py-3 font-bold text-center text-white rounded-t cursor-pointer bg-gradient-to-r from-green-400 to-blue-500 hover:opacity-75 hover:shadow hover:-mb-3">Marketing</h4>
            <p x-show="selected == 0" class="px-2 py-4 border">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed commodi, quos libero dolorem dolores modi ullam velit vitae, reprehenderit sint harum ad amet ratione quas officia similique iste accusamus ex numquam sapiente aliquid voluptatum assumenda. Iusto rem corrupti quis repudiandae beatae doloremque voluptatum, assumenda ea, temporibus a vitae praesentium cumque.
            </p>
        </li>
        <li class="flex flex-col align-center">
            <h4 @click="selected !== 1 ? selected = 1 : selected = null"
                class="inline-block px-5 py-3 font-bold text-center text-white cursor-pointer bg-gradient-to-r from-green-500 to-blue-600 hover:opacity-75 hover:shadow hover:-mb-3">E-commerce</h4>
            <p x-show="selected == 1" class="px-2 py-4 border">
                 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni necessitatibus illum sapiente, tempora incidunt dolores nisi expedita in tempore nihil aperiam eius ipsum assumenda et, excepturi enim impedit temporibus, reiciendis debitis perspiciatis harum alias. Animi, quae illum, eveniet qui sequi beatae ipsam quidem, recusandae a sunt culpa debitis doloribus praesentium!
            </p>
        </li>
        <li class="flex flex-col align-center">
            <h4 @click="selected !== 2 ? selected = 2 : selected = null"
                :class="{'cursor-pointer px-5 py-3 bg-gradient-to-r from-green-600 to-blue-700 text-white font-bold text-center inline-block hover:opacity-75 hover:shadow hover:-mb-3': true, 'rounded-b': selected != 2}">Digital Solutions</h4>
            <p x-show="selected == 2" :class="{'border py-4 px-2': true, 'rounded-b': selected == 2}">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium quia, maxime architecto dolor perspiciatis eius officia nam pariatur ab repellendus provident iusto aspernatur a sapiente officiis modi? Quam id omnis animi, atque eius vero quos placeat corporis sit perspiciatis aspernatur ipsum minima accusamus illo cumque quod autem cupiditate corrupti quia!
            </p>
        </li>
    </ul>
    <div class="px-8 py-4 my-20 bg-white rounded-lg shadow-lg ">
        <div class="flex justify-center -mt-16 md:justify-end">
          <img class="object-cover w-20 h-20 border-2 border-indigo-500 rounded-full" src="https://images.unsplash.com/photo-1550438496-8c6e269e7886?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80">
        </div>
        <div>
          <h2 class="text-3xl font-semibold text-gray-800">Design Tools</h2>
          <p class="mt-2 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis quos velit eum voluptates laborum minima ut expedita eius, placeat provident id itaque esse eos aliquid amet sapiente dolore aut. Asperiores blanditiis repellendus beatae! Placeat modi voluptatem ipsam quas necessitatibus, dolorem rerum saepe. Nostrum ut ipsum fugit inventore, magni neque animi quod facilis? Quibusdam ipsum alias tenetur temporibus praesentium enim consectetur commodi, animi quaerat earum, perspiciatis cumque eum soluta! Modi, at eligendi non, veritatis ab cupiditate culpa voluptas aut impedit harum sunt consequuntur qui tempore sapiente ea mollitia neque accusantium ullam deleniti dignissimos necessitatibus odio! Necessitatibus aperiam illum molestiae. Molestiae, sapiente!</p>
        </div>
        <div class="flex justify-end mt-4">
          <a href="#" class="text-xl font-medium text-indigo-500">Páginas</a>
        </div>
      </div>
</div>

@endsection
