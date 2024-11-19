<nav class="drop-shadow-lg bg-white p-5 hidden md:flex">
  <div class="container mx-auto flex items-center justify-between">
    <div class="flex items-center">
      <a href="/">
        <img src="./img/Logo.png" alt="Logo" class="h-12 w-18 mr-4">
      </a>
    </div>
    <ul class="flex space-x-4">
      <li>
        <a href="/" class="{{ Request::is('/') ? 'text-[#CB0001] font-bold border-b-2 border-[#CB0001] ' : 'text-[#575757] font-bold hover:text-[#CB0001] transition duration-300' }}">Home</a>
      </li>
      <li>
        <a href="About" class="{{ Request::is('About') ? 'text-[#CB0001] font-bold  border-b-2 border-[#CB0001]' : 'text-[#575757] font-bold hover:text-[#CB0001] transition duration-300' }}">About Me</a>
      </li>
      <li>
        <a href="Portofolio" class="{{ Request::is('Portofolio') ? 'text-[#CB0001] font-bold  border-b-2 border-[#CB0001]' : 'text-[#575757] font-bold hover:text-[#CB0001] transition duration-300' }}">Portfolio</a>
      </li>
      <li>
        <a href="Course" class="{{ Request::is('Course') ? 'text-[#CB0001] font-bold  border-b-2 border-[#CB0001]' : 'text-[#575757] font-bold hover:text-[#CB0001] transition duration-300' }}">Course</a>
      </li>
    </ul>
  </div>
</nav>

<nav class="bg-white text-black fixed bottom-0 inset-x-0 p-4 z-50 md:hidden shadow-[0_-4px_6px_rgba(0,0,0,0.2)]">
  <div class="container mx-auto flex justify-around items-center space-x-6">
    <a href="/" class="flex flex-col items-center {{ Request::is('/') ? 'text-[#CB0001] font-bold border-b-2 border-[#CB0001]' : 'text-[#575757] font-bold hover:text-[#CB0001] transition duration-300' }}">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
      </svg>
      <span class="text-sm font-semibold tracking-widest">Home</span>
    </a>

    <a href="About" class="flex flex-col items-center  {{ Request::is('About') ? 'text-[#CB0001] font-bold border-b-2 border-[#CB0001]' :  'text-[#575757] font-bold hover:text-[#CB0001] transition duration-300' }}">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
      </svg>
      <span class="text-sm font-semibold tracking-widest">About Me</span>
    </a>

    <a href="Portofolio" class="flex flex-col items-center  {{ Request::is('Portofolio') ? 'text-[#CB0001] font-bold  border-b-2 border-[#CB0001]' :  'text-[#575757] font-bold hover:text-[#CB0001] transition duration-300' }}">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
      </svg>
      <span class="text-sm font-semibold tracking-widest">Portofolio</span>
    </a>

    <a href="Course" class="flex flex-col items-center  {{ Request::is('Course') ? 'text-[#CB0001] font-bold  border-b-2 border-[#CB0001]' :  'text-[#575757] font-bold hover:text-[#CB0001] transition duration-300' }}">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
        <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
        <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
      </svg>
      <span class="text-sm font-semibold tracking-widest">Course</span>
    </a>
  </div>
</nav>