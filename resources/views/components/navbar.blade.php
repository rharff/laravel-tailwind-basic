<div>
    <section class="relative bg-gradient-to-b from-blue-200 to-blue-500 min-h-screen">
      <!-- Background silhouette -->
      <div class="absolute inset-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" 
            class="absolute bottom-0 w-full h-64 text-blue-900/70 fill-current">
          <path d="M0,256L80,245.3C160,235,320,213,480,208C640,203,800,213,960,202.7C1120,192,1280,160,1360,144L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"/>
        </svg>
      </div>

      <!-- Navbar -->
      <nav class="relative z-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between items-center h-16 bg-white/90 backdrop-blur-md rounded-xl px-4 mt-4 shadow-lg">
            
            <!-- Logo -->
            <a href="#" class="flex items-center space-x-2">
              <span class="text-lg font-bold tracking-wide text-gray-800">Logo</span>
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden sm:flex space-x-8 text-gray-700 font-medium">
              <a href="#home" class="hover:text-indigo-600 transition">Home</a>
              <a href="#about" class="hover:text-indigo-600 transition">About Us</a>
              <a href="#services" class="hover:text-indigo-600 transition">Services</a>
              <a href="#featured" class="hover:text-indigo-600 transition">Featured</a>
              <a href="#contact" class="hover:text-indigo-600 transition">Contact Me</a>
            </div>
            
            <!-- Actions -->
            <div class="flex items-center space-x-4">
              <!-- Search -->
              <button class="p-2 rounded-full hover:bg-gray-100 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                </svg>
              </button>
              
              <!-- Login -->
              <button class="p-2 rounded-full hover:bg-gray-100 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-9A2.25 2.25 0 002.25 5.25v13.5A2.25 2.25 0 004.5 21h9a2.25 2.25 0 002.25-2.25V15M18 9l6 3-6 3M6 12h12" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </nav>

      <div class="relative z-10 flex flex-col items-center justify-center text-center text-white mt-24">
        <h1 class="text-4xl sm:text-5xl font-bold drop-shadow-lg">Welcome to My Website</h1>
      </div>
    </section>
</div>