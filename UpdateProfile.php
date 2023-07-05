<?php
require_once('includes/nav.php');
in(0 ,"login.php" );
?>
<?php $obj->photo?>
<div class=" container mx-auto py-10 lg:w-[70rem] w-[30rem]">
        <div class="p-4 bg-white shadow mt-24 rounded-lg">   
      <form action="<?php echo $db->secure($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data" >
      <div class="relative">   
        <div class="w-52 h-52 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 -top-4 -mt-24 flex items-center justify-center text-[#188F8D]">
            <img class="w-full h-full rounded-full object-cover z-10" id="img"  src="./upload/<?php echo $obj->photo?>"  alt="user photo"> 
            <input type="file" id="file" name="" onchange="previewFile()" class="hidden">
             <label for="file" class="z-20 absolute cursor-pointer bg-slate-200 rounded-full p-4 top-36 right-0 shadow-lg">
           <img src="assets/img/update.svg"  class="w-8 h-8 z-20">
             </label>
             </div>
            </div>
            
            <div class="w-full flex flex-col justify-center items-center gap-4 pt-32">
                <input type="text" name="username" required value="" class=" text-right w-2/3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#188F8D]" placeholder="ناو">
                <input type="text" name="username" required value="" class=" text-right w-2/3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#188F8D]" placeholder="ژمارە مۆبایل">
                <input type="text" name="username" required value="" class=" text-right w-2/3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#188F8D]" placeholder="ئیمایل">
                <input type="text" name="username" required value="" class=" text-right w-2/3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#188F8D]" placeholder="شوێن">
        <hr class="container mx-auto my-4 border-b-1 border-blueGray-300">
        <div class="w-2/3 text-right " >
        <label for="uppass"  class="cursor-pointer">گۆرینی وشەی نهێنی</label>
        <input type="checkbox"  onclick="pass()" name="uppass" id="uppass" class="cursor-pointer">
        </div>
        <input type="text" name="username" id="pass1"  value="" class="hidden text-right w-2/3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#188F8D]" placeholder="وشەی نهێنی">
        <input type="text" name="username" id="pass2"  value="" class="hidden text-right w-2/3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-[#188F8D]" placeholder=" دوبارەکردنەوەی وشەی نهێنی">
        <hr class="container mx-auto my-4 border-b-1 border-blueGray-300">
        <div class="w-full flex ">
          <div class="w-1/2 lg:w-4/12 px-4">
          <button type="reset" class="w-full p-2 rounded-md bg-gray-700 hover:bg-gray-800 text-white text-center  text-xl ">
            <img src="assets/img/x.svg" class="md:w-8 md:h-8 w-6 h-6 mx-1 inline-block">سرینەوە
          </button>
          </div>
          <div class="w-1/2 lg:w-8/12 px-4">
            <button  type="submit" class="w-full p-2 rounded-md bg-[#188F8D] hover:bg-[#106564] text-white text-center  text-xl ">
              <img src="assets/img/check.svg" class="md:w-8 md:h-8 w-6 h-6 mx-1 inline-block">گۆرین
            </button>
            </div>
      </div>
</div>
</form>
      </div>
    </div>
</body>
</html>

<script>
function pass(){
  var input = document.getElementById('uppass');
  if (input.checked == false){
    document.getElementById("pass1").classList.add("hidden")
        document.getElementById("pass1").classList.remove("block")
        document.getElementById("pass2").classList.add("hidden")
        document.getElementById("pass2").classList.remove("block")
        }else if(input.checked == true){
          document.getElementById("pass1").classList.add("block")
        document.getElementById("pass1").classList.remove("hidden")
        document.getElementById("pass2").classList.add("block")
        document.getElementById("pass2").classList.remove("hidden")
        }

        }
        
        function previewFile() {
          var preview = document.getElementById('img');
          var file    = document.querySelector('input[type=file]').files[0];
          var reader  = new FileReader();

          reader.onloadend = function () {
            preview.src = reader.result;
          }

          if (file) {
            reader.readAsDataURL(file);
          } else {
            preview.src = "";
          }
}
</script>