<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<nav class="bg-white h-20 flex items-center justify-between px-4 2xl:px-40 xl:px-40 lg:px-20 md:px-12 sm:px-4 flex-wrap" x-data="{ open: false }">

  <div class="flex items-center">
    <a href="{{ route('inicio') }}">
      <img src="{{ asset('images/logocaritas.png') }}" alt="Logo" class="h-11">
    </a>
  </div>

  <ul class="flex items-center sm:space-x-0 sm:space-x-0 lg:space-x-4 xl:space-x-4 2xl:space-x-6 mt-0">
    <li class="py-0.5">
      <a href="{{ route('inicio') }}" class="hidden 2xl:block lg:block xl:block md:block 2xl:text-sm sm:hidden sm:px-2 sm:text-xs py-7 font-medium border-b-2 text-gray-700 font-semibold duration-500 ease-in-out block {{ request()->routeIs('inicio') ? 'border-b-2 border-red-600 text-red-600' : 'border-b-2 border-transparent text-black' }} hover:text-red-600 hover:border-b-2 hover:border-red-600">Inicio</a>
    </li>
    <li class="py-0.5">
      <a href="{{ route('about') }}" class="hidden 2xl:block lg:block xl:block md:block 2xl:text-sm sm:hidden sm:px-2 sm:text-xs py-7 font-medium border-b-2 text-gray-700 font-semibold duration-500 ease-in-out block {{ request()->routeIs('about') ? 'border-b-2 border-red-600 text-red-600' : 'border-b-2 border-transparent text-black' }} hover:text-red-600 hover:border-b-2 hover:border-red-600">Qué hacemos</a>
    </li>
    <li class="py-0.5">
      <a href="{{ route('servicio') }}" class="hidden 2xl:block lg:block xl:block md:block 2xl:text-sm sm:hidden sm:px-2 sm:text-xs py-7 font-medium border-b-2 text-gray-700 font-semibold duration-500 ease-in-out block {{ request()->routeIs('servicios') ? 'border-b-2 border-red-600 text-red-600' : 'border-b-2 border-transparent text-black' }} hover:text-red-600 hover:border-b-2 hover:border-red-600">Servicios</a>
    </li>
    <li class="py-0.5">
      <a href="{{ route('participa') }}" class="hidden 2xl:block lg:block xl:block md:block 2xl:text-sm sm:hidden sm:px-2 sm:text-xs py-7 font-medium border-b-2 text-gray-700 font-semibold duration-500 ease-in-out block {{ request()->routeIs('participa') ? 'border-b-2 border-red-600 text-red-600' : 'border-b-2 border-transparent text-black' }} hover:text-red-600 hover:border-b-2 hover:border-red-600">Participa</a>
    </li>
    <li class="py-0.5">
      <a href="{{ route('noticia') }}" class="hidden 2xl:block lg:block xl:block md:block 2xl:text-sm sm:hidden sm:px-2 sm:text-xs py-7 font-medium border-b-2 text-gray-700 font-semibold duration-500 ease-in-out block {{ request()->routeIs('noticias') ? 'border-b-2 border-red-600 text-red-600' : 'border-b-2 border-transparent text-black' }} hover:text-red-600 hover:border-b-2 hover:border-red-600">Noticias</a>
    </li>
  </ul>

  <div class="flex items-center">
    <a href="{{ route('donar') }}" class="text-white bg-red-600 rounded-full px-5 py-3 font-bold text-xs transform hover:-translate-y-2 transition duration-500 ease-in-out block" onmouseover="changeIcon(this)" onmouseout="changeIcon(this)">
    <i class="fas fa-heart text-white icon-cta"></i> DONAR
    </a>
  </div>
</nav>

