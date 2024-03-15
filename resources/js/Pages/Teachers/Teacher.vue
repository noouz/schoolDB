<script>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TeachersList from '@/Components/TeachersList.vue';
export default{
  components:{
    Link,AuthenticatedLayout,TeachersList
  },
  // props:{
  // },
}
</script>

<template>
  <AuthenticatedLayout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">教師列表</h2>
    </template>

    <section class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-5 py-8">
          <Link href="/teacher/add" class="py-2 px-4 bg-green-500 hover:bg-green-400 text-white rounded-md"> 新增</Link>

          <TeachersList class="mt-6"></TeachersList>

        </div>
      </div>
    </section>

  </AuthenticatedLayout>
</template>