<template>
    <!-- Footer -->
    <footer class="bg-[#6B4E2E] text-white px-6 py-12">
        <div
            class="max-w-7xl mx-auto flex flex-col lg:flex-row justify-between gap-10"
        >
            <!-- Logo & Website -->
            <div class="flex flex-col items-start gap-4">
                <img :src="logoUrl" class="h-8" alt="Logo" />
                <a
                    href="https://fameplus.com"
                    target="_blank"
                    class="hover:underline"
                >
                    Visit Official Website
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="flex flex-col gap-2">
                <h4 class="font-semibold text-lg">Explore</h4>
                <a href="#why_visit" class="hover:underline">Why Visit</a>
                <a href="#featured" class="hover:underline"
                    >Featured Exhibitors</a
                >
                <a href="#events" class="hover:underline">Events</a>
                <a href="#testimonials" class="hover:underline">Testimonials</a>
            </div>

            <!-- Contact Info -->
            <div class="flex flex-col gap-2">
                <h4 class="font-semibold text-lg">Contact</h4>
                <span>Manila, Philippines</span>
                <span>Email: info@fameplus.com</span>
                <span>Phone: +63 967 289 5949</span>
            </div>

            <!-- Social Media -->
            <div class="flex flex-col gap-2">
                <h4 class="font-semibold text-lg">Follow Us</h4>
                <div class="flex gap-4 text-2xl">
                    <a
                        href="https://www.facebook.com/fameplus"
                        target="_blank"
                        aria-label="Facebook"
                    >
                        <i class="pi pi-facebook"></i>
                    </a>
                    <a
                        href="https://www.instagram.com/fameplus"
                        target="_blank"
                        aria-label="Instagram"
                    >
                        <i class="pi pi-instagram"></i>
                    </a>
                    <a
                        href="https://www.linkedin.com/company/fameplus"
                        target="_blank"
                        aria-label="LinkedIn"
                    >
                        <i class="pi pi-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-10 text-center text-sm text-gray-200">
            <p>© 2025 Manila FAME. All Rights Reserved.</p>
        </div>
    </footer>
</template>
<script setup>
const logoUrl = "/storage/logo.png";
import "primeicons/primeicons.css";
</script>
