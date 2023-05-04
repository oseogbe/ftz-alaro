<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    first_name: "",
    last_name: "",
    email: "",
    phone: "",
    company_name: "",
    company_email: "",
});

defineProps({
    success: {
        type: String,
    },
});

const submit = () => {
    form.post(route("register"), {
        onSuccess: () => form.reset(),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" />

        <div
            class="max-w-lg mx-auto flex flex-col border shadow-sm rounded-xl overflow-hidden"
        >
            <div
                class="h-32 bg-[url('/complex.jpg')] bg-center bg-[length:110%]"
            ></div>
            <div class="py-3 px-4 md:py-8 md:px-5">
                <div
                    v-if="success"
                    class="mb-4 font-medium text-md text-green-600"
                >
                    {{ success }}
                </div>
                <h1 class="text-2xl md:text-4xl">Apply to Alaro</h1>
                <form class="pt-8" @submit.prevent="submit">
                    <div>
                        <InputLabel for="firstname" value="Firstname" />

                        <TextInput
                            id="firstname"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.first_name"
                            required
                            autocomplete="firstname"
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors.first_name"
                        />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="lastname" value="Lastname" />

                        <TextInput
                            id="lastname"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.last_name"
                            required
                            autocomplete="lastname"
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors.last_name"
                        />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="email" value="Email" />

                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full"
                            v-model="form.email"
                            required
                            autocomplete="username"
                        />

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="phone" value="Phone number" />

                        <div class="relative">
                            <input
                                type="text"
                                id="phone"
                                class="py-3 px-4 pl-20 block w-full border-gray-300 shadow-sm rounded-md text-sm focus:z-10 focus:border-secondary focus:ring-secondary"
                                v-model="form.phone"
                                placeholder="(800) 000-0000"
                                required
                                autocomplete="phone"
                            />
                            <div
                                class="absolute inset-y-0 left-0 flex items-center text-gray-500 pl-px"
                            >
                                <label
                                    for="hs-inline-leading-select-country"
                                    class="sr-only"
                                    >Country</label
                                >
                                <select
                                    id="hs-inline-leading-select-country"
                                    name="hs-inline-leading-select-country"
                                    class="block w-full border-transparent rounded-md focus:ring-0 focus:border-none"
                                >
                                    <option value="+234">NG</option>
                                    <option value="+1">US</option>
                                    <option value="+44">UK</option>
                                </select>
                            </div>
                        </div>

                        <InputError class="mt-2" :message="form.errors.phone" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="company_name" value="Company Name" />

                        <TextInput
                            id="company_name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.company_name"
                            required
                            autocomplete="company_name"
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors.company_name"
                        />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="company_email" value="Company Email" />

                        <TextInput
                            id="company_email"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.company_email"
                            required
                            autocomplete="company_email"
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors.company_email"
                        />
                    </div>

                    <div class="flex items-center justify-end mt-6">
                        <PrimaryButton
                            class="ml-4"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Submit
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </GuestLayout>
</template>
