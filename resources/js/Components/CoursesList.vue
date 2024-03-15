<script>
import { Head, Link } from '@inertiajs/vue3';
export default{
  components:{
    Link,
  },
  props:{
    coursesData:{
      type:Object,
    }
  },
}
</script>

<template>
  <table class="w-full text-center">
    <thead>
      <tr>
        <th>序號</th>
        <th>課程名稱</th>
        <th>課程照片</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="course in coursesData">
        <th class="w-1/12">{{course.id}}</th>
        <td class="w-3/12">{{course.course_name}}</td>
        <td class="w-5/12">
          <img src="https://placehold.jp/300x150.png" class="m-auto" alt="課程照片">
        </td>
        <td class="w-3/12">
          <div class="btns">
            <Link href="/course/edit" class="edit-btn">編輯</Link>
            <div class="delete-btn">刪除</div>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<style scoped>
table,th,tr,td{
  @apply border border-gray-900 p-2 text-center
}
.btns{
  @apply flex flex-col items-center justify-center md:flex-row md:gap-x-4 
}
.edit-btn{
  @apply cursor-pointer w-5/6 bg-blue-600 rounded-md py-2 text-white mb-2 md:mb-0 md:w-2/6 hover:bg-blue-500
}
.delete-btn{
  @apply cursor-pointer w-5/6 bg-rose-600 rounded-md py-2 text-white md:w-2/6 hover:bg-rose-500
}

</style>