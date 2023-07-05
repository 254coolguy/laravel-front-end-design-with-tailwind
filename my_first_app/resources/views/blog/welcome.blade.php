<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Landing page</title>
    @vite('resources/css/app.css')

</head>

<body>

    <!-- Navbar -->
    <nav class="relative container mx-auto p-6 ">
        <!-- flex container-->
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="pt-2">
                <img src="{{ asset('images/logo.svg') }}" alt="">
            </div>
            <!-- menu items-->
            <div class="hidden space-x-6 md:flex">
                <a href="#" class=" hover:text-darkGrayishBlue">Pricing</a>
                <a href="#" class=" hover:text-darkGrayishBlue">Product</a>
                <a href="#"class=" hover:text-darkGrayishBlue">About Us</a>
                <a href="#"class=" hover:text-darkGrayishBlue">Careers</a>
                <a href="#"class=" hover:text-darkGrayishBlue">Community</a>
            </div>
            <!-- button -->
            <a href="#"
                class="hidden md:block p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">
                Get started</a>
               <!-- Humburger Icon-->
               <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
               </button>
        </div>
        <!--Mobile Menu-->
        <div class="md:hidden">
            <div id="menu" class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                <a href="#">Pricing</a>
                <a href="#">Product</a>
                <a href="#">About us</a>
                <a href="#">Careers</a>
                <a href="#">Community</a>
            </div>
        </div>
    </nav>
    <!-- Hero section -->
    <section id="hero">
        <!--Flex Container -->
        <div
            class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0  md:flex-row">
            <!-- Left item-->
            <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
                <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                    Bring everyone together to build better projects
                </h1>
                <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                    Manage makes it simple for software teams to plan day-to-day tasks while keeping the larger team
                    goals in view
                </p>
                <div class="flex justify-center md:justify-start">
                    <a href="#"
                        class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">
                        Get started</a>

                </div>
            </div>
            <!-- Image-->
            <div class="md:w-1/2">
                <img src="{{ asset('images/illustration-intro.svg') }}" alt="">
            </div>
        </div>
    </section>
    <!-- Features Section -->
    <section id="features">
        <!-- Flex Container-->
        <div class="container flex flex-col px-4 mx-auto space-y-12 md:space-y-0 md:flex-row">
            <!-- whats different-->
            <div class="flex flex-col space-y-12 md:w-1/2">
                <h2 class="max-w-md text-4xl font-bold text-center md:text-left">
                    What's different about manage
                </h2>
                <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                    Manage provides all the functionlity your team needs, without the complexity. Our software is
                    tailor-made for modern digital products teams.
                </p>
            </div>
            <!-- Numbered Lists-->
            <div class="flrx flex-col space-y-8 md:w-1/2">
                <!-- List Item 1-->
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <!-- heading-->
                    <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed">
                                01
                            </div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden">
                                Track Company wide progress
                            </h3>
                        </div>
                    </div>
                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block">
                            Track company-wide progress
                        </h3>
                        <p class="text-darkGrayishBlue">
                            See how your day-to-day tasks fit into the wider vision. Go from tracking progress at thr
                            milestone level all the way done to the smallest of details. Never lose sight of the bigger
                            picture
                        </p>
                    </div>
                </div>
                <!-- List Item 2-->
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <!-- heading-->
                    <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed">
                                02
                            </div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden">
                                Advanced built in reports
                            </h3>
                        </div>
                    </div>
                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block">
                            Advanced built in reports
                        </h3>
                        <p class="text-darkGrayishBlue">
                            Set internal delivery estimates and track progress towards company goals. Our customisable
                            dashboard helps you build out the reports you need to keep key stakeholders informed
                        </p>
                    </div>
                </div>
                <!-- List Item 3-->
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <!-- heading-->
                    <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed">
                                03
                            </div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden">
                                Everything you need in one place
                            </h3>
                        </div>
                    </div>
                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block">
                            Everything you need in one place
                        </h3>
                        <p class="text-darkGrayishBlue">
                            Stop jumping from one service to another to communicate, store files,track task and share
                            documents. Manage offers on all-in-one items productivity solutions
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials">
        <!-- Container to heading and testimonial block -->
        <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
            <!-- Heading -->
            <h2 class="text-4xl font-bold text-center">
                What's Different About Manage
            </h2>
            <!-- Testimonials Container -->
            <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
                <!-- Testimonial 1-->
                <div class="flex flex-col items-center p-c space-y-6 rounded-lg bg-veryLightGray md:w-1/3">
                    <img src="{{ asset('images/avatar-anisha.png') }}" class=" w-16 -mt-14"alt="">
                    <h5 class="text-lg font-bold">
                        Anisha li
                    </h5>
                    <p class="text-sm text-darkGrayishBlue">Manage has supercharged our team's workflow. The ability to maintan visibility on larger milestone at all times</p>
                </div>
                 <!-- Testimonial 2-->
                 <div class=" hidden flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3">
                    <img src="{{ asset('images/avatar-ali.png') }}" class=" w-16 -mt-14"alt="">
                    <h5 class="text-lg font-bold">
                        Ali Bravo
                    </h5>
                    <p class="text-sm text-darkGrayishBlue">Manage has supercharged our team's workflow. The ability to maintan visibility on larger milestone at all times</p>
                </div>
                 <!-- Testimonial 3-->
                 <div class="hidden flex-col items-center p-c space-y-6 rounded-lg bg-veryLightGray md:flex md:w-1/3">
                    <img src="{{ asset('images/avatar-richard.png') }}" class=" w-16 -mt-14"alt="">
                    <h5 class="text-lg font-bold">
                        Richard Watts
                    </h5>
                    <p class="text-sm text-darkGrayishBlue">We have been able to cancle so many other subscriptions since using manage, there is no more cross-channel confusion and everyone is much more focused</p>
                </div>

            </div>
            <!--button-->
            <div class="my-16">
                <a href="#"
                class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">
                Get started</a>
            </div>
        </div>

    </section>
    <!-- CTA section -->
    <section id="cta" class="bg-brightRed">
        <!--flex container-->
        <div class="container flex flex-col items-center justify-between px6 py-24 mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0">
            <!--Heading-->
            <h2 class="text-5xl font-bold leading-tight text-center text-white md:text-4xl md:max-w-xl md:text-left">
                Simplify how your team works today
            </h2>
            <!--button -->
            <div>
                <a href="#"
                class="p-3 px-6 pt-2 text-white bg-black rounded-full baseline hover:bg-brightRedLight">
                Get started</a>
            </div>
        </div>
    </section>
    <!--footer-->
    <footer class="bg-veryDarkBlue">
        <!-- Flex Container -->
        <div class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
            <!-- Logo and social links container-->
            <div class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
                <!-- logo -->
                <div class="mx-auto my text-center text-white md:hidden">
                    Copyright &copy; 2022, All Rights Reserved
                </div>
                <div>
                    <img src=" {{ asset('images/logo.svg') }}" class="h-8"alt="">
                </div>
                <!--social links-->
                <div class="flex justify-center space-x-4">
                    <!--link1-->
                    <a href="#">
                        <img src=" {{ asset('images/icon-facebook.svg') }}" alt="" class="h-8">
                    </a>
                    <!--link2-->
                    <a href="#">
                        <img src=" {{ asset('images/icon-youtube.svg') }}" alt="" class="h-8">
                    </a>
                    <!--link3-->
                    <a href="#">
                        <img src=" {{ asset('images/icon-twitter.svg') }}" alt="" class="h-8">
                    </a>
                    <!--link1-->
                    <a href="#">
                        <img src=" {{ asset('images/icon-pinterest.svg') }}" alt="" class="h-8">
                    </a>
                    <!--link1-->
                    <a href="#">
                        <img src=" {{ asset('images/icon-instagram.svg') }}" alt="" class="h-8">
                    </a>
                </div>
            </div>
            <!-- List container-->
            <div class="flex justify-around space-x-32">
                <div class="flex flex-col space-y-3 text-white">
                    <a href="#" class="hover:text-brightRed">Home</a>
                    <a href="#" class="hover:text-brightRed">Pricing</a>
                    <a href="#" class="hover:text-brightRed">Product</a>
                    <a href="#" class="hover:text-brightRed">About</a>
                </div>
                <div class="flex flex-col space-y-3 text-white">
                    <a href="#" class="hover:text-brightRed">Careers</a>
                    <a href="#" class="hover:text-brightRed">Community</a>
                    <a href="#" class="hover:text-brightRed">Privacy policy</a>    
                </div>
            </div>
            <!--input container-->
            <div class="flex flex-col justify-between">
                <form action="">
                    <div class="flex space-x-3">
                        <input type="text" class="flex-1px-4 rounded-full w-4/5 focus:outline-none" placeholder="Updated in youy inbox"/>
                        <button class="px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none"> G0
                        </button>
                    </div>
                </form>
                <div class="hidden text-white md:block">
                    Copyright &copy;2022, All Rights Reserved 
                </div>
            </div>
        </div>

    </footer>
    <script src="{{'JS/humburgerscript.js' }}"></script>
</body>
</html>
