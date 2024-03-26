@include('head')
@include('header')
@include('sidebar')


<body class="bg-background-home">
    <div class="bg-cover bg-center h-72 w-screen" style="background-image: url(../img/Artboard.png);">
        <div class="pt-p-header pl-p-sidebar">
            <div class="mx-main mt-[2.625rem]">
                <div class="grid max-h-fit">
                    <div class="flex font-normal text-base gap-2 text-white">
                        <p>Trang chủ</p>
                        <img src="../svg/ic_Chevron_Right_Duo.svg" />
                        <p>Mentors</p>
                        <img src="../svg/ic_Chevron_Right_Duo.svg" />
                        <p>Kỹ năng chuyên môn</p>
                    </div>

                    <p class="mt-9 font-semibold text-5xl text-white max-h-fit">Khóa học kỹ năng tư duy phản biện</p>
                </div>
            </div>
        </div>
    </div>
    <!-- List -->
    <div class="bg-[#7271DE] w-screen">
        <div class="pl-p-sidebar mx-main">
            <ul class="flex gap-8 text-white font-normal text-lg mx-7">
                <li class="uppercase mt-3.5 mb-3 min-w-fit cursor-pointer" onclick="location.href='{{ url('profile')}}'">
                    Về Mentor
                </li>

                <li class="font-semibold uppercase mt-3.5 mb-3 min-w-fit">
                    Mô tả
                </li>

                <li class="uppercase mt-3.5 mb-3 min-w-fit">
                    Kết quả
                </li>

                <li class="uppercase mt-3.5 mb-3 min-w-fit">
                    Giáo trình
                </li>

                <li class="uppercase mt-3.5 mb-3 min-w-fit">
                    Giáo trình
                </li>

                <li class="uppercase mt-3.5 mb-3 min-w-fit">
                    Địa điểm
                </li>

                <li class="uppercase mt-3.5 mb-3 min-w-fit">
                    Đánh giá
                </li>
            </ul>
        </div>
    </div>

    <div class="flex mx-auto pl-p-sidebar w-fit">
        <div class="h-fit p-6  bg-white w-[55.875rem] grid gap-10 border-r-2 borer-[#D5D5DC]">
            <div class="grid gap-4">
                <div class="flex gap-4">
                    <img class="h-6 w-6 my-auto" src="../svg/ic_CircleGreen.svg" alt="Circle" />
                    <p class="font-medium text-2xl text-[#22216D]">Về Mentor</p>
                </div>

                <div class="flex gap-4">
                    <img class="h-20 w-20" src="../img/Avatar.png" alt="Avatar" />
                    <div class="my-auto">
                        <p class="font-medium text-2xl">Nguyễn Văn A</p>
                        <p class="font-normal text-base text-[#403ECC]">Senior tại ABC, 10 năm kinh nghiệm tư vấn</p>
                    </div>
                </div>

                <p class="font-light text-base text-[#696974]">Xin chào mọi người, Mình là Nguyễn Văn A - Chuyên gia
                    khai vấn cuộc sống (Life Coach) Thời gian
                    vừa rồi mình rất biết ơn những người bạn, những khách hàng đã tin tưởng và lựa chọn đồng hành
                    cùng mình trên chặng đường hiểu hơn về bản thân, nâng cao nhận thức, đào sâu học hỏi và tiến đến
                    mục tiêu. Những phản hồi từ mọi người cho mình thêm động lực và sự tự tin bước tiếp trên hành
                    trình làm nghề khai vấn này. Vì vậy mình mong muốn có thể lan tỏa khai vấn đến nhiều người hơn
                    nữa. Mình ở đây để lắng nghe bạn. Bạn có thể inbox để book lịch một session bất kỳ trên fanpage
                    Trò chuyện với Định nhé.</p>
            </div>


            <div class="grid gap-4">
                <div class="flex gap-4">
                    <img class="h-6 w-6 my-auto" src="../svg/ic_Business.svg" alt="Circle" />
                    <p class="font-medium text-2xl text-[#22216D]">Mô tả về khóa học</p>
                </div>

                <p class="font-light text-base text-[#696974]">Xin chào mọi người, Mình là Nguyễn Văn A - Chuyên gia
                    khai vấn cuộc sống (Life Coach) Thời gian
                    vừa rồi mình rất biết ơn những người bạn, những khách hàng đã tin tưởng và lựa chọn đồng hành
                    cùng mình trên chặng đường hiểu hơn về bản thân, nâng cao nhận thức, đào sâu học hỏi và tiến đến
                    mục tiêu. Những phản hồi từ mọi người cho mình thêm động lực và sự tự tin bước tiếp trên hành
                    trình làm nghề khai vấn này. Vì vậy mình mong muốn có thể lan tỏa khai vấn đến nhiều người hơn
                    nữa. Mình ở đây để lắng nghe bạn. Bạn có thể inbox để book lịch một session bất kỳ trên fanpage
                    Trò chuyện với Định nhé.</p>
            </div>

            <div class="grid gap-4">
                <div class="flex gap-4 items-center">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.3674 24C19.1978 24 24.7349 18.6274 24.7349 12C24.7349 5.37258 19.1978 0 12.3674 0C5.53709 0 0 5.37258 0 12C0 18.6274 5.53709 24 12.3674 24Z"
                            fill="#F4BF59" />
                        <path
                            d="M12.3674 24C19.1978 24 24.7349 18.6274 24.7349 12C24.7349 5.37258 19.1978 0 12.3674 0C5.53709 0 0 5.37258 0 12C0 18.6274 5.53709 24 12.3674 24Z"
                            fill="url(#paint0_radial_5335_159490)" />
                        <defs>
                            <radialGradient id="paint0_radial_5335_159490" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(3.83391 6.12) scale(18.4522 17.904)">
                                <stop stop-color="#FFE8B5" />
                                <stop offset="1" stop-color="#FFC542" stop-opacity="0" />
                            </radialGradient>
                        </defs>
                    </svg>

                    <p class="font-medium text-2xl text-[#22216D]">Kết quả khóa học</p>
                </div>

                <div class="grid gap-2">
                    <div class="flex gap-2.5 items-center ">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z"
                                stroke="#50B5FF" stroke-width="2" />
                        </svg>

                        <p class="text-base font-light text-[#696974]">
                            Provide clear user flow and wireframe
                        </p>
                    </div>

                    <div class="flex gap-2.5 items-center">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z"
                                stroke="#50B5FF" stroke-width="2" />
                        </svg>

                        <p class="text-base font-light text-[#696974]">
                            Build prototype and do usability testing to solve user problems.
                        </p>
                    </div>

                    <div class="flex gap-2.5 items-center">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z"
                                stroke="#50B5FF" stroke-width="2" />
                        </svg>

                        <p class="text-base font-light text-[#696974]">
                            Follow design system guidelines.
                        </p>
                    </div>

                    <div class="flex gap-2.5 items-center">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z"
                                stroke="#50B5FF" stroke-width="2" />
                        </svg>

                        <p class="text-base font-light text-[#696974]">
                            Explore best practice approach to execute comprehensive documentation
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid gap-2">
                <div class="flex gap-4">
                    <img class="h-6 w-6 my-auto" src="../svg/ic_CircleGreen.svg" alt="Circle" />
                    <p class="font-medium text-2xl text-[#22216D]">Giáo trình</p>
                </div>

                <div class="border-primary border-[1px] rounded-lg ">
                    <div class="p-4 grid gap-6">
                        <div class="flex justify-between items-center ">
                            <div class="grid gap-2 w-fit">
                                <div class="flex gap-2">
                                    <p class="text-primary text-2xl font-semibold">Buổi 1</p>
                                    <p class="w-2 my-auto text-[#696974]">•</p>
                                    <p class="text-2xl font-normal text-[#696974]">1 giờ</p>
                                </div>
                                <p class="text-[#403ECC] text-sm font-light">Thế nào là kỹ năng mềm</p>
                            </div>

                            <div>
                                <svg width="10" height="7" viewBox="0 0 10 7" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.707001 6.6665C0.287748 6.6665 0.0546597 6.18154 0.316565 5.85416L4.60959 0.487881C4.80975 0.237678 5.19029 0.237678 5.39046 0.487881L9.68348 5.85416C9.94538 6.18154 9.71229 6.6665 9.29304 6.6665L0.707001 6.6665Z"
                                        fill="#403ECC" />
                                </svg>
                            </div>
                        </div>

                        <p class="text-base font-normal text-[#696974]">Xin chào mọi người, Mình là Nguyễn Văn A -
                            Chuyên
                            gia khai vấn cuộc sống (Life Coach) Thời gian
                            vừa rồi mình rất biết ơn những người bạn, những khách hàng đã tin tưởng và lựa chọn đồng
                            hành
                            cùng mình trên chặng đường hiểu hơn về bản thân, nâng cao nhận thức, đào sâu học hỏi và tiến
                            đến
                            mục tiêu. </p>
                    </div>
                </div>

                <div class="bg-[#FAFAFB] rounded-lg">
                    <div class="p-4 flex justify-between items-center">
                        <div class="grid gap-2 w-fit">
                            <div class="flex gap-2 ">
                                <p class="text-[#171725] text-2xl font-semibold">Buổi 2</p>
                                <p class="w-2 my-auto text-[#696974]">•</p>
                                <p class="text-2xl font-normal text-[#696974]">1 giờ</p>
                            </div>
                            <p class="text-[#44444F] text-sm font-light">Thế nào là kỹ năng mềm</p>
                        </div>

                        <div>
                            <svg class="rotate-180" width="10" height="7" viewBox="0 0 10 7" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.707001 6.6665C0.287748 6.6665 0.0546597 6.18154 0.316565 5.85416L4.60959 0.487881C4.80975 0.237678 5.19029 0.237678 5.39046 0.487881L9.68348 5.85416C9.94538 6.18154 9.71229 6.6665 9.29304 6.6665L0.707001 6.6665Z"
                                    fill="#403ECC" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-[#FAFAFB] rounded-lg">
                    <div class="p-4 flex justify-between items-center">
                        <div class="grid gap-2 w-fit">
                            <div class="flex gap-2 ">
                                <p class="text-[#171725] text-2xl font-semibold">Buổi 3</p>
                                <p class="w-2 my-auto text-[#696974]">•</p>
                                <p class="text-2xl font-normal text-[#696974]">1 giờ</p>
                            </div>
                            <p class="text-[#44444F] text-sm font-light">Thế nào là kỹ năng mềm</p>
                        </div>

                        <div>
                            <svg class="rotate-180" width="10" height="7" viewBox="0 0 10 7" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.707001 6.6665C0.287748 6.6665 0.0546597 6.18154 0.316565 5.85416L4.60959 0.487881C4.80975 0.237678 5.19029 0.237678 5.39046 0.487881L9.68348 5.85416C9.94538 6.18154 9.71229 6.6665 9.29304 6.6665L0.707001 6.6665Z"
                                    fill="#403ECC" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-[#FAFAFB] rounded-lg">
                    <div class="p-4 flex justify-between items-center">
                        <div class="grid gap-2 w-fit">
                            <div class="flex gap-2 ">
                                <p class="text-[#171725] text-2xl font-semibold">Buổi 4</p>
                                <p class="w-2 my-auto text-[#696974]">•</p>
                                <p class="text-2xl font-normal text-[#696974]">1 giờ</p>
                            </div>
                            <p class="text-[#44444F] text-sm font-light">Thế nào là kỹ năng mềm</p>
                        </div>

                        <div>
                            <svg class="rotate-180" width="10" height="7" viewBox="0 0 10 7" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.707001 6.6665C0.287748 6.6665 0.0546597 6.18154 0.316565 5.85416L4.60959 0.487881C4.80975 0.237678 5.19029 0.237678 5.39046 0.487881L9.68348 5.85416C9.94538 6.18154 9.71229 6.6665 9.29304 6.6665L0.707001 6.6665Z"
                                    fill="#403ECC" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>


            <div class="grid gap-4">
                <div class="flex gap-4">
                    <img class="h-6 w-6 my-auto" src="../svg/ic_Business.svg" alt="Circle" />
                    <p class="font-medium text-2xl text-[#22216D]">Địa điểm</p>
                </div>

                <div class="grid gap-2">
                    <div class="flex gap-2.5 items-center">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z"
                                stroke="#50B5FF" stroke-width="2" />
                        </svg>

                        <p class="text-base font-light text-[#725C5C]">
                            <b class="text-[#171725]">Bất kỳ đâu:</b> Chúng ta sẽ thảo luận về một vị trí thuận tiện.
                        </p>
                    </div>

                    <div class="flex gap-2.5 items-center">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z"
                                stroke="#50B5FF" stroke-width="2" />
                        </svg>

                        <p class="text-base font-light text-[#725C5C]">
                            <b class="text-[#171725]">Gọi điện online: </b> Tôi có thể gọi trong buổi chia sẻ này.
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid gap-4">
                <div class="flex gap-4 items-center">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.3674 24C19.1978 24 24.7349 18.6274 24.7349 12C24.7349 5.37258 19.1978 0 12.3674 0C5.53709 0 0 5.37258 0 12C0 18.6274 5.53709 24 12.3674 24Z"
                            fill="#F4BF59" />
                        <path
                            d="M12.3674 24C19.1978 24 24.7349 18.6274 24.7349 12C24.7349 5.37258 19.1978 0 12.3674 0C5.53709 0 0 5.37258 0 12C0 18.6274 5.53709 24 12.3674 24Z"
                            fill="url(#paint0_radial_5335_159490)" />
                        <defs>
                            <radialGradient id="paint0_radial_5335_159490" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(3.83391 6.12) scale(18.4522 17.904)">
                                <stop stop-color="#FFE8B5" />
                                <stop offset="1" stop-color="#FFC542" stop-opacity="0" />
                            </radialGradient>
                        </defs>
                    </svg>
                    <p class="font-medium text-2xlG text-[#22216D]">Đánh giá về tôi (10)</p>
                </div>

                <div class="grid gap-4">
                    <div class="bg-[#FAFAFB] rounded-xl">
                        <div class="p-4 flex justify-between">
                            <div class="flex gap-6">
                                <img class="h-14 w-14" src="../img/Avatar.png" alt="Avatar" />
                                <div class="grid gap-2">
                                    <div class="flex justify-between">
                                        <p class="text-2xl font-semibold">
                                            Nguyễn Văn A
                                        </p>
                                        <p class="text-[#696974] text-base font-medium ">1h trước</p>

                                    </div>
                                    <p class="text-base font-normal text-primary">
                                        Senior tại ABC, 10 năm kinh nghiệm tư vấn
                                    </p>
                                    <p class="font-light text-base text-[#696974]">Sau buổi session với anh, em hiểu
                                        mình cần làm gì tiếp theo và nên chuẩn bị những
                                        gì để phát triển bản thân trên chặng đường sắp tới. Em cảm ơn những lời chia sẻ
                                        rất nhiệt tình và không khí tích cực khi được trò chuyện với anh ^^.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#FAFAFB] rounded-xl">
                        <div class="p-4 flex justify-between">
                            <div class="flex gap-6">
                                <img class="h-14 w-14" src="../img/Avatar.png" alt="Avatar" />
                                <div class="grid gap-2">
                                    <div class="flex justify-between">
                                        <p class="text-2xl font-semibold">
                                            Nguyễn Văn A
                                        </p>
                                        <p class="text-[#696974] text-base font-medium ">1h trước</p>

                                    </div>
                                    <p class="text-base font-normal text-primary">
                                        Senior tại ABC, 10 năm kinh nghiệm tư vấn
                                    </p>
                                    <p class="font-light text-base text-[#696974]">Sau buổi session với anh, em hiểu
                                        mình cần làm gì tiếp theo và nên chuẩn bị những
                                        gì để phát triển bản thân trên chặng đường sắp tới. Em cảm ơn những lời chia sẻ
                                        rất nhiệt tình và không khí tích cực khi được trò chuyện với anh ^^.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="" class="text-lg font-medium text-primary">Xem thêm</a>
                </div>
            </div>
        </div>
        <!-- General Info  -->
        <div class="w-[26rem] bg-white h-fit">
            <div class="p-6 grid gap-6 border-b-2 borer-[#D5D5DC] h-fit">
                <p class="font-medium text-2xl">Thông tin chung</p>
                <div class="grid gap-6">
                    <div class="flex gap-12 items-center">
                        <p class="text-base font-normal w-[6.25rem] text-[#696974]">
                            Chủ đề:
                        </p>
                        <button class="bg-[#DCF6EC] px-2 py-1.5 rounded min-w-fit">
                            <p class="text-sm text-[#30AB7E] font-normal">Kỹ năng sống</p>
                        </button>
                    </div>

                    <div class="flex gap-12 items-center">
                        <p class="text-base font-normal w-[6.25rem] text-[#696974]">
                            Địa điểm:
                        </p>
                        <button class="bg-[#ECF8FB] px-2 py-1.5 rounded flex gap-2 items-center min-w-fit">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="7.99999" cy="13.3333" rx="1.33333" ry="1.33333" fill="#3BB1CF" />
                                <path
                                    d="M0.794243 5.22701C0.577661 4.92925 0.643462 4.5123 0.941214 4.29572C1.70431 3.74065 2.532 3.27623 3.40784 2.91345C4.86374 2.31039 6.42417 2 8.00004 2C9.5759 2 11.1363 2.31039 12.5922 2.91345C13.4681 3.27623 14.2958 3.74065 15.0589 4.29572C15.3566 4.5123 15.4224 4.92925 15.2058 5.227C14.9892 5.52476 14.5723 5.59056 14.2745 5.37398C13.5962 4.88058 12.8605 4.46776 12.082 4.14529C10.7879 3.60924 9.4008 3.33333 8.00004 3.33333C6.59927 3.33333 5.21222 3.60924 3.91808 4.14529C3.13956 4.46776 2.40384 4.88058 1.72553 5.37398C1.42778 5.59056 1.01083 5.52476 0.794243 5.22701Z"
                                    fill="#3BB1CF" />
                                <path
                                    d="M4.68344 5.99317C5.73493 5.55763 6.86191 5.33346 8.00003 5.33346C9.13816 5.33346 10.2651 5.55767 11.3166 5.99321C11.933 6.2485 12.5163 6.57348 13.0556 6.96081C13.3546 7.17558 13.423 7.59213 13.2082 7.89118C12.9934 8.19024 12.5769 8.25856 12.2778 8.04379C11.8215 7.71604 11.3279 7.44106 10.8064 7.22505C9.91666 6.85651 8.96306 6.66683 8.00003 6.66683C7.03701 6.66683 6.08341 6.85647 5.19369 7.22501C4.67218 7.44102 4.17861 7.716 3.72226 8.04374C3.42321 8.25852 3.00666 8.1902 2.79188 7.89114C2.57711 7.59209 2.64543 7.17554 2.94449 6.96077C3.4838 6.57344 4.06712 6.24846 4.68344 5.99317Z"
                                    fill="#3BB1CF" />
                                <path
                                    d="M4.70092 9.80966C4.41162 10.0374 4.36173 10.4566 4.58948 10.7459C4.81723 11.0352 5.23638 11.085 5.52568 10.8573C5.81284 10.6312 6.13022 10.4451 6.46924 10.3047C6.95454 10.1037 7.47469 10.0002 7.99997 10.0002C8.52526 10.0002 9.0454 10.1037 9.53071 10.3047C9.86973 10.4451 10.1871 10.6312 10.4743 10.8573C10.7636 11.085 11.1827 11.0352 11.4105 10.7459C11.6382 10.4566 11.5883 10.0374 11.299 9.80966C10.9162 9.50824 10.493 9.26008 10.041 9.07285C9.39388 8.80482 8.70036 8.66687 7.99997 8.66687C7.29959 8.66687 6.60606 8.80482 5.95899 9.07285C5.50697 9.26008 5.08379 9.50824 4.70092 9.80966Z"
                                    fill="#3BB1CF" />
                            </svg>

                            <p class="text-sm text-[#3BB1CF] font-normal">Trực tuyến, bất kỳ đâu</p>
                        </button>
                    </div>

                    <div class="flex gap-12 items-center">
                        <p class="text-base font-normal w-[6.25rem] text-[#696974]">
                            Độ khó:
                        </p>
                        <button class="bg-[#FEF9EF] px-2 py-1.5 rounded flex gap-2 items-center min-w-fit">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.3333 4.6665C10.9651 4.6665 10.6667 4.96498 10.6667 5.33317V13.3332C10.6667 13.7014 10.9651 13.9998 11.3333 13.9998C11.7015 13.9998 12 13.7014 12 13.3332V5.33317C12 4.96498 11.7015 4.6665 11.3333 4.6665Z"
                                    fill="#F4BF59" />
                                <path
                                    d="M7.99999 7.33317C7.6318 7.33317 7.33332 7.63165 7.33332 7.99984V13.3332C7.33332 13.7014 7.6318 13.9998 7.99999 13.9998C8.36818 13.9998 8.66666 13.7014 8.66666 13.3332V7.99984C8.66666 7.63165 8.36818 7.33317 7.99999 7.33317Z"
                                    fill="#F4BF59" />
                                <path
                                    d="M3.99999 10.6665C3.99999 10.2983 4.29847 9.99984 4.66666 9.99984C5.03485 9.99984 5.33332 10.2983 5.33332 10.6665V13.3332C5.33332 13.7014 5.03485 13.9998 4.66666 13.9998C4.29847 13.9998 3.99999 13.7014 3.99999 13.3332V10.6665Z"
                                    fill="#F4BF59" />
                                <path
                                    d="M1.33332 12.6665C0.965133 12.6665 0.666656 12.965 0.666656 13.3332C0.666656 13.7014 0.965133 13.9998 1.33332 13.9998C1.70151 13.9998 1.99999 13.7014 1.99999 13.3332C1.99999 12.965 1.70151 12.6665 1.33332 12.6665Z"
                                    fill="#F4BF59" />
                                <path
                                    d="M14 2.66667C14 2.29848 14.2985 2 14.6667 2C15.0349 2 15.3333 2.29848 15.3333 2.66667V13.3333C15.3333 13.7015 15.0349 14 14.6667 14C14.2985 14 14 13.7015 14 13.3333V2.66667Z"
                                    fill="#F4BF59" />
                            </svg>
                            <p class="text-sm text-[#F4BF59] font-normal">Trung bình</p>
                        </button>
                    </div>

                    <div class="flex gap-12 items-center">
                        <p class="text-base font-normal w-[6.25rem] text-[#696974]">
                            Ngôn ngữ:
                        </p>
                        <p class="font-normal text-base">Tiếng Anh, Tiếng Việt</p>
                    </div>

                    <div class="flex gap-12 items-center">
                        <p class="text-base font-normal w-[6.25rem] text-[#696974]">
                            Giá:
                        </p>
                        <div class="flex items-center gap-2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.6785 2.64282C9.30362 2.01769 10.1515 1.6665 11.0355 1.6665H15.8333C17.214 1.6665 18.3333 2.78579 18.3333 4.1665V8.9643C18.3333 9.84836 17.9821 10.6962 17.357 11.3213L10.9344 17.7439C9.95812 18.7202 8.3752 18.7202 7.39889 17.7439L2.25591 12.6009C1.2796 11.6246 1.27961 10.0417 2.25592 9.0654L8.6785 2.64282ZM11.0355 3.33317C10.5935 3.33317 10.1696 3.50877 9.85701 3.82133L3.43443 10.2439C3.10899 10.5694 3.10899 11.097 3.43443 11.4224L8.5774 16.5654C8.90284 16.8908 9.43048 16.8908 9.75592 16.5654L16.1785 10.1428C16.4911 9.83026 16.6667 9.40633 16.6667 8.9643V4.1665C16.6667 3.70627 16.2936 3.33317 15.8333 3.33317H11.0355Z"
                                    fill="#F4BF59" />
                                <path
                                    d="M2.98816 8.3333L4.16667 7.15479L12.8452 15.8333L11.6667 17.0118L2.98816 8.3333Z"
                                    fill="#F4BF59" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.5 8.33333C12.9602 8.33333 13.3333 7.96024 13.3333 7.5C13.3333 7.03976 12.9602 6.66667 12.5 6.66667C12.0398 6.66667 11.6667 7.03976 11.6667 7.5C11.6667 7.96024 12.0398 8.33333 12.5 8.33333ZM12.5 10C13.8807 10 15 8.88071 15 7.5C15 6.11929 13.8807 5 12.5 5C11.1193 5 10 6.11929 10 7.5C10 8.88071 11.1193 10 12.5 10Z"
                                    fill="#F4BF59" />
                            </svg>
                            <p class="font-normal text-base">120.000 đ</p>
                        </div>
                    </div>
                </div>
                <button
                    class="text-base gap-2.5 py-2.5 px-4 text-white border-primary border-2 bg-primary rounded-xl max-h-11 flex items-center w-80 justify-center">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M19.4181 6H5.41809C4.86581 6 4.41809 6.44772 4.41809 7V19C4.41809 19.5523 4.86581 20 5.41809 20H19.4181C19.9704 20 20.4181 19.5523 20.4181 19V7C20.4181 6.44771 19.9704 6 19.4181 6ZM5.41809 4C3.76124 4 2.41809 5.34315 2.41809 7V19C2.41809 20.6569 3.76124 22 5.41809 22H19.4181C21.0749 22 22.4181 20.6569 22.4181 19V7C22.4181 5.34315 21.0749 4 19.4181 4H5.41809Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10.4181 12C9.86581 12 9.41809 12.4477 9.41809 13C9.41809 13.5523 9.86581 14 10.4181 14H17.4181C17.9704 14 18.4181 13.5523 18.4181 13C18.4181 12.4477 17.9704 12 17.4181 12H10.4181ZM7.41809 16C6.86581 16 6.41809 16.4477 6.41809 17C6.41809 17.5523 6.86581 18 7.41809 18H13.4181C13.9704 18 14.4181 17.5523 14.4181 17C14.4181 16.4477 13.9704 16 13.4181 16H7.41809Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.41809 2C6.86581 2 6.41809 2.44772 6.41809 3V7C6.41809 7.55228 6.86581 8 7.41809 8C7.97038 8 8.41809 7.55228 8.41809 7V3C8.41809 2.44772 7.97038 2 7.41809 2ZM17.4181 2C16.8658 2 16.4181 2.44772 16.4181 3V7C16.4181 7.55228 16.8658 8 17.4181 8C17.9704 8 18.4181 7.55228 18.4181 7V3C18.4181 2.44772 17.9704 2 17.4181 2Z"
                            fill="white" />
                    </svg>

                    <p class="font-semibold text-base">Tham gia ngay</p>
                </button>
            </div>
            <!-- Course interested -->
            <div class="p-6">
                <div class="flex gap-2 bg-[#FAFAFB] rounded-xl py-2.5 px-3.5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.90244 3.90226C0.921436 6.88326 0.921436 11.7164 3.90244 14.6974C6.88344 17.6784 11.7166 17.6784 14.6976 14.6974C17.6786 11.7164 17.6786 6.88326 14.6976 3.90226C11.7166 0.921253 6.88344 0.921253 3.90244 3.90226ZM5.08095 5.08077C7.41108 2.75064 11.189 2.75064 13.5191 5.08077C15.8492 7.41089 15.8492 11.1888 13.5191 13.5189C11.189 15.849 7.41108 15.849 5.08095 13.5189C2.75082 11.1888 2.75082 7.41089 5.08095 5.08077Z"
                            fill="#92929D" />
                        <path
                            d="M18.412 16.9019L14.9707 13.4607C14.1851 12.675 13.0066 13.8535 13.7922 14.6392L17.2335 18.0804C18.0191 18.8661 19.1976 17.6876 18.412 16.9019Z"
                            fill="#92929D" />
                    </svg>
                    <p class="text-sm font-light text-[#92929D]">Tìm kiếm khóa học liên quan...</p>
                </div>

                <div class="mt-6 grid gap-2">
                    <p class="text-2xl font-semibold">Khóa học liên quan</p>
                    <p class="text-lg font-normal text-[#696974] uppercase">Cùng tác giả</p>
                </div>

                <div class="grid gap-2.5">
                    <div class="p-2.5 bg-primary rounded-xl flex gap-4">
                        <div class="relative">
                            <img class="h-20 w-20 rounded-xl " src="../img/Banner.png" alt="" />
                            <img class="h-14 w-14 rounded-xl absolute bottom-2 left-0 right-0 mx-auto cursor-pointer"
                                src="../img/Profile.png" alt="" />
                        </div>

                        <div class="flex gap-3">
                            <div class="grid gap-2 w-56">
                                <h1 class="font-medium text-lg text-white">Khóa học kỹ năng tư duy phản biện</h1>
                                <p class="text-xs font-normal text-white">12/04/2022</p>
                                <div class="flex gap-4">
                                    <div class="flex items-center gap-1">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.00892 11.7017L5.16189 13.8782C4.51757 14.3708 3.59043 13.9107 3.58909 13.1008L3.58665 11.6185C2.26104 11.2998 1.28 10.1028 1.28 8.68091V4.94076C1.28 3.27294 2.62786 1.91992 4.29176 1.91992H11.0682C12.7321 1.91992 14.08 3.27294 14.08 4.94076V8.68091C14.08 10.3487 12.7321 11.7017 11.0682 11.7017H8.00892ZM4.86809 12.4916L7.40362 10.5533C7.51523 10.468 7.65182 10.4217 7.79231 10.4217H11.0682C12.0241 10.4217 12.8 9.64289 12.8 8.68091V4.94076C12.8 3.97877 12.0241 3.19992 11.0682 3.19992H4.29176C3.33588 3.19992 2.56 3.97877 2.56 4.94076V8.68091C2.56 9.62478 3.3082 10.3954 4.24328 10.4211C4.58937 10.4306 4.86516 10.7136 4.86573 11.0598L4.86809 12.4916Z"
                                                fill="white" />
                                        </svg>
                                        <p class="text-base font-normal text-white">25</p>
                                    </div>

                                    <div class="flex items-center gap-1">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.35997 2.75286L8.50765 2.60103C10.1514 0.910985 12.8243 0.910985 14.4681 2.60103C16.1017 4.28071 16.1017 6.99654 14.4681 8.67622L9.31578 13.9736C8.80237 14.5015 7.95823 14.5132 7.43035 13.9998C7.41714 13.9868 7.41714 13.9868 7.40416 13.9736L2.25189 8.67622C0.618226 6.99654 0.618226 4.28071 2.25189 2.60103C3.89564 0.910985 6.56856 0.910985 8.2123 2.60103L8.35997 2.75286ZM13.5122 7.74659C14.6426 6.58446 14.6426 4.69279 13.5122 3.53066C12.392 2.37889 10.5837 2.37889 9.46346 3.53066L8.83788 4.17385C8.57612 4.44299 8.14384 4.44299 7.88207 4.17385L7.25649 3.53066C6.13628 2.37889 4.32792 2.37889 3.2077 3.53066C2.0774 4.69279 2.0774 6.58446 3.2077 7.74659L8.35998 13.044L13.5122 7.74659Z"
                                                fill="white" />
                                        </svg>
                                        <p class="text-base font-normal text-white">120k</p>
                                    </div>

                                    <div class="flex items-center gap-1">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.36 3.33317C10.36 1.86041 11.5539 0.666504 13.0267 0.666504C14.4994 0.666504 15.6933 1.86041 15.6933 3.33317C15.6933 4.80593 14.4994 5.99984 13.0267 5.99984C12.1164 5.99984 11.3127 5.54376 10.8315 4.84764L6.20535 7.10276C6.30547 7.3831 6.36 7.6851 6.36 7.99984C6.36 8.29284 6.31274 8.5748 6.22544 8.83852L10.8251 11.1614C11.3055 10.46 12.1123 9.99984 13.0267 9.99984C14.4994 9.99984 15.6933 11.1937 15.6933 12.6665C15.6933 14.1393 14.4994 15.3332 13.0267 15.3332C11.5539 15.3332 10.36 14.1393 10.36 12.6665C10.36 12.5853 10.3636 12.505 10.3707 12.4256L5.49675 9.96424C5.02201 10.4003 4.38876 10.6665 3.69333 10.6665C2.22057 10.6665 1.02666 9.4726 1.02666 7.99984C1.02666 6.52708 2.22057 5.33317 3.69333 5.33317C4.36413 5.33317 4.97707 5.58085 5.44571 5.98974L10.372 3.58829C10.3641 3.50433 10.36 3.41922 10.36 3.33317ZM14.36 3.33317C14.36 2.59679 13.763 1.99984 13.0267 1.99984C12.2903 1.99984 11.6933 2.59679 11.6933 3.33317C11.6933 4.06955 12.2903 4.6665 13.0267 4.6665C13.763 4.6665 14.36 4.06955 14.36 3.33317ZM14.36 12.6665C14.36 11.9301 13.763 11.3332 13.0267 11.3332C12.2903 11.3332 11.6933 11.9301 11.6933 12.6665C11.6933 13.4029 12.2903 13.9998 13.0267 13.9998C13.763 13.9998 14.36 13.4029 14.36 12.6665ZM3.69333 6.6665C4.42971 6.6665 5.02666 7.26346 5.02666 7.99984C5.02666 8.73622 4.42971 9.33317 3.69333 9.33317C2.95695 9.33317 2.36 8.73622 2.36 7.99984C2.36 7.26346 2.95695 6.6665 3.69333 6.6665Z"
                                                fill="white" />
                                        </svg>
                                        <p class="text-base font-normal text-white">231</p>
                                    </div>

                                    <div class="flex items-center gap-1">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.59809 0.698242H11.7886C13.1912 0.698242 14.3283 1.8353 14.3283 3.23792V13.4744C14.3283 14.1758 13.7597 14.7443 13.0584 14.7443C12.77 14.7443 12.4903 14.6461 12.2651 14.466L8.69333 11.6082L5.12158 14.466C4.57397 14.9041 3.77487 14.8154 3.33672 14.2678C3.15656 14.0426 3.05841 13.7628 3.05841 13.4744V3.23792C3.05841 1.8353 4.19547 0.698242 5.59809 0.698242ZM5.59809 1.96808C4.89678 1.96808 4.32825 2.53661 4.32825 3.23792V13.4744L7.9 10.6167C8.3638 10.2456 9.02286 10.2456 9.48666 10.6167L13.0584 13.4744V3.23792C13.0584 2.53661 12.4899 1.96808 11.7886 1.96808H5.59809Z"
                                                fill="white" />
                                        </svg>
                                        <p class="text-base font-normal text-white">12</p>
                                    </div>
                                </div>


                            </div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.66667 7.99984C4.66667 7.26346 4.06971 6.6665 3.33333 6.6665C2.59695 6.6665 2 7.26346 2 7.99984C2 8.73622 2.59695 9.33317 3.33333 9.33317C4.06971 9.33317 4.66667 8.73622 4.66667 7.99984Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.33333 7.99984C9.33333 7.26346 8.73638 6.6665 8 6.6665C7.26362 6.6665 6.66667 7.26346 6.66667 7.99984C6.66667 8.73622 7.26362 9.33317 8 9.33317C8.73638 9.33317 9.33333 8.73622 9.33333 7.99984Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14 7.99984C14 7.26346 13.403 6.6665 12.6667 6.6665C11.9303 6.6665 11.3333 7.26346 11.3333 7.99984C11.3333 8.73622 11.9303 9.33317 12.6667 9.33317C13.403 9.33317 14 8.73622 14 7.99984Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>

                    <div class="p-2.5 rounded-xl flex gap-4">
                        <div class="relative">
                            <img class="h-20 w-20 rounded-xl " src="../img/Banner.png" alt="" />
                            <img class="h-14 w-14 rounded-xl absolute bottom-2 left-0 right-0 mx-auto cursor-pointer"
                                src="../img/Profile.png" alt="" />
                        </div>

                        <div class="flex gap-3">
                            <div class="grid gap-2 w-56">
                                <h1 class="font-medium text-lg">Khóa học kỹ năng tư duy phản biện</h1>
                                <p class="text-xs font-normal text-[#696974]">12/04/2022</p>
                                <div class="flex gap-4">
                                    <div class="flex items-center gap-1">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.00892 11.7017L5.16189 13.8782C4.51757 14.3708 3.59043 13.9107 3.58909 13.1008L3.58665 11.6185C2.26104 11.2998 1.28 10.1028 1.28 8.68091V4.94076C1.28 3.27294 2.62786 1.91992 4.29176 1.91992H11.0682C12.7321 1.91992 14.08 3.27294 14.08 4.94076V8.68091C14.08 10.3487 12.7321 11.7017 11.0682 11.7017H8.00892ZM4.86809 12.4916L7.40362 10.5533C7.51523 10.468 7.65182 10.4217 7.79231 10.4217H11.0682C12.0241 10.4217 12.8 9.64289 12.8 8.68091V4.94076C12.8 3.97877 12.0241 3.19992 11.0682 3.19992H4.29176C3.33588 3.19992 2.56 3.97877 2.56 4.94076V8.68091C2.56 9.62478 3.3082 10.3954 4.24328 10.4211C4.58937 10.4306 4.86516 10.7136 4.86573 11.0598L4.86809 12.4916Z"
                                                fill="#696974" />
                                        </svg>
                                        <p class="text-base font-normal text-[#696974]">25</p>
                                    </div>

                                    <div class="flex items-center gap-1">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.35997 2.75286L8.50765 2.60103C10.1514 0.910985 12.8243 0.910985 14.4681 2.60103C16.1017 4.28071 16.1017 6.99654 14.4681 8.67622L9.31578 13.9736C8.80237 14.5015 7.95823 14.5132 7.43035 13.9998C7.41714 13.9868 7.41714 13.9868 7.40416 13.9736L2.25189 8.67622C0.618226 6.99654 0.618226 4.28071 2.25189 2.60103C3.89564 0.910985 6.56856 0.910985 8.2123 2.60103L8.35997 2.75286ZM13.5122 7.74659C14.6426 6.58446 14.6426 4.69279 13.5122 3.53066C12.392 2.37889 10.5837 2.37889 9.46346 3.53066L8.83788 4.17385C8.57612 4.44299 8.14384 4.44299 7.88207 4.17385L7.25649 3.53066C6.13628 2.37889 4.32792 2.37889 3.2077 3.53066C2.0774 4.69279 2.0774 6.58446 3.2077 7.74659L8.35998 13.044L13.5122 7.74659Z"
                                                fill="#696974" />
                                        </svg>
                                        <p class="text-base font-normal text-[#696974]">120k</p>
                                    </div>

                                    <div class="flex items-center gap-1">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.36 3.33317C10.36 1.86041 11.5539 0.666504 13.0267 0.666504C14.4994 0.666504 15.6933 1.86041 15.6933 3.33317C15.6933 4.80593 14.4994 5.99984 13.0267 5.99984C12.1164 5.99984 11.3127 5.54376 10.8315 4.84764L6.20535 7.10276C6.30547 7.3831 6.36 7.6851 6.36 7.99984C6.36 8.29284 6.31274 8.5748 6.22544 8.83852L10.8251 11.1614C11.3055 10.46 12.1123 9.99984 13.0267 9.99984C14.4994 9.99984 15.6933 11.1937 15.6933 12.6665C15.6933 14.1393 14.4994 15.3332 13.0267 15.3332C11.5539 15.3332 10.36 14.1393 10.36 12.6665C10.36 12.5853 10.3636 12.505 10.3707 12.4256L5.49675 9.96424C5.02201 10.4003 4.38876 10.6665 3.69333 10.6665C2.22057 10.6665 1.02666 9.4726 1.02666 7.99984C1.02666 6.52708 2.22057 5.33317 3.69333 5.33317C4.36413 5.33317 4.97707 5.58085 5.44571 5.98974L10.372 3.58829C10.3641 3.50433 10.36 3.41922 10.36 3.33317ZM14.36 3.33317C14.36 2.59679 13.763 1.99984 13.0267 1.99984C12.2903 1.99984 11.6933 2.59679 11.6933 3.33317C11.6933 4.06955 12.2903 4.6665 13.0267 4.6665C13.763 4.6665 14.36 4.06955 14.36 3.33317ZM14.36 12.6665C14.36 11.9301 13.763 11.3332 13.0267 11.3332C12.2903 11.3332 11.6933 11.9301 11.6933 12.6665C11.6933 13.4029 12.2903 13.9998 13.0267 13.9998C13.763 13.9998 14.36 13.4029 14.36 12.6665ZM3.69333 6.6665C4.42971 6.6665 5.02666 7.26346 5.02666 7.99984C5.02666 8.73622 4.42971 9.33317 3.69333 9.33317C2.95695 9.33317 2.36 8.73622 2.36 7.99984C2.36 7.26346 2.95695 6.6665 3.69333 6.6665Z"
                                                fill="#696974" />
                                        </svg>
                                        <p class="text-base font-normal text-[#696974]">231</p>
                                    </div>

                                    <div class="flex items-center gap-1">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.59809 0.698242H11.7886C13.1912 0.698242 14.3283 1.8353 14.3283 3.23792V13.4744C14.3283 14.1758 13.7597 14.7443 13.0584 14.7443C12.77 14.7443 12.4903 14.6461 12.2651 14.466L8.69333 11.6082L5.12158 14.466C4.57397 14.9041 3.77487 14.8154 3.33672 14.2678C3.15656 14.0426 3.05841 13.7628 3.05841 13.4744V3.23792C3.05841 1.8353 4.19547 0.698242 5.59809 0.698242ZM5.59809 1.96808C4.89678 1.96808 4.32825 2.53661 4.32825 3.23792V13.4744L7.9 10.6167C8.3638 10.2456 9.02286 10.2456 9.48666 10.6167L13.0584 13.4744V3.23792C13.0584 2.53661 12.4899 1.96808 11.7886 1.96808H5.59809Z"
                                                fill="#696974" />
                                        </svg>
                                        <p class="text-base font-normal text-[#696974]">12</p>
                                    </div>
                                </div>


                            </div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.66667 7.99984C4.66667 7.26346 4.06971 6.6665 3.33333 6.6665C2.59695 6.6665 2 7.26346 2 7.99984C2 8.73622 2.59695 9.33317 3.33333 9.33317C4.06971 9.33317 4.66667 8.73622 4.66667 7.99984Z"
                                    fill="#696974" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.33333 7.99984C9.33333 7.26346 8.73638 6.6665 8 6.6665C7.26362 6.6665 6.66667 7.26346 6.66667 7.99984C6.66667 8.73622 7.26362 9.33317 8 9.33317C8.73638 9.33317 9.33333 8.73622 9.33333 7.99984Z"
                                    fill="#696974" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14 7.99984C14 7.26346 13.403 6.6665 12.6667 6.6665C11.9303 6.6665 11.3333 7.26346 11.3333 7.99984C11.3333 8.73622 11.9303 9.33317 12.6667 9.33317C13.403 9.33317 14 8.73622 14 7.99984Z"
                                    fill="#696974" />
                            </svg>
                        </div>
                    </div>

                    <div class="p-2.5 rounded-xl flex gap-4">
                        <div class="relative">
                            <img class="h-20 w-20 rounded-xl " src="../img/Banner.png" alt="" />
                            <img class="h-14 w-14 rounded-xl absolute bottom-2 left-0 right-0 mx-auto cursor-pointer"
                                src="../img/Profile.png" alt="" />
                        </div>

                        <div class="flex gap-3">
                            <div class="grid gap-2 w-56">
                                <h1 class="font-medium text-lg">Khóa học kỹ năng tư duy phản biện</h1>
                                <p class="text-xs font-normal text-[#696974]">12/04/2022</p>
                                <div class="flex gap-4">
                                    <div class="flex items-center gap-1">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.00892 11.7017L5.16189 13.8782C4.51757 14.3708 3.59043 13.9107 3.58909 13.1008L3.58665 11.6185C2.26104 11.2998 1.28 10.1028 1.28 8.68091V4.94076C1.28 3.27294 2.62786 1.91992 4.29176 1.91992H11.0682C12.7321 1.91992 14.08 3.27294 14.08 4.94076V8.68091C14.08 10.3487 12.7321 11.7017 11.0682 11.7017H8.00892ZM4.86809 12.4916L7.40362 10.5533C7.51523 10.468 7.65182 10.4217 7.79231 10.4217H11.0682C12.0241 10.4217 12.8 9.64289 12.8 8.68091V4.94076C12.8 3.97877 12.0241 3.19992 11.0682 3.19992H4.29176C3.33588 3.19992 2.56 3.97877 2.56 4.94076V8.68091C2.56 9.62478 3.3082 10.3954 4.24328 10.4211C4.58937 10.4306 4.86516 10.7136 4.86573 11.0598L4.86809 12.4916Z"
                                                fill="#696974" />
                                        </svg>
                                        <p class="text-base font-normal text-[#696974]">25</p>
                                    </div>

                                    <div class="flex items-center gap-1">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.35997 2.75286L8.50765 2.60103C10.1514 0.910985 12.8243 0.910985 14.4681 2.60103C16.1017 4.28071 16.1017 6.99654 14.4681 8.67622L9.31578 13.9736C8.80237 14.5015 7.95823 14.5132 7.43035 13.9998C7.41714 13.9868 7.41714 13.9868 7.40416 13.9736L2.25189 8.67622C0.618226 6.99654 0.618226 4.28071 2.25189 2.60103C3.89564 0.910985 6.56856 0.910985 8.2123 2.60103L8.35997 2.75286ZM13.5122 7.74659C14.6426 6.58446 14.6426 4.69279 13.5122 3.53066C12.392 2.37889 10.5837 2.37889 9.46346 3.53066L8.83788 4.17385C8.57612 4.44299 8.14384 4.44299 7.88207 4.17385L7.25649 3.53066C6.13628 2.37889 4.32792 2.37889 3.2077 3.53066C2.0774 4.69279 2.0774 6.58446 3.2077 7.74659L8.35998 13.044L13.5122 7.74659Z"
                                                fill="#696974" />
                                        </svg>
                                        <p class="text-base font-normal text-[#696974]">120k</p>
                                    </div>

                                    <div class="flex items-center gap-1">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.36 3.33317C10.36 1.86041 11.5539 0.666504 13.0267 0.666504C14.4994 0.666504 15.6933 1.86041 15.6933 3.33317C15.6933 4.80593 14.4994 5.99984 13.0267 5.99984C12.1164 5.99984 11.3127 5.54376 10.8315 4.84764L6.20535 7.10276C6.30547 7.3831 6.36 7.6851 6.36 7.99984C6.36 8.29284 6.31274 8.5748 6.22544 8.83852L10.8251 11.1614C11.3055 10.46 12.1123 9.99984 13.0267 9.99984C14.4994 9.99984 15.6933 11.1937 15.6933 12.6665C15.6933 14.1393 14.4994 15.3332 13.0267 15.3332C11.5539 15.3332 10.36 14.1393 10.36 12.6665C10.36 12.5853 10.3636 12.505 10.3707 12.4256L5.49675 9.96424C5.02201 10.4003 4.38876 10.6665 3.69333 10.6665C2.22057 10.6665 1.02666 9.4726 1.02666 7.99984C1.02666 6.52708 2.22057 5.33317 3.69333 5.33317C4.36413 5.33317 4.97707 5.58085 5.44571 5.98974L10.372 3.58829C10.3641 3.50433 10.36 3.41922 10.36 3.33317ZM14.36 3.33317C14.36 2.59679 13.763 1.99984 13.0267 1.99984C12.2903 1.99984 11.6933 2.59679 11.6933 3.33317C11.6933 4.06955 12.2903 4.6665 13.0267 4.6665C13.763 4.6665 14.36 4.06955 14.36 3.33317ZM14.36 12.6665C14.36 11.9301 13.763 11.3332 13.0267 11.3332C12.2903 11.3332 11.6933 11.9301 11.6933 12.6665C11.6933 13.4029 12.2903 13.9998 13.0267 13.9998C13.763 13.9998 14.36 13.4029 14.36 12.6665ZM3.69333 6.6665C4.42971 6.6665 5.02666 7.26346 5.02666 7.99984C5.02666 8.73622 4.42971 9.33317 3.69333 9.33317C2.95695 9.33317 2.36 8.73622 2.36 7.99984C2.36 7.26346 2.95695 6.6665 3.69333 6.6665Z"
                                                fill="#696974" />
                                        </svg>
                                        <p class="text-base font-normal text-[#696974]">231</p>
                                    </div>

                                    <div class="flex items-center gap-1">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.59809 0.698242H11.7886C13.1912 0.698242 14.3283 1.8353 14.3283 3.23792V13.4744C14.3283 14.1758 13.7597 14.7443 13.0584 14.7443C12.77 14.7443 12.4903 14.6461 12.2651 14.466L8.69333 11.6082L5.12158 14.466C4.57397 14.9041 3.77487 14.8154 3.33672 14.2678C3.15656 14.0426 3.05841 13.7628 3.05841 13.4744V3.23792C3.05841 1.8353 4.19547 0.698242 5.59809 0.698242ZM5.59809 1.96808C4.89678 1.96808 4.32825 2.53661 4.32825 3.23792V13.4744L7.9 10.6167C8.3638 10.2456 9.02286 10.2456 9.48666 10.6167L13.0584 13.4744V3.23792C13.0584 2.53661 12.4899 1.96808 11.7886 1.96808H5.59809Z"
                                                fill="#696974" />
                                        </svg>
                                        <p class="text-base font-normal text-[#696974]">12</p>
                                    </div>
                                </div>


                            </div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.66667 7.99984C4.66667 7.26346 4.06971 6.6665 3.33333 6.6665C2.59695 6.6665 2 7.26346 2 7.99984C2 8.73622 2.59695 9.33317 3.33333 9.33317C4.06971 9.33317 4.66667 8.73622 4.66667 7.99984Z"
                                    fill="#696974" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.33333 7.99984C9.33333 7.26346 8.73638 6.6665 8 6.6665C7.26362 6.6665 6.66667 7.26346 6.66667 7.99984C6.66667 8.73622 7.26362 9.33317 8 9.33317C8.73638 9.33317 9.33333 8.73622 9.33333 7.99984Z"
                                    fill="#696974" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14 7.99984C14 7.26346 13.403 6.6665 12.6667 6.6665C11.9303 6.6665 11.3333 7.26346 11.3333 7.99984C11.3333 8.73622 11.9303 9.33317 12.6667 9.33317C13.403 9.33317 14 8.73622 14 7.99984Z"
                                    fill="#696974" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-2 grid gap-2">
                        <p class="text-lg font-normal text-[#696974] uppercase">cùng chủ đề</p>
                    </div>

                    <div class="grid gap-2.5">
                        <div class="p-2.5 bg-primary rounded-xl flex gap-4">
                            <div class="relative">
                                <img class="h-20 w-20 rounded-xl " src="../img/Banner.png" alt="" />
                                <img class="h-14 w-14 rounded-xl absolute bottom-2 left-0 right-0 mx-auto cursor-pointer"
                                    src="../img/Profile.png" alt="" />
                            </div>

                            <div class="flex gap-3">
                                <div class="grid gap-2 w-56">
                                    <h1 class="font-medium text-lg text-white">Khóa học kỹ năng tư duy phản biện</h1>
                                    <p class="text-xs font-normal text-white">12/04/2022</p>
                                    <div class="flex gap-4">
                                        <div class="flex items-center gap-1">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.00892 11.7017L5.16189 13.8782C4.51757 14.3708 3.59043 13.9107 3.58909 13.1008L3.58665 11.6185C2.26104 11.2998 1.28 10.1028 1.28 8.68091V4.94076C1.28 3.27294 2.62786 1.91992 4.29176 1.91992H11.0682C12.7321 1.91992 14.08 3.27294 14.08 4.94076V8.68091C14.08 10.3487 12.7321 11.7017 11.0682 11.7017H8.00892ZM4.86809 12.4916L7.40362 10.5533C7.51523 10.468 7.65182 10.4217 7.79231 10.4217H11.0682C12.0241 10.4217 12.8 9.64289 12.8 8.68091V4.94076C12.8 3.97877 12.0241 3.19992 11.0682 3.19992H4.29176C3.33588 3.19992 2.56 3.97877 2.56 4.94076V8.68091C2.56 9.62478 3.3082 10.3954 4.24328 10.4211C4.58937 10.4306 4.86516 10.7136 4.86573 11.0598L4.86809 12.4916Z"
                                                    fill="white" />
                                            </svg>
                                            <p class="text-base font-normal text-white">25</p>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.35997 2.75286L8.50765 2.60103C10.1514 0.910985 12.8243 0.910985 14.4681 2.60103C16.1017 4.28071 16.1017 6.99654 14.4681 8.67622L9.31578 13.9736C8.80237 14.5015 7.95823 14.5132 7.43035 13.9998C7.41714 13.9868 7.41714 13.9868 7.40416 13.9736L2.25189 8.67622C0.618226 6.99654 0.618226 4.28071 2.25189 2.60103C3.89564 0.910985 6.56856 0.910985 8.2123 2.60103L8.35997 2.75286ZM13.5122 7.74659C14.6426 6.58446 14.6426 4.69279 13.5122 3.53066C12.392 2.37889 10.5837 2.37889 9.46346 3.53066L8.83788 4.17385C8.57612 4.44299 8.14384 4.44299 7.88207 4.17385L7.25649 3.53066C6.13628 2.37889 4.32792 2.37889 3.2077 3.53066C2.0774 4.69279 2.0774 6.58446 3.2077 7.74659L8.35998 13.044L13.5122 7.74659Z"
                                                    fill="white" />
                                            </svg>
                                            <p class="text-base font-normal text-white">120k</p>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.36 3.33317C10.36 1.86041 11.5539 0.666504 13.0267 0.666504C14.4994 0.666504 15.6933 1.86041 15.6933 3.33317C15.6933 4.80593 14.4994 5.99984 13.0267 5.99984C12.1164 5.99984 11.3127 5.54376 10.8315 4.84764L6.20535 7.10276C6.30547 7.3831 6.36 7.6851 6.36 7.99984C6.36 8.29284 6.31274 8.5748 6.22544 8.83852L10.8251 11.1614C11.3055 10.46 12.1123 9.99984 13.0267 9.99984C14.4994 9.99984 15.6933 11.1937 15.6933 12.6665C15.6933 14.1393 14.4994 15.3332 13.0267 15.3332C11.5539 15.3332 10.36 14.1393 10.36 12.6665C10.36 12.5853 10.3636 12.505 10.3707 12.4256L5.49675 9.96424C5.02201 10.4003 4.38876 10.6665 3.69333 10.6665C2.22057 10.6665 1.02666 9.4726 1.02666 7.99984C1.02666 6.52708 2.22057 5.33317 3.69333 5.33317C4.36413 5.33317 4.97707 5.58085 5.44571 5.98974L10.372 3.58829C10.3641 3.50433 10.36 3.41922 10.36 3.33317ZM14.36 3.33317C14.36 2.59679 13.763 1.99984 13.0267 1.99984C12.2903 1.99984 11.6933 2.59679 11.6933 3.33317C11.6933 4.06955 12.2903 4.6665 13.0267 4.6665C13.763 4.6665 14.36 4.06955 14.36 3.33317ZM14.36 12.6665C14.36 11.9301 13.763 11.3332 13.0267 11.3332C12.2903 11.3332 11.6933 11.9301 11.6933 12.6665C11.6933 13.4029 12.2903 13.9998 13.0267 13.9998C13.763 13.9998 14.36 13.4029 14.36 12.6665ZM3.69333 6.6665C4.42971 6.6665 5.02666 7.26346 5.02666 7.99984C5.02666 8.73622 4.42971 9.33317 3.69333 9.33317C2.95695 9.33317 2.36 8.73622 2.36 7.99984C2.36 7.26346 2.95695 6.6665 3.69333 6.6665Z"
                                                    fill="white" />
                                            </svg>
                                            <p class="text-base font-normal text-white">231</p>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.59809 0.698242H11.7886C13.1912 0.698242 14.3283 1.8353 14.3283 3.23792V13.4744C14.3283 14.1758 13.7597 14.7443 13.0584 14.7443C12.77 14.7443 12.4903 14.6461 12.2651 14.466L8.69333 11.6082L5.12158 14.466C4.57397 14.9041 3.77487 14.8154 3.33672 14.2678C3.15656 14.0426 3.05841 13.7628 3.05841 13.4744V3.23792C3.05841 1.8353 4.19547 0.698242 5.59809 0.698242ZM5.59809 1.96808C4.89678 1.96808 4.32825 2.53661 4.32825 3.23792V13.4744L7.9 10.6167C8.3638 10.2456 9.02286 10.2456 9.48666 10.6167L13.0584 13.4744V3.23792C13.0584 2.53661 12.4899 1.96808 11.7886 1.96808H5.59809Z"
                                                    fill="white" />
                                            </svg>
                                            <p class="text-base font-normal text-white">12</p>
                                        </div>
                                    </div>


                                </div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.66667 7.99984C4.66667 7.26346 4.06971 6.6665 3.33333 6.6665C2.59695 6.6665 2 7.26346 2 7.99984C2 8.73622 2.59695 9.33317 3.33333 9.33317C4.06971 9.33317 4.66667 8.73622 4.66667 7.99984Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.33333 7.99984C9.33333 7.26346 8.73638 6.6665 8 6.6665C7.26362 6.6665 6.66667 7.26346 6.66667 7.99984C6.66667 8.73622 7.26362 9.33317 8 9.33317C8.73638 9.33317 9.33333 8.73622 9.33333 7.99984Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 7.99984C14 7.26346 13.403 6.6665 12.6667 6.6665C11.9303 6.6665 11.3333 7.26346 11.3333 7.99984C11.3333 8.73622 11.9303 9.33317 12.6667 9.33317C13.403 9.33317 14 8.73622 14 7.99984Z"
                                        fill="white" />
                                </svg>
                            </div>
                        </div>

                        <div class="p-2.5 rounded-xl flex gap-4">
                            <div class="relative">
                                <img class="h-20 w-20 rounded-xl " src="../img/Banner.png" alt="" />
                                <img class="h-14 w-14 rounded-xl absolute bottom-2 left-0 right-0 mx-auto cursor-pointer"
                                    src="../img/Profile.png" alt="" />
                            </div>

                            <div class="flex gap-3">
                                <div class="grid gap-2 w-56">
                                    <h1 class="font-medium text-lg">Khóa học kỹ năng tư duy phản biện</h1>
                                    <p class="text-xs font-normal text-[#696974]">12/04/2022</p>
                                    <div class="flex gap-4">
                                        <div class="flex items-center gap-1">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.00892 11.7017L5.16189 13.8782C4.51757 14.3708 3.59043 13.9107 3.58909 13.1008L3.58665 11.6185C2.26104 11.2998 1.28 10.1028 1.28 8.68091V4.94076C1.28 3.27294 2.62786 1.91992 4.29176 1.91992H11.0682C12.7321 1.91992 14.08 3.27294 14.08 4.94076V8.68091C14.08 10.3487 12.7321 11.7017 11.0682 11.7017H8.00892ZM4.86809 12.4916L7.40362 10.5533C7.51523 10.468 7.65182 10.4217 7.79231 10.4217H11.0682C12.0241 10.4217 12.8 9.64289 12.8 8.68091V4.94076C12.8 3.97877 12.0241 3.19992 11.0682 3.19992H4.29176C3.33588 3.19992 2.56 3.97877 2.56 4.94076V8.68091C2.56 9.62478 3.3082 10.3954 4.24328 10.4211C4.58937 10.4306 4.86516 10.7136 4.86573 11.0598L4.86809 12.4916Z"
                                                    fill="#696974" />
                                            </svg>
                                            <p class="text-base font-normal text-[#696974]">25</p>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.35997 2.75286L8.50765 2.60103C10.1514 0.910985 12.8243 0.910985 14.4681 2.60103C16.1017 4.28071 16.1017 6.99654 14.4681 8.67622L9.31578 13.9736C8.80237 14.5015 7.95823 14.5132 7.43035 13.9998C7.41714 13.9868 7.41714 13.9868 7.40416 13.9736L2.25189 8.67622C0.618226 6.99654 0.618226 4.28071 2.25189 2.60103C3.89564 0.910985 6.56856 0.910985 8.2123 2.60103L8.35997 2.75286ZM13.5122 7.74659C14.6426 6.58446 14.6426 4.69279 13.5122 3.53066C12.392 2.37889 10.5837 2.37889 9.46346 3.53066L8.83788 4.17385C8.57612 4.44299 8.14384 4.44299 7.88207 4.17385L7.25649 3.53066C6.13628 2.37889 4.32792 2.37889 3.2077 3.53066C2.0774 4.69279 2.0774 6.58446 3.2077 7.74659L8.35998 13.044L13.5122 7.74659Z"
                                                    fill="#696974" />
                                            </svg>
                                            <p class="text-base font-normal text-[#696974]">120k</p>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.36 3.33317C10.36 1.86041 11.5539 0.666504 13.0267 0.666504C14.4994 0.666504 15.6933 1.86041 15.6933 3.33317C15.6933 4.80593 14.4994 5.99984 13.0267 5.99984C12.1164 5.99984 11.3127 5.54376 10.8315 4.84764L6.20535 7.10276C6.30547 7.3831 6.36 7.6851 6.36 7.99984C6.36 8.29284 6.31274 8.5748 6.22544 8.83852L10.8251 11.1614C11.3055 10.46 12.1123 9.99984 13.0267 9.99984C14.4994 9.99984 15.6933 11.1937 15.6933 12.6665C15.6933 14.1393 14.4994 15.3332 13.0267 15.3332C11.5539 15.3332 10.36 14.1393 10.36 12.6665C10.36 12.5853 10.3636 12.505 10.3707 12.4256L5.49675 9.96424C5.02201 10.4003 4.38876 10.6665 3.69333 10.6665C2.22057 10.6665 1.02666 9.4726 1.02666 7.99984C1.02666 6.52708 2.22057 5.33317 3.69333 5.33317C4.36413 5.33317 4.97707 5.58085 5.44571 5.98974L10.372 3.58829C10.3641 3.50433 10.36 3.41922 10.36 3.33317ZM14.36 3.33317C14.36 2.59679 13.763 1.99984 13.0267 1.99984C12.2903 1.99984 11.6933 2.59679 11.6933 3.33317C11.6933 4.06955 12.2903 4.6665 13.0267 4.6665C13.763 4.6665 14.36 4.06955 14.36 3.33317ZM14.36 12.6665C14.36 11.9301 13.763 11.3332 13.0267 11.3332C12.2903 11.3332 11.6933 11.9301 11.6933 12.6665C11.6933 13.4029 12.2903 13.9998 13.0267 13.9998C13.763 13.9998 14.36 13.4029 14.36 12.6665ZM3.69333 6.6665C4.42971 6.6665 5.02666 7.26346 5.02666 7.99984C5.02666 8.73622 4.42971 9.33317 3.69333 9.33317C2.95695 9.33317 2.36 8.73622 2.36 7.99984C2.36 7.26346 2.95695 6.6665 3.69333 6.6665Z"
                                                    fill="#696974" />
                                            </svg>
                                            <p class="text-base font-normal text-[#696974]">231</p>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.59809 0.698242H11.7886C13.1912 0.698242 14.3283 1.8353 14.3283 3.23792V13.4744C14.3283 14.1758 13.7597 14.7443 13.0584 14.7443C12.77 14.7443 12.4903 14.6461 12.2651 14.466L8.69333 11.6082L5.12158 14.466C4.57397 14.9041 3.77487 14.8154 3.33672 14.2678C3.15656 14.0426 3.05841 13.7628 3.05841 13.4744V3.23792C3.05841 1.8353 4.19547 0.698242 5.59809 0.698242ZM5.59809 1.96808C4.89678 1.96808 4.32825 2.53661 4.32825 3.23792V13.4744L7.9 10.6167C8.3638 10.2456 9.02286 10.2456 9.48666 10.6167L13.0584 13.4744V3.23792C13.0584 2.53661 12.4899 1.96808 11.7886 1.96808H5.59809Z"
                                                    fill="#696974" />
                                            </svg>
                                            <p class="text-base font-normal text-[#696974]">12</p>
                                        </div>
                                    </div>


                                </div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.66667 7.99984C4.66667 7.26346 4.06971 6.6665 3.33333 6.6665C2.59695 6.6665 2 7.26346 2 7.99984C2 8.73622 2.59695 9.33317 3.33333 9.33317C4.06971 9.33317 4.66667 8.73622 4.66667 7.99984Z"
                                        fill="#696974" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.33333 7.99984C9.33333 7.26346 8.73638 6.6665 8 6.6665C7.26362 6.6665 6.66667 7.26346 6.66667 7.99984C6.66667 8.73622 7.26362 9.33317 8 9.33317C8.73638 9.33317 9.33333 8.73622 9.33333 7.99984Z"
                                        fill="#696974" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 7.99984C14 7.26346 13.403 6.6665 12.6667 6.6665C11.9303 6.6665 11.3333 7.26346 11.3333 7.99984C11.3333 8.73622 11.9303 9.33317 12.6667 9.33317C13.403 9.33317 14 8.73622 14 7.99984Z"
                                        fill="#696974" />
                                </svg>
                            </div>
                        </div>

                        <div class="p-2.5 rounded-xl flex gap-4">
                            <div class="relative">
                                <img class="h-20 w-20 rounded-xl " src="../img/Banner.png" alt="" />
                                <img class="h-14 w-14 rounded-xl absolute bottom-2 left-0 right-0 mx-auto cursor-pointer"
                                    src="../img/Profile.png" alt="" />
                            </div>

                            <div class="flex gap-3">
                                <div class="grid gap-2 w-56">
                                    <h1 class="font-medium text-lg">Khóa học kỹ năng tư duy phản biện</h1>
                                    <p class="text-xs font-normal text-[#696974]">12/04/2022</p>
                                    <div class="flex gap-4">
                                        <div class="flex items-center gap-1">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.00892 11.7017L5.16189 13.8782C4.51757 14.3708 3.59043 13.9107 3.58909 13.1008L3.58665 11.6185C2.26104 11.2998 1.28 10.1028 1.28 8.68091V4.94076C1.28 3.27294 2.62786 1.91992 4.29176 1.91992H11.0682C12.7321 1.91992 14.08 3.27294 14.08 4.94076V8.68091C14.08 10.3487 12.7321 11.7017 11.0682 11.7017H8.00892ZM4.86809 12.4916L7.40362 10.5533C7.51523 10.468 7.65182 10.4217 7.79231 10.4217H11.0682C12.0241 10.4217 12.8 9.64289 12.8 8.68091V4.94076C12.8 3.97877 12.0241 3.19992 11.0682 3.19992H4.29176C3.33588 3.19992 2.56 3.97877 2.56 4.94076V8.68091C2.56 9.62478 3.3082 10.3954 4.24328 10.4211C4.58937 10.4306 4.86516 10.7136 4.86573 11.0598L4.86809 12.4916Z"
                                                    fill="#696974" />
                                            </svg>
                                            <p class="text-base font-normal text-[#696974]">25</p>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M8.35997 2.75286L8.50765 2.60103C10.1514 0.910985 12.8243 0.910985 14.4681 2.60103C16.1017 4.28071 16.1017 6.99654 14.4681 8.67622L9.31578 13.9736C8.80237 14.5015 7.95823 14.5132 7.43035 13.9998C7.41714 13.9868 7.41714 13.9868 7.40416 13.9736L2.25189 8.67622C0.618226 6.99654 0.618226 4.28071 2.25189 2.60103C3.89564 0.910985 6.56856 0.910985 8.2123 2.60103L8.35997 2.75286ZM13.5122 7.74659C14.6426 6.58446 14.6426 4.69279 13.5122 3.53066C12.392 2.37889 10.5837 2.37889 9.46346 3.53066L8.83788 4.17385C8.57612 4.44299 8.14384 4.44299 7.88207 4.17385L7.25649 3.53066C6.13628 2.37889 4.32792 2.37889 3.2077 3.53066C2.0774 4.69279 2.0774 6.58446 3.2077 7.74659L8.35998 13.044L13.5122 7.74659Z"
                                                    fill="#696974" />
                                            </svg>
                                            <p class="text-base font-normal text-[#696974]">120k</p>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.36 3.33317C10.36 1.86041 11.5539 0.666504 13.0267 0.666504C14.4994 0.666504 15.6933 1.86041 15.6933 3.33317C15.6933 4.80593 14.4994 5.99984 13.0267 5.99984C12.1164 5.99984 11.3127 5.54376 10.8315 4.84764L6.20535 7.10276C6.30547 7.3831 6.36 7.6851 6.36 7.99984C6.36 8.29284 6.31274 8.5748 6.22544 8.83852L10.8251 11.1614C11.3055 10.46 12.1123 9.99984 13.0267 9.99984C14.4994 9.99984 15.6933 11.1937 15.6933 12.6665C15.6933 14.1393 14.4994 15.3332 13.0267 15.3332C11.5539 15.3332 10.36 14.1393 10.36 12.6665C10.36 12.5853 10.3636 12.505 10.3707 12.4256L5.49675 9.96424C5.02201 10.4003 4.38876 10.6665 3.69333 10.6665C2.22057 10.6665 1.02666 9.4726 1.02666 7.99984C1.02666 6.52708 2.22057 5.33317 3.69333 5.33317C4.36413 5.33317 4.97707 5.58085 5.44571 5.98974L10.372 3.58829C10.3641 3.50433 10.36 3.41922 10.36 3.33317ZM14.36 3.33317C14.36 2.59679 13.763 1.99984 13.0267 1.99984C12.2903 1.99984 11.6933 2.59679 11.6933 3.33317C11.6933 4.06955 12.2903 4.6665 13.0267 4.6665C13.763 4.6665 14.36 4.06955 14.36 3.33317ZM14.36 12.6665C14.36 11.9301 13.763 11.3332 13.0267 11.3332C12.2903 11.3332 11.6933 11.9301 11.6933 12.6665C11.6933 13.4029 12.2903 13.9998 13.0267 13.9998C13.763 13.9998 14.36 13.4029 14.36 12.6665ZM3.69333 6.6665C4.42971 6.6665 5.02666 7.26346 5.02666 7.99984C5.02666 8.73622 4.42971 9.33317 3.69333 9.33317C2.95695 9.33317 2.36 8.73622 2.36 7.99984C2.36 7.26346 2.95695 6.6665 3.69333 6.6665Z"
                                                    fill="#696974" />
                                            </svg>
                                            <p class="text-base font-normal text-[#696974]">231</p>
                                        </div>

                                        <div class="flex items-center gap-1">
                                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.59809 0.698242H11.7886C13.1912 0.698242 14.3283 1.8353 14.3283 3.23792V13.4744C14.3283 14.1758 13.7597 14.7443 13.0584 14.7443C12.77 14.7443 12.4903 14.6461 12.2651 14.466L8.69333 11.6082L5.12158 14.466C4.57397 14.9041 3.77487 14.8154 3.33672 14.2678C3.15656 14.0426 3.05841 13.7628 3.05841 13.4744V3.23792C3.05841 1.8353 4.19547 0.698242 5.59809 0.698242ZM5.59809 1.96808C4.89678 1.96808 4.32825 2.53661 4.32825 3.23792V13.4744L7.9 10.6167C8.3638 10.2456 9.02286 10.2456 9.48666 10.6167L13.0584 13.4744V3.23792C13.0584 2.53661 12.4899 1.96808 11.7886 1.96808H5.59809Z"
                                                    fill="#696974" />
                                            </svg>
                                            <p class="text-base font-normal text-[#696974]">12</p>
                                        </div>
                                    </div>


                                </div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.66667 7.99984C4.66667 7.26346 4.06971 6.6665 3.33333 6.6665C2.59695 6.6665 2 7.26346 2 7.99984C2 8.73622 2.59695 9.33317 3.33333 9.33317C4.06971 9.33317 4.66667 8.73622 4.66667 7.99984Z"
                                        fill="#696974" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.33333 7.99984C9.33333 7.26346 8.73638 6.6665 8 6.6665C7.26362 6.6665 6.66667 7.26346 6.66667 7.99984C6.66667 8.73622 7.26362 9.33317 8 9.33317C8.73638 9.33317 9.33333 8.73622 9.33333 7.99984Z"
                                        fill="#696974" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14 7.99984C14 7.26346 13.403 6.6665 12.6667 6.6665C11.9303 6.6665 11.3333 7.26346 11.3333 7.99984C11.3333 8.73622 11.9303 9.33317 12.6667 9.33317C13.403 9.33317 14 8.73622 14 7.99984Z"
                                        fill="#696974" />
                                </svg>
                            </div>
                        </div>
                        <div class="mt-6 grid gap-2">
                            <p class="text-2xl font-semibold">Mentors liên quan</p>
                            <p class="text-lg font-normal text-[#696974] uppercase">Mentors (10)</p>
                        </div>

                        <div class="flex gap-4">
                            <div class="grid">
                                <img class="h-12 w-12 rounded-3xl" src="../img/Avatar.png" alt="" />
                                <p class="text-xs font-normal text-primary">Level 2</p>
                            </div>

                            <div class="grid font-normal items-center">
                                <h1 class="text-base">Austin Robertson</h1>
                                <h1 class="font-light text-base text-[#92929D]">Front-End Developer</h1>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="grid">
                                <img class="h-12 w-12 rounded-3xl" src="../img/Avatar.png" alt="" />
                                <p class="text-xs font-normal text-primary">Level 2</p>
                            </div>

                            <div class="grid font-normal items-center">
                                <h1 class="text-base">Austin Robertson</h1>
                                <h1 class="font-light text-base text-[#92929D]">Front-End Developer</h1>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="grid">
                                <img class="h-12 w-12 rounded-3xl" src="../img/Avatar.png" alt="" />
                                <p class="text-xs font-normal text-primary">Level 2</p>
                            </div>

                            <div class="grid font-normal items-center">
                                <h1 class="text-base">Austin Robertson</h1>
                                <h1 class="font-light text-base text-[#92929D]">Front-End Developer</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
