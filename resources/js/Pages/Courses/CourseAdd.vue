<script>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
export default{
  components:{
    Link,AuthenticatedLayout ,
  },
  data(){
    return{
      imgData:'',
      uploaded:false,
      course:'',
      introduction:'',
    }
  },
  methods:{
    addCourse(){
      this.$inertia.post('/post-course',{
        course:this.course,
        introduction:this.introduction,
        pic:this.imgData,
      },
      {
        onSuccess:(res)=>{
          const msg = res.props.flash.message;
          alert(`新增課程${msg}`)
        }
      });
      this.course = '';
      this.introduction = '';
    },
    uploadFileImg(e){
      if(e.target.files.length === 0){
        return;
      } 
      
      const file = e.target.files[0];
      //includes檢查type
      if(file.type.includes('image/')){
        const img = URL.createObjectURL(file);
        this.imgData = img;
        this.uploaded = true;
      }
    }
  },
}
</script>

<template>
  <AuthenticatedLayout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">課程列表</h2>
    </template>

    <section class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-5 py-8">

          <form action="">
            <label for="courseName">課程名稱</label>
            <input type="text" name="courseName" id="courseName" v-model="course">

            <label for="introduction">課程簡介</label>
            <textarea id="introduction" name="introduction" rows="5" cols="33" v-model="introduction"></textarea>

            <label for="pic">課程照片</label>
            <div class="upload" :class="uploaded ? 'bg-white' : 'bg-gray-300' ">
              <img :src="imgData" class="uploaded">
              <input type="file" accept=".jpg,.png,.gif" @change="uploadFileImg" name="pic" id="pic" class="upload opacity-0">
            </div>


            <div class="flex w-full justify-end gap-x-3">
              <Link href="/course" class="py-2 px-4 bg-gray-500 hover:bg-gray-400 text-white rounded-md"> 返回列表</Link>
              <button type="submit" class="py-2 px-4 bg-blue-500 hover:bg-blue-400 text-white rounded-md" @click="addCourse()">儲存</button>
            </div>
          </form>

        </div>
      </div>
    </section>

  </AuthenticatedLayout>
</template>

<style scoped>
form{
  @apply flex flex-col gap-y-2
}
input[type='text']{
  @apply border-gray-400 rounded
}
.upload{
  @apply relative w-[300px] h-[180px] focus:outline-0 
}
.upload::before{
  content: '點擊上傳圖片';
  @apply absolute w-full h-full flex text-gray-600 justify-center items-center 
}
.uploaded{
  @apply absolute w-full flex justify-center items-center 
}
#introduction{
  resize:none;
  @apply rounded border-gray-400
}
</style>