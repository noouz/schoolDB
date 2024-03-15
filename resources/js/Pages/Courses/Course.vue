<script>
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CoursesList from '@/Components/CoursesList.vue';
export default{
  components:{
    Link,AuthenticatedLayout,CoursesList,
  },
  props:{
    coursesData:{
      type:Object,
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
          <Link href="/add-course" class="py-2 px-4 bg-green-500 hover:bg-green-400 text-white rounded-md"> 新增</Link>

          <!-- 記得傳給子元件 :response -->
          <CoursesList class="mt-6" :coursesData="coursesData"></CoursesList>

        </div>
      </div>
    </section>

  </AuthenticatedLayout>
</template>
