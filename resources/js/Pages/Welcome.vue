<script setup>
import { Head, Link } from '@inertiajs/vue3';
import school from '/images/school.png';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />

    <div class="container">
        <!-- nav -->
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-end">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="link-btn"
                >Dashboard
            </Link>

            <template v-else>
                <Link
                    :href="route('login')"
                    class="link-btn"
                    >登入
                </Link>

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ms-4 link-btn"
                    >註冊
                </Link>
            </template>
        </div>

        <!-- 學校圖 -->
        <img :src="school" alt="home" class="home">

        <!-- 學期選單 -->
        <div class="selcet flex items-center gap-x-3 w-5/12">
            <select name="semester" id="semester" class="w-5/12">
                <option value="1">113學年度上學期</option>
                <option value="2">113學年度下學期</option>
            </select>
            <h2 class="font-medium text-xl">學期課表</h2>
        </div>

        <!-- 顯示課程老師 -->
        <table class="w-5/12">
            <thead>
                <tr>
                    <th>序號</th>
                    <th>課程名稱</th>
                    <th>授課教師</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>數學</td>
                    <td>Keivin</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style>
/* 共用樣式 */
.link-btn{
    @apply font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500
}
table,th,tr,td{
    @apply border border-gray-900 p-2 text-center
}
/* 主要樣式 */
.container{
    /* background-image: url(resources\images\school.png); */
    @apply relative w-full sm:flex sm:justify-center sm:items-center min-h-screen  bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white overflow-hidden bg-homeBg  bg-cover flex flex-col gap-y-5
}
.home{
    @apply w-[250px] select-none mb-1
}












/* .bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
} */

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
