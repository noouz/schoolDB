<script>
import { Head, Link } from '@inertiajs/vue3';
export default{
  components:{
    Link,
  },
  // props:{
  // },
}
</script>

<template>
  <table class="w-full text-center">
    <thead>
      <tr>
        <th>序號</th>
        <th>學年</th>
        <th>學期</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="w-2/12">1</th>
        <td class="w-3/12">113</td>
        <td class="w-3/12">上</td>
        <td class="w-4/12">
          <div class="btns">
            <div class="send-btn">寄送</div>
            <Link href="/schedule/edit" class="edit-btn">編輯</Link>
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
  @apply flex flex-col items-center justify-center md:flex-row md:gap-x-2 
}
.send-btn{
  @apply cursor-pointer w-5/6 bg-green-800 rounded-md py-2 text-white mb-2 md:mb-0 md:w-2/6 hover:bg-green-700
}
.edit-btn{
  @apply cursor-pointer w-5/6 bg-blue-600 rounded-md py-2 text-white mb-2 md:mb-0 md:w-2/6 hover:bg-blue-500
}
.delete-btn{
  @apply cursor-pointer w-5/6 bg-rose-600 rounded-md py-2 text-white md:w-2/6 hover:bg-rose-500
}

</style>