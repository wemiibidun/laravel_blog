@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="text-blue-500 text-5xl uppercase font-bold text-shadow-md pb-14">
                Laravel CRUD Blog by Wemi
            </h1>

            <a href="/blog"
            class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                Read More
            </a>

        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2015/07/19/10/00/school-work-851328_1280.jpg" width="700" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
             Step by Step to being a Full Stack Developer
        </h2>

        <p class="py-8 text-gray-500 text-s">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident error ipsa, assumenda, quos repellat eum quo id, esse neque nulla maxime officiis?
        </p>

        <p class="font-extrabold text-gray-600 text-s pb-9">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident error ipsa, assumenda, quos repellat eum quo id, esse neque nulla maxime officiis?
        </p>

        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find Out More
        </a>
        
    </div>
</div>

<div class="text-center p-15 bg-gray-800 text-white w-4/5 m-auto">
    <h2 class="text-2xl pb-5 text-l">
        I'm an expert in...
    </h2>

    <span class="font-extrabold block text-4xl py-1">React</span>
    <span class="font-extrabold block text-4xl py-1">Javascript</span>
    <span class="font-extrabold block text-4xl py-1">Technical Writing</span>
    <span class="font-extrabold block text-4xl py-1">UI/UX Design</span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">Blog</span>
    <h2 class="text-4xl font-bold py-10">Recent Posts</h2>
    <p class="m-auto w-4/5 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolore provident laudantium porro architecto culpa excepturi laborum facilis odit voluptate.</p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block ">
            <span class="uppercase text-xs">PHP</span>
            
            <h3 class="text-xl font-bold py-10"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore quidem dolorem pariatur sint eligendi voluptate facilis repellendus provident dolores! Ratione, ad fugit repellendus veritatis molestias magnam reiciendis impedit magni ipsa.</h3>
            
            <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Find Out More</a>
        </div>
    </div>
    
    <div>
        <img src="https://cdn.pixabay.com/photo/2015/07/19/10/00/school-work-851328_1280.jpg" width="700" alt="">
    
    </div>
</div>


@endsection