<template>
    <!-- Hero -->
    <header
        class="w-screen sticky top-0 z-50 bg-[#FFFDF7]/70 px-6 py-3 lg:px-8"
    >
        <nav class="flex items-center justify-between" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img :src="logoUrl" class="h-8" alt="Logo" />
                </a>
            </div>
            <div class="flex lg:hidden">
                <button
                    type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200"
                    @click="mobileMenuOpen = true"
                >
                    <span class="sr-only">Open main menu</span>
                    <i class="pi pi-bars text-gray-900" aria-hidden="true" />
                </button>
            </div>
            <div class="hidden lg:flex items-center lg:gap-x-12">
                <a
                    v-for="item in navigation"
                    :key="item.name"
                    :href="item.href"
                    :class="
                        item.name === 'Register As Buyer'
                            ? 'rounded-md bg-[#1F3D2B] hover:bg-[#7B8C68] px-2 py-1 text-sm font-semibold text-white shadow text-center'
                            : 'text-sm/6 font-semibold text-gray-700'
                    "
                    >{{ item.name }}</a
                >
            </div>
        </nav>
        <div
            v-if="mobileMenuOpen"
            class="lg:hidden fixed inset-0 z-50 bg-[#C47C48]/90"
        >
            <div
                class="fixed inset-y-0 right-0 z-50 w-full max-w-sm p-6 bg-[#C47C48] overflow-y-auto"
            >
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img :src="logoUrl" class="h-8" alt="Logo" />
                    </a>
                    <button
                        type="button"
                        class="-m-2.5 p-2.5 text-gray-200"
                        @click="mobileMenuOpen = false"
                    >
                        <span class="sr-only">Close menu</span>
                        <i class="pi pi-times" aria-hidden="true"></i>
                    </button>
                </div>

                <div class="mt-6">
                    <div class="space-y-2 py-6">
                        <a
                            v-for="item in navigation"
                            :key="item.name"
                            :href="item.href"
                            :class="
                                item.name === 'Register As Buyer'
                                    ? 'block w-full rounded-md bg-[#1F3D2B] hover:bg-[#7B8C68] px-4 py-2 text-md font-semibold text-white shadow text-center'
                                    : '-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5'
                            "
                        >
                            {{ item.name }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>
<script setup>
import { ref } from "vue";
const logoUrl = "/storage/logo.png";
import "primeicons/primeicons.css";
import "aos/dist/aos.css";

const mobileMenuOpen = ref(false);
const navigation = [
    { name: "Home", href: "#hero" },
    { name: "Why Visit", href: "#why_visit" },
    { name: "Featured", href: "#featured" },
    { name: "Events", href: "#events" },
    { name: "Testimonials", href: "#testimonials" },
    { name: "Call to Action", href: "#cta" },
    { name: "Register As Buyer", href: "/register", link: true },
];
</script>
