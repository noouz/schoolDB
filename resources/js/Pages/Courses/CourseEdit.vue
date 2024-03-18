<script>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
export default{
  components:{
    Link,AuthenticatedLayout,
  },
  props:{
    editCourseData:{
      type:Object,
    }
  },
  data(){
    return{
      editId:'',
      editCourseName:'',
      editIntroduction:'',
      editImg:'',
    }
  },
  //載入要編輯的課程
  mounted(){
    if (this.editCourseData){
      const course = this.editCourseData;
      this.editId = course.id;
      this.editCourseName = course.course_name;
      this.editIntroduction = course.course_introduction;
    }else{
      console.log('none!');
    }
  },
  methods:{
    //更新
    updateCourse(id){
      this.$inertia.post('/post-edit',
      {
        editId: id,
        editCourse: this.editCourseName,
        editIntroduction: this.editIntroduction,
      },
      {
        onSuccess: (res) => {
          const msg = res.props.flash.message;
          alert(`編輯課程${msg}`);
          // 在更新操作成功后，手动更新页面数据状态
          this.editCourseData = res.props.editCourseData;
        }
      });
    }
  }
}
</script>

<template>
  <AuthenticatedLayout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">編輯課程</h2>
    </template>

    <section class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-5 py-8">

          <form >
            <label for="courseName">課程名稱</label>
            <input type="text" name="courseName" id="courseName" v-model="editCourseName">

            <label for="introduction">課程簡介</label>
            <input type="text" name="introduction" id="introduction" v-model="editIntroduction">

            <label for="pic">課程照片</label>
            <input type="file" name="pic" id="pic" class="upload">


            <div class="flex w-full justify-end gap-x-3">
              <Link href="/course" class="py-2 px-4 bg-gray-500 hover:bg-gray-400 text-white rounded-md"> 返回列表</Link>
              <button type="button" class="py-2 px-4 bg-blue-500 hover:bg-blue-400 text-white rounded-md" @click="updateCourse(editId)">儲存</button>
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
  @apply absolute w-full h-full flex bg-gray-300 text-gray-600 justify-center items-center 
}
</style>