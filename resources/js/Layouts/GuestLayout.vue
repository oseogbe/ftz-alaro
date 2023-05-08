<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
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
            </nav>
        </header>
        <div class="max-w-[85rem] w-full mx-auto">
            <div class="mx-4 my-8 md:my-16">
                <slot />
            </div>
        </div>
    </div>
</template>
