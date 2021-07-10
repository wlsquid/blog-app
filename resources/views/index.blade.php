@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
              <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                 Do you want the secrets
              </h1>
              <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                  Read More
              </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/03/26/09/48/buildings-690364_960_720.jpg" alt="" width="700" aria-hidden="true">
        </div>
        <div class="m-auto sm:m-auto text-left width-4/5 block">
           <h2 class="text-4xl font-extrabold text-gray-600">
             Better UFOS for sale
           </h2>
           <p class="py-8 text-gray-500 text-l">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur culpa quaerat nobis a eveniet quis tempore corrupti laudantium cupiditate repudiandae eius voluptatem quidem enim reiciendis, dolore nulla cumque odio totam?
           </p>
           <p class="font-extrabold text-gray-600 text-l pb-9">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit labore autem ratione aliquam, 
           </p>
           <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
               find out more       
        </a>
        </div>
    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I am an expert UFO mechanic
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            UFO design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            UFO project management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Stategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Artisnal UFO
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s  text-gray-400">
            Blog
        </span>
          <h2 class="text-4xl font-bold py-10">
            Recent Posts
          </h2>
          <p class="m-auto w-4/5 text-gray-500 mb-2">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias ullam facere veniam hic ab eum explicabo, 
              quam quae odio quis nostrum aperiam tenetur aliquid officiis quod facilis laborum nulla harum.
          </p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
         <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
             PHP
            </span>

            <h3 class="text-xl font-bold py-10">
                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum illo odit nemo nihil id excepturi, inventore, consequatur quaerat ab atque eveniet.
                  Cum illum eligendi pariatur adipisci quas error, amet nam.  
            </h3>
            <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 font-extrabold text-xs py-3 px-5 rounded-3xl">
              Find Out More
            </a>
         </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/03/26/09/48/buildings-690364_960_720.jpg" alt="" width="700" aria-hidden="true">
        </div>
    </div>
@endsection