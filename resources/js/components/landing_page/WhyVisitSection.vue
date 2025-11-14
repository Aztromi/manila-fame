<template>
    <!-- Why Visit -->
    <section class="relative isolate py-40 bg-[#FFFDF7]" id="why_visit">
        <div
            aria-hidden="true"
            class="absolute inset-x-0 -right-300 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
        >
            <div
                style="
                    clip-path: polygon(
                        74.1% 44.1%,
                        100% 61.6%,
                        97.5% 26.9%,
                        85.5% 0.1%,
                        80.7% 2%,
                        72.5% 32.5%,
                        60.2% 62.4%,
                        52.4% 68.1%,
                        47.5% 58.3%,
                        45.2% 34.5%,
                        27.5% 76.7%,
                        0.1% 64.9%,
                        17.9% 100%,
                        27.6% 76.8%,
                        76.1% 97.7%,
                        74.1% 44.1%
                    );
                "
                class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#C47C48] to-[#6B4E2E] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75"
            ></div>
        </div>
        <span
            class="px-6 lg:px-30 flex flex-col items-center lg:items-start justify-center mt-2 mb-10 text-4xl font-semibold tracking-tight text-pretty text-[#1F3D2B] sm:text-5xl gap-2"
        >
            Why Visit Manila FAME?
            <p
                class="text-center lg:text-start lg:max-w-200 text-[#7B8C68] mb-12 text-lg"
            >
                Experience the heart of Philippine craftsmanship and innovation.
                Connect directly with skilled artisans and discover exclusive
                collections that blend tradition with modern design. Gain
                insights into sustainable practices and witness the latest
                trends shaping the home, fashion, and lifestyle industries.
            </p>
        </span>
        <div
            class="max-w-[90%] mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-8"
        >
            <div
                v-for="(benefit, index) in benefits"
                :key="benefit.title"
                v-bind:data-aos="'flip-down'"
                v-bind:data-aos-delay="index * 100"
                data-aos-duration="1000"
            >
                <div
                    class="group max-w-1000 lg:h-100 xl:h-130 2xl:h-100 flex flex-col p-6 rounded-lg bg-[#F5EBD0] text-[#6B4E2E] hover:text-[#F5EBD0] hover:bg-[#6B4E2E] transform transition duration-300 ease-in-out hover:scale-105"
                >
                    <div class="text-6xl mb-4 text-end">{{ benefit.icon }}</div>
                    <h3 class="text-2xl font-semibold mb-2">
                        {{ benefit.title }}
                    </h3>
                    <p class="text-gray-500 text-md group-hover:text-white">
                        {{ benefit.description }}
                    </p>
                </div>
            </div>
        </div>
        <div
            aria-hidden="true"
            class="absolute inset-x-0 top-[calc(100%-13rem)] -left-300 -z-1 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
        >
            <div
                style="
                    clip-path: polygon(
                        74.1% 44.1%,
                        100% 61.6%,
                        97.5% 26.9%,
                        85.5% 0.1%,
                        80.7% 2%,
                        72.5% 32.5%,
                        60.2% 62.4%,
                        52.4% 68.1%,
                        47.5% 58.3%,
                        45.2% 34.5%,
                        27.5% 76.7%,
                        0.1% 64.9%,
                        17.9% 100%,
                        27.6% 76.8%,
                        76.1% 97.7%,
                        74.1% 44.1%
                    );
                "
                class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#C47C48] to-[#6B4E2E] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75"
            ></div>
        </div>
    </section>
</template>
<script setup>
const benefits = [
    {
        icon: "🤝",
        title: "Source Directly",
        description:
            "Source Directly. Connect with hundreds of top Philippine exporters and discover unique, high-quality products that you won’t find anywhere else. Build meaningful relationships with artisans and manufacturers who bring passion and expertise to every creation. Gain direct access to their latest collections and innovations, ensuring your business stays ahead in design and quality.",
    },
    {
        icon: "💡",
        title: "Discover New Trends",
        description:
            "Discover New Trends. Be among the first to explore the latest collections and cutting-edge design innovations from Philippine artisans. Stay ahead of the market by seeing what’s fresh, unique, and inspired by Filipino creativity. Gain insights into emerging styles and products that set new standards in craftsmanship and design.",
    },
    {
        icon: "🌿",
        title: "Sustainable & Ethical",
        description:
            "Sustainable & Ethical. Discover products that tell a story, crafted with sustainable materials and ethical practices. Support artisans who prioritize the environment and fair trade. Every purchase reflects care for both the community and the planet.",
    },
    {
        icon: "🎟️",
        title: "Exclusive Access",
        description:
            "Exclusive Access. Gain entry to special showcases, industry talks, and networking events. Meet key designers, connect with top buyers, and unlock opportunities that are only available to Manila FAME attendees. Experience insider access that elevates your sourcing journey.",
    },
];
</script>
