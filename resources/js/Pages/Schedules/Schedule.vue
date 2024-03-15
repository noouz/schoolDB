<script>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import SchedulesList from '@/Components/SchedulesList.vue';
export default{
  components:{
    Link,AuthenticatedLayout,SchedulesList,
  },
  // props:{
  // },
}
</script>

<template>
  <AuthenticatedLayout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">課表列表</h2>
    </template>

    <section class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-5 py-8">
          <Link href="/schedule/add" class="py-2 px-4 bg-green-500 hover:bg-green-400 text-white rounded-md"> 新增</Link>

          <SchedulesList class="mt-6"></SchedulesList>

        </div>
      </div>
    </section>

  </AuthenticatedLayout>
</template>