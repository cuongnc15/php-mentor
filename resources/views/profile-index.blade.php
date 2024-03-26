@include('head')
@include('header')
@include('sidebar')


<body class="bg-background-home pl-p-sidebar">
    <div class="bg-[url('../img/Artboard.png')] w-full bg-cover h-[216px]">         
    </div>
    <!-- List -->
    <div class="bg-[#D6D6FD] px-10">
        <div>
            <div class="flex py-6 justify-between border-b-[1px] border-primary">
                <div class="flex gap-4">
                    <img id="avatar" class="h-40 w-40 rounded-[50%]" src="" alt="" />
                    <div class="my-auto grid gap-2">
                        <p id = "name" class="font-semibold text-4xl"></p>
                        <p id = "experience" class="font-light text-xl text-[#403ECC]"></p>
                        <button class="bg-[#30AB7E] px-3 py-1.5 rounded max-w-fit">
                            <p class="text-sm text-white font-normal">Mentor</p>
                        </button>
                    </div>
                </div>

                <div class="grid gap-4 h-fit self-center">
                    <div class="flex gap-4">
                        <button
                            class="bg-white hover:text-white hover:bg-primary py-2.5 px-4 text-base font-semibold text-primary rounded-xl min-w-[12rem]"><a href="https://docs.google.com/forms/d/e/1FAIpQLSd3k1_zNrviXLeLIuXvr2bacusJYekcaKVYNfuSSg0pDSHmRg/viewform">Kết nối</a></button>
                        <button
                            class="bg-white hover:text-white hover:bg-primary py-2.5 px-4 text-base font-semibold text-primary rounded-xl min-w-[12rem]">Theo dõi</button>
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
                    <li class="text-[#22216D] text-lg font-semibold cursor-pointer" onclick="location.href='<?php echo url('/profile/{id}'); ?>'">VỀ TÔI
                        <svg class="m-auto" width="25" height="17" viewBox="0 0 25 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 0L24.5 17H0.5L12.5 0Z" fill="#F6F6FF" />
                        </svg>
                    </li>
                    <!-- <li class="text-primary text-lg font-normal cursor-pointer" onclick="location.href='<?php echo url('/program'); ?>'">CHƯƠNG TRÌNH</li>
                    </li>
                    <li class="text-primary text-lg font-normal cursor-pointer" onclick="location.href='<?php echo url('/mentee'); ?>'">MENTEE</li>
                    <li class="text-primary text-lg font-normal cursor-pointer" onclick="location.href='<?php echo url('/store'); ?>'">THEO DÕI ĐƠN HÀNG</li>
                    <li class="text-primary text-lg font-normal cursor-pointer" onclick="location.href='<?php echo url('/evaluate'); ?>'">ĐÁNH GIÁ</li> -->
                </ul>

                <div class="flex gap-6 items-center">
                    <svg class="cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.4998 4.16683C12.4998 2.32588 13.9922 0.833496 15.8332 0.833496C17.6741 0.833496 19.1665 2.32588 19.1665 4.16683C19.1665 6.00778 17.6741 7.50016 15.8332 7.50016C14.6953 7.50016 13.6907 6.93006 13.0892 6.05992L7.30653 8.87882C7.43168 9.22924 7.49984 9.60674 7.49984 10.0002C7.49984 10.3664 7.44077 10.7189 7.33164 11.0485L13.0812 13.9521C13.6817 13.0754 14.6903 12.5002 15.8332 12.5002C17.6741 12.5002 19.1665 13.9925 19.1665 15.8335C19.1665 17.6744 17.6741 19.1668 15.8332 19.1668C13.9922 19.1668 12.4998 17.6744 12.4998 15.8335C12.4998 15.732 12.5044 15.6316 12.5133 15.5324L6.42078 12.4557C5.82736 13.0007 5.03579 13.3335 4.16651 13.3335C2.32556 13.3335 0.833172 11.8411 0.833172 10.0002C0.833172 8.15921 2.32556 6.66683 4.16651 6.66683C5.005 6.66683 5.77119 6.97643 6.35698 7.48755L12.5149 4.48573C12.5049 4.38077 12.4998 4.2744 12.4998 4.16683ZM17.4998 4.16683C17.4998 3.24635 16.7536 2.50016 15.8332 2.50016C14.9127 2.50016 14.1665 3.24635 14.1665 4.16683C14.1665 5.0873 14.9127 5.8335 15.8332 5.8335C16.7536 5.8335 17.4998 5.0873 17.4998 4.16683ZM17.4998 15.8335C17.4998 14.913 16.7536 14.1668 15.8332 14.1668C14.9127 14.1668 14.1665 14.913 14.1665 15.8335C14.1665 16.754 14.9127 17.5002 15.8332 17.5002C16.7536 17.5002 17.4998 16.754 17.4998 15.8335ZM4.16651 8.3335C5.08698 8.3335 5.83317 9.07969 5.83317 10.0002C5.83317 10.9206 5.08698 11.6668 4.16651 11.6668C3.24603 11.6668 2.49984 10.9206 2.49984 10.0002C2.49984 9.07969 3.24603 8.3335 4.16651 8.3335Z"
                            fill="#22216D" />
                    </svg>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="flex px-10">
        <div class="  p-6 w-[65%] bg-white border-r-2 borer-[#D5D5DC]">
            
            <div class="py-3 w-[37.5rem] text-center mx-auto text-[#22216D] font-normal text-base">
                <p id = "introduce"></p>
            </div>

            <div class="py-3">
                <div class="flex items-center pb-3">
                    <p class="font-medium text-2xl text-[#22216D]">Chuyên môn</p>
                </div>

                <div id = "expertise" class="flex flex-wrap gap-3">

                </div>
            </div>
          
            <div class="py-3">
                <div class="flex gap-4 items-center">
                    <p class="font-medium text-2xl text-[#22216D]">Kinh nghiệm làm việc</p>
                </div>

                <div class="grid gap-2">
                    <div id = "listExp">
                    </div>                    
                </div>
            </div>

          


           

            <div class="py-3">
                <div class="flex  items-center">
                    <p class="font-medium text-2xl text-[#22216D]">Thành tích</p>
                </div>

                <div id="listReward">
                </div>
            </div>

            
        </div>
        <!-- General Info  -->
        <div class=" bg-white h-full w-[35%]">
            
            <div class="flex py-[20px] items-center justify-center">
                    <p class="font-medium text-center text-[24px] text-[#22216D]">Đánh giá mức độ phù hợp nghề</p>
            </div>

            <div class="relative bg-[url('../img/t_C3_A1ch-n_E1_BB_81n.png')] lg:w-[320px] lg:h-[250px] bg-center bg-cover cart-custom bg-no-repeat border shadow-card rounded-tl-[20px] rounded-tr-[20px] mx-auto mb-[100px]">                
                <div class="bg-[#0F0F14] link-cart transform hover:scale-105 transition duration-300 absolute right-[20px] top-[16px] cursor-pointer bg-opacity-[20%] text-white w-[40px] h-[18px] rounded-[5px] flex items-center justify-center"><img src="../img/ic_More.png" alt=""></div>
                <a href="https://youth.com.vn/danh-gia-nang-luc/danh-gia-nghe-sale-marketing" class="bg-white rounded-[22px] hover:bg-[#22216D] hover:text-white cursor-pointer w-[90%] lg-w-[300px] lg:-h-[130px] p-[20px] link-cart absolute bottom-0 right-1/2 translate-y-1/2 translate-x-1/2">
                    <div class="flex justify-center">
                        <p class="pb-[20px] ">Đánh giá nghề Sale & Marketing</p>

                    </div>
                    <div class="flex justify-between pb-3 ">
                        <div class="flex items-center gap-2">
                            <img src="../img/Shape.png" alt="">
                            <p> 12 câu</p>
                        </div>

                        <div class="flex items-center gap-2">
                            <img src="../img/shape2.png" alt="">
                            <p>Đã làm test: 500</p>
                        </div>                      
                    </div>
                </a>
            </div>

            <div class="relative bg-[url('../img/t_C3_A1ch-n_E1_BB_81n.png')] lg:w-[320px] lg:h-[250px] bg-center bg-cover cart-custom bg-no-repeat border shadow-card rounded-tl-[20px] rounded-tr-[20px] mx-auto mb-[100px]"">                
                <div class="bg-[#0F0F14] link-cart transform hover:scale-105 transition duration-300 absolute right-[20px] top-[16px] cursor-pointer bg-opacity-[20%] text-white w-[40px] h-[18px] rounded-[5px] flex items-center justify-center"><img src="../img/ic_More.png" alt=""></div>
                <a href="https://youth.com.vn/danh-gia-nang-luc/danh-gia-nghe-cong-nghe-thong-tin" class="bg-white rounded-[22px] hover:bg-[#22216D] hover:text-white cursor-pointer w-[90%] lg-w-[300px] lg:-h-[130px] p-[20px] link-cart absolute bottom-0 right-1/2 translate-y-1/2 translate-x-1/2">
                    <div class="flex justify-center">
                        <p class="pb-[20px] ">Đánh giá nghề Công nghệ thông tin</p>

                    </div>
                    <div class="flex justify-between pb-3 ">
                        <div class="flex items-center gap-2">
                            <img src="../img/Shape.png" alt="">
                            <p> 12 câu</p>
                        </div>

                        <div class="flex items-center gap-2">
                            <img src="../img/shape2.png" alt="">
                            <p>Đã làm test: 500</p>
                        </div>                      
                    </div>
                </a>
            </div>

            <div class="relative bg-[url('../img/t_C3_A1ch-n_E1_BB_81n.png')] lg:w-[320px] lg:h-[250px] bg-center bg-cover cart-custom bg-no-repeat border shadow-card rounded-tl-[20px] rounded-tr-[20px] mx-auto mb-[100px]"">                
                <div class="bg-[#0F0F14] link-cart transform hover:scale-105 transition duration-300 absolute right-[20px] top-[16px] cursor-pointer bg-opacity-[20%] text-white w-[40px] h-[18px] rounded-[5px] flex items-center justify-center"><img src="../img/ic_More.png" alt=""></div>
                <a href="https://youth.com.vn/danh-gia-nang-luc/danh-gia-nghe-tai-chinh-ke-toan" class="bg-white rounded-[22px] hover:bg-[#22216D] hover:text-white cursor-pointer w-[90%] lg-w-[300px] lg:-h-[130px] p-[20px] link-cart absolute bottom-0 right-1/2 translate-y-1/2 translate-x-1/2">
                    <div class="flex justify-center">
                        <p class="pb-[20px] ">Đánh giá nghề Tài chính - Kế toán</p>

                    </div>
                    <div class="flex justify-between pb-3 ">
                        <div class="flex items-center gap-2">
                            <img src="../img/Shape.png" alt="">
                            <p> 12 câu</p>
                        </div>

                        <div class="flex items-center gap-2">
                            <img src="../img/shape2.png" alt="">
                            <p>Đã làm test: 500</p>
                        </div>                      
                    </div>
                </a>
            </div>

            <div class="relative bg-[url('../img/t_C3_A1ch-n_E1_BB_81n.png')] lg:w-[320px] lg:h-[250px] bg-center bg-cover cart-custom bg-no-repeat border shadow-card rounded-tl-[20px] rounded-tr-[20px] mx-auto mb-[100px]">                
                <div class="bg-[#0F0F14] link-cart transform hover:scale-105 transition duration-300 absolute right-[20px] top-[16px] cursor-pointer bg-opacity-[20%] text-white w-[40px] h-[18px] rounded-[5px] flex items-center justify-center"><img src="../img/ic_More.png" alt=""></div>
                <a href="https://youth.com.vn/danh-gia-nang-luc/danh-gia-nghe-van-hanh" class="bg-white border rounded-[22px] hover:bg-[#22216D] hover:text-white cursor-pointer w-[90%] lg-w-[300px] lg:-h-[130px] p-[20px] link-cart absolute bottom-0 right-1/2 translate-y-1/2 translate-x-1/2">
                    <div class="flex justify-center">
                        <p class="pb-[20px] ">Đánh giá nghề Vận hành</p>

                    </div>
                    <div class="flex justify-between pb-3 ">
                        <div class="flex items-center gap-2">
                            <img src="../img/Shape.png" alt="">
                            <p> 12 câu</p>
                        </div>

                        <div class="flex items-center gap-2">
                            <img src="../img/shape2.png" alt="">
                            <p>Đã làm test: 500</p>
                        </div>                      
                    </div>
                </a>
            </div>

            
        </div>
    </div>


