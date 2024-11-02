@extends("layouts.master")

@section("content")
    <div class="container mx-auto">
        <div class="mt-3.5 bg-white dark:bg-[#142736] w-full h-[50px] rounded-[20px] shadow-1 flex justify-between items-center px-4">
            <a href="https://mohamadrezanz.ir" class="text-gray-500">محمدرضا نصراله زاده</a>
            <h1 class="text-gray-500">پروژه ها</h1>
        </div>
        <div class="grid grid-cols-4 mt-4 gap-4">
            <a href="#" class="bg-white shadow-1 p-4 rounded-[20px]">
                <img src="{{ asset("assets/images/accessor.png") }}" alt="" class="w-full object-cover rounded-[10px] overflow-hidden border" loading="lazy">
                <h2 class="mt-2 text-center">سایت اکسسوری و لوازم اکسسور</h2>
            </a>
        </div>
    </div>
@endsection