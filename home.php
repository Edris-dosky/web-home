<?php
include_once('includes/nav.php');
$all_data = Post::get_all("");
?>
<div id="search" class="hidden">
<hr class="container mx-auto my-4 border-b-1 border-blueGray-300">
    <div class=" flex flex-row-reverse flex-wrap container mx-auto">
     
        <div class="w-6/12 lg:w-2/12 px-4">
          <div class="relative w-full mb-3">
            <select name="type" required id="type" value="" class="pr-4 text-right border-0 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  ">
            <option value="" disabled selected>جۆری موڵکەکە</option>
              <option value="خانوو">خانوو</option>
              <option value="شوقە">شوقە</option>
              <option value="ڤێلا">ڤێلا</option>
              <option value="مەزرەعە">مەزرەعە</option>
              <option value="ئەرز">ئەرز</option>
          </select>
          </div>
        </div>
        <div class="w-6/12 lg:w-2/12 px-4  ">
          <div class="relative w-full mb-3">
            <select name="pre_type" id="pre_type" required  value="" class="text-right border-0  py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
              <option value="" disabled selected>:کرێ/کرین</option>
              <option value="کرێ">کرێ</option>
              <option value="فرۆشتن">کرین</option>
           </select>
            </div>
        </div>
        <div class="w-6/12 lg:w-2/12 px-4">
            <div class="relative w-full mb-3">
              <input type="number" name="price" required placeholder="نرخی دەسپێک" value=""  class="text-right border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="United States">
            </div>
          </div>
          <div class="w-6/12 lg:w-2/12 px-4">
            <div class="relative w-full mb-3">
              <input type="number" name="price" required placeholder="زۆرترین نرخ" value=""  class="text-right border-0 px-3 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="United States">
            </div>
          </div>

          <div class="w-full lg:w-4/12 px-4">
            <button  type="submit" class="w-full p-1 rounded-md bg-[#188F8D] hover:bg-[#106564] text-white text-center  text-xl ">گەران</button>
            </div>
    </div>
    <hr class="container mx-auto my-4 border-b-1 border-blueGray-300">
    </div>
    <div class=" lg:container flex flex-wrap justify-around items-center h-full mx-auto">
    <?php foreach($all_data as $row){ ?>
        <div class="flex flex-col m-4 lg:w-64 w-full h-72 border-[1px] border-solid border-zinc-200 rounded-lg bg-white relative overflow-hidden  ">
            <div class="w-full h-48 overflow-hidden relative group ">
                <a href="post.php?post_id=<?php echo $row->post_id; ?>" class="absolute z-20 transform -translate-x-1/2  top-20 left-1/2 bg-[#188F8D] rounded-md px-4 py-1 text-white opacity-0  group-hover:opacity-100 transition-all duration-300 hover:scale-110">زیاتر</a>
            <img class=" w-full h-48 z-10 object-cover group-hover:blur-sm group-hover:brightness-75 transition-all duration-200" src="./upload/<?php get_photo($row->post_id , 'y'); ?>" alt="">
             </div>
            <span class="absolute top-40 left-0 px-2  bg-slide text-white rounded-tr-md text-lg "><?php echo $row->price."$"; ?></span>
            <span class="absolute top-40 right-0 px-3  text-white text-lg bg-slide rounded-l-md"><?php echo $row->pre_type;?> </span> 
            <span class="text-right text-md py-4 "><?php echo $row->city ." - ".$row->location ?>  <img src="assets/img/location.svg" class="h-5 w-5 mr-2 inline-block" alt=""></span>
            <div class="grid grid-cols-9 w-full border-t-[2px] border-solid divide-x">
                <span class="col-span-3  m-auto"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4 inline-block">
                    <path d="M11.584 2.376a.75.75 0 01.832 0l9 6a.75.75 0 11-.832 1.248L12 3.901 3.416 9.624a.75.75 0 01-.832-1.248l9-6z" />
                    <path fill-rule="evenodd" d="M20.25 10.332v9.918H21a.75.75 0 010 1.5H3a.75.75 0 010-1.5h.75v-9.918a.75.75 0 01.634-.74A49.109 49.109 0 0112 9c2.59 0 5.134.202 7.616.592a.75.75 0 01.634.74zm-7.5 2.418a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75zm3-.75a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0v-6.75a.75.75 0 01.75-.75zM9 12.75a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75z" clip-rule="evenodd" />
                    <path d="M12 7.875a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" />
                  </svg> <?php echo $row->area ?> m<sup>2</sup> </span>
                  <?php if ($row->type == "ئەرز"){ ?>
                    <span class="col-span-6 h-full w-full p-2 relative"><img src="assets/img/road-highway-svgrepo-com.svg" class="h-4 w-4 inline-block absolute right-1 top-2"> <span class="absolute top-2 right-1 text-right"><?php echo $row->angles==1 ?"روکنە" : "اسسسسس"; ?></span> </span>
                <?php }else{?>
                <span class="col-span-2 h-full p-2 relative"><img src="assets/img/bathroom.svg" class="h-4 w-4 inline-block absolute top-3"> <span class="absolute top-2 right-4"><?php echo $row->bathroom ?></span> </span>
                <span class="col-span-2 h-full p-2 relative"><img src="assets/img/bedroom.svg" class="h-4 w-4 inline-block"> <span class="absolute top-2 right-4"><?php echo $row->bedroom ?></span></span>
                <span class="col-span-2 h-full p-1 relative"><img src="assets/img/ready.svg" class="h-6 w-6 inline-block"> <span class="absolute top-2 right-3"><?php echo $row->recaptionroom ?></span></span>
                <?php }?>
            </div>
        </div>
        <?php } ?>
    </div>
    <button id="sr" onclick="search()">search</button>
</body>
</html>
