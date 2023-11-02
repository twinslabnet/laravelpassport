<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="p-8">
            <div class="card w-1/2 bg-base-100 shadow-xl m-2">
                <div class="card-body">
                       <h2 class="card-title">Shoes</h2> 
                       <figure><img src="https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/99486859-0ff3-46b4-949b-2d16af2ad421/custom-nike-dunk-high-by-you-shoes.png" alt=""></figure>
                       <p>If a dog chews shoes whose shoes does he coose?</p>
                </div>
            </div>
            <div class="card w-fit bg-base-100 shadow-xl m-5">
                <div class="card-body">
                       <h2 class="card-title">Shoes</h2> 
                       <img src="https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/99486859-0ff3-46b4-949b-2d16af2ad421/custom-nike-dunk-high-by-you-shoes.png" alt="">
                       <p>If a dog chews shoes whose shoes does he coose?</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
