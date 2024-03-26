@include('head')
@include('header')
@include('sidebar')


<body class="bg-background-home">
    <div class="bg-[#D6D6FD] w-screen h-[300px] relative">
        <div class="pl-p-sidebar ">
            <div class="pt-p-header w-main-layout mx-auto pb-10">
                <div class="w-[55.875rem] mt-[2.625rem]">
                    <div class="grid gap-4">
                        <div class="flex font-medium text-base gap-2">
                            <p class="text-[#696974]">Trang chủ</p>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 8L17 12L13 16" stroke="#696974" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M7 8L11 12L7 16" stroke="#696974" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <p class="text-[#696974]">Mentors</p>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 8L17 12L13 16" stroke="#696974" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M7 8L11 12L7 16" stroke="#696974" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <p class="text-[#000000]">Tìm kiếm mentors</p>
                        </div>
                        <h1 class="text-5xl font-semibold">Tìm kiếm người đồng hành </h1>
                    </div>
                </div>
                <div class="absolute bg-white h-[4.5rem] -bottom-8 flex w-4/5 justify-start rounded-lg text-[#696974]">
                    <input type="text" placeholder="Tìm kiếm tên mentor"
                        class="px-8 py-6 w-full rounded-l-lg text-[#696974]">
                    <input type="text" placeholder="Ngành nghề" class="px-8 py-6 w-full">
                    <select name="" id="" class="px-8 py-6 text-[#696974] w-full">
                        <option value="" disabled selected hidden><i class="fas fa-signal"></i> Công việc</option>
                        <option class="">Online</option>
                        <option class="">Offline</option>
                    </select>
                    <select name="" id="" class="px-8 py-6 mx-4 text-[#696974] w-full">
                        <option value="" disabled selected hidden>Level</option>
                        <option class="" value="1">Người mới</option>
                        <option class="" value="2">Trung bình</option>
                        <option class="" value="3">Nâng cao</option>
                    </select>
                    <input type="submit" value="Tìm kiếm ngay"
                        class="px-8 py-6 bg-[#403ECC] text-white rounded-r-lg cursor-pointer w-full">
                </div>
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="pl-p-sidebar mt-[4.5rem]">
        <div class="w-main-layout mx-auto">
            <div>
                <h1 class="text-2xl text-[#22216D] font-semibold mb-2">Level 1</h1>
                <p class="text-base text-[#696974] mb-6">Nhận diện nghề, theo chuyên môn nghề kinh nghiệp 2-5 năm</p>
                <div class="grid gap-2.5 grid-cols-4">
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex w-full justify-end gap-1 items-center mt-7 mb-11">
                    <p class="font-medium text-lg text-[#403ECC]">
                        Xem thêm
                    </p>
                    <img class="h-6 w-6" src="../svg/ic_Chevron_Right.svg" alt="ic_ShoppingTag" />
                </div>
            </div>
        </div>
        <div class="w-main-layout mx-auto">
            <div>
                <h1 class="text-2xl text-[#22216D] font-semibold mb-2">Level 2</h1>
                <p class="text-base text-[#696974] mb-6">CEO, quản lý, chuyên gia trong lĩnh vực</p>
                <div class="grid gap-2.5 grid-cols-4">
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                    <div class="px-[1.125rem] py-3.5 grid gap-5 bg-white rounded-3xl min-w-fit shadow-lg">
                        <div class="grid gap-y-2 text-center">
                            <img class="h-20 w-20 m-auto" src="../img/Avatar.png" alt="Avatar" />
                            <h3 class="font-medium text-base">Nguyễn Huy Toàn</h3>
                            <span class="font-normal text-sm text-[#92929D]">Level 1</span>
                            <span class="font-normal text-sm text-[#92929D]">Tài chính</span>
                        </div>

                        <div class="flex gap-3">
                            <button
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Kết nối
                            </button>

                            <button onclick="location.href='{{ url('profile') }}'"
                                class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                Xem thông tin
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex w-full justify-end gap-1 items-center mt-7 mb-11">
                    <p class="font-medium text-lg text-[#403ECC]">
                        Xem thêm
                    </p>
                    <img class="h-6 w-6" src="../svg/ic_Chevron_Right.svg" alt="ic_ShoppingTag" />
                </div>
            </div>
        </div>
    </div>
</body>
