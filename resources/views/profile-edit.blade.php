@include('head')
@include('header')
@include('sidebar')


<body class="bg-background-home">
    <div class="bg-cover bg-center h-72 w-screen">
        <div class="pt-p-header pl-p-sidebar">
            <div class="mx-main mt-[2.625rem] flex justify-between items-center">
                <div class="max-h-fit w-2/4">
                    <p class="mt-9 font-semibold text-[40px] text-[#22216D] max-h-fit mb-6">Cài đặt tài khoản</p>
                    <div>
                        <a href="javascript:void(0)" onclick="location.href='{{ url('profile/edit') }}'"
                            class="text-lg p-4 bg-white rounded-md text-[#403ECC]">Thông tin hồ
                            sơ</a>
                        <a href="javascript:void(0)" onclick="location.href='{{ url('profile/edit-password') }}'"
                            class="text-lg p-4 rounded-md">Đổi mật khẩu</a>
                    </div>
                </div>
                <div class="w-full py-6 px-4 rounded-md border-[#F4BF59] border-[2px]">
                    <p class="text-[#F4BF59] pb-4">Vui lòng hoàn thành hồ sơ để tạo khóa học và kết nối với mentee!</p>
                    <div class="flex justify-between">
                        <div>
                            <hr class="w-24 py-1 bg-[#F4BF59] rounded-md">
                            <p class="text-[#696974] mt-1 text-sm">0. Chung</p>
                        </div>
                        <div>
                            <hr class="w-24 py-1 bg-[#F4BF59] rounded-md">
                            <p class="text-[#696974] mt-1 text-sm">1. Học vấn</p>
                        </div>
                        <div>
                            <hr class="w-24 py-1 bg-[#D5D5DC] rounded-md">
                            <p class="text-[#696974] mt-1 text-sm">2. Chuyên môn</p>
                        </div>
                        <div>
                            <hr class="w-24 py-1 bg-[#D5D5DC] rounded-md">
                            <p class="text-[#696974] mt-1 text-sm">3. Kinh nghiệm</p>
                        </div>
                        <div>
                            <hr class="w-24 py-1 bg-[#D5D5DC] rounded-md">
                            <p class="text-[#696974] mt-1 text-sm">4. Kỹ năng</p>
                        </div>
                        <div>
                            <hr class="w-24 py-1 bg-[#D5D5DC] rounded-md">
                            <p class="text-[#696974] mt-1 text-sm">5. Thành tích</p>
                        </div>
                        <div>
                            <hr class="w-24 py-1 bg-[#D5D5DC] rounded-md">
                            <p class="text-[#696974] mt-1 text-sm">6. Yêu thích</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white px-8 py-10 mx-main rounded-r-md rounded-bl-md">
                <div class="flex justify-between">
                    <div class="w-2/4 mr-[4.5rem]">
                        <h1 class="text-[#171725] text-2xl mb-8 font-semibold">Thông tin chung</h1>
                        <div class="flex mb-8">
                            <input type="text" name="" id="" placeholder="Tên của bạn"
                                class="border rounded-md py-2 px-3 w-full mr-4">
                            <input type="text" name="" id="" placeholder="Nguyễn Văn A"
                                class="border rounded-md py-2 px-3 w-full">
                        </div>
                        <div class="mb-8">
                            <label for="" class="text-[#44444F]">Số điện thoại</label>
                            <div class="flex justify-between items-center border rounded-md py-2 px-3 w-full">
                                <input type="text" placeholder="0123456789">
                                <span class="flex items-center justify-start text-[#30AB7E]">Đã xác thực <svg
                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.9073 5.06411L12.6505 4.32094L11.0125 2.6829L10.2693 3.42607L11.9073 5.06411ZM10.9695 6.00196L9.33146 4.36392L3.20381 10.4916L2.8268 12.5066L4.84185 12.1296L10.9695 6.00196ZM13.628 3.4227C14.1241 3.91878 14.1241 4.72309 13.628 5.21918L5.63453 13.2126C5.53997 13.3072 5.41902 13.371 5.28757 13.3955L2.11881 13.9884C1.6606 14.0741 1.25927 13.6728 1.345 13.2146L1.93787 10.0458C1.96246 9.91439 2.02623 9.79345 2.12079 9.69888L10.1142 1.70544C10.6103 1.20935 11.4146 1.20935 11.9107 1.70544L13.628 3.4227ZM13.34 14H7.99344C7.11335 14 7.11335 12.6667 7.99344 12.6667H13.34C14.2201 12.6667 14.2201 14 13.34 14Z"
                                            fill="#92929D" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="mb-8">
                            <div class="flex justify-start items-center">
                                <div class="mr-4">
                                    <label for="" class="text-[#44444F]">Giới tính</label>
                                    <select name="" id=""
                                        class="border rounded-md py-2 px-3 w-full text-[#B5B5BE]">
                                        <option value="" selected>Nữ</option>
                                        <option value="">Nam</option>
                                        <option value="">Khác</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="" class="text-[#44444F]">Vị trí/Nơi đang sinh sống</label>
                                    <input type="text" value="Hà Nội"
                                        class="border rounded-md py-2 px-3 w-full text-[#B5B5BE]">
                                </div>
                            </div>
                        </div>
                        <div class="mb-8">
                            <h1 class="text-[#44444F]">Ngày tháng năm sinh *</h1>
                            <div class="flex justify-start items-center">
                                <div class="w-1/3 mr-4">
                                    <select name="" id=""
                                        class="border rounded-md py-2 px-3 w-full text-[#B5B5BE]">
                                        <option value="" selected disabled>Ngày</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                                <div class="w-1/3 mr-4">
                                    <select name="" id=""
                                        class="border rounded-md py-2 px-3 w-full text-[#B5B5BE]">
                                        <option value="" selected disabled>Tháng</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                                <div class="w-1/3">
                                    <select name="" id=""
                                        class="border rounded-md py-2 px-3 w-full text-[#B5B5BE]">
                                        <option value="" selected disabled>Năm</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-8">
                            <div class="flex justify-between items-center">
                                <div class="w-2/4 mr-4">
                                    <label class="text-[#44444F]">Ngôn ngữ</label><br />
                                    <select name="" id=""
                                        class="border rounded-md py-2 px-3 w-full text-[#B5B5BE]">
                                        <option value="" selected disabled>Ngày</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                                <div class="w-2/4">
                                    <label class="text-[#44444F]">Ngành/ Lĩnh vực</label><br />
                                    <select name="" id=""
                                        class="border rounded-md py-2 px-3 w-full text-[#B5B5BE]">
                                        <option value="" selected disabled>Tháng</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-2/4">
                        <div class="flex flex-col justify-center items-center">
                            <img src="../img/Avatar.png" alt=""
                                class="rounded-full border-[#7271DE] border-[2px]">
                            <a href="#" class="text-[#403ECC] underline mt-6">Chỉnh sửa hình ảnh đại diện</a>
                        </div>
                        <div class="mt-14">
                            <h1 class="text-[#44444F] text-lg mb-1">Cover hồ sơ *</h1>
                            <p class="text-[#696974] text-xs mb-4">Dung lượng file không được quá 5mb, kích thước 1200
                                x 300 px</p>
                            <label
                                class="p-5 rounded-md border-dashed border-2 bg-[#F1F1F5] border-gray-400 flex flex-col justify-center items-center">
                                <input type="file" class="hidden" />
                                <span>
                                    <svg width="57" height="56" viewBox="0 0 57 56" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.5 11.6667C7.5 6.51205 11.6787 2.33337 16.8333 2.33337H36.3007C38.776 2.33337 41.15 3.31671 42.9003 5.06704L46.7663 8.93304C48.5167 10.6834 49.5 13.0573 49.5 15.5327V44.3334C49.5 49.488 45.3213 53.6667 40.1667 53.6667H16.8333C11.6787 53.6667 7.5 49.488 7.5 44.3334V11.6667ZM44.8333 18.6667V44.3334C44.8333 46.9107 42.744 49 40.1667 49H16.8333C14.256 49 12.1667 46.9107 12.1667 44.3334V11.6667C12.1667 9.08938 14.256 7.00004 16.8333 7.00004H33.1667V11.6667C33.1667 15.5327 36.3007 18.6667 40.1667 18.6667H44.8333ZM44.5745 14C44.3453 13.3411 43.9692 12.7356 43.4665 12.2329L39.6005 8.36688C39.0978 7.8642 38.4923 7.48804 37.8333 7.2589V11.6667C37.8333 12.9554 38.878 14 40.1667 14H44.5745Z"
                                            fill="#B5B5BE" />
                                        <path
                                            d="M30.8334 25.6667C30.8334 24.378 29.7887 23.3334 28.5001 23.3334C27.2114 23.3334 26.1667 24.378 26.1667 25.6667V30.3334H21.5001C20.2114 30.3334 19.1667 31.378 19.1667 32.6667C19.1667 33.9554 20.2114 35 21.5001 35H26.1667V39.6667C26.1667 40.9554 27.2114 42 28.5001 42C29.7887 42 30.8334 40.9554 30.8334 39.6667V35H35.5001C36.7887 35 37.8334 33.9554 37.8334 32.6667C37.8334 31.378 36.7887 30.3334 35.5001 30.3334H30.8334V25.6667Z"
                                            fill="#B5B5BE" />
                                    </svg>
                                </span>
                                <span class="text-base text-gray-400">Kéo thả file vào đây hoặc chọn file từ máy
                                    tính</span>
                                <span class="text-base text-gray-400">Kích thước: 1200 x 300 px</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="">
                        <h1 class="text-[#171725] text-2xl mb-8 font-semibold">Học vấn</h1>
                        <div class="flex justify-between mb-8">
                            <label for="">Trường</label>
                            <input type="text" name="" id="" placeholder="Nhập tên trường"
                                class="w-3/5 border rounded-md py-2 px-3">
                        </div>
                        <div class="flex justify-between mb-8">
                            <label for="">Chuyên ngành</label>
                            <input type="text" name="" id="" placeholder="Nhập chuyên ngành học"
                                class="w-3/5 border rounded-md py-2 px-3">
                        </div>
                        <div class="mb-8">
                            <div class="flex justify-between items-center">
                                <div class="w-2/4 mr-4">
                                    <label class="text-[#44444F]">Ngôn ngữ</label><br />
                                    <input type="date" class="border rounded-md py-2 px-3 w-full">
                                </div>
                                <div class="w-2/4">
                                    <label class="text-[#44444F]">Ngành/ Lĩnh vực</label><br />
                                    <input type="date" class="border rounded-md py-2 px-3 w-full">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full border-t-2 pt-4">
                        <a href="#" class="flex justify-start items-center text-[#403ECC]">
                            <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10ZM20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10ZM10 4C10.5523 4 11 4.44772 11 5V9H15C15.5523 9 16 9.44772 16 10C16 10.5523 15.5523 11 15 11H11V15C11 15.5523 10.5523 16 10 16C9.44772 16 9 15.5523 9 15V11H5C4.44772 11 4 10.5523 4 10C4 9.44772 4.44772 9 5 9H9V5C9 4.44772 9.44772 4 10 4Z"
                                    fill="#403ECC" />
                            </svg>
                            Thêm phần</a>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="">
                        <h1 class="text-[#171725] text-2xl mb-8 font-semibold">Chuyên môn</h1>
                        <div class="flex justify-between mb-8">
                            <select class="js-example-basic-multiple w-full border-[#E2E2EA] text-[#44444F]"
                                name="states[]" multiple="multiple">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="">
                        <h1 class="text-[#171725] text-2xl mb-8 font-semibold">Kinh nghiệm làm việc</h1>
                        <div class="flex justify-between mb-8">
                            <label for="">Công ty</label>
                            <input type="text" name="" id="" placeholder="Nhập tên công ty"
                                class="w-3/5 border rounded-md py-2 px-3">
                        </div>
                        <div class="flex justify-between mb-8">
                            <label for="">Chức vụ</label>
                            <input type="text" name="" id="" placeholder="Nhập chức vụ làm việc"
                                class="w-3/5 border rounded-md py-2 px-3">
                        </div>
                        <div class="flex justify-between mb-8">
                            <label for="">Mô tả</label>
                            <textarea name="" id="" cols="30" rows="5" placeholder="Nhập mô tả về công việc"
                                class="w-3/5 border rounded-md py-2 px-3"></textarea>
                        </div>
                        <div class="mb-8">
                            <div class="flex justify-between items-center">
                                <div class="w-2/4 mr-4">
                                    <label class="text-[#44444F]">Bắt đầu</label><br />
                                    <input type="date" class="border rounded-md py-2 px-3 w-full">
                                </div>
                                <div class="w-2/4">
                                    <label class="text-[#44444F]">Kết thúc</label><br />
                                    <input type="date" class="border rounded-md py-2 px-3 w-full">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full border-t-2 pt-4">
                        <a href="#" class="flex justify-start items-center text-[#403ECC]">
                            <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10ZM20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10ZM10 4C10.5523 4 11 4.44772 11 5V9H15C15.5523 9 16 9.44772 16 10C16 10.5523 15.5523 11 15 11H11V15C11 15.5523 10.5523 16 10 16C9.44772 16 9 15.5523 9 15V11H5C4.44772 11 4 10.5523 4 10C4 9.44772 4.44772 9 5 9H9V5C9 4.44772 9.44772 4 10 4Z"
                                    fill="#403ECC" />
                            </svg>
                            Thêm phần</a>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="">
                        <h1 class="text-[#171725] text-2xl mb-8 font-semibold">Kỹ năng</h1>
                        <div class="flex justify-between mb-8">
                            <label for="">Tên kỹ năng</label>
                            <input type="text" name="" id="" placeholder="Nhập tên kỹ năng"
                                class="w-3/5 border rounded-md py-2 px-3">
                        </div>
                        <div class="flex justify-between mb-8">
                            <label for="">Mô tả</label>
                            <textarea name="" id="" cols="30" rows="5" placeholder="Nhập mô tả về kỹ năng"
                                class="w-3/5 border rounded-md py-2 px-3"></textarea>
                        </div>
                        <div class="mb-8">
                            <div class="flex justify-between items-center">
                                <div class="w-full">
                                    <label class="text-[#44444F]">Thời gian</label><br />
                                    <input type="date" class="border rounded-md py-2 px-3 w-full">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full border-t-2 pt-4">
                        <a href="#" class="flex justify-start items-center text-[#403ECC]">
                            <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10ZM20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10ZM10 4C10.5523 4 11 4.44772 11 5V9H15C15.5523 9 16 9.44772 16 10C16 10.5523 15.5523 11 15 11H11V15C11 15.5523 10.5523 16 10 16C9.44772 16 9 15.5523 9 15V11H5C4.44772 11 4 10.5523 4 10C4 9.44772 4.44772 9 5 9H9V5C9 4.44772 9.44772 4 10 4Z"
                                    fill="#403ECC" />
                            </svg>
                            Thêm phần</a>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="">
                        <h1 class="text-[#171725] text-2xl mb-8 font-semibold">Thành tích</h1>
                        <div class="flex justify-between mb-8">
                            <label for="">Tên thành tích</label>
                            <input type="text" name="" id="" placeholder="Nhập tên thành tích"
                                class="w-3/5 border rounded-md py-2 px-3">
                        </div>
                        <div class="flex justify-between mb-8">
                            <label for="">Mô tả</label>
                            <textarea name="" id="" cols="30" rows="5" placeholder="Nhập mô tả về thành tích"
                                class="w-3/5 border rounded-md py-2 px-3"></textarea>
                        </div>
                        <div class="mb-8">
                            <div class="flex justify-between items-center">
                                <div class="w-full">
                                    <label class="text-[#44444F]">Thời gian</label><br />
                                    <input type="date" class="border rounded-md py-2 px-3 w-full">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full border-t-2 pt-4">
                        <a href="#" class="flex justify-start items-center text-[#403ECC]">
                            <svg class="mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10ZM20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10ZM10 4C10.5523 4 11 4.44772 11 5V9H15C15.5523 9 16 9.44772 16 10C16 10.5523 15.5523 11 15 11H11V15C11 15.5523 10.5523 16 10 16C9.44772 16 9 15.5523 9 15V11H5C4.44772 11 4 10.5523 4 10C4 9.44772 4.44772 9 5 9H9V5C9 4.44772 9.44772 4 10 4Z"
                                    fill="#403ECC" />
                            </svg>
                            Thêm phần</a>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="">
                        <h1 class="text-[#171725] text-2xl mb-8 font-semibold">Chủ đề yêu thích</h1>
                        <div class="flex justify-between mb-8">
                            <select class="js-example-basic-multiple w-full border-[#E2E2EA] text-[#44444F]"
                                name="states[]" multiple="multiple">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end items-center">
                    <a href="#"
                        class="flex justify-center items-center text-[#696974] text-base p-[10px] border-dashed border-2 bg-[#F1F1F5] mr-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 20C6 19.4477 6.44772 19 7 19H21C21.5523 19 22 19.4477 22 20C22 20.5523 21.5523 21 21 21H7C6.44772 21 6 20.5523 6 20Z"
                                fill="#777E91" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.8787 6.87872L17.1214 3.12135C15.9498 1.94978 14.0503 1.94978 12.8787 3.12136L2.12136 13.8787C0.949784 15.0503 0.949781 16.9498 2.12135 18.1214L3.82846 19.8285C4.57861 20.5786 5.59602 21 6.65689 21H9.34318C10.404 21 11.4215 20.5786 12.1716 19.8285L20.8787 11.1214C22.0503 9.94978 22.0503 8.05029 20.8787 6.87872ZM15.7071 4.53557L19.4645 8.29293C19.855 8.68345 19.855 9.31661 19.4645 9.70714L15.0858 14.0858L9.91425 8.91425L14.2929 4.53557C14.6835 4.14504 15.3166 4.14505 15.7071 4.53557ZM8.41425 10.4142L3.53557 15.2929C3.14504 15.6835 3.14505 16.3166 3.53557 16.7071L5.24268 18.4142C5.61775 18.7893 6.12646 19 6.65689 19H9.34318C9.87362 19 10.3823 18.7893 10.7574 18.4142L13.5858 15.5858L8.41425 10.4142Z"
                                fill="#777E91" />
                        </svg>
                        Xoá thay đổi</a>
                    <a href="javascript:void(0)" class="bg-[#403ECC] text-base text-white py-[10px] px-4 rounded-md"
                        onclick="location.href='{{ url('profile') }}'">
                        Lưu thay đổi
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.js-example-basic-multiple').select2();
    </script>
</body>
