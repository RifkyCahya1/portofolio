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
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
        <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
      </svg>

      <span class="text-sm font-semibold tracking-widest">Home</span>
    </a>

    <a href="About" class="flex flex-col items-center  {{ Request::is('About') ? 'text-[#CB0001] font-bold border-b-2 border-[#CB0001]' :  'text-[#575757] font-bold hover:text-[#CB0001] transition duration-300' }}">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path fill-rule="evenodd" d="M4.5 3.75a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V6.75a3 3 0 0 0-3-3h-15Zm4.125 3a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm-3.873 8.703a4.126 4.126 0 0 1 7.746 0 .75.75 0 0 1-.351.92 7.47 7.47 0 0 1-3.522.877 7.47 7.47 0 0 1-3.522-.877.75.75 0 0 1-.351-.92ZM15 8.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15ZM14.25 12a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H15a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15Z" clip-rule="evenodd" />
      </svg>

      <span class="text-sm font-semibold tracking-widest">About Me</span>
    </a>

    <a href="Portofolio" class="flex flex-col items-center  {{ Request::is('Portofolio') ? 'text-[#CB0001] font-bold  border-b-2 border-[#CB0001]' :  'text-[#575757] font-bold hover:text-[#CB0001] transition duration-300' }}">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
        <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z" clip-rule="evenodd" />
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