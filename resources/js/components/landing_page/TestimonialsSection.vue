<template>
    <!-- Testimonials -->
    <section
        class="relative z-5 w-screen bg-[#F5EBD0] py-24 sm:py-32"
        id="testimonials"
    >
        <div class="relative overflow-hidden w-full max-w-5xl mx-auto">
            <div class="lg:max-w-lg">
                <p
                    class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-[#C47C48] sm:text-5xl"
                >
                    Testimomials
                </p>
                <p class="mt-6 text-lg/8 text-gray-600">
                    Trusted by international and local buyers who value quality,
                    craftsmanship, and innovation.
                </p>
            </div>
            <div
                class="flex transition-transform duration-500"
                :style="{ transform: `translateX(-${currentIndex * 100}%)` }"
            >
                <div
                    v-for="(slideGroup, index) in groupedSlides"
                    :key="index"
                    class="shrink-0 w-full flex gap-6 px-6 py-12"
                    v-bind:data-aos="'zoom-in'"
                    v-bind:data-aos-delay="100 * (index + 1)"
                    v-bind:data-aos-duration="500"
                >
                    <div
                        v-for="testimonial in slideGroup"
                        :key="testimonial.name"
                        class="flex-1 bg-[#6B4E2E] p-6 rounded-lg relative isolate"
                    >
                        <div
                            class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,var(--color-indigo-500),transparent)] opacity-10"
                        ></div>
                        <blockquote
                            class="mt-6 text-center text-white text-lg sm:text-xl"
                        >
                            "{{ testimonial.quote }}"
                        </blockquote>
                        <figcaption class="mt-4 text-center">
                            <div class="mt-2 text-2xl font-semibold text-white">
                                {{ testimonial.name }}
                            </div>
                            <div class="text-gray-300">
                                {{ testimonial.title }}
                            </div>
                        </figcaption>
                    </div>
                </div>
            </div>

            <!-- Prev/Next Buttons -->
            <button
                @click="prevSlide"
                class="absolute w-10 h-10 top-75 -translate-y-1/2 bg-black bg-opacity-50 text-white rounded-full"
            >
                &larr;
            </button>
            <button
                @click="nextSlide"
                class="absolute w-10 h-10 top-75 right-0 -translate-y-1/2 bg-black bg-opacity-50 text-white rounded-full"
            >
                &rarr;
            </button>
        </div>
    </section>
</template>
<script setup>
import { ref, computed, onMounted, onUnmounted } from "vue";
import "primeicons/primeicons.css";

const slides = [
    {
        quote: "Manila FAME gave us direct access to the best Filipino exporters. The products are unique and of exceptional quality.",
        avatar: "https://randomuser.me/api/portraits/women/1.jpg",
        name: "Emma Wilson",
        title: "Interior Designer, USA",
    },
    {
        quote: "A fantastic event! We discovered innovative designs and built strong relationships with suppliers.",
        avatar: "https://randomuser.me/api/portraits/men/2.jpg",
        name: "Carlos Mendez",
        title: "Retail Buyer, Spain",
    },
    {
        quote: "The curated exhibitors made it easy to find sustainable and artisanal products for our store.",
        avatar: "https://randomuser.me/api/portraits/women/3.jpg",
        name: "Sophie Tan",
        title: "Lifestyle Store Owner, Singapore",
    },
    {
        quote: "From furniture to fashion, everything showcased here reflects Philippine creativity and craftsmanship.",
        avatar: "https://randomuser.me/api/portraits/men/4.jpg",
        name: "Liam Roberts",
        title: "Product Sourcing Manager, UK",
    },
    {
        quote: "We were impressed by the quality and variety of exhibitors. Manila FAME is a must-attend for buyers.",
        avatar: "https://randomuser.me/api/portraits/men/4.jpg",
        name: "Ananya Kapoor",
        title: "Retail Buyer, India",
    },
    {
        quote: "The event connected us with suppliers who share our vision for sustainable and ethical products.",
        avatar: "https://randomuser.me/api/portraits/men/4.jpg",
        name: "Marcus Lee",
        title: " CEO, Green Home Decor, Australia",
    },
];

const groupedSlides = computed(() => {
    const result = [];
    for (let i = 0; i < slides.length; i += 2) {
        result.push(slides.slice(i, i + 2));
    }
    return result;
});

const currentIndex = ref(0);

const nextSlide = () => {
    currentIndex.value = (currentIndex.value + 1) % groupedSlides.value.length;
};

const prevSlide = () => {
    currentIndex.value =
        (currentIndex.value - 1 + groupedSlides.value.length) %
        groupedSlides.value.length;
};

let interval;
onMounted(() => {
    interval = setInterval(nextSlide, 5000);
});
onUnmounted(() => {
    clearInterval(interval);
});
</script>
