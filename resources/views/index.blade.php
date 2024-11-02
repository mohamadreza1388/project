@extends("layouts.master")

@section("content")
    <div class="container max-w-[95%] mx-auto">
        <div class="mt-3.5 bg-white dark:bg-[#142736] w-full h-[50px] rounded-[20px] shadow-1 flex justify-between items-center px-4">
            <a href="https://mohamadrezanz.ir" class="text-gray-500">محمدرضا نصراله زاده</a>
            <h1 class="text-gray-500">پروژه ها</h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-4 gap-4">
            <a href="/accessory" class="bg-white shadow-1 p-4 rounded-[20px]">
                <img src="{{ asset("assets/images/accessor.png") }}" alt=""
                     class="w-full object-cover rounded-[10px] overflow-hidden border" loading="lazy">
                <h2 class="mt-2 text-center">سایت اکسسوری و لوازم اکسسور</h2>
            </a>
            <a href="/travel" class="bg-white shadow-1 p-4 rounded-[20px]">
                <img src="{{ asset("assets/images/travel.png") }}" alt=""
                     class="w-full object-cover rounded-[10px] overflow-hidden border" loading="lazy">
                <h2 class="mt-2 text-center">سایت مختص سفر و مسافرت</h2>
            </a>
            <a href="/mahdis" class="bg-white shadow-1 p-4 rounded-[20px]">
                <img src="{{ asset("assets/images/mahdis.png") }}" alt=""
                     class="w-full object-cover rounded-[10px] overflow-hidden border" loading="lazy">
                <h2 class="mt-2 text-center">سایت مزور و خرازی ماهدیس</h2>
            </a>
            <a href="/coffee" class="bg-white shadow-1 p-4 rounded-[20px]">
                <img src="{{ asset("assets/images/coffee.png") }}" alt=""
                     class="w-full object-cover rounded-[10px] overflow-hidden border" loading="lazy">
                <h2 class="mt-2 text-center">سایت فروش قهوه</h2>
            </a>
        </div>
    </div>
@endsection