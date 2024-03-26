@include('head')
@include('header')
@include('sidebar')


<body class="bg-background-home">
    <div class="bg-cover bg-center h-72 w-screen">
        <div class="pt-p-header pl-p-sidebar">
            <div class="mx-main mt-[2.625rem] flex justify-between items-center">
                <div class="max-h-fit w-2/4 pb-2">
                    <p class="mt-9 font-semibold text-[40px] text-[#22216D] max-h-fit mb-6">Cài đặt tài khoản</p>
                    <div>
                        <a href="javascript:void(0)" onclick="location.href='{{ url('profile/edit') }}'"
                            class="text-lg p-4 ">Thông tin hồ
                            sơ</a>
                        <a href="javascript:void(0)" onclick="location.href='{{ url('profile/edit-password') }}'"
                            class="text-lg p-4 rounded-md bg-white text-[#403ECC]">Đổi mật khẩu</a>
                    </div>
                </div>
            </div>
            <div class="bg-white mx-main rounded-3xl">
                <div class="flex gap-4">
                    <div class="w-2/4 grid gap-4 px-8 py-10">
                        <h1 class="text-2xl font-semibold">
                            Thông tin tài khoản
                        </h1>
                        <div class="grid gap-2 text-base font-normal">
                            <p>Mật khẩu hiện tại</p>
                            <div class="relative">
                                <input type="password" class="border rounded-md py-3.5 text-sm px-3 w-full"
                                    id="Present-password" placeholder="***************">
                                <button type="button" class="absolute top-0 bottom-0 my-auto right-0 p-4"
                                    onclick="togglePassword('Present-password')">
                                    <svg class="h-4 w-4" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.4067 7.62508C2.6362 4.60554 5.17286 2.66675 8.00004 2.66675C10.8272 2.66675 13.3639 4.60554 14.5934 7.62508C14.6911 7.86518 14.6911 8.13498 14.5934 8.37509C13.3639 11.3946 10.8272 13.3334 8.00004 13.3334C5.17286 13.3334 2.6362 11.3946 1.4067 8.37509C1.30893 8.13498 1.30893 7.86518 1.4067 7.62508ZM8.00004 12.0999C10.2794 12.0999 12.3692 10.5246 13.4333 8.00008C12.3692 5.47558 10.2794 3.90031 8.00004 3.90031C5.72067 3.90031 3.63088 5.47558 2.56677 8.00008C3.63088 10.5246 5.72067 12.0999 8.00004 12.0999ZM8.00004 10.4309C6.68086 10.4309 5.61145 9.3426 5.61145 8.00008C5.61145 6.65757 6.68086 5.56924 8.00004 5.56924C9.31922 5.56924 10.3886 6.65757 10.3886 8.00008C10.3886 9.3426 9.31922 10.4309 8.00004 10.4309ZM8.00004 9.19736C8.64979 9.19736 9.17651 8.66132 9.17651 8.00008C9.17651 7.33884 8.64979 6.8028 8.00004 6.8028C7.35029 6.8028 6.82357 7.33884 6.82357 8.00008C6.82357 8.66132 7.35029 9.19736 8.00004 9.19736Z"
                                            fill="#92929D" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="grid gap-2 text-base font-normal">
                            <p>Mật khẩu mới</p>
                            <div class="relative">
                                <input type="password" class="border rounded-md py-3.5 text-sm px-3 w-full"
                                    id="New-password" placeholder="***************">
                                <button type="button" class="absolute top-0 bottom-0 my-auto right-0 p-4"
                                    onclick="togglePassword('New-password')">
                                    <svg class="h-4 w-4" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.4067 7.62508C2.6362 4.60554 5.17286 2.66675 8.00004 2.66675C10.8272 2.66675 13.3639 4.60554 14.5934 7.62508C14.6911 7.86518 14.6911 8.13498 14.5934 8.37509C13.3639 11.3946 10.8272 13.3334 8.00004 13.3334C5.17286 13.3334 2.6362 11.3946 1.4067 8.37509C1.30893 8.13498 1.30893 7.86518 1.4067 7.62508ZM8.00004 12.0999C10.2794 12.0999 12.3692 10.5246 13.4333 8.00008C12.3692 5.47558 10.2794 3.90031 8.00004 3.90031C5.72067 3.90031 3.63088 5.47558 2.56677 8.00008C3.63088 10.5246 5.72067 12.0999 8.00004 12.0999ZM8.00004 10.4309C6.68086 10.4309 5.61145 9.3426 5.61145 8.00008C5.61145 6.65757 6.68086 5.56924 8.00004 5.56924C9.31922 5.56924 10.3886 6.65757 10.3886 8.00008C10.3886 9.3426 9.31922 10.4309 8.00004 10.4309ZM8.00004 9.19736C8.64979 9.19736 9.17651 8.66132 9.17651 8.00008C9.17651 7.33884 8.64979 6.8028 8.00004 6.8028C7.35029 6.8028 6.82357 7.33884 6.82357 8.00008C6.82357 8.66132 7.35029 9.19736 8.00004 9.19736Z"
                                            fill="#92929D" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="grid gap-2 text-base font-normal">
                            <p>Nhập lại mật khẩu mới</p>
                            <div class="relative">
                                <input type="password" class="border rounded-md py-3.5 text-sm px-3 w-full"
                                    id="Renew-password" placeholder="***************">
                                <button type="button" class="absolute top-0 bottom-0 my-auto right-0 p-4"
                                    onclick="togglePassword('Renew-password')">
                                    <svg class="h-4 w-4" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.4067 7.62508C2.6362 4.60554 5.17286 2.66675 8.00004 2.66675C10.8272 2.66675 13.3639 4.60554 14.5934 7.62508C14.6911 7.86518 14.6911 8.13498 14.5934 8.37509C13.3639 11.3946 10.8272 13.3334 8.00004 13.3334C5.17286 13.3334 2.6362 11.3946 1.4067 8.37509C1.30893 8.13498 1.30893 7.86518 1.4067 7.62508ZM8.00004 12.0999C10.2794 12.0999 12.3692 10.5246 13.4333 8.00008C12.3692 5.47558 10.2794 3.90031 8.00004 3.90031C5.72067 3.90031 3.63088 5.47558 2.56677 8.00008C3.63088 10.5246 5.72067 12.0999 8.00004 12.0999ZM8.00004 10.4309C6.68086 10.4309 5.61145 9.3426 5.61145 8.00008C5.61145 6.65757 6.68086 5.56924 8.00004 5.56924C9.31922 5.56924 10.3886 6.65757 10.3886 8.00008C10.3886 9.3426 9.31922 10.4309 8.00004 10.4309ZM8.00004 9.19736C8.64979 9.19736 9.17651 8.66132 9.17651 8.00008C9.17651 7.33884 8.64979 6.8028 8.00004 6.8028C7.35029 6.8028 6.82357 7.33884 6.82357 8.00008C6.82357 8.66132 7.35029 9.19736 8.00004 9.19736Z"
                                            fill="#92929D" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <button
                            onclick="location.href='{{ url('profile') }}'"
                            class="text-base py-2.5 px-4 text-white border-primary border-2 bg-primary rounded-[10px] max-h-11 flex items-center w-fit">
                            Lưu thay đổi
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(id) {
            var passwordInput = document.getElementById(id);
            if (passwordInput.type === "text") {
                passwordInput.type = "password";
            } else {
                passwordInput.type = "text";
            }
        }
    </script>
</body>
