<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
    rel="stylesheet"
    />
</head>
<body class="antialiased" x-data="{ isOpen : false}">
     <!-- header -->
    <header class="header my-8">
        <!-- container -->
        <div class="container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
            <!-- header wrapper -->
                <div class="header-wrapper flex items-center justify-between">

                    <!-- header logo -->
                    <div class="header-logo">
                        <h1 class="font-semibold text-black leading-relaxed"><a href="">CMS</a></h1>
                    </div>

                    <!-- mobile toggle -->
                    <div class="toggle md:hidden">
                        <button @click=" isOpen = true" @keydown.escape=" isOpen = false">
                            <svg 
                                class="h-6 w-6 fill-current text-black"
                                fill="none" stroke-linecap="round" 
                                stroke-linejoin="round" stroke-width="2" 
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Navbar -->
                    <navbar class="navbar hidden md:block">
                        <ul class="flex space-x-8 text-sm font-semibold">
                            <li><a href="./success.php" class="hover:text-indigo-500">Success</a></li>
                            <li><a href="./fir.php" class="hover:text-indigo-500">FIR</a></li>
                            <li><a href="./visitor.php" class="hover:text-indigo-500">Visitor</a></li>
                            <li><a href="./login.php" class="hover:text-indigo-500">Login</a></li>
                            <li><a href="./officer-dashboard.php" class="hover:text-indigo-500">Officer Dashboard</a></li>
                        </ul>
                    </navbar>

                </div>
        </div>

    </header><!-- end header -->
    <!-- mobile navbar -->
    <div class="mobile-navbar">         

        <!-- navbar wrapper -->
        <div class="navbar-wrapper fixed top-0 left-0 h-full bg-white z-30 w-64 shadow-lg p-5" 
            x-show="isOpen" 
            @click.away=" isOpen = false"
            x-transition:enter="transition duration-300 -ml-64" 
            x-transition:enter-start=""
            x-transition:enter-end="transform translate-x-64"
            x-transition:leave="transition duration-300"
            x-transition:enter-start=""
            x-transition:leave-end="transform -translate-x-64">
            <div class="close">
                <button class="absolute top-0 right-0 mt-4 mr-4" @click=" isOpen = false">
                    <svg 
                        class="w-6 h-6"
                        fill="none" stroke-linecap="round" 
                        stroke-linejoin="round" stroke-width="2" 
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                </button>
            </div>
            <ul class="divide-y">
                <li><a href="./success.php" class="my-4 inline-block active font-bold">Success</a></li>
                <li><a href="./fir.php" class="my-4 inline-block active font-bold">FIR</a></li>
                <li><a href="./visitor.php" class="my-4 inline-block active font-bold">Visitor</a></li>
                <li><a href="./login.php" class="my-4 inline-block active font-bold">Login</a></li>
                <li><a href="./officer-dashboard.php" class="my-4 inline-block active font-bold">Officer Dashboard</a></li>
            </ul>
        </div>
    </div><!-- end mobile navbar -->