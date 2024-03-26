@include('head')
@include('header')
@include('sidebar')


<body class="bg-background-home">
    <div class="bg-white h-fit w-screen pt-p-header pl-p-sidebar">
        <div class="grid gap-3">
            <!-- <div class="flex justify-center items-center py-4">
                <div class="grid gap-3 relative">
                    <div class="rounded-full bg-primary p-1 w-7 h-7">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.49061 9.22552C5.14719 8.88553 4.59318 8.8883 4.25319 9.23172C3.9132 9.57513 3.91597 10.1291 4.25939 10.4691L9.35657 15.5155C9.71642 15.8718 10.3026 15.8491 10.6339 15.4661L17.7868 7.19747C18.1029 6.83199 18.0629 6.27941 17.6975 5.96326C17.332 5.6471 16.7794 5.68708 16.4632 6.05256L9.92271 13.6134L5.49061 9.22552Z"
                                fill="white" />
                        </svg>
                    </div>

                    <p class="absolute text-lg font-normal ">THÔNG TIN KHÓA HỌC</p>
                </div>
                <div class="border-2 border-primary h-0 w-3/12"></div>
                <div class="border-2 border-[#D5D5DC] h-0 w-2/12"></div>
                <div class="rounded-full border-[#B5B5BE] border-[1px] w-7 h-7 p-1">
                </div>
            </div> -->

            <div class="bg-white pt-4 h-[30px] flex justify-center">
                <div class="mx-main relative h-4 w-96">
                    <div
                        class="flex justify-center items-center z-10 absolute left-0 w-6 h-6 bg-[#403ECC] border-2 border-[#403ECC] rounded-full -mt-1">
                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1.49061 4.22552C1.14719 3.88553 0.593182 3.8883 0.25319 4.23172C-0.0868029 4.57513 -0.0840272 5.12915 0.259389 5.46914L5.35657 10.5155C5.71642 10.8718 6.30264 10.8491 6.63394 10.4661L13.7868 2.19747C14.1029 1.83199 14.0629 1.27941 13.6975 0.963257C13.332 0.6471 12.7794 0.687082 12.4632 1.05256L5.92271 8.61343L1.49061 4.22552Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div
                        class="flex justify-center items-center z-10 absolute right-0 w-6 h-6 bg-[#403ECC] border-2 border-[#403ECC] rounded-full -mt-1">
                    </div>
                    <div class="z-[2] absolute top-1/3 bottom-0 bg-[#403ECC] rounded-full w-2/4 h-1"></div>
                    <div class="z-[1] absolute top-1/3 right-0 bg-[#D5D5DC] rounded-full w-2/3 h-1"></div>
                </div>
            </div>
            <div class="bg-white pt-6 h-[70px] flex justify-center">
                <div class="h-4 w-[34rem] mr-[4rem] flex justify-between">
                    <p class="text-lg text-[#22216D] uppercase">THÔNG TIN KHÓA HỌC</p>
                    <p class="text-lg text-[#696974] uppercase">XEM TRƯỚC</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8 pl-p-sidebar ">
        <div class="grid gap-8 w-fit mx-auto">
            <div class="bg-white flex p-10 rounded-xl gap-24">
                <div class="grid gap-6 h-fit my-auto">
                    <h1 class="font-semibold text-4xl text-[#22216D]">
                        Bạn đã gửi buổi chia sẻ thành công
                    </h1>
                    <p class="text-lg font-normal text-[#696974]">
                        Nội dung của bạn đang ở chế độ chờ duyệt. Chúng tôi sẽ gửi thông <br> báo đến bạn khi có thông
                        tin
                        mới nhất.
                    </p>
                </div>

                <img src="../../img/Completed.png" alt="anh" />
            </div>

            <div class="flex justify-between">
                <button
                    class="text-base font-semibold py-2.5 px-4 text-primary border-primary border-[1px] rounded-xl max-h-11 flex items-center min-w-fit">
                    Hủy đăng tin
                </button>
                <button
                    class="text-base font-semibold py-2.5 px-4 text-white border-primary border-2 bg-primary rounded-xl max-h-11 flex items-center min-w-fit">
                    Chỉnh sửa nội dung
                </button>
            </div>
        </div>

    </div>
</body>
