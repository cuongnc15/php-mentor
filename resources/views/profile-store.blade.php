@include('head')
@include('header')
@include('sidebar')


<body class="bg-background-home">
    <div class="bg-cover bg-center h-72 w-screen -pl-p-sidebar" style="background-image: url(../img/Artboard.png);">
        <div class="pl-p-sidebar">
            <div class="pt-p-header w-main-layout mx-auto">
                <div class="w-[55.875rem] mt-[2.625rem]">
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
    </div>
    <!-- List -->
    <div class="bg-[#D6D6FD] w-screen">
        <div class="pl-p-sidebar">
            <div class="mx-auto w-main-layout">
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
                        <li class="text-primary text-lg font-normal cursor-pointer"
                            onclick="location.href='{{ url('profile/program') }}'">CHƯƠNG TRÌNH                            
                        </li>
                        <li class="text-primary text-lg font-normal cursor-pointer"
                            onclick="location.href='{{ url('profile/mentee') }}'">MENTEE </li>
                        <li class="text-[#22216D] text-lg font-semibold cursor-pointer"
                            onclick="location.href='{{ url('profile/store') }}'">THEO DÕI ĐƠN HÀNG
                            <svg class="m-auto" width="25" height="17" viewBox="0 0 25 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 0L24.5 17H0.5L12.5 0Z" fill="#F6F6FF" />
                            </svg>
                        </li>
                        <li class="text-primary text-lg font-normal cursor-pointer"
                            onclick="location.href='{{ url('profile/evaluate') }}'">ĐÁNH GIÁ</li>
                    </ul>

                    <div class="flex gap-6 items-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.4998 4.16683C12.4998 2.32588 13.9922 0.833496 15.8332 0.833496C17.6741 0.833496 19.1665 2.32588 19.1665 4.16683C19.1665 6.00778 17.6741 7.50016 15.8332 7.50016C14.6953 7.50016 13.6907 6.93006 13.0892 6.05992L7.30653 8.87882C7.43168 9.22924 7.49984 9.60674 7.49984 10.0002C7.49984 10.3664 7.44077 10.7189 7.33164 11.0485L13.0812 13.9521C13.6817 13.0754 14.6903 12.5002 15.8332 12.5002C17.6741 12.5002 19.1665 13.9925 19.1665 15.8335C19.1665 17.6744 17.6741 19.1668 15.8332 19.1668C13.9922 19.1668 12.4998 17.6744 12.4998 15.8335C12.4998 15.732 12.5044 15.6316 12.5133 15.5324L6.42078 12.4557C5.82736 13.0007 5.03579 13.3335 4.16651 13.3335C2.32556 13.3335 0.833172 11.8411 0.833172 10.0002C0.833172 8.15921 2.32556 6.66683 4.16651 6.66683C5.005 6.66683 5.77119 6.97643 6.35698 7.48755L12.5149 4.48573C12.5049 4.38077 12.4998 4.2744 12.4998 4.16683ZM17.4998 4.16683C17.4998 3.24635 16.7536 2.50016 15.8332 2.50016C14.9127 2.50016 14.1665 3.24635 14.1665 4.16683C14.1665 5.0873 14.9127 5.8335 15.8332 5.8335C16.7536 5.8335 17.4998 5.0873 17.4998 4.16683ZM17.4998 15.8335C17.4998 14.913 16.7536 14.1668 15.8332 14.1668C14.9127 14.1668 14.1665 14.913 14.1665 15.8335C14.1665 16.754 14.9127 17.5002 15.8332 17.5002C16.7536 17.5002 17.4998 16.754 17.4998 15.8335ZM4.16651 8.3335C5.08698 8.3335 5.83317 9.07969 5.83317 10.0002C5.83317 10.9206 5.08698 11.6668 4.16651 11.6668C3.24603 11.6668 2.49984 10.9206 2.49984 10.0002C2.49984 9.07969 3.24603 8.3335 4.16651 8.3335Z"
                                fill="#22216D" />
                        </svg>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.861 7.5961L18.9757 6.48135L16.5187 4.02428L15.4039 5.13904L17.861 7.5961ZM16.4542 9.00288L13.9971 6.54581L4.80565 15.7373L4.24014 18.7599L7.26272 18.1943L16.4542 9.00288ZM20.4419 5.13399C21.186 5.87811 21.186 7.08458 20.4419 7.82871L8.45174 19.8189C8.30989 19.9607 8.12847 20.0564 7.93129 20.0933L3.17816 20.9826C2.49083 21.1112 1.88885 20.5092 2.01744 19.8218L2.90674 15.0687C2.94363 14.8715 3.03928 14.6901 3.18113 14.5483L15.1713 2.55809C15.9154 1.81397 17.1219 1.81397 17.866 2.55809L20.4419 5.13399ZM20.0099 21H11.9901C10.67 21 10.67 19 11.9901 19H20.0099C21.33 19 21.33 21 20.0099 21Z"
                                fill="#22216D" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Body -->
    <div class="pl-p-sidebar">
        <div class="w-main-layout bg-white mx-auto">
            <div class="p-4 grid gap-14">
                <div class="flex justify-between">
                    <!-- Sort -->
                    <div class="flex gap-4">
                        <button class="flex items-center rounded-xl border-[1px] border-[#F1F1F5]">
                            <p
                                class="flex gap-2 items-center font-normal text-sm text-[#696974] pr-8 border-r-[1px] text-center p-4">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.0752 6H5.0752C4.52291 6 4.0752 6.44772 4.0752 7V19C4.0752 19.5523 4.52291 20 5.07519 20H19.0752C19.6275 20 20.0752 19.5523 20.0752 19V7C20.0752 6.44771 19.6275 6 19.0752 6ZM5.0752 4C3.41834 4 2.0752 5.34315 2.0752 7V19C2.0752 20.6569 3.41834 22 5.07519 22H19.0752C20.732 22 22.0752 20.6569 22.0752 19V7C22.0752 5.34315 20.732 4 19.0752 4H5.0752Z"
                                        fill="#696974" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.0752 12C9.52291 12 9.0752 12.4477 9.0752 13C9.0752 13.5523 9.52291 14 10.0752 14H17.0752C17.6275 14 18.0752 13.5523 18.0752 13C18.0752 12.4477 17.6275 12 17.0752 12H10.0752ZM7.0752 16C6.52291 16 6.0752 16.4477 6.0752 17C6.0752 17.5523 6.52291 18 7.0752 18H13.0752C13.6275 18 14.0752 17.5523 14.0752 17C14.0752 16.4477 13.6275 16 13.0752 16H7.0752Z"
                                        fill="#696974" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.0752 2C6.52291 2 6.0752 2.44772 6.0752 3V7C6.0752 7.55228 6.52291 8 7.0752 8C7.62748 8 8.0752 7.55228 8.0752 7V3C8.0752 2.44772 7.62748 2 7.0752 2ZM17.0752 2C16.5229 2 16.0752 2.44772 16.0752 3V7C16.0752 7.55228 16.5229 8 17.0752 8C17.6275 8 18.0752 7.55228 18.0752 7V3C18.0752 2.44772 17.6275 2 17.0752 2Z"
                                        fill="#696974" />
                                </svg>
                                Chọn tháng
                            </p>
                            <svg class="mx-1" width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.8811 5.3335C13.3003 5.3335 13.5334 5.81846 13.2715 6.14584L8.97849 11.5121C8.77833 11.7623 8.39778 11.7623 8.19762 11.5121L3.9046 6.14584C3.64269 5.81846 3.87578 5.3335 4.29503 5.3335L12.8811 5.3335Z"
                                    fill="#92929D" />
                            </svg>
                        </button>

                        <button class="flex items-center rounded-xl border-[1px] border-[#F1F1F5]">
                            <p
                                class="flex gap-2 items-center font-normal text-sm text-[#696974] pr-8 border-r-[1px] text-center p-4">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.0752 6H5.0752C4.52291 6 4.0752 6.44772 4.0752 7V19C4.0752 19.5523 4.52291 20 5.07519 20H19.0752C19.6275 20 20.0752 19.5523 20.0752 19V7C20.0752 6.44771 19.6275 6 19.0752 6ZM5.0752 4C3.41834 4 2.0752 5.34315 2.0752 7V19C2.0752 20.6569 3.41834 22 5.07519 22H19.0752C20.732 22 22.0752 20.6569 22.0752 19V7C22.0752 5.34315 20.732 4 19.0752 4H5.0752Z"
                                        fill="#696974" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.0752 12C9.52291 12 9.0752 12.4477 9.0752 13C9.0752 13.5523 9.52291 14 10.0752 14H17.0752C17.6275 14 18.0752 13.5523 18.0752 13C18.0752 12.4477 17.6275 12 17.0752 12H10.0752ZM7.0752 16C6.52291 16 6.0752 16.4477 6.0752 17C6.0752 17.5523 6.52291 18 7.0752 18H13.0752C13.6275 18 14.0752 17.5523 14.0752 17C14.0752 16.4477 13.6275 16 13.0752 16H7.0752Z"
                                        fill="#696974" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.0752 2C6.52291 2 6.0752 2.44772 6.0752 3V7C6.0752 7.55228 6.52291 8 7.0752 8C7.62748 8 8.0752 7.55228 8.0752 7V3C8.0752 2.44772 7.62748 2 7.0752 2ZM17.0752 2C16.5229 2 16.0752 2.44772 16.0752 3V7C16.0752 7.55228 16.5229 8 17.0752 8C17.6275 8 18.0752 7.55228 18.0752 7V3C18.0752 2.44772 17.6275 2 17.0752 2Z"
                                        fill="#696974" />
                                </svg>
                                Chọn năm
                            </p>
                            <svg class="mx-1" width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.8811 5.3335C13.3003 5.3335 13.5334 5.81846 13.2715 6.14584L8.97849 11.5121C8.77833 11.7623 8.39778 11.7623 8.19762 11.5121L3.9046 6.14584C3.64269 5.81846 3.87578 5.3335 4.29503 5.3335L12.8811 5.3335Z"
                                    fill="#92929D" />
                            </svg>
                        </button>
                    </div>
                    <!-- Search Input -->
                    <div
                        class="flex justify-between border-[1px] border-[#F1F1F5] p-3.5 items-center rounded-xl w-[31.5rem]">
                        <p class="text-sm font-normal text-[#92929D]">Nhập tên Mentee, buổi chia sẻ</p>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.77763 4.6829C1.20043 8.2601 1.20043 14.0599 4.77763 17.6371C8.35483 21.2143 14.1546 21.2143 17.7318 17.6371C21.309 14.0599 21.309 8.2601 17.7318 4.6829C14.1546 1.1057 8.35483 1.1057 4.77763 4.6829ZM6.19184 6.09712C8.988 3.30096 13.5215 3.30096 16.3176 6.09712C19.1138 8.89327 19.1138 13.4267 16.3176 16.2229C13.5215 19.019 8.988 19.019 6.19184 16.2229C3.39569 13.4267 3.39569 8.89327 6.19184 6.09712Z"
                                fill="#92929D" />
                            <path
                                d="M22.1891 20.2825L18.0596 16.153C17.1168 15.2102 15.7026 16.6244 16.6454 17.5672L20.7749 21.6967C21.7177 22.6395 23.1319 21.2253 22.1891 20.2825Z"
                                fill="#92929D" />
                        </svg>
                    </div>
                </div>

                <div class="w-full">
                    <div class="grid gap-8">
                        <h1 class="text-4xl font-semibold">Thông tin thanh toán</h1>
                        <div class="flex justify-between">
                            <div class="flex gap-8 bg-[#F6F6FF] w-fit rounded-2xl">
                                <div class="grid gap-2 p-6 ">
                                    <p class="text-lg font-normal">Tổng số tiền</p>
                                    <div class="flex gap-2 border-b-[1px] pb-2 items-center">
                                        <h1 class="text-5xl font-semibold text-primary w-[19rem]">1.500.000</h1>
                                        <p class="text-lg font-normal text-[#696974]">VNĐ</p>
                                    </div>
                                    <div class="flex gap-3">
                                        <div class="flex">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.7348 9.90906C17.1094 9.50324 17.0841 8.87058 16.6783 8.49597L13.1783 5.2652C12.7953 4.9116 12.2048 4.9116 11.8218 5.26519L8.32172 8.49596C7.9159 8.87057 7.89059 9.50323 8.26519 9.90905C8.63979 10.3149 9.27245 10.3402 9.67827 9.96558L11.5 8.28397L11.5 18C11.5 18.5523 11.9477 19 12.5 19C13.0523 19 13.5 18.5523 13.5 18L13.5 8.284L15.3217 9.96557C15.7275 10.3402 16.3602 10.3149 16.7348 9.90906Z"
                                                    fill="#30AB7E" />
                                            </svg>
                                            <p class="text-lg font-normal text-[#30AB7E]">20%</p>
                                        </div>
                                        <p class="text-[#696974] text-lg font-normal">so với tháng trước</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-8 bg-[#F6F6FF] w-fit rounded-2xl">
                                <div class="grid gap-2 p-6 ">
                                    <p class="text-lg font-normal">Tổng số tiền</p>
                                    <div class="flex gap-2 border-b-[1px] pb-2 items-center">
                                        <h1 class="text-5xl font-semibold text-primary w-[19rem]">20</h1>
                                        <p class="text-lg font-normal text-[#696974]">VNĐ</p>
                                    </div>
                                    <div class="flex gap-3">
                                        <div class="flex">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.7348 9.90906C17.1094 9.50324 17.0841 8.87058 16.6783 8.49597L13.1783 5.2652C12.7953 4.9116 12.2048 4.9116 11.8218 5.26519L8.32172 8.49596C7.9159 8.87057 7.89059 9.50323 8.26519 9.90905C8.63979 10.3149 9.27245 10.3402 9.67827 9.96558L11.5 8.28397L11.5 18C11.5 18.5523 11.9477 19 12.5 19C13.0523 19 13.5 18.5523 13.5 18L13.5 8.284L15.3217 9.96557C15.7275 10.3402 16.3602 10.3149 16.7348 9.90906Z"
                                                    fill="#30AB7E" />
                                            </svg>
                                            <p class="text-lg font-normal text-[#30AB7E]">20%</p>
                                        </div>
                                        <p class="text-[#696974] text-lg font-normal">so với tháng trước</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-8 bg-[#F6F6FF] w-fit rounded-2xl">
                                <div class="grid gap-2 p-6 ">
                                    <p class="text-lg font-normal">Tổng số tiền</p>
                                    <div class="flex gap-2 border-b-[1px] pb-2 items-center">
                                        <h1 class="text-5xl font-semibold text-primary w-[19rem]">1.500.000</h1>
                                        <p class="text-lg font-normal text-[#696974]">VNĐ</p>
                                    </div>
                                    <div class="flex gap-3">
                                        <div class="flex">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.7348 9.90906C17.1094 9.50324 17.0841 8.87058 16.6783 8.49597L13.1783 5.2652C12.7953 4.9116 12.2048 4.9116 11.8218 5.26519L8.32172 8.49596C7.9159 8.87057 7.89059 9.50323 8.26519 9.90905C8.63979 10.3149 9.27245 10.3402 9.67827 9.96558L11.5 8.28397L11.5 18C11.5 18.5523 11.9477 19 12.5 19C13.0523 19 13.5 18.5523 13.5 18L13.5 8.284L15.3217 9.96557C15.7275 10.3402 16.3602 10.3149 16.7348 9.90906Z"
                                                    fill="#30AB7E" />
                                            </svg>
                                            <p class="text-lg font-normal text-[#30AB7E]">20%</p>
                                        </div>
                                        <p class="text-[#696974] text-lg font-normal">so với tháng trước</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full">
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-[#92929D] uppercase bg-[#F6F6FF] text-base font-semibold">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        buổi chia sẻ
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        <div class="flex items-center justify-center">
                                            số lượng mentee
                                        </div>
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        <div class="flex items-center justify-center">
                                            Đơn giá (VNĐ)
                                        </div>
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        <div class="flex items-center justify-center">
                                            Thành tiền (VNĐ)
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="border-b">
                                <tr class="bg-white text-base font-light dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="flex px-6 py-4 font-medium text-gray-900 whitespace-nowrap items-center">
                                        <img class="h-10 w-10" src="../img/Banner.png" alt="" />
                                        <p class="text-base font-light text-[#696974] mx-2">
                                            Kỹ năng phát triển bản thân và nâng cao viết CV...
                                        </p>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.52832" y="0.44043" width="24" height="24" rx="12"
                                                fill="#FAFAFB" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M19.6815 6.42534L18.5438 5.28762C17.6811 4.42496 16.2825 4.42496 15.4198 5.28762L12.5755 8.13193C11.7129 8.99459 11.7129 10.3932 12.5755 11.2559L12.7273 11.4077L11.4956 12.6394L11.3438 12.4876C10.4811 11.625 9.08248 11.625 8.21982 12.4876L5.37551 15.3319C4.51285 16.1946 4.51285 17.5932 5.37551 18.4559L6.51324 19.5936C7.3759 20.4563 8.77455 20.4563 9.63721 19.5936L12.4815 16.7493C13.3442 15.8867 13.3442 14.488 12.4815 13.6253L12.3441 13.488L13.5758 12.2562L13.7132 12.3936C14.5759 13.2563 15.9745 13.2563 16.8372 12.3936L19.6815 9.54932C20.5442 8.68666 20.5442 7.28801 19.6815 6.42534ZM14.4244 11.4077L14.5618 11.5451C14.9558 11.9391 15.5946 11.9391 15.9887 11.5451L18.833 8.70079C19.227 8.30676 19.227 7.66791 18.833 7.27387L17.6953 6.13615C17.3012 5.74212 16.6624 5.74212 16.2683 6.13615L13.424 8.98046C13.03 9.37449 13.03 10.0133 13.424 10.4074L13.5758 10.5592L14.5115 9.62357C14.7664 9.36867 15.1263 9.38984 15.36 9.62357C15.5937 9.85731 15.6149 10.2172 15.36 10.4721L14.4244 11.4077ZM10.6471 13.488L9.71146 14.4236C9.45656 14.6785 9.47773 15.0384 9.71146 15.2721C9.9452 15.5058 10.3051 15.527 10.56 15.2721L11.4956 14.3365L11.633 14.4739C12.027 14.8679 12.027 15.5068 11.633 15.9008L8.78868 18.7451C8.39465 19.1391 7.7558 19.1391 7.36176 18.7451L6.22404 17.6074C5.83001 17.2133 5.83001 16.5745 6.22404 16.1805L9.06835 13.3361C9.46238 12.9421 10.1012 12.9421 10.4953 13.3361L10.6471 13.488Z"
                                                fill="#44444F" />
                                        </svg>
                                    </th>
                                    <td class="px-4 py-4">
                                        <div class="flex gap-1 text-center mx-auto justify-center">
                                            <p>5</p>
                                        </div>

                                    </td>
                                    <td class="px-4 py-4 justify-center text-center m-auto">
                                        200.000
                                    </td>
                                    <td class="px-4 py-4 justify-center text-center m-auto">
                                        1.000.000
                                    </td>
                                </tr>

                                <tr class="bg-white text-base font-light dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="flex px-6 py-4 font-medium text-gray-900 whitespace-nowrap items-center">
                                        <img class="h-10 w-10" src="../img/Banner.png" alt="" />
                                        <p class="text-base font-light text-[#696974] mx-2">
                                            Kỹ năng phát triển bản thân và nâng cao viết CV...
                                        </p>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.52832" y="0.44043" width="24" height="24" rx="12"
                                                fill="#FAFAFB" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M19.6815 6.42534L18.5438 5.28762C17.6811 4.42496 16.2825 4.42496 15.4198 5.28762L12.5755 8.13193C11.7129 8.99459 11.7129 10.3932 12.5755 11.2559L12.7273 11.4077L11.4956 12.6394L11.3438 12.4876C10.4811 11.625 9.08248 11.625 8.21982 12.4876L5.37551 15.3319C4.51285 16.1946 4.51285 17.5932 5.37551 18.4559L6.51324 19.5936C7.3759 20.4563 8.77455 20.4563 9.63721 19.5936L12.4815 16.7493C13.3442 15.8867 13.3442 14.488 12.4815 13.6253L12.3441 13.488L13.5758 12.2562L13.7132 12.3936C14.5759 13.2563 15.9745 13.2563 16.8372 12.3936L19.6815 9.54932C20.5442 8.68666 20.5442 7.28801 19.6815 6.42534ZM14.4244 11.4077L14.5618 11.5451C14.9558 11.9391 15.5946 11.9391 15.9887 11.5451L18.833 8.70079C19.227 8.30676 19.227 7.66791 18.833 7.27387L17.6953 6.13615C17.3012 5.74212 16.6624 5.74212 16.2683 6.13615L13.424 8.98046C13.03 9.37449 13.03 10.0133 13.424 10.4074L13.5758 10.5592L14.5115 9.62357C14.7664 9.36867 15.1263 9.38984 15.36 9.62357C15.5937 9.85731 15.6149 10.2172 15.36 10.4721L14.4244 11.4077ZM10.6471 13.488L9.71146 14.4236C9.45656 14.6785 9.47773 15.0384 9.71146 15.2721C9.9452 15.5058 10.3051 15.527 10.56 15.2721L11.4956 14.3365L11.633 14.4739C12.027 14.8679 12.027 15.5068 11.633 15.9008L8.78868 18.7451C8.39465 19.1391 7.7558 19.1391 7.36176 18.7451L6.22404 17.6074C5.83001 17.2133 5.83001 16.5745 6.22404 16.1805L9.06835 13.3361C9.46238 12.9421 10.1012 12.9421 10.4953 13.3361L10.6471 13.488Z"
                                                fill="#44444F" />
                                        </svg>
                                    </th>
                                    <td class="px-4 py-4">
                                        <div class="flex gap-1 text-center mx-auto justify-center">
                                            <p>5</p>
                                        </div>

                                    </td>
                                    <td class="px-4 py-4 justify-center text-center m-auto">
                                        200.000
                                    </td>
                                    <td class="px-4 py-4 justify-center text-center m-auto">
                                        1.000.000
                                    </td>
                                </tr>

                                <tr class="bg-white text-base font-light dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="flex px-6 py-4 font-medium text-gray-900 whitespace-nowrap items-center">
                                        <img class="h-10 w-10" src="../img/Banner.png" alt="" />
                                        <p class="text-base font-light text-[#696974] mx-2">
                                            Kỹ năng phát triển bản thân và nâng cao viết CV...
                                        </p>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.52832" y="0.44043" width="24" height="24" rx="12"
                                                fill="#FAFAFB" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M19.6815 6.42534L18.5438 5.28762C17.6811 4.42496 16.2825 4.42496 15.4198 5.28762L12.5755 8.13193C11.7129 8.99459 11.7129 10.3932 12.5755 11.2559L12.7273 11.4077L11.4956 12.6394L11.3438 12.4876C10.4811 11.625 9.08248 11.625 8.21982 12.4876L5.37551 15.3319C4.51285 16.1946 4.51285 17.5932 5.37551 18.4559L6.51324 19.5936C7.3759 20.4563 8.77455 20.4563 9.63721 19.5936L12.4815 16.7493C13.3442 15.8867 13.3442 14.488 12.4815 13.6253L12.3441 13.488L13.5758 12.2562L13.7132 12.3936C14.5759 13.2563 15.9745 13.2563 16.8372 12.3936L19.6815 9.54932C20.5442 8.68666 20.5442 7.28801 19.6815 6.42534ZM14.4244 11.4077L14.5618 11.5451C14.9558 11.9391 15.5946 11.9391 15.9887 11.5451L18.833 8.70079C19.227 8.30676 19.227 7.66791 18.833 7.27387L17.6953 6.13615C17.3012 5.74212 16.6624 5.74212 16.2683 6.13615L13.424 8.98046C13.03 9.37449 13.03 10.0133 13.424 10.4074L13.5758 10.5592L14.5115 9.62357C14.7664 9.36867 15.1263 9.38984 15.36 9.62357C15.5937 9.85731 15.6149 10.2172 15.36 10.4721L14.4244 11.4077ZM10.6471 13.488L9.71146 14.4236C9.45656 14.6785 9.47773 15.0384 9.71146 15.2721C9.9452 15.5058 10.3051 15.527 10.56 15.2721L11.4956 14.3365L11.633 14.4739C12.027 14.8679 12.027 15.5068 11.633 15.9008L8.78868 18.7451C8.39465 19.1391 7.7558 19.1391 7.36176 18.7451L6.22404 17.6074C5.83001 17.2133 5.83001 16.5745 6.22404 16.1805L9.06835 13.3361C9.46238 12.9421 10.1012 12.9421 10.4953 13.3361L10.6471 13.488Z"
                                                fill="#44444F" />
                                        </svg>
                                    </th>
                                    <td class="px-4 py-4">
                                        <div class="flex gap-1 text-center mx-auto justify-center">
                                            <p>5</p>
                                        </div>

                                    </td>
                                    <td class="px-4 py-4 justify-center text-center m-auto">
                                        200.000
                                    </td>
                                    <td class="px-4 py-4 justify-center text-center m-auto">
                                        1.000.000
                                    </td>
                                </tr>

                                <tr class="bg-white text-base font-light dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="flex px-6 py-4 font-medium text-gray-900 whitespace-nowrap items-center">
                                        <img class="h-10 w-10" src="../img/Banner.png" alt="" />
                                        <p class="text-base font-light text-[#696974] mx-2">
                                            Kỹ năng phát triển bản thân và nâng cao viết CV...
                                        </p>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.52832" y="0.44043" width="24" height="24" rx="12"
                                                fill="#FAFAFB" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M19.6815 6.42534L18.5438 5.28762C17.6811 4.42496 16.2825 4.42496 15.4198 5.28762L12.5755 8.13193C11.7129 8.99459 11.7129 10.3932 12.5755 11.2559L12.7273 11.4077L11.4956 12.6394L11.3438 12.4876C10.4811 11.625 9.08248 11.625 8.21982 12.4876L5.37551 15.3319C4.51285 16.1946 4.51285 17.5932 5.37551 18.4559L6.51324 19.5936C7.3759 20.4563 8.77455 20.4563 9.63721 19.5936L12.4815 16.7493C13.3442 15.8867 13.3442 14.488 12.4815 13.6253L12.3441 13.488L13.5758 12.2562L13.7132 12.3936C14.5759 13.2563 15.9745 13.2563 16.8372 12.3936L19.6815 9.54932C20.5442 8.68666 20.5442 7.28801 19.6815 6.42534ZM14.4244 11.4077L14.5618 11.5451C14.9558 11.9391 15.5946 11.9391 15.9887 11.5451L18.833 8.70079C19.227 8.30676 19.227 7.66791 18.833 7.27387L17.6953 6.13615C17.3012 5.74212 16.6624 5.74212 16.2683 6.13615L13.424 8.98046C13.03 9.37449 13.03 10.0133 13.424 10.4074L13.5758 10.5592L14.5115 9.62357C14.7664 9.36867 15.1263 9.38984 15.36 9.62357C15.5937 9.85731 15.6149 10.2172 15.36 10.4721L14.4244 11.4077ZM10.6471 13.488L9.71146 14.4236C9.45656 14.6785 9.47773 15.0384 9.71146 15.2721C9.9452 15.5058 10.3051 15.527 10.56 15.2721L11.4956 14.3365L11.633 14.4739C12.027 14.8679 12.027 15.5068 11.633 15.9008L8.78868 18.7451C8.39465 19.1391 7.7558 19.1391 7.36176 18.7451L6.22404 17.6074C5.83001 17.2133 5.83001 16.5745 6.22404 16.1805L9.06835 13.3361C9.46238 12.9421 10.1012 12.9421 10.4953 13.3361L10.6471 13.488Z"
                                                fill="#44444F" />
                                        </svg>
                                    </th>
                                    <td class="px-4 py-4">
                                        <div class="flex gap-1 text-center mx-auto justify-center">
                                            <p>5</p>
                                        </div>

                                    </td>
                                    <td class="px-4 py-4 justify-center text-center m-auto">
                                        200.000
                                    </td>
                                    <td class="px-4 py-4 justify-center text-center m-auto">
                                        1.000.000
                                    </td>
                                </tr>

                                <tr class="bg-white text-base font-light dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="flex px-6 py-4 font-medium text-gray-900 whitespace-nowrap items-center">
                                        <img class="h-10 w-10" src="../img/Banner.png" alt="" />
                                        <p class="text-base font-light text-[#696974] mx-2">
                                            Kỹ năng phát triển bản thân và nâng cao viết CV...
                                        </p>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.52832" y="0.44043" width="24" height="24" rx="12"
                                                fill="#FAFAFB" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M19.6815 6.42534L18.5438 5.28762C17.6811 4.42496 16.2825 4.42496 15.4198 5.28762L12.5755 8.13193C11.7129 8.99459 11.7129 10.3932 12.5755 11.2559L12.7273 11.4077L11.4956 12.6394L11.3438 12.4876C10.4811 11.625 9.08248 11.625 8.21982 12.4876L5.37551 15.3319C4.51285 16.1946 4.51285 17.5932 5.37551 18.4559L6.51324 19.5936C7.3759 20.4563 8.77455 20.4563 9.63721 19.5936L12.4815 16.7493C13.3442 15.8867 13.3442 14.488 12.4815 13.6253L12.3441 13.488L13.5758 12.2562L13.7132 12.3936C14.5759 13.2563 15.9745 13.2563 16.8372 12.3936L19.6815 9.54932C20.5442 8.68666 20.5442 7.28801 19.6815 6.42534ZM14.4244 11.4077L14.5618 11.5451C14.9558 11.9391 15.5946 11.9391 15.9887 11.5451L18.833 8.70079C19.227 8.30676 19.227 7.66791 18.833 7.27387L17.6953 6.13615C17.3012 5.74212 16.6624 5.74212 16.2683 6.13615L13.424 8.98046C13.03 9.37449 13.03 10.0133 13.424 10.4074L13.5758 10.5592L14.5115 9.62357C14.7664 9.36867 15.1263 9.38984 15.36 9.62357C15.5937 9.85731 15.6149 10.2172 15.36 10.4721L14.4244 11.4077ZM10.6471 13.488L9.71146 14.4236C9.45656 14.6785 9.47773 15.0384 9.71146 15.2721C9.9452 15.5058 10.3051 15.527 10.56 15.2721L11.4956 14.3365L11.633 14.4739C12.027 14.8679 12.027 15.5068 11.633 15.9008L8.78868 18.7451C8.39465 19.1391 7.7558 19.1391 7.36176 18.7451L6.22404 17.6074C5.83001 17.2133 5.83001 16.5745 6.22404 16.1805L9.06835 13.3361C9.46238 12.9421 10.1012 12.9421 10.4953 13.3361L10.6471 13.488Z"
                                                fill="#44444F" />
                                        </svg>
                                    </th>
                                    <td class="px-4 py-4">
                                        <div class="flex gap-1 text-center mx-auto justify-center">
                                            <p>5</p>
                                        </div>

                                    </td>
                                    <td class="px-4 py-4 justify-center text-center m-auto">
                                        200.000
                                    </td>
                                    <td class="px-4 py-4 justify-center text-center m-auto">
                                        1.000.000
                                    </td>
                                </tr>

                                <tr class="bg-white text-base font-light dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="flex px-6 py-4 font-medium text-gray-900 whitespace-nowrap items-center">
                                        <img class="h-10 w-10" src="../img/Banner.png" alt="" />
                                        <p class="text-base font-light text-[#696974] mx-2">
                                            Kỹ năng phát triển bản thân và nâng cao viết CV...
                                        </p>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.52832" y="0.44043" width="24" height="24" rx="12"
                                                fill="#FAFAFB" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M19.6815 6.42534L18.5438 5.28762C17.6811 4.42496 16.2825 4.42496 15.4198 5.28762L12.5755 8.13193C11.7129 8.99459 11.7129 10.3932 12.5755 11.2559L12.7273 11.4077L11.4956 12.6394L11.3438 12.4876C10.4811 11.625 9.08248 11.625 8.21982 12.4876L5.37551 15.3319C4.51285 16.1946 4.51285 17.5932 5.37551 18.4559L6.51324 19.5936C7.3759 20.4563 8.77455 20.4563 9.63721 19.5936L12.4815 16.7493C13.3442 15.8867 13.3442 14.488 12.4815 13.6253L12.3441 13.488L13.5758 12.2562L13.7132 12.3936C14.5759 13.2563 15.9745 13.2563 16.8372 12.3936L19.6815 9.54932C20.5442 8.68666 20.5442 7.28801 19.6815 6.42534ZM14.4244 11.4077L14.5618 11.5451C14.9558 11.9391 15.5946 11.9391 15.9887 11.5451L18.833 8.70079C19.227 8.30676 19.227 7.66791 18.833 7.27387L17.6953 6.13615C17.3012 5.74212 16.6624 5.74212 16.2683 6.13615L13.424 8.98046C13.03 9.37449 13.03 10.0133 13.424 10.4074L13.5758 10.5592L14.5115 9.62357C14.7664 9.36867 15.1263 9.38984 15.36 9.62357C15.5937 9.85731 15.6149 10.2172 15.36 10.4721L14.4244 11.4077ZM10.6471 13.488L9.71146 14.4236C9.45656 14.6785 9.47773 15.0384 9.71146 15.2721C9.9452 15.5058 10.3051 15.527 10.56 15.2721L11.4956 14.3365L11.633 14.4739C12.027 14.8679 12.027 15.5068 11.633 15.9008L8.78868 18.7451C8.39465 19.1391 7.7558 19.1391 7.36176 18.7451L6.22404 17.6074C5.83001 17.2133 5.83001 16.5745 6.22404 16.1805L9.06835 13.3361C9.46238 12.9421 10.1012 12.9421 10.4953 13.3361L10.6471 13.488Z"
                                                fill="#44444F" />
                                        </svg>
                                    </th>
                                    <td class="px-4 py-4">
                                        <div class="flex gap-1 text-center mx-auto justify-center">
                                            <p>5</p>
                                        </div>

                                    </td>
                                    <td class="px-4 py-4 justify-center text-center m-auto">
                                        200.000
                                    </td>
                                    <td class="px-4 py-4 justify-center text-center m-auto">
                                        1.000.000
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="flex justify-between mt-7 items-center">
                            <p class="text-sm font-normal text-[#44444F]">
                                1-5/ 50 buổi chia sẻ
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
                <!-- Thông tin tài khoản ngân hàng -->
                <div class="flex justify-between">
                    <div class="grid gap-8 w-7/12">
                        <div class="grid gap-3">
                            <h1 class="font-medium text-2xl">Thông tin tài khoản ngân hàng</h1>
                            <p class="text-base font-light">Youth+ sẽ thanh toán cho bạn vào ngày 15 hàng tháng qua hình
                                thức </br> chuyển khoản ngân hàng. Thông tin tài khoản ngân hàng của bạn:</p>
                        </div>

                        <div class="grid gap-4 text-lg font-normal text-[#44444F]">
                            <div class="flex justify-between items-center">
                                <p>
                                    Tên tài khoản <b class="text-[#EB4C4C]">*</b>
                                </p>
                                <input type="text" class="border rounded-md py-3.5 text-sm px-3 w-8/12"
                                    placeholder="NGUYỄN ANH MINH">
                            </div>

                            <div class="flex justify-between items-center">
                                <p>
                                    Số tài khoản <b class="text-[#EB4C4C]">*</b>
                                </p>
                                <input type="text" class="border rounded-md py-3.5 text-sm px-3 w-8/12"
                                    placeholder="12456790">
                            </div>

                            <div class="flex justify-between items-center">
                                <p>
                                    Ngân hàng <b class="text-[#EB4C4C]">*</b>
                                </p>
                                <input type="text" class="border rounded-md py-3.5 text-sm px-3 w-8/12"
                                    placeholder="Chọn ngân hàng">
                            </div>
                        </div>
                        <!-- Save Button -->
                        <div class="justify-self-end">
                            <button
                                class=" px-8 py-2.5 bg-[#B5B5BE] w-fit rounded-[10px] text-base font-semibold text-white items-end">
                                Lưu
                            </button>
                        </div>
                    </div>

                    <!-- Tổng số tiền mentors đã nhận -->
                    <div class="grid gap-14 w-fit items-center justify-center align-middle">
                        <div class="flex gap-8 bg-[#F6F6FF] w-fit rounded-2xl h-fit">
                            <div class="grid gap-2 p-6 ">
                                <p class="text-lg font-normal">Tổng số tiền</p>
                                <div class="flex gap-2 border-b-[1px] pb-2 items-center">
                                    <h1 class="text-5xl font-semibold text-primary w-[19rem]">1.500.000</h1>
                                    <p class="text-lg font-normal text-[#696974]">VNĐ</p>
                                </div>
                                <div class="flex gap-3">
                                    <div class="flex">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.7348 9.90906C17.1094 9.50324 17.0841 8.87058 16.6783 8.49597L13.1783 5.2652C12.7953 4.9116 12.2048 4.9116 11.8218 5.26519L8.32172 8.49596C7.9159 8.87057 7.89059 9.50323 8.26519 9.90905C8.63979 10.3149 9.27245 10.3402 9.67827 9.96558L11.5 8.28397L11.5 18C11.5 18.5523 11.9477 19 12.5 19C13.0523 19 13.5 18.5523 13.5 18L13.5 8.284L15.3217 9.96557C15.7275 10.3402 16.3602 10.3149 16.7348 9.90906Z"
                                                fill="#30AB7E" />
                                        </svg>
                                        <p class="text-lg font-normal text-[#30AB7E]">20%</p>
                                    </div>
                                    <p class="text-[#696974] text-lg font-normal">so với tháng trước</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-8 text-lg font-normal text-primary ">
                            <a class="underline cursor-pointer ">
                                Điều khoản
                            </a>

                            <a class="underline cursor-pointer ">
                                Liên hệ hỗ trợ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
