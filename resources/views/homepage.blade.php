@include('head')
@include('header')
@include('sidebar')

<body>
    <div class="pt-p-header pl-p-sidebar">
        <div class="flex bg-[#D6D6FD] justify-between  px-14">
            <!-- Head Main -->
            <div class="mt-7 gap-2 ps-[60px]">
                <div class="grid gap-6">
                    <div class="font-semibold text-[2rem] text-[#22216D] min-w-fit">
                        Người đồng hành 
                    </div>

                    <div class="grid gap-8">
                        <div class="flex gap-6 text-base items-center">
                            <img class="h-12 w-12 my-auto" src="../img/Circle.png" alt="chevron right" />
                            <span class="font-normal text-[#44444F]">Gặp gỡ và chia sẻ kinh nghiệm cá nhân, những trải
                                <br>
                                nghiệm hoặc những
                                câu chuyện hay.</span>
                        </div>

                        <div class="flex gap-6 text-base items-center ">
                            <img class="h-12 w-12 my-auto" src="../img/Circle.png" alt="chevron right" />
                            <span class="font-normal text-[#44444F]">San sẻ kỹ năng và kiến thức cho mọi người.</span>
                        </div>


                        <div class="flex gap-6 text-base items-center">
                            <img class="h-12 w-12 my-auto" src="../img/Circle.png" alt="chevron right" />
                            <span class="font-normal text-[#44444F]">Truyền cảm hứng và động lực cho những thành viên
                                <br>
                                YOUTH+ khác!</span>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <button
                            class="font-semibold text-base py-2.5 px-4 text-primary border-primary border-[1px] rounded-[0.625rem] max-h-11 flex items-center min-w-fit hover:text-white hover:bg-primary">
                            Đăng ký làm mentor
                        </button>

                        <button 
                            class="font-semibold text-base py-2.5 px-4 text-primary border-primary border-[1px] rounded-[0.625rem] max-h-11 flex items-center min-w-fit hover:text-white hover:bg-primary">
                            Tìm kiếm mentors
                        </button>
                    </div>
                </div>
            </div>

            <!-- Image Homepage -->
            <div class="pt-8 overflow-hidden min-w-fit max-lg:hidden">
                <img class="h-[30rem]" src="../img/home-banner.png" alt="chevron right" />
            </div>
        </div>

        <!-- List Button -->
        <div class="bg-[#F6F6FF] px-14">            
            <div class="flex justify-between items-center pt-8">
                <div class="font-medium grid gap-2 ps-[60px]">
                        <span class="text-xl">
                            Khám phá những điều thú vị cùng YOUTH+
                        </span>
                        <h2 class="text-sm font-normal text-[#696974]">
                            Gặp gỡ 1-1 với người bạn thú vị và sẵn lòng sẻ chia mọi điều.
                        </h2>
                    </div>
                </div>

                <div class="py-8 flex items-center gap-3">
                    <button class="w-[30px] h-[30px] shadow-md flex items-center justify-center bg-white rounded-full text-center">
                        <svg width="20" height="20" viewBox="0 0 26 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.2421 18.4666C17.8539 19.0252 17.8971 19.974 17.3385 20.5857C16.7799 21.1975 15.8312 21.2407 15.2194 20.6821L7.48708 13.6225C6.83734 13.0293 6.8353 12.0069 7.48267 11.4111L15.1789 4.32785C15.7885 3.76684 16.7374 3.80621 17.2984 4.41577C17.8594 5.02533 17.8201 5.97426 17.2105 6.53527L10.7183 12.5103L17.2421 18.4666Z"
                                fill="#B5B5BE" />
                        </svg>
                    </button>
                        
                    <div  class="w-full px-[16px] gap-5 grid lg:grid-cols-6 md:grid-cols-2 items-center justify-between">
                    <button class="gap-3 p-3 bg-[#D6D6FD] hover:bg-[#22216D] text-[#22216D]  hover:text-white rounded-md flex items-center min-w-fit">
                        <svg width="36" height="32" viewBox="0 0 45 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M44.762 39.8181L0.183594 37.9403L24.0968 0.182129L44.762 39.8181Z" fill="#F4A076"
                                stroke="#22216D" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M0.183594 37.9403L21.2985 26.8794L44.7627 39.8181L0.183594 37.9403Z" fill="#DB7446"
                                stroke="#22216D" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.2963 26.8794L24.0946 0.182129L0.183594 37.9403L21.2963 26.8794Z" fill="#FFCAB3"
                                stroke="#22216D" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="font-medium text-sm">Business</span>
                    </button>

                    <button class="gap-3 p-3 bg-[#D6D6FD] hover:bg-[#22216D] text-[#22216D]  hover:text-white rounded-md flex items-center min-w-fit">
                        <svg width="32" height="32" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.9439 40.0012C31.99 40.0012 40.9445 31.0466 40.9445 20.0006C40.9445 8.95457 31.99 0 20.9439 0C9.89793 0 0.943359 8.95457 0.943359 20.0006C0.943359 31.0466 9.89793 40.0012 20.9439 40.0012Z"
                                fill="url(#paint0_linear_5502_59900)" />
                            <path opacity="0.7"
                                d="M20.9439 40.0012C31.99 40.0012 40.9445 31.0466 40.9445 20.0006C40.9445 8.95457 31.99 0 20.9439 0C9.89793 0 0.943359 8.95457 0.943359 20.0006C0.943359 31.0466 9.89793 40.0012 20.9439 40.0012Z"
                                fill="url(#paint1_radial_5502_59900)" />
                            <defs>
                                <linearGradient id="paint0_linear_5502_59900" x1="0.943359" y1="20.0006" x2="40.9445"
                                    y2="20.0006" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.011" stop-color="#7EEDBE" />
                                    <stop offset="0.121" stop-color="#6FDBB9" />
                                    <stop offset="0.356" stop-color="#56BDB0" />
                                    <stop offset="0.584" stop-color="#43A6AA" />
                                    <stop offset="0.803" stop-color="#3899A6" />
                                    <stop offset="1" stop-color="#3595A5" />
                                </linearGradient>
                                <radialGradient id="paint1_radial_5502_59900" cx="0" cy="0" r="1"
                                    gradientUnits="userSpaceOnUse"
                                    gradientTransform="translate(12.1037 6.56019) scale(41.8012)">
                                    <stop offset="0.011" stop-color="#B3FFDC" />
                                    <stop offset="0.094" stop-color="#A0EFD3" stop-opacity="0.851" />
                                    <stop offset="0.232" stop-color="#84D7C7" stop-opacity="0.627" />
                                    <stop offset="0.37" stop-color="#6CC3BD" stop-opacity="0.435" />
                                    <stop offset="0.506" stop-color="#58B2B4" stop-opacity="0.278" />
                                    <stop offset="0.638" stop-color="#48A5AD" stop-opacity="0.157" />
                                    <stop offset="0.767" stop-color="#3D9CA8" stop-opacity="0.071" />
                                    <stop offset="0.89" stop-color="#3796A5" stop-opacity="0.02" />
                                    <stop offset="1" stop-color="#3595A5" stop-opacity="0" />
                                </radialGradient>
                            </defs>
                        </svg>
                        <span class="font-semibold text-sm "> Kỹ năng</span>
                    </button>

                    <button class="gap-3 p-3 bg-[#D6D6FD] hover:bg-[#22216D] text-[#22216D]  hover:text-white rounded-md flex items-center min-w-fit">
                        <svg width="36" height="32" viewBox="0 0 46 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M45.6497 39.8181L1.07129 37.9403L24.9844 0.182129L45.6497 39.8181Z" fill="#76D6F4"
                                stroke="#22216D" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1.07129 37.9403L22.1862 26.8794L45.6504 39.8181L1.07129 37.9403Z" fill="#22216D"
                                stroke="#22216D" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22.184 26.8794L24.9823 0.182129L1.07129 37.9403L22.184 26.8794Z" fill="#B3F6FF"
                                stroke="#22216D" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="font-semibold text-sm "> Graphic Design</span>
                    </button>

                    <button class="gap-3 p-3 bg-[#D6D6FD] hover:bg-[#22216D] text-[#22216D]  hover:text-white rounded-md flex items-center min-w-fit">
                        <svg width="36" height="32" viewBox="0 0 46 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M45.5931 39.8181L1.01465 37.9403L24.9278 0.182129L45.5931 39.8181Z" fill="#F4D876"
                                stroke="#22216D" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1.01465 37.9403L22.1296 26.8794L45.5938 39.8181L1.01465 37.9403Z" fill="#E3A81F"
                                stroke="#22216D" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22.1274 26.8794L24.9257 0.182129L1.01465 37.9403L22.1274 26.8794Z" fill="#FFEAB3"
                                stroke="#22216D" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="font-semibold text-sm ">Business</span>
                    </button>

                    <button class="gap-3 p-3 bg-[#D6D6FD] hover:bg-[#22216D] text-[#22216D]  hover:text-white rounded-md flex items-center min-w-fit">
                        <svg width="36" height="32" viewBox="0 0 46 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M45.5931 39.8181L1.01465 37.9403L24.9278 0.182129L45.5931 39.8181Z" fill="#F4D876"
                                stroke="#22216D" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1.01465 37.9403L22.1296 26.8794L45.5938 39.8181L1.01465 37.9403Z" fill="#E3A81F"
                                stroke="#22216D" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22.1274 26.8794L24.9257 0.182129L1.01465 37.9403L22.1274 26.8794Z" fill="#FFEAB3"
                                stroke="#22216D" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="font-semibold text-sm ">Business</span>
                    </button>

                    <button class="gap-3 p-3 bg-[#D6D6FD] hover:bg-[#22216D] text-[#22216D]  hover:text-white rounded-md flex items-center min-w-fit">
                        <svg width="32" height="32" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.9439 40.0012C31.99 40.0012 40.9445 31.0466 40.9445 20.0006C40.9445 8.95457 31.99 0 20.9439 0C9.89793 0 0.943359 8.95457 0.943359 20.0006C0.943359 31.0466 9.89793 40.0012 20.9439 40.0012Z"
                                fill="url(#paint0_linear_5502_59900)" />
                            <path opacity="0.7"
                                d="M20.9439 40.0012C31.99 40.0012 40.9445 31.0466 40.9445 20.0006C40.9445 8.95457 31.99 0 20.9439 0C9.89793 0 0.943359 8.95457 0.943359 20.0006C0.943359 31.0466 9.89793 40.0012 20.9439 40.0012Z"
                                fill="url(#paint1_radial_5502_59900)" />
                            <defs>
                                <linearGradient id="paint0_linear_5502_59900" x1="0.943359" y1="20.0006" x2="40.9445"
                                    y2="20.0006" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.011" stop-color="#7EEDBE" />
                                    <stop offset="0.121" stop-color="#6FDBB9" />
                                    <stop offset="0.356" stop-color="#56BDB0" />
                                    <stop offset="0.584" stop-color="#43A6AA" />
                                    <stop offset="0.803" stop-color="#3899A6" />
                                    <stop offset="1" stop-color="#3595A5" />
                                </linearGradient>
                                <radialGradient id="paint1_radial_5502_59900" cx="0" cy="0" r="1"
                                    gradientUnits="userSpaceOnUse"
                                    gradientTransform="translate(12.1037 6.56019) scale(41.8012)">
                                    <stop offset="0.011" stop-color="#B3FFDC" />
                                    <stop offset="0.094" stop-color="#A0EFD3" stop-opacity="0.851" />
                                    <stop offset="0.232" stop-color="#84D7C7" stop-opacity="0.627" />
                                    <stop offset="0.37" stop-color="#6CC3BD" stop-opacity="0.435" />
                                    <stop offset="0.506" stop-color="#58B2B4" stop-opacity="0.278" />
                                    <stop offset="0.638" stop-color="#48A5AD" stop-opacity="0.157" />
                                    <stop offset="0.767" stop-color="#3D9CA8" stop-opacity="0.071" />
                                    <stop offset="0.89" stop-color="#3796A5" stop-opacity="0.02" />
                                    <stop offset="1" stop-color="#3595A5" stop-opacity="0" />
                                </radialGradient>
                            </defs>
                        </svg>
                        <span class="font-semibold text-sm ">UX/UI Design</span>
                    </button>
                    </div>
                    
                    <button class="w-[30px] h-[30px] shadow-md bg-white rounded-full">
                            <svg width="20" height="20" class="m-auto" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.83249 7.34024C7.22212 6.78011 7.18139 5.83124 7.74152 5.22087C8.30164 4.6105 9.25052 4.56977 9.86089 5.12989L17.5752 12.2092C18.2234 12.804 18.2228 13.8265 17.574 14.4206L9.85966 21.4842C9.24868 22.0437 8.29985 22.0019 7.7404 21.3909C7.18095 20.7799 7.22273 19.8311 7.83371 19.2716L14.3411 13.3131L7.83249 7.34024Z"
                                    fill="#403ECC" />
                            </svg>
                    </button>
                </div>

                <div class="flex justify-between items-center">                    
                    <div class="font-medium  grid gap-2 ps-[60px]">
                                <span class="font-semibold text-xl">
                                    Cố vấn nổi bật
                                </span>
                                <h1 class="text-sm font-normal text-[#696974] ">
                                    Gặp gỡ 1-1 với người bạn thú vị và sẵn lòng sẻ chia mọi điều.
                                </h1>
                    </div>                   
                </div>                      
                    <!-- Card Mentor -->
                    <div class="gap-5 py-8 flex items-center justify-between">
                        <button id="backButton" class="w-[48px] h-[48px] shadow-md bg-white rounded-full">
                            <svg width="20" height="20" class="m-auto" viewBox="0 0 26 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.2421 18.4666C17.8539 19.0252 17.8971 19.974 17.3385 20.5857C16.7799 21.1975 15.8312 21.2407 15.2194 20.6821L7.48708 13.6225C6.83734 13.0293 6.8353 12.0069 7.48267 11.4111L15.1789 4.32785C15.7885 3.76684 16.7374 3.80621 17.2984 4.41577C17.8594 5.02533 17.8201 5.97426 17.2105 6.53527L10.7183 12.5103L17.2421 18.4666Z"
                                    fill="#B5B5BE" />
                            </svg>
                        </button>

                        <div class="test grid items-center w-full gap-6 justify-between lg:grid-cols-4 md:grid-cols-2">                                                 
                             <?php foreach ($data['data'] as $item): ?>
                                <div class="px-5  z-20 py-8 flex flex-col gap-3 justify-between bg-white rounded-2xl">
            
                                    <div class="grid gap-1 text-center justify-center">
                                        <img class="object-cover rounded-[50%] w-16 h-16 m-auto" src="<?php echo $item['avatar']; ?>" alt="Avatar" />                                   
                                        <h3 class="font-medium flex items-center justify-center h-[55px]"><?php echo $item['name']; ?></h3>
                                        <p class="font-normal text-sm text-[#92929D]">Level: <?php echo $item['level']; ?></p>
                                        <p class="font-normal text-xs text-[#92929D] h-[55px] overflow-y-auto"><?php echo $item['introduce']; ?></p>
                                    </div>

                                    <div class="flex gap-3 justify-center">
                                    <button
                                        class="font-semibold text-xs py-2 px-3 text-primary border-primary border-[1px] rounded-lg max-h-11 flex items-center min-w-fit hover:text-white hover:bg-primary">
                                        
                                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSd3k1_zNrviXLeLIuXvr2bacusJYekcaKVYNfuSSg0pDSHmRg/viewform">Kết nối</a>
                                    </button>
                                    <button class="font-semibold text-xs py-2 px-3 text-primary border-primary border-[1px] rounded-lg max-h-11 flex items-center min-w-fit hover:text-white hover:bg-primary">
                                    <a href="{{ route('profile.detail', ['id' => $item['id']]) }}">
                                        Xem thông tin
                                    </a>
                                    </button>
                                    
                                    </div>
                                </div>
                            <?php endforeach; ?>                           
                        </div>

                        <button id="nextButton" class="w-[48px] h-[48px] shadow-md bg-white rounded-full">
                            <svg width="20" height="20" class="m-auto" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.83249 7.34024C7.22212 6.78011 7.18139 5.83124 7.74152 5.22087C8.30164 4.6105 9.25052 4.56977 9.86089 5.12989L17.5752 12.2092C18.2234 12.804 18.2228 13.8265 17.574 14.4206L9.85966 21.4842C9.24868 22.0437 8.29985 22.0019 7.7404 21.3909C7.18095 20.7799 7.22273 19.8311 7.83371 19.2716L14.3411 13.3131L7.83249 7.34024Z"
                                    fill="#403ECC" />
                            </svg>
                        </button>
                    </div>
                </div>

            <div class="flex justify-center items-center bg-[#F6F6FF] pb-20">
                
                <div id="viewAll" class="flex gap-1.5 items-center cursor-pointer">
                        <p  class="text-primary  text-sm  font-medium">Xem tất cả</p>
                        <svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 8.3457L17.5 12.3457L13.5 16.3457" stroke="#403ECC" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.5 8.3457L11.5 12.3457L7.5 16.3457" stroke="#403ECC" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                </div>                    
            </div>              
        </div>
    </div>

    <div id="loading" class="loading" style="display: none;">
        <div class="spinner"></div>
        Loading...
    </div>


    <div id="modal-login"
        class="z-20 hidden w-full max-h-[50.563rem] justify-center items-center fixed left-0 right-0 top-[4rem] bottom-0 bg-[#1717252c]">
        <div class="max-h-[40.563rem]">
            <img src="./img/image-login.png" alt="Image login">
        </div>
        <div class="max-h-[40.563rem]">
            <a href="#" onclick="hideLogin()" class="absolute right-[18.5%] top-2 w-12 h-12 bg-white rounded-full">
                <i class="fas fa-times-circle text-5xl"></i>
            </a>
            <div
                class="max-h-[40.563rem] h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
                <div class="max-w-md w-full space-y-8">
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        Đăng nhập là giảng viên
                    </h2>
                    <form class="mt-8 space-y-6" action="#" method="POST">
                        <input type="hidden" name="remember" value="true">
                        <div class="rounded-md shadow-sm -space-y-px">
                            <div class="my-4">
                                <label for="username" class="sr-only">Tên đăng nhập</label>
                                <input id="username" name="username" type="text" autocomplete="username" required
                                    class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                    placeholder="Tên đăng nhập">
                            </div>
                            <div class="my-4">
                                <label for="password" class="sr-only">Mật khẩu</label>
                                <input id="password" name="password" type="password" autocomplete="current-password"
                                    required
                                    class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none rounded-md focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                    placeholder="Mật khẩu">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember_me" name="remember_me" type="checkbox"
                                    class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                    Ghi nhớ đăng nhập
                                </label>
                            </div>

                            <div class="text-sm">
                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                    Quên mật khẩu?
                                </a>
                            </div>
                        </div>

                        <div class="flex justify-center">
                            <button type="submit"
                                class="group relative w-fit flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Đăng nhập
                            </button>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="w-2/6 bg-[#E2E2EA] h-[1px]"></span>
                            <p class="text-sm opacity-30">Đăng nhập với</p>
                            <span class="w-2/6 bg-[#E2E2EA] h-[1px]"></span>
                        </div>
                        <div class="mt-6">
                            <a href="#"
                                class="flex justify-center rounded-md bg-[#FC5A5A] text-white w-full mb-4 items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium text-gray-70 hover:bg-gray-50 hover:text-[#FC5A5A]">
                                <svg class="mr-4" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_3310_80868" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="16" height="16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.814 6.54545H8.18605V9.63636H12.5767C12.1674 11.6 10.4558 12.7273 8.18605 12.7273C5.50698 12.7273 3.34884 10.6182 3.34884 8C3.34884 5.38182 5.50698 3.27273 8.18605 3.27273C9.33953 3.27273 10.3814 3.67273 11.2 4.32727L13.5814 2C12.1302 0.763636 10.2698 0 8.18605 0C3.64651 0 0 3.56364 0 8C0 12.4364 3.64651 16 8.18605 16C12.2791 16 16 13.0909 16 8C16 7.52727 15.9256 7.01818 15.814 6.54545Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_3310_80868)">
                                        <path d="M-0.744141 12.7275V3.27295L5.58144 8.00022L-0.744141 12.7275Z"
                                            fill="white" />
                                    </g>
                                    <mask id="mask1_3310_80868" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="16" height="16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.814 6.54545H8.18605V9.63636H12.5767C12.1674 11.6 10.4558 12.7273 8.18605 12.7273C5.50698 12.7273 3.34884 10.6182 3.34884 8C3.34884 5.38182 5.50698 3.27273 8.18605 3.27273C9.33953 3.27273 10.3814 3.67273 11.2 4.32727L13.5814 2C12.1302 0.763636 10.2698 0 8.18605 0C3.64651 0 0 3.56364 0 8C0 12.4364 3.64651 16 8.18605 16C12.2791 16 16 13.0909 16 8C16 7.52727 15.9256 7.01818 15.814 6.54545Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#mask1_3310_80868)">
                                        <path
                                            d="M-0.744141 3.27295L5.58144 8.00022L8.18609 5.78204L17.1163 4.36386V-0.727051H-0.744141V3.27295Z"
                                            fill="white" />
                                    </g>
                                    <mask id="mask2_3310_80868" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="16" height="16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.814 6.54545H8.18605V9.63636H12.5767C12.1674 11.6 10.4558 12.7273 8.18605 12.7273C5.50698 12.7273 3.34884 10.6182 3.34884 8C3.34884 5.38182 5.50698 3.27273 8.18605 3.27273C9.33953 3.27273 10.3814 3.67273 11.2 4.32727L13.5814 2C12.1302 0.763636 10.2698 0 8.18605 0C3.64651 0 0 3.56364 0 8C0 12.4364 3.64651 16 8.18605 16C12.2791 16 16 13.0909 16 8C16 7.52727 15.9256 7.01818 15.814 6.54545Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#mask2_3310_80868)">
                                        <path
                                            d="M-0.744141 12.7275L10.4186 4.36386L13.3582 4.72749L17.1163 -0.727051V16.7275H-0.744141V12.7275Z"
                                            fill="white" />
                                    </g>
                                    <mask id="mask3_3310_80868" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="16" height="16">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.814 6.54545H8.18605V9.63636H12.5767C12.1674 11.6 10.4558 12.7273 8.18605 12.7273C5.50698 12.7273 3.34884 10.6182 3.34884 8C3.34884 5.38182 5.50698 3.27273 8.18605 3.27273C9.33953 3.27273 10.3814 3.67273 11.2 4.32727L13.5814 2C12.1302 0.763636 10.2698 0 8.18605 0C3.64651 0 0 3.56364 0 8C0 12.4364 3.64651 16 8.18605 16C12.2791 16 16 13.0909 16 8C16 7.52727 15.9256 7.01818 15.814 6.54545Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#mask3_3310_80868)">
                                        <path
                                            d="M17.1165 16.7275L5.58163 8.00022L4.09326 6.90931L17.1165 3.27295V16.7275Z"
                                            fill="white" />
                                    </g>
                                </svg>
                                Continue with Google
                            </a>
                            <a href="#"
                                class="justify-center rounded-md bg-[#0062FF] text-white w-full mb-4 flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium text-gray-70 hover:bg-gray-50 hover:text-[#0062FF]">
                                <svg class="mr-4" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.0782 15.957C15.5634 15.957 15.9569 15.5635 15.9569 15.0782V0.914836C15.9569 0.429461 15.5635 0.0361328 15.0782 0.0361328H0.914836C0.429461 0.0361328 0.0361328 0.429461 0.0361328 0.914836V15.0782C0.0361328 15.5635 0.429399 15.957 0.914836 15.957H15.0782Z"
                                        fill="white" />
                                    <path
                                        d="M11.0214 15.9572V9.79178H13.0908L13.4007 7.389H11.0214V5.85497C11.0214 5.15931 11.2146 4.68524 12.2121 4.68524L13.4845 4.68469V2.53562C13.2644 2.50634 12.5091 2.44092 11.6304 2.44092C9.79599 2.44092 8.54008 3.56067 8.54008 5.61701V7.389H6.46533V9.79178H8.54008V15.9572H11.0214Z"
                                        fill="#0062FF" />
                                </svg>
                                Continue with Facebook
                            </a>
                        </div>

                        <div class="flex items-center justify-center mt-6">
                            <span class="text-sm text-gray-600">
                                Bạn chưa có tài khoản?
                            </span>
                            <br />
                            <a href="#" class="text-sm font-medium text-blue-600 ml-2 hover:text-blue-500">
                                Đăng ký ngay
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    function login() {
        document.getElementById('modal-login').style.display = "flex"

    }

    function hideLogin() {
        document.getElementById('modal-login').style.display = "none"
    }

    var nextPage = 1;

