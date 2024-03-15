<script>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
export default{
  components:{
    Link,AuthenticatedLayout,
  },
  // props:{
  // },
}
</script>

<template>
  <AuthenticatedLayout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">編輯課表</h2>
    </template>

    <section class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-9 py-8">
          <div class="w-full flex gap-x-5 mb-5">
            <label for="academic">
              <span>學年度</span>
              <input type="text" name="academic" id="academic">
            </label>
            <label for="semester">
              <span>學期</span>
              <input type="text" name="semester" id="semester">
            </label>
          </div>

          <div class="flex w-full gap-x-2 justify-between items-center">
            <!-- 左邊全部課程表 -->
            <div class="table-style">
              <table class="w-full">
                <thead>
                  <tr>
                    <th colspan="2">全部課程</th>
                  </tr>
                  <tr>
                    <th>課程</th>
                    <th>教師</th>
                  </tr>
                </thead>
                <tbody>
                  <td>國語</td>
                  <td>Stanley</td>
                </tbody>
              </table>
            </div>
            <!-- 中間箭頭符號 -->
            <div class="w-1/12">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="gray"><path d="M103 497c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-55-55L424 408c13.3 0 24-10.7 24-24s-10.7-24-24-24L81.9 360l55-55c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L7 367c-9.4 9.4-9.4 24.6 0 33.9l96 96zM441 145c9.4-9.4 9.4-24.6 0-33.9L345 15c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l55 55L24 104c-13.3 0-24 10.7-24 24s10.7 24 24 24l342.1 0-55 55c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l96-96z"/></svg>
            </div>
            <!-- 右邊學期課程表 -->
            <div class="table-style">
              <table class="w-full">
                <thead>
                  <tr>
                    <th colspan="2">學期課程</th>
                  </tr>
                  <tr>
                    <th>課程</th>
                    <th>教師</th>
                  </tr>
                </thead>
                <tbody>
                  <td>國語</td>
                  <td>Stanley</td>
                </tbody>
              </table>
            </div>
          </div>

          <div class="flex w-full justify-end gap-x-3 mt-10">
            <Link href="/schedule" class="py-2 px-4 bg-gray-500 hover:bg-gray-400 text-white rounded-md"> 返回列表</Link>
            <button type="submit" class="py-2 px-4 bg-blue-500 hover:bg-blue-400 text-white rounded-md">儲存</button>
          </div>

        </div>
      </div>
    </section>

  </AuthenticatedLayout>
</template>

<style scoped>
form{
  @apply flex flex-col gap-y-2
}
tr,td{
  @apply border-b border-gray-400 p-2 text-center border-separate
}
th{
  @apply bg-slate-300 border-0 border-b border-gray-900  py-1
}
.table-style{
  @apply border border-gray-900 rounded w-5/12 min-h-[40vh]
}
input[type='text']{
  @apply border-gray-400 rounded w-full
}
label{
  @apply w-6/12
}
</style>