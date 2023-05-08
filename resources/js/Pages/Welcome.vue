<script setup>
import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Welcome" />

    <div class="container mx-auto selection:bg-secondary/40">
        <header
            class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full text-sm py-4"
        >
            <nav
                class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between"
                aria-label="Global"
            >
                <div class="flex items-center justify-between">
                    <Link
                        class="flex-none text-xl font-semibold dark:text-white"
                        href="/"
                        ><img
                            src="https://www.alarocity.com/wp-content/themes/pixeldot/sites/alaro/images/logo.png"
                            alt="alaro logo"
                            class="w-36 sm:w-48"
                    /></Link>
                    <div class="sm:hidden">
                        <button
                            type="button"
                            class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none transition-all text-sm"
                            data-hs-collapse="#navbar-collapse-with-animation"
                            aria-controls="navbar-collapse-with-animation"
                            aria-label="Toggle navigation"
                        >
                            <svg
                                class="hs-collapse-open:hidden w-8 h-8"
                                width="16"
                                height="16"
                                fill="#6DA681"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
                                />
                            </svg>
                            <svg
                                class="hs-collapse-open:block hidden w-8 h-8"
                                width="16"
                                height="16"
                                fill="#6DA681"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
                <div
                    id="navbar-collapse-with-animation"
                    class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block"
                >
                    <div
                        class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:pl-5"
                    >
                        <Link
                            class="text-lg font-medium text-secondary"
                            :href="route('login')"
                            aria-current="page"
                            >Admin</Link
                        >
                    </div>
                </div>
            </nav>
        </header>
        <div class="max-w-[85rem] w-full mx-auto">
            <div
                class="grid md:grid-cols-5 shadow-lg rounded-xl mx-4 my-8 md:my-16"
            >
                <div
                    class="md:col-span-2 flex flex-col justify-center md:pl-12 leading-[1.2]"
                >
                    <p class="text-2xl md:text-6xl">
                        Register your enterprise today.
                    </p>
                    <div class="mt-8">
                        <Link
                            :href="route('register')"
                            class="px-4 py-2 md:px-8 md:py-4 md:text-2xl tracking-wide border border-black rounded-md inline-flex justify-center items-center gap-2 hover:bg-secondary/10 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-secondary transition-all"
                        >
                            Submit Application
                            <svg
                                class="w-4 h-auto"
                                width="17"
                                height="16"
                                viewBox="0 0 17 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M1 7C0.447715 7 -3.73832e-07 7.44771 -3.49691e-07 8C-3.2555e-07 8.55228 0.447715 9 1 9L13.0858 9L7.79289 14.2929C7.40237 14.6834 7.40237 15.3166 7.79289 15.7071C8.18342 16.0976 8.81658 16.0976 9.20711 15.7071L16.0303 8.88388C16.5185 8.39573 16.5185 7.60427 16.0303 7.11612L9.20711 0.292893C8.81658 -0.0976318 8.18342 -0.0976318 7.79289 0.292893C7.40237 0.683417 7.40237 1.31658 7.79289 1.70711L13.0858 7L1 7Z"
                                    fill="currentColor"
                                />
                            </svg>
                        </Link>
                    </div>
                </div>
                <div class="md:col-span-3 h-[500px] bg-[url('/complex.jpg')] bg-center bg-[length:125%]"></div>
            </div>
        </div>
    </div>
</template>

<style></style>