document.getElementById("viewAll").addEventListener("click", function() {
    document.getElementById("loading").style.display = "block"

    fetch('https://be.youth.com.vn/mentor/SearchMentor', {
        method: 'post',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },           
        body: JSON.stringify({
            rq: {
                page: 1,
                pageSize: 100
            }
        })  
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById("loading").style.display = "none"
        var element = document.getElementById("viewAll");
        element.remove();
        
        console.log(data);
        // Lấy phần tử chứa danh sách mentor từ view
        var mentorListContainer = document.querySelector('.test');

        // Xóa toàn bộ phần tử con hiện có của mentorListContainer
        mentorListContainer.innerHTML = '';

        // Duyệt qua dữ liệu từ API và tạo các phần tử HTML để hiển thị
        data.data.forEach(item => {
            // Tạo phần tử div chứa thông tin mentor
            var mentorDiv = document.createElement('div');
            mentorDiv.className = 'px-5 h-[280px] z-20 py-4 flex flex-col gap-3 justify-between bg-white rounded-2xl';

            // Tạo phần tử div chứa avatar
            var avatarDiv = document.createElement('div');
            avatarDiv.className = 'grid gap-1 text-center justify-center';
            var avatarImg = document.createElement('img');
            avatarImg.className = 'object-cover rounded-[50%] w-16 h-16 m-auto';
            avatarImg.src = item.avatar;
            avatarImg.alt = 'Avatar';
            avatarDiv.appendChild(avatarImg);

            // Tạo phần tử div chứa tên mentor
            var nameDiv = document.createElement('div');
            nameDiv.className = 'font-medium flex items-center justify-center text-center h-[55px]';
            nameDiv.innerText = item.name;

            // Tạo phần tử div chứa cấp độ
            var levelDiv = document.createElement('div');
            levelDiv.className = 'font-normal text-center text-sm text-[#92929D]';
            levelDiv.innerText = 'Level: ' + item.level;

            // Tạo phần tử div chứa giới thiệu
            let parts = item.introduce?.split(/[\r\n-]+/);

            // // Loại bỏ các phần tử trống từ mảng
            let filteredParts = parts?.filter(part => part.trim() !== ''); 
            var introduceDiv = document.createElement('div');
            introduceDiv.className = 'font-normal h-[35px] text-limit text-center text-xs text-[#92929D] w-full ';
            introduceDiv.innerText = filteredParts;

            var moreDiv = document.createElement('div');
            moreDiv.className = 'flex gap-3 justify-center w-full';
            
            // Tạo phần tử div chứa button kết nối
            var connectButton = document.createElement('button');
            connectButton.className = 'font-semibold text-xs py-2 px-3 text-primary border-primary border-[1px] rounded-lg  flex items-center hover:text-white hover:bg-primary';
            connectButton.innerText = 'Kết nối';
            connectButton.onclick = function() {
                location.href = "https://docs.google.com/forms/d/e/1FAIpQLSd3k1_zNrviXLeLIuXvr2bacusJYekcaKVYNfuSSg0pDSHmRg/viewform"; // Điều hướng đến trang profile khi click
            };

            // Tạo phần tử div chứa button xem thông tin
            var infoButton = document.createElement('button');
            infoButton.className = 'font-semibold text-xs py-2 px-3 text-primary border-primary border-[1px] rounded-lg  flex items-center hover:text-white hover:bg-primary';
            infoButton.innerText = 'Xem thông tin';
            infoButton.onclick = function() {
                location.href = "/profile/" + item.id; // Điều hướng đến trang profile khi click
            };
            
            // Chèn các phần tử con vào mentorDiv
            avatarDiv.appendChild(avatarImg);
            mentorDiv.appendChild(avatarDiv);
            mentorDiv.appendChild(nameDiv);
            mentorDiv.appendChild(levelDiv);
            mentorDiv.appendChild(introduceDiv);
            mentorDiv.appendChild(moreDiv);
            moreDiv.appendChild(connectButton);
            moreDiv.appendChild(infoButton);

            // Chèn mentorDiv vào mentorListContainer
            mentorListContainer.appendChild(mentorDiv);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    }); 
    
})
    </script>
    <style>
        .loading {
            z-index: 100;
            text-align: center;
            font-weight: 400;
            color: rgb(64, 62, 204);
            position: fixed; /* Đặt vị trí cố định */
    top: 50%; /* Đặt top ở 50% của màn hình */
    left: 50%; /* Đặt left ở 50% của màn hình */
    transform: translate(-50%, -50%); /* Di chuyển spinner về giữa */
        }
        .spinner {
            margin: auto;
            z-index: 100;
    border: 4px solid rgba(64, 62, 204, 0.2); /* Màu xanh với độ mờ */
    border-top: 4px solid rgb(64, 62, 204); /* Màu xanh */
    border-radius: 50%;
    width: 30px;
    height: 30px;
    animation: spin 1s linear infinite; /* Sử dụng animation "spin" */
   padding-bottom: 10px;

}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
    .truncate {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        
    }
    .text-limit {
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Số dòng tối đa */
    -webkit-box-orient: vertical;
    overflow: hidden;
    }
    </style>
</body>
