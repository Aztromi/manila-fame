<template>
    <!-- Hero -->
    <section class="h-screen w-screen bg-[#FFFDF7]" id="hero">
        <div
            class="relative h-screen isolate px-6 bg lg:px-8 bg-cover bg-center bg-no-repeat"
            :style="{ backgroundImage: `url(${heroImageUrl})` }"
        >
            <!-- Optional dark overlay -->
            <div class="absolute inset-0 bg-black/40 -z-10"></div>

            <div
                class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56 text-center text-white"
                v-bind:data-aos="'zoom-in'"
                v-bind:data-aos-delay="100"
                v-bind:data-aos-duration="2000"
            >
                <h1 class="text-5xl font-semibold tracking-tight sm:text-7xl">
                    From Artisan Roots to Global Reach
                </h1>
                <p class="mt-8 text-lg font-medium sm:text-xl">
                    Discover one-of-a-kind furniture, fashion, and lifestyle
                    products crafted with passion and exported worldwide.
                </p>
                <div class="mt-10 flex justify-center">
                    <a
                        href="/register"
                        class="rounded-md bg-[#1F3D2B] px-7 py-5 text-md font-semibold text-white shadow hover:bg-[#7B8C68]"
                    >
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
const heroImageUrl = "/storage/hero-bg.png";
</script>
