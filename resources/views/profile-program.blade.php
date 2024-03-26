@include('head')
@include('header')
@include('sidebar')


<body class="bg-background-home">
    <div class="bg-cover bg-center h-72 w-screen" style="background-image: url(../img/Artboard.png);">
        <div class="pt-p-header pl-p-sidebar w-main-layout mx-auto">
            <div class="mt-[2.625rem]">
                <div class="grid max-h-fit">
                    <div class="flex font-normal text-base gap-2 text-white">
                        <p>Trang chủ</p>
                        <img src="../svg/ic_Chevron_Right_Duo.svg" />
                        <p>Mentors</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- List -->
    <div class="bg-[#D6D6FD] w-screen">
        <div class="pl-p-sidebar">
            <div class=" mx-auto w-main-layout">
                <div class="flex py-6 justify-between border-b-[1px] border-primary">
                    <div class="flex gap-4">
                        <img class="h-40 w-40" src="../img/Avatar.png" alt="" />
                        <div class="my-auto grid gap-2">
                            <p class="font-semibold text-4xl">Nguyen Van A</p>
                            <p class="font-light text-xl text-[#403ECC]">Senior tại ABC, 10 năm kinh nghiệm tư vấn</p>
                            <button class="bg-[#30AB7E] px-3 py-1.5 rounded max-w-fit">
                                <p class="text-sm text-white font-normal">Mentee</p>
                            </button>
                        </div>
                    </div>

                    <div class="grid gap-4 h-fit self-center">
                        <div class="flex gap-4">
                            <button
                                class="bg-primary py-2.5 px-4 text-base font-semibold text-white rounded-xl min-w-[12rem]">Đăng
                                bài
                                viết</button>
                            <button
                                class="bg-white py-2.5 px-4 text-base font-semibold text-primary rounded-xl min-w-[12rem]">Tạo
                                bài
                                học</button>
                        </div>

                        <div class="flex gap-2.5 justify-end">
                            <div class="flex">
                                <img class="h-6 w-6 z-30" src="../img/Avatar.png" alt="" />
                                <img class="h-6 w-6 -ml-2 z-20" src="../img/Avatar.png" alt="" />
                                <img class="h-6 w-6 -ml-2 z-10" src="../img/Avatar.png" alt="" />
                            </div>
                            <p class="text-base font-light text-primary"><b>500k</b> người đang theo dõi </p>
                        </div>
                    </div>
                </div>

                <div class="uppercase flex justify-between">                    
                    <ul class="flex gap-14 pt-6">
                        <li class="text-primary text-lg font-normal cursor-pointer"
                            onclick="location.href='{{ url('profile') }}'">VỀ TÔI
                        </li>
                        <li class="text-[#22216D] text-lg font-semibold cursor-pointer"
                            onclick="location.href='{{ url('profile/program') }}'">CHƯƠNG TRÌNH
                            <svg class="m-auto" width="25" height="17" viewBox="0 0 25 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 0L24.5 17H0.5L12.5 0Z" fill="#F6F6FF" />
                            </svg>
                        </li>
                        <li class="text-primary text-lg font-normal cursor-pointer"
                            onclick="location.href='{{ url('profile/mentee') }}'">MENTEE </li>
                        <li class="text-primary text-lg font-normal cursor-pointer"
                            onclick="location.href='{{ url('profile/store') }}'">THEO DÕI ĐƠN HÀNG</li>
                        <li class="text-primary text-lg font-normal cursor-pointer"
                            onclick="location.href='{{ url('profile/evaluate') }}'">ĐÁNH GIÁ</li>
                    </ul>

                    <div class="flex gap-6 items-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.4998 4.16683C12.4998 2.32588 13.9922 0.833496 15.8332 0.833496C17.6741 0.833496 19.1665 2.32588 19.1665 4.16683C19.1665 6.00778 17.6741 7.50016 15.8332 7.50016C14.6953 7.50016 13.6907 6.93006 13.0892 6.05992L7.30653 8.87882C7.43168 9.22924 7.49984 9.60674 7.49984 10.0002C7.49984 10.3664 7.44077 10.7189 7.33164 11.0485L13.0812 13.9521C13.6817 13.0754 14.6903 12.5002 15.8332 12.5002C17.6741 12.5002 19.1665 13.9925 19.1665 15.8335C19.1665 17.6744 17.6741 19.1668 15.8332 19.1668C13.9922 19.1668 12.4998 17.6744 12.4998 15.8335C12.4998 15.732 12.5044 15.6316 12.5133 15.5324L6.42078 12.4557C5.82736 13.0007 5.03579 13.3335 4.16651 13.3335C2.32556 13.3335 0.833172 11.8411 0.833172 10.0002C0.833172 8.15921 2.32556 6.66683 4.16651 6.66683C5.005 6.66683 5.77119 6.97643 6.35698 7.48755L12.5149 4.48573C12.5049 4.38077 12.4998 4.2744 12.4998 4.16683ZM17.4998 4.16683C17.4998 3.24635 16.7536 2.50016 15.8332 2.50016C14.9127 2.50016 14.1665 3.24635 14.1665 4.16683C14.1665 5.0873 14.9127 5.8335 15.8332 5.8335C16.7536 5.8335 17.4998 5.0873 17.4998 4.16683ZM17.4998 15.8335C17.4998 14.913 16.7536 14.1668 15.8332 14.1668C14.9127 14.1668 14.1665 14.913 14.1665 15.8335C14.1665 16.754 14.9127 17.5002 15.8332 17.5002C16.7536 17.5002 17.4998 16.754 17.4998 15.8335ZM4.16651 8.3335C5.08698 8.3335 5.83317 9.07969 5.83317 10.0002C5.83317 10.9206 5.08698 11.6668 4.16651 11.6668C3.24603 11.6668 2.49984 10.9206 2.49984 10.0002C2.49984 9.07969 3.24603 8.3335 4.16651 8.3335Z"
                                fill="#22216D" />
                        </svg>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.861 7.5961L18.9757 6.48135L16.5187 4.02428L15.4039 5.13904L17.861 7.5961ZM16.4542 9.00288L13.9971 6.54581L4.80565 15.7373L4.24014 18.7599L7.26272 18.1943L16.4542 9.00288ZM20.4419 5.13399C21.186 5.87811 21.186 7.08458 20.4419 7.82871L8.45174 19.8189C8.30989 19.9607 8.12847 20.0564 7.93129 20.0933L3.17816 20.9826C2.49083 21.1112 1.88885 20.5092 2.01744 19.8218L2.90674 15.0687C2.94363 14.8715 3.03928 14.6901 3.18113 14.5483L15.1713 2.55809C15.9154 1.81397 17.1219 1.81397 17.866 2.55809L20.4419 5.13399ZM20.0099 21H11.9901C10.67 21 10.67 19 11.9901 19H20.0099C21.33 19 21.33 21 20.0099 21Z"
                                fill="#22216D" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="pl-p-sidebar">
        <div class="gird mx-auto w-main-layout bg-white gap-10 ">
            <div class="grid gap-6 p-6">
                <div class="grid gap-6">
                    <div class="flex justify-between items-center">
                        <p class="text-[#22216D] font-medium text-2xl">Mình đã chia sẻ những gì?</p>
                        <div class="gap-8 flex">
                            <button class="w-12 h-12  bg-[#F6F6FF] rounded-full">
                                <img class="mx-auto w-4 h-4" src="../svg/ic_ArrowLeft.svg" alt="chevron right" />
                            </button>

                            <button class="w-12 h-12 bg-[#F6F6FF] rounded-full">
                                <img class="mx-auto w-4 h-4" src="../svg/ic_ArrowRight.svg" alt="chevron right" />
                            </button>
                        </div>
                    </div>

                    <div class="grid xl:grid-cols-4 gap-6 lg:grid-cols-3 sm:grid-cols-2">
                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4 shadow-card">
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
                                    <button
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4 shadow-card">
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
                                    <button
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4 shadow-card">
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
                                    <button
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[19rem] bg-white grid gap-4 shadow-card">
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
                                    <button
                                        class="text-base font-extrabold px-4 py-2.5 text-primary border-primary border-[1px] min-w-fit rounded-lg">
                                        Hẹn lịch
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-1 items-center">
                        <p class="font-medium text-lg text-[#403ECC]">
                            Xem thêm
                        </p>
                        <img class="h-6 w-6" src="../svg/ic_Chevron_Right.svg" alt="ic_ShoppingTag" />
                    </div>
                </div>
            </div>

            <div class="grid gap-6 p-6">
                <div class="grid gap-6">
                    <div class="flex justify-between items-center">
                        <p class="text-[#22216D] font-medium text-2xl">Bài viết mình chia sẻ</p>
                        <div class="gap-8 flex">
                            <button class="w-12 h-12  bg-[#F6F6FF] rounded-full">
                                <img class="mx-auto w-4 h-4" src="../svg/ic_ArrowLeft.svg" alt="chevron right" />
                            </button>

                            <button class="w-12 h-12 bg-[#F6F6FF] rounded-full">
                                <img class="mx-auto w-4 h-4" src="../svg/ic_ArrowRight.svg" alt="chevron right" />
                            </button>
                        </div>
                    </div>

                    <div class="grid xl:grid-cols-3 gap-6 lg:grid-cols-@ sm:grid-cols-1">
                        <div class="rounded-2xl w-[26rem] bg-white grid shadow-card">
                            <div class="relative">
                                <img class="w-full h-auto " src="../img/Card_Second.png" alt="card" />
                                <img class="h-14 w-14 rounded-xl absolute -bottom-7 right-3 cursor-pointer"
                                    src="../img/Profile.png" alt="" />
                            </div>

                            <div class="p-4 grid gap-2">
                                <div class="grid gap-1 border-b-[1px]">
                                    <p class="text-[#3BB1CF] text-sm font-light">#Marvel #Endgame #DontSpoilEndGame</p>
                                    <span class="font-semibold text-lg">Marvel Studios' Avengers: Endgame | Policy
                                        Trailer</span>
                                    <p class="text-base font-light text-[#92929D] pb-2">Được thành lập năm 1993 với hội
                                        sở
                                        chính
                                        đặt tại Hà Nội, Techcombank là một trong
                                        những ngân hàng TMCP lớn nhất Việt Nam</p>
                                </div>

                                <div class="flex gap-6 justify-end">
                                    <div class="flex items-center gap-2">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.8113 14.8713L7.25251 17.5919C6.44711 18.2076 5.28818 17.6325 5.28651 16.6201L5.28346 14.7673C3.62645 14.3688 2.40015 12.8727 2.40015 11.0953V6.42009C2.40015 4.33532 4.08498 2.64404 6.16485 2.64404H14.6354C16.7153 2.64404 18.4001 4.33532 18.4001 6.42009V11.0953C18.4001 13.18 16.7153 14.8713 14.6354 14.8713H10.8113ZM6.88526 15.8587L10.0547 13.4358C10.1942 13.3291 10.3649 13.2713 10.5405 13.2713H14.6354C15.8303 13.2713 16.8001 12.2978 16.8001 11.0953V6.42009C16.8001 5.21761 15.8303 4.24404 14.6354 4.24404H6.16485C4.97 4.24404 4.00015 5.21761 4.00015 6.42009V11.0953C4.00015 12.2751 4.9354 13.2384 6.10425 13.2705C6.53686 13.2824 6.88159 13.6361 6.88231 14.0689L6.88526 15.8587Z"
                                                fill="#171725" />
                                        </svg>

                                        <p class="text-lg font-normal">25</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.99992 3.68485L10.1845 3.49506C12.2392 1.38251 15.5803 1.38251 17.635 3.49506C19.6771 5.59466 19.6771 8.98945 17.635 11.089L11.1947 17.7108C10.5529 18.3706 9.49773 18.3853 8.83788 17.7435C8.82137 17.7273 8.82137 17.7273 8.80516 17.7108L2.36481 11.089C0.322732 8.98945 0.322732 5.59466 2.36481 3.49506C4.4195 1.38251 7.76064 1.38251 9.81533 3.49506L9.99992 3.68485ZM16.4403 9.92702C17.8531 8.47434 17.8531 6.10977 16.4403 4.6571C15.04 3.21738 12.7795 3.21738 11.3793 4.6571L10.5973 5.46109C10.2701 5.79751 9.72974 5.79751 9.40254 5.46109L8.62057 4.6571C7.2203 3.21738 4.95985 3.21738 3.55958 4.6571C2.1467 6.10977 2.1467 8.47434 3.55958 9.92702L9.99992 16.5488L16.4403 9.92702Z"
                                                fill="#171725" />
                                        </svg>

                                        <p class="text-lg font-normal">120k</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.5001 4.41097C12.5001 2.57002 13.9925 1.07764 15.8334 1.07764C17.6744 1.07764 19.1667 2.57002 19.1667 4.41097C19.1667 6.25192 17.6744 7.7443 15.8334 7.7443C14.6956 7.7443 13.6909 7.1742 13.0894 6.30406L7.30677 9.12296C7.43192 9.47338 7.50008 9.85088 7.50008 10.2443C7.50008 10.6106 7.44102 10.963 7.33189 11.2927L13.0814 14.1962C13.6819 13.3195 14.6905 12.7443 15.8334 12.7443C17.6744 12.7443 19.1667 14.2367 19.1667 16.0776C19.1667 17.9186 17.6744 19.411 15.8334 19.411C13.9925 19.411 12.5001 17.9186 12.5001 16.0776C12.5001 15.9762 12.5046 15.8757 12.5135 15.7766L6.42102 12.6998C5.8276 13.2449 5.03603 13.5776 4.16675 13.5776C2.3258 13.5776 0.833416 12.0853 0.833416 10.2443C0.833416 8.40335 2.3258 6.91097 4.16675 6.91097C5.00525 6.91097 5.77143 7.22057 6.35723 7.73169L12.5151 4.72987C12.5052 4.62491 12.5001 4.51854 12.5001 4.41097ZM17.5001 4.41097C17.5001 3.4905 16.7539 2.7443 15.8334 2.7443C14.9129 2.7443 14.1667 3.4905 14.1667 4.41097C14.1667 5.33144 14.9129 6.07764 15.8334 6.07764C16.7539 6.07764 17.5001 5.33144 17.5001 4.41097ZM17.5001 16.0776C17.5001 15.1572 16.7539 14.411 15.8334 14.411C14.9129 14.411 14.1667 15.1572 14.1667 16.0776C14.1667 16.9981 14.9129 17.7443 15.8334 17.7443C16.7539 17.7443 17.5001 16.9981 17.5001 16.0776ZM4.16675 8.57764C5.08722 8.57764 5.83342 9.32383 5.83342 10.2443C5.83342 11.1648 5.08722 11.911 4.16675 11.911C3.24627 11.911 2.50008 11.1648 2.50008 10.2443C2.50008 9.32383 3.24627 8.57764 4.16675 8.57764Z"
                                                fill="#171725" />
                                        </svg>

                                        <p class="text-lg font-normal">231</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.54765 1.11719H14.2857C16.039 1.11719 17.4603 2.53851 17.4603 4.29179V17.0874C17.4603 17.9641 16.7497 18.6747 15.873 18.6747C15.5126 18.6747 15.1629 18.552 14.8814 18.3268L10.4167 14.7546L5.95201 18.3268C5.2675 18.8745 4.26862 18.7636 3.72094 18.0791C3.49574 17.7976 3.37305 17.4479 3.37305 17.0874V4.29179C3.37305 2.53851 4.79437 1.11719 6.54765 1.11719ZM6.54765 2.70449C5.67101 2.70449 4.96035 3.41515 4.96035 4.29179V17.0874L9.42504 13.5152C10.0048 13.0514 10.8286 13.0514 11.4084 13.5152L15.873 17.0874V4.29179C15.873 3.41515 15.1624 2.70449 14.2857 2.70449H6.54765Z"
                                                fill="#171725" />
                                        </svg>

                                        <p class="text-lg font-normal">12</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[26rem] bg-white grid shadow-card">
                            <div class="relative">
                                <img class="w-full h-auto " src="../img/Card_Second.png" alt="card" />
                                <img class="h-14 w-14 rounded-xl absolute -bottom-7 right-3 cursor-pointer"
                                    src="../img/Profile.png" alt="" />
                            </div>

                            <div class="p-4 grid gap-2">
                                <div class="grid gap-1 border-b-[1px]">
                                    <p class="text-[#3BB1CF] text-sm font-light">#Marvel #Endgame #DontSpoilEndGame</p>
                                    <span class="font-semibold text-lg">Marvel Studios' Avengers: Endgame | Policy
                                        Trailer</span>
                                    <p class="text-base font-light text-[#92929D] pb-2">Được thành lập năm 1993 với hội
                                        sở
                                        chính
                                        đặt tại Hà Nội, Techcombank là một trong
                                        những ngân hàng TMCP lớn nhất Việt Nam</p>
                                </div>

                                <div class="flex gap-6 justify-end">
                                    <div class="flex items-center gap-2">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.8113 14.8713L7.25251 17.5919C6.44711 18.2076 5.28818 17.6325 5.28651 16.6201L5.28346 14.7673C3.62645 14.3688 2.40015 12.8727 2.40015 11.0953V6.42009C2.40015 4.33532 4.08498 2.64404 6.16485 2.64404H14.6354C16.7153 2.64404 18.4001 4.33532 18.4001 6.42009V11.0953C18.4001 13.18 16.7153 14.8713 14.6354 14.8713H10.8113ZM6.88526 15.8587L10.0547 13.4358C10.1942 13.3291 10.3649 13.2713 10.5405 13.2713H14.6354C15.8303 13.2713 16.8001 12.2978 16.8001 11.0953V6.42009C16.8001 5.21761 15.8303 4.24404 14.6354 4.24404H6.16485C4.97 4.24404 4.00015 5.21761 4.00015 6.42009V11.0953C4.00015 12.2751 4.9354 13.2384 6.10425 13.2705C6.53686 13.2824 6.88159 13.6361 6.88231 14.0689L6.88526 15.8587Z"
                                                fill="#171725" />
                                        </svg>

                                        <p class="text-lg font-normal">25</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.99992 3.68485L10.1845 3.49506C12.2392 1.38251 15.5803 1.38251 17.635 3.49506C19.6771 5.59466 19.6771 8.98945 17.635 11.089L11.1947 17.7108C10.5529 18.3706 9.49773 18.3853 8.83788 17.7435C8.82137 17.7273 8.82137 17.7273 8.80516 17.7108L2.36481 11.089C0.322732 8.98945 0.322732 5.59466 2.36481 3.49506C4.4195 1.38251 7.76064 1.38251 9.81533 3.49506L9.99992 3.68485ZM16.4403 9.92702C17.8531 8.47434 17.8531 6.10977 16.4403 4.6571C15.04 3.21738 12.7795 3.21738 11.3793 4.6571L10.5973 5.46109C10.2701 5.79751 9.72974 5.79751 9.40254 5.46109L8.62057 4.6571C7.2203 3.21738 4.95985 3.21738 3.55958 4.6571C2.1467 6.10977 2.1467 8.47434 3.55958 9.92702L9.99992 16.5488L16.4403 9.92702Z"
                                                fill="#171725" />
                                        </svg>

                                        <p class="text-lg font-normal">120k</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.5001 4.41097C12.5001 2.57002 13.9925 1.07764 15.8334 1.07764C17.6744 1.07764 19.1667 2.57002 19.1667 4.41097C19.1667 6.25192 17.6744 7.7443 15.8334 7.7443C14.6956 7.7443 13.6909 7.1742 13.0894 6.30406L7.30677 9.12296C7.43192 9.47338 7.50008 9.85088 7.50008 10.2443C7.50008 10.6106 7.44102 10.963 7.33189 11.2927L13.0814 14.1962C13.6819 13.3195 14.6905 12.7443 15.8334 12.7443C17.6744 12.7443 19.1667 14.2367 19.1667 16.0776C19.1667 17.9186 17.6744 19.411 15.8334 19.411C13.9925 19.411 12.5001 17.9186 12.5001 16.0776C12.5001 15.9762 12.5046 15.8757 12.5135 15.7766L6.42102 12.6998C5.8276 13.2449 5.03603 13.5776 4.16675 13.5776C2.3258 13.5776 0.833416 12.0853 0.833416 10.2443C0.833416 8.40335 2.3258 6.91097 4.16675 6.91097C5.00525 6.91097 5.77143 7.22057 6.35723 7.73169L12.5151 4.72987C12.5052 4.62491 12.5001 4.51854 12.5001 4.41097ZM17.5001 4.41097C17.5001 3.4905 16.7539 2.7443 15.8334 2.7443C14.9129 2.7443 14.1667 3.4905 14.1667 4.41097C14.1667 5.33144 14.9129 6.07764 15.8334 6.07764C16.7539 6.07764 17.5001 5.33144 17.5001 4.41097ZM17.5001 16.0776C17.5001 15.1572 16.7539 14.411 15.8334 14.411C14.9129 14.411 14.1667 15.1572 14.1667 16.0776C14.1667 16.9981 14.9129 17.7443 15.8334 17.7443C16.7539 17.7443 17.5001 16.9981 17.5001 16.0776ZM4.16675 8.57764C5.08722 8.57764 5.83342 9.32383 5.83342 10.2443C5.83342 11.1648 5.08722 11.911 4.16675 11.911C3.24627 11.911 2.50008 11.1648 2.50008 10.2443C2.50008 9.32383 3.24627 8.57764 4.16675 8.57764Z"
                                                fill="#171725" />
                                        </svg>

                                        <p class="text-lg font-normal">231</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.54765 1.11719H14.2857C16.039 1.11719 17.4603 2.53851 17.4603 4.29179V17.0874C17.4603 17.9641 16.7497 18.6747 15.873 18.6747C15.5126 18.6747 15.1629 18.552 14.8814 18.3268L10.4167 14.7546L5.95201 18.3268C5.2675 18.8745 4.26862 18.7636 3.72094 18.0791C3.49574 17.7976 3.37305 17.4479 3.37305 17.0874V4.29179C3.37305 2.53851 4.79437 1.11719 6.54765 1.11719ZM6.54765 2.70449C5.67101 2.70449 4.96035 3.41515 4.96035 4.29179V17.0874L9.42504 13.5152C10.0048 13.0514 10.8286 13.0514 11.4084 13.5152L15.873 17.0874V4.29179C15.873 3.41515 15.1624 2.70449 14.2857 2.70449H6.54765Z"
                                                fill="#171725" />
                                        </svg>

                                        <p class="text-lg font-normal">12</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl w-[26rem] bg-white grid shadow-card">
                            <div class="relative">
                                <img class="w-full h-auto " src="../img/Card_Second.png" alt="card" />
                                <img class="h-14 w-14 rounded-xl absolute -bottom-7 right-3 cursor-pointer"
                                    src="../img/Profile.png" alt="" />
                            </div>

                            <div class="p-4 grid gap-2">
                                <div class="grid gap-1 border-b-[1px]">
                                    <p class="text-[#3BB1CF] text-sm font-light">#Marvel #Endgame #DontSpoilEndGame</p>
                                    <span class="font-semibold text-lg">Marvel Studios' Avengers: Endgame | Policy
                                        Trailer</span>
                                    <p class="text-base font-light text-[#92929D] pb-2">Được thành lập năm 1993 với hội
                                        sở
                                        chính
                                        đặt tại Hà Nội, Techcombank là một trong
                                        những ngân hàng TMCP lớn nhất Việt Nam</p>
                                </div>

                                <div class="flex gap-6 justify-end">
                                    <div class="flex items-center gap-2">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.8113 14.8713L7.25251 17.5919C6.44711 18.2076 5.28818 17.6325 5.28651 16.6201L5.28346 14.7673C3.62645 14.3688 2.40015 12.8727 2.40015 11.0953V6.42009C2.40015 4.33532 4.08498 2.64404 6.16485 2.64404H14.6354C16.7153 2.64404 18.4001 4.33532 18.4001 6.42009V11.0953C18.4001 13.18 16.7153 14.8713 14.6354 14.8713H10.8113ZM6.88526 15.8587L10.0547 13.4358C10.1942 13.3291 10.3649 13.2713 10.5405 13.2713H14.6354C15.8303 13.2713 16.8001 12.2978 16.8001 11.0953V6.42009C16.8001 5.21761 15.8303 4.24404 14.6354 4.24404H6.16485C4.97 4.24404 4.00015 5.21761 4.00015 6.42009V11.0953C4.00015 12.2751 4.9354 13.2384 6.10425 13.2705C6.53686 13.2824 6.88159 13.6361 6.88231 14.0689L6.88526 15.8587Z"
                                                fill="#171725" />
                                        </svg>

                                        <p class="text-lg font-normal">25</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.99992 3.68485L10.1845 3.49506C12.2392 1.38251 15.5803 1.38251 17.635 3.49506C19.6771 5.59466 19.6771 8.98945 17.635 11.089L11.1947 17.7108C10.5529 18.3706 9.49773 18.3853 8.83788 17.7435C8.82137 17.7273 8.82137 17.7273 8.80516 17.7108L2.36481 11.089C0.322732 8.98945 0.322732 5.59466 2.36481 3.49506C4.4195 1.38251 7.76064 1.38251 9.81533 3.49506L9.99992 3.68485ZM16.4403 9.92702C17.8531 8.47434 17.8531 6.10977 16.4403 4.6571C15.04 3.21738 12.7795 3.21738 11.3793 4.6571L10.5973 5.46109C10.2701 5.79751 9.72974 5.79751 9.40254 5.46109L8.62057 4.6571C7.2203 3.21738 4.95985 3.21738 3.55958 4.6571C2.1467 6.10977 2.1467 8.47434 3.55958 9.92702L9.99992 16.5488L16.4403 9.92702Z"
                                                fill="#171725" />
                                        </svg>

                                        <p class="text-lg font-normal">120k</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.5001 4.41097C12.5001 2.57002 13.9925 1.07764 15.8334 1.07764C17.6744 1.07764 19.1667 2.57002 19.1667 4.41097C19.1667 6.25192 17.6744 7.7443 15.8334 7.7443C14.6956 7.7443 13.6909 7.1742 13.0894 6.30406L7.30677 9.12296C7.43192 9.47338 7.50008 9.85088 7.50008 10.2443C7.50008 10.6106 7.44102 10.963 7.33189 11.2927L13.0814 14.1962C13.6819 13.3195 14.6905 12.7443 15.8334 12.7443C17.6744 12.7443 19.1667 14.2367 19.1667 16.0776C19.1667 17.9186 17.6744 19.411 15.8334 19.411C13.9925 19.411 12.5001 17.9186 12.5001 16.0776C12.5001 15.9762 12.5046 15.8757 12.5135 15.7766L6.42102 12.6998C5.8276 13.2449 5.03603 13.5776 4.16675 13.5776C2.3258 13.5776 0.833416 12.0853 0.833416 10.2443C0.833416 8.40335 2.3258 6.91097 4.16675 6.91097C5.00525 6.91097 5.77143 7.22057 6.35723 7.73169L12.5151 4.72987C12.5052 4.62491 12.5001 4.51854 12.5001 4.41097ZM17.5001 4.41097C17.5001 3.4905 16.7539 2.7443 15.8334 2.7443C14.9129 2.7443 14.1667 3.4905 14.1667 4.41097C14.1667 5.33144 14.9129 6.07764 15.8334 6.07764C16.7539 6.07764 17.5001 5.33144 17.5001 4.41097ZM17.5001 16.0776C17.5001 15.1572 16.7539 14.411 15.8334 14.411C14.9129 14.411 14.1667 15.1572 14.1667 16.0776C14.1667 16.9981 14.9129 17.7443 15.8334 17.7443C16.7539 17.7443 17.5001 16.9981 17.5001 16.0776ZM4.16675 8.57764C5.08722 8.57764 5.83342 9.32383 5.83342 10.2443C5.83342 11.1648 5.08722 11.911 4.16675 11.911C3.24627 11.911 2.50008 11.1648 2.50008 10.2443C2.50008 9.32383 3.24627 8.57764 4.16675 8.57764Z"
                                                fill="#171725" />
                                        </svg>

                                        <p class="text-lg font-normal">231</p>
                                    </div>

                                    <div class="flex items-center gap-2">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.54765 1.11719H14.2857C16.039 1.11719 17.4603 2.53851 17.4603 4.29179V17.0874C17.4603 17.9641 16.7497 18.6747 15.873 18.6747C15.5126 18.6747 15.1629 18.552 14.8814 18.3268L10.4167 14.7546L5.95201 18.3268C5.2675 18.8745 4.26862 18.7636 3.72094 18.0791C3.49574 17.7976 3.37305 17.4479 3.37305 17.0874V4.29179C3.37305 2.53851 4.79437 1.11719 6.54765 1.11719ZM6.54765 2.70449C5.67101 2.70449 4.96035 3.41515 4.96035 4.29179V17.0874L9.42504 13.5152C10.0048 13.0514 10.8286 13.0514 11.4084 13.5152L15.873 17.0874V4.29179C15.873 3.41515 15.1624 2.70449 14.2857 2.70449H6.54765Z"
                                                fill="#171725" />
                                        </svg>

                                        <p class="text-lg font-normal">12</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-1 items-center">
                        <p class="font-medium text-lg text-[#403ECC]">
                            Xem thêm
                        </p>
                        <img class="h-6 w-6" src="../svg/ic_Chevron_Right.svg" alt="ic_ShoppingTag" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
