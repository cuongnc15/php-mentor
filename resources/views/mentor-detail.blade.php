@include('head')
@include('header')
@include('sidebar')

<body>
<div class="pl-p-sidebar">
        <div class="bg-[url('../img/Artboard.png')] w-full bg-cover h-[216px]">         
        </div>

        <div class="bg-[#D6D6FD] px-[60px] py-[20px] ">
          <div class="flex justify-between">
            <div class="flex gap-5 items-center">
              <div>
                <img
                  class="rounded-[50%] w-[143px] border-[2px] border-solid border-[#0062FF]"
                  src="../img/a.png"
                  alt=""
                />
              </div>

              <div class="py-3">
                <div class="text-[#22216D] mb-2 text-[40px] font-semibold">
                  Nguyễn Văn A
                </div>
                <p class="text-[#403ECC] text-[20px] py-2">
                  Senior tại ABC, 10 năm kinh nghiệm tư vấn
                </p>
                <div class="bg-[#30AB7E] text-white rounded-[8px] p-2 w-[75px]">
                  Mentee
                </div>
              </div>
            </div>

            <div class="pt-[30px]">
              <button class="bg-[#403ECC] me-3 text-white py-2 w-[190px] rounded-[8px]">
                Viết bài
              </button>
              <button class="text-[#403ECC] bg-white py-2 w-[226px] rounded-[8px]">
                Chỉnh sửa trang cá nhân
              </button>
            </div>
          </div>

          <div class="border-b-[1px] border-[#7271DE] py-3"></div>

          <div class="flex justify-between pt-[20px]">
            <Link
              class="text-[#7271DE] hover:bg-gray-700"
              href={}
            >
              <p class="text-[#7271DE]">VỀ TÔI</p>
            </Link>

            <Link class="text-[#7271DE] hover:bg-gray-700" href={}>
              <p class="text-[#7271DE]">HỒ SƠ (CV)</p>
            </Link>

            <Link class="text-[#7271DE] hover:bg-gray-700" href={}>
              <p class="text-[#7271DE]">ĐÁNH GIÁ</p>
            </Link>

            <Link class="text-[#7271DE] hover:bg-gray-700" href={}>
              <p class="text-[#7271DE]">BÀI VIẾT</p>
            </Link>

            <Link class="text-[#7271DE] hover:bg-gray-700" href={}>
              <p class="text-[#7271DE]">MENTORS</p>
            </Link>

            <Link class="text-[#7271DE] hover:bg-gray-700" href={}>
              <p class="text-[#7271DE]">SỰ KIỆN</p>
            </Link>

            <Link class="text-[#7271DE] hover:bg-gray-700" href={}>
              <p class="text-[#7271DE]">KHOÁ HỌC</p>
            </Link>

            <Link class="text-[#7271DE] hover:bg-gray-700" href={}>
              <p class="text-[#7271DE]">THEO DÕI</p>
            </Link>

            <div class="flex gap-3 text-[#22216D] items-center">
              <ShareAltOutlined />
              <EditOutlined />
            </div>
          </div>
        </div>

        <div class="bg-[#F6F6FF] px-[60px] py-[20px] flex gap-4">
          <div class="w-[70%]">
            <div class="flex justify-between pb-[50px] mb-5 border-b-2 border-[#E2E2EA]">
              <p class="text-[#22216D] text-[20px] font-semibold">
                Hồ sơ đã tạo trên YOUTH+
              </p>

              <button class="bg-[#403ECC] text-white p-2 rounded-[8px]">
                Thêm mới
              </button>
            </div>

            <div class="flex justify-between">
              <p class="text-[#22216D] text-[20px] font-semibold">
                Hồ sơ đã tải lên YOUTH+
              </p>

              <button class="bg-[#403ECC] text-white p-2 rounded-[8px]">
                Tải lên
              </button>
            </div>
          </div>

          <div class="w-[30%]">
            <div class="bg-white rounded-[10px] p-3">
              <div class="flex items-center gap-2">
                <img src="./images/CV-management/wave/Frame.png" alt="" />
                <p>Chào bạn A trở lại,</p>
              </div>
              <div class="flex gap-2 items-center">
                <div>
                  <Switch
                    ref={switchRef}
                    defaultChecked
                    class="bg-[#30AB7E]"
                    onChange={onChange}
                  />
                </div>

                <div>
                  <p class="text-[#30AB7E]">Trạng thái tìm việc đang bật</p>
                  <p>
                    Bật tìm việc để nhận được nhiều cơ hội việc làm tốt nhất từ YOUTH+
                  </p>
                  <p>
                    Cho phép các Nhà tuyển dụng đã được YOUTH+ xác thực xem CV Online để
                    có thể liên hệ với bạn
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>