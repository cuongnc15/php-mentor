@include('head')
@include('header')
@include('sidebar')


<body class="bg-background-home">
    <div class="bg-[#D6D6FD] w-screen">
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
                            <p class="text-[#000000]">Kỹ năng chuyên môn</p>
                        </div>
                        <h1 class="text-5xl font-semibold">Kỹ năng chuyên môn</h1>
                        <p class="text-[#696974] text-base font-normal">Gặp gỡ và học hỏi những bí quyết trong thực hiện
                            công việc chuyên môn từ </br> những người có kinh nghiệm trong nghề.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="pl-p-sidebar">
        <div class="w-main-layout mx-auto">
            <div class="p-4 grid gap-2.5">
                <div class="flex justify-between">
                    <!-- Search Input -->
                    <div
                        class="flex justify-between border-[1px] border-[#F1F1F5] p-3.5 items-center rounded-2xl w-[31.5rem] bg-white">
                        <p class="text-base font-light text-[#92929D]">Tìm kiếm tên bài học được chia sẻ từ mentor</p>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.77763 4.6829C1.20043 8.2601 1.20043 14.0599 4.77763 17.6371C8.35483 21.2143 14.1546 21.2143 17.7318 17.6371C21.309 14.0599 21.309 8.2601 17.7318 4.6829C14.1546 1.1057 8.35483 1.1057 4.77763 4.6829ZM6.19184 6.09712C8.988 3.30096 13.5215 3.30096 16.3176 6.09712C19.1138 8.89327 19.1138 13.4267 16.3176 16.2229C13.5215 19.019 8.988 19.019 6.19184 16.2229C3.39569 13.4267 3.39569 8.89327 6.19184 6.09712Z"
                                fill="#92929D" />
                            <path
                                d="M22.1891 20.2825L18.0596 16.153C17.1168 15.2102 15.7026 16.6244 16.6454 17.5672L20.7749 21.6967C21.7177 22.6395 23.1319 21.2253 22.1891 20.2825Z"
                                fill="#92929D" />
                        </svg>
                    </div>

                    <!-- Sort -->
                    <div class="flex gap-4">
                        <div class="flex items-center rounded-xl border-[1px] border-[#F1F1F5] bg-white">
                            <p class="font-normal text-sm text-[#696974] pr-8 border-r-[1px] text-center p-4">
                                Sort by: <b class="text-black font-normal"> Phổ biến </b>
                            </p>
                            <svg class="mx-1" width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.8811 5.3335C13.3003 5.3335 13.5334 5.81846 13.2715 6.14584L8.97849 11.5121C8.77833 11.7623 8.39778 11.7623 8.19762 11.5121L3.9046 6.14584C3.64269 5.81846 3.87578 5.3335 4.29503 5.3335L12.8811 5.3335Z"
                                    fill="#92929D" />
                            </svg>
                        </div>

                        <button class="p-3 bg-white rounded-[10px]">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.9999 12.9125V18C14.9999 18.3788 14.7859 18.725 14.4472 18.8944L10.4472 20.8944C9.78226 21.2269 8.99994 20.7434 8.99994 20V12.9125L2.22599 4.63324C1.69177 3.98031 2.15632 3 2.99994 3H20.9999C21.8436 3 22.3081 3.98031 21.7739 4.63324L14.9999 12.9125ZM12.9999 17.382V12.5556C12.9999 12.3247 13.0798 12.101 13.226 11.9223L18.8897 5H5.11019L10.7739 11.9223C10.9201 12.101 10.9999 12.3247 10.9999 12.5556V18.382L12.9999 17.382Z"
                                    fill="#92929D" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Grid -->
                <div class="w-full">
                    <div class="mt-11 grid xl:grid-cols-4 gap-14 lg:grid-cols-3 sm:grid-cols-2">
                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-white border-primary bg-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-white border-primary bg-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-white border-primary bg-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-white border-primary bg-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4">
                            <img class="w-full h-auto" src="../img/BannerCard.png" alt="card" />
                            <div class="px-5 grid gap-2">
                                <span class="font-semibold text-lg">Khóa học kỹ năng tư duy phản biện</span>
                                <div class="flex items-center justify-between">
                                    <button class="bg-[#DCF6EC] px-2 py-1.5 rounded">
                                        <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                                    </button>
                                    <div class="flex gap-1.5">
                                        <img class="w-4 h-4 m-auto" src="../svg/ic_ShoppingTag.svg"
                                            alt="ic_ShoppingTag" />
                                        <p class="font-normal text-lg">120.000 đ</p>
                                    </div>
                                </div>
                                <div class="flex justify-between mb-3">
                                    <div class="flex justify-between items-center gap-4 text-center">
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Heart.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">20</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <img class="h-5 w-5 m-auto" src="../svg/ic_Comments.svg"
                                                alt="ic_ShoppingTag" />
                                            <p class="text-lg">30</p>
                                        </div>
                                    </div>
                                    <button onclick="location.href='{{ url('detail') }}'"
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-between mt-8">
                    <p class="text-[#44444F] font-normal text-lg">
                        1-10/ 195 Khóa học
                    </p>
                    <div class="flex gap-4">
                        <button class="p-1 border-[1px] rounded-lg">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.9142 12L15.2071 16.2929C15.5976 16.6834 15.5976 17.3166 15.2071 17.7071C14.8166 18.0976 14.1834 18.0976 13.7929 17.7071L8.79289 12.7071C8.40237 12.3166 8.40237 11.6834 8.79289 11.2929L13.7929 6.29289C14.1834 5.90237 14.8166 5.90237 15.2071 6.29289C15.5976 6.68342 15.5976 7.31658 15.2071 7.70711L10.9142 12Z"
                                    fill="#92929D" />
                            </svg>
                        </button>
                        <ul class="flex text-sm font-bold text-[#92929D] text-center">
                            <li class="text-[#403ECC] w-8 my-auto">1</li>
                            <li class=" w-8 my-auto">2</li>
                            <li class=" w-8 my-auto">3</li>
                            <li class=" w-8 my-auto">4</li>
                            <li class=" w-8 my-auto">5</li>
                            <li class=" w-8 my-auto">...</li>
                            <li class=" w-8 my-auto">19</li>
                        </ul>
                        <button class="p-1 border-[1px] rounded-lg">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.0858 12L9.79289 7.70711C9.40237 7.31658 9.40237 6.68342 9.79289 6.29289C10.1834 5.90237 10.8166 5.90237 11.2071 6.29289L16.2071 11.2929C16.5976 11.6834 16.5976 12.3166 16.2071 12.7071L11.2071 17.7071C10.8166 18.0976 10.1834 18.0976 9.79289 17.7071C9.40237 17.3166 9.40237 16.6834 9.79289 16.2929L14.0858 12Z"
                                    fill="#92929D" />
                            </svg>
                        </button>

                        <div class="flex items-center rounded-xl border-[1px] border-[#F1F1F5]">
                            <p class="font-normal text-sm text-[#696974] border-r-[1px] text-center p-2">
                                10
                            </p>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16 15C16.412 15 16.6472 15.4704 16.4 15.8L12.9 20.4667C12.7 20.7333 12.3 20.7333 12.1 20.4667L8.6 15.8C8.35279 15.4704 8.58798 15 9 15L16 15Z"
                                    fill="#92929D" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16 9C16.412 9 16.6472 8.52962 16.4 8.2L12.9 3.53333C12.7 3.26667 12.3 3.26667 12.1 3.53333L8.6 8.2C8.35279 8.52962 8.58798 9 9 9L16 9Z"
                                    fill="#92929D" />
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