<script>
   
    const url = window.location.pathname;
    const id = url.substring(url.lastIndexOf('/') + 1);
    
    // Gọi API với ID đã lấy được
    fetch('https://be.youth.com.vn/mentor/getDetail', {
        method: 'post',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },           
        body: JSON.stringify({
            id
        })  
    })
  .then(response => response.json())
  .then(data => {
    document.getElementById("name").innerText = data.name;
    document.getElementById("experience").innerText = data.experience;
    document.getElementById("introduce").innerText = data.introduce;
    document.getElementById("avatar").src = data.avatar;
    
    var listExp = document.getElementById("listExp");    
        JSON.parse(data.work_experience).forEach(function(detailCompany) {
        var listCompany = document.createElement("div");
        var position = document.createElement("div");
        var name = document.createElement("div");
        var company = document.createElement("div");
        var description = document.createElement("div");
        var duration = document.createElement("div");
        
        position.textContent = detailCompany.position;
        name.textContent = detailCompany.company;
        description.textContent = detailCompany.description;
        duration.textContent = detailCompany.duration;
        listExp.appendChild(listCompany);
        listCompany.appendChild(company);
        company.appendChild(position);
        company.appendChild(name);
        company.appendChild(description);
        company.appendChild(duration);

        listExp.className = 'py-2';
        description.className = 'ps-2 py-2 text-[#171725]';
        position.className = 'py-2 text-[#171725]';
        name.className = 'text-[#696974] pb-3 ';
        duration.className = 'text-right text-[#696974] pr-[50px]';

    });

    var listReward = document.getElementById("listReward");    
        JSON.parse(data.rewards).forEach(function(rewardData) {
            var reward = document.createElement("div");
            var nameReward = document.createElement("div");
            var durationReward = document.createElement("div");
            var descriptionReward = document.createElement("div");

            listReward.appendChild(reward);
            reward.appendChild(nameReward);
            reward.appendChild(descriptionReward);
            reward.appendChild(durationReward);

            nameReward.textContent = rewardData.name;
            descriptionReward.textContent = rewardData.description;
            durationReward.textContent = rewardData.duration;

            reward.className = 'py-4';
            nameReward.className = 'py-2 text-[#171725]';
            reward.className = 'py-2';
            descriptionReward.className = 'text-[#696974] pr-[50px] pb-2';
            durationReward.className = 'text-right text-[#696974] pr-[50px]';
        })

                    
            let parts = data.careers[0].area_of_expertise?.split(/[\r\n-]+/);

            // // Loại bỏ các phần tử trống từ mảng
            let filteredParts = parts?.filter(part => part.trim() !== '');   

            var expertise = document.getElementById("expertise");
            data.careers?.forEach(function(expertiseData) {
                var expertiseItem = document.createElement("div");
                expertise.appendChild(expertiseItem);
                expertiseItem.textContent = expertiseData.name;
                expertiseItem.className = 'text-sm text-[#403ECC] font-normal bg-[#DCF6EC] px-2 py-1.5 rounded-[8px] flex gap-2 items-center min-w-fit';
            })
            // Xử lý dữ liệu nhận được từ API
            console.log(data);
  })
  .catch(error => {
    // Xử lý lỗi nếu có
    console.error('Error:', error);
  });
</script>
<style>
    .cart-custom {
        box-shadow: 1px 10px 20px 0 rgba(0, 0, 0, 0.1);
    }
    .link-cart {
        box-shadow: 1px 10px 20px 0 rgba(0, 0, 0, 0.1);
    }
</style>

</body>

