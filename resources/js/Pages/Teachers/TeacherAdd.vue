<script>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
export default{
  components:{
    Link,AuthenticatedLayout ,
  },
  // props:{
  // },
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
            <label for="course">課程</label>
            <select name="course" id="course">
              <option value="0">請選擇課程</option>
              <option value="1">國語</option>
              <option value="2">數學</option>
            </select>

            <label for="courseName">教師姓名</label>
            <input type="text" name="courseName" id="courseName">

            <label for="introduction">教師簡介</label>
            <input type="text" name="introduction" id="introduction">


            <div class="flex w-full justify-end gap-x-3 mt-20">
              <Link href="/teacher" class="py-2 px-4 bg-gray-500 hover:bg-gray-400 text-white rounded-md"> 返回列表</Link>
              <button type="submit" class="py-2 px-4 bg-blue-500 hover:bg-blue-400 text-white rounded-md">儲存</button>
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
</style>