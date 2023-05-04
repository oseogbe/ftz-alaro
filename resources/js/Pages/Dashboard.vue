<script setup>
import { ref } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

const props = defineProps({
    applications: {
        type: Object,
    },
});

const selectedStatus = ref(null);

// const applications = ref({});

const filterByStatus = (status = '') => {
    // axios.get(`/filter?status=${status}`).then(response => applications.value = response.data);
    // selectedStatus.value = status;
};

filterByStatus();
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <!-- component -->
        <section>
            <div class="sm:flex sm:items-center sm:justify-between">
                <div>
                    <div class="flex items-center gap-x-3">
                        <h2
                            class="text-lg font-medium text-gray-800 dark:text-white"
                        >
                            Applications
                        </h2>

                        <span
                            class="px-3 py-1 text-xs text-secondary bg-secondary/10 rounded-full"
                            >240</span
                        >
                    </div>

                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">
                        You have 3 pending applications today.
                    </p>
                </div>
            </div>

            <div class="mt-6 md:flex md:items-center md:justify-between">
                <div
                    class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700"
                >
                    <button
                        @click="filterByStatus()"
                        :class="{ active: selectedStatus === '' }"
                        class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100"
                    >
                        View all
                    </button>

                    <button
                        @click="filterByStatus(1)"
                        :class="{ active: selectedStatus === 1 }"
                        class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100"
                    >
                        Pending
                    </button>

                    <button
                        @click="filterByStatus(2)"
                        :class="{ active: selectedStatus === 2 }"
                        class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100"
                    >
                        Accepted
                    </button>

                    <button
                        @click="filterByStatus(3)"
                        :class="{ active: selectedStatus === 3 }"
                        class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100"
                    >
                        Declined
                    </button>
                </div>

                <div class="relative flex items-center mt-4 md:mt-0">
                    <span class="absolute">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                            />
                        </svg>
                    </span>

                    <input
                        type="text"
                        placeholder="Search"
                        class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 focus:border-none focus:ring-secondary focus:outline-none focus:ring focus:ring-opacity-40"
                    />
                </div>
            </div>

            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div
                        class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8"
                    >
                        <div
                            class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg"
                        >
                            <table
                                class="min-w-full divide-y divide-gray-200 dark:divide-gray-700"
                            >
                                <thead class="bg-gray-50 dark:bg-gray-800">
                                    <tr>
                                        <th
                                            scope="col"
                                            class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400"
                                        >
                                            <button
                                                class="flex items-center gap-x-3 focus:outline-none"
                                            >
                                                <span>Company</span>

                                                <svg
                                                    class="h-3"
                                                    viewBox="0 0 10 11"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                        fill="currentColor"
                                                        stroke="currentColor"
                                                        stroke-width="0.1"
                                                    />
                                                    <path
                                                        d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                        fill="currentColor"
                                                        stroke="currentColor"
                                                        stroke-width="0.1"
                                                    />
                                                    <path
                                                        d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                        fill="currentColor"
                                                        stroke="currentColor"
                                                        stroke-width="0.3"
                                                    />
                                                </svg>
                                            </button>
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400"
                                        >
                                            Firstname
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400"
                                        >
                                            Lastname
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400"
                                        >
                                            Email
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400"
                                        >
                                            Phone
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400"
                                        >
                                            Status
                                        </th>

                                        <th
                                            scope="col"
                                            class="relative py-3.5 px-4"
                                        >
                                            <span class="sr-only">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900"
                                >
                                    <tr
                                        v-for="application in applications.data"
                                        :key="application.id"
                                    >
                                        <td
                                            class="px-4 py-4 text-sm font-medium whitespace-nowrap"
                                        >
                                            <div>
                                                <h2
                                                    class="font-medium text-gray-800 dark:text-white"
                                                >
                                                    {{
                                                        application.company_name
                                                    }}
                                                </h2>
                                                <p
                                                    class="text-sm font-normal text-gray-600 dark:text-gray-400"
                                                >
                                                    {{
                                                        application.company_email
                                                    }}
                                                </p>
                                            </div>
                                        </td>
                                        <td
                                            class="px-4 py-4 text-sm whitespace-nowrap"
                                        >
                                            <div>
                                                <p
                                                    class="text-gray-500 dark:text-gray-400"
                                                >
                                                    {{ application.first_name }}
                                                </p>
                                            </div>
                                        </td>
                                        <td
                                            class="px-4 py-4 text-sm whitespace-nowrap"
                                        >
                                            <div>
                                                <p
                                                    class="text-gray-500 dark:text-gray-400"
                                                >
                                                    {{ application.last_name }}
                                                </p>
                                            </div>
                                        </td>
                                        <td
                                            class="px-4 py-4 text-sm whitespace-nowrap"
                                        >
                                            <div>
                                                <p
                                                    class="text-gray-500 dark:text-gray-400"
                                                >
                                                    {{ application.email }}
                                                </p>
                                            </div>
                                        </td>

                                        <td
                                            class="px-4 py-4 text-sm whitespace-nowrap"
                                        >
                                            <div>
                                                <p
                                                    class="text-gray-500 dark:text-gray-400"
                                                >
                                                    {{ application.phone }}
                                                </p>
                                            </div>
                                        </td>

                                        <td
                                            class="px-4 py-4 text-sm font-medium whitespace-nowrap"
                                        >
                                            <div
                                                class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60 dark:bg-gray-800"
                                            >
                                                {{ application.status }}
                                            </div>
                                        </td>

                                        <td
                                            class="px-4 py-4 text-sm whitespace-nowrap"
                                        >
                                            <button
                                                class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="1.5"
                                                    stroke="currentColor"
                                                    class="w-6 h-6"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"
                                                    />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 sm:flex sm:items-center sm:justify-between">
                <div class="text-sm text-gray-500 dark:text-gray-400">
                    Page <span class="font-medium text-gray-700 dark:text-gray-100">1 of 10</span>
                </div>

                <div class="flex items-center mt-4 gap-x-4 sm:mt-0">
                    <Link
                        v-if="applications.prev_page_url"
                        :href="applications.prev_page_url"
                        preserve-scroll
                        class="pagination-link"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 rtl:-scale-x-100"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18"
                            />
                        </svg>

                        <span> previous </span>
                    </Link>
                    <span
                        v-else
                        class="pagination-link"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 rtl:-scale-x-100"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18"
                            />
                        </svg>

                        <span> previous </span>
                    </span>

                    <Link
                        v-if="applications.next_page_url"
                        :href="applications.next_page_url"
                        preserve-scroll
                        class="pagination-link"
                    >
                        <span> Next </span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 rtl:-scale-x-100"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                            />
                        </svg>
                    </Link>
                    <span
                        v-else
                        class="pagination-link"
                    >
                        <span> Next </span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 rtl:-scale-x-100"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
                            />
                        </svg>
                    </span>
                </div>
            </div>
        </section>
    </AuthenticatedLayout>
</template>

<style scoped>
.active {
    @apply px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300;
}

.pagination-link {
    @apply flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800;
}
</style>