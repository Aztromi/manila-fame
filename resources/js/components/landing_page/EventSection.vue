<template>
    <!-- Events Categories -->
    <section class="relative isolate bg-[#FFFDF7]" id="events">
        <div
            aria-hidden="true"
            class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
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
        <div class="w-screen flex flex-col lg:flex-row justify-between">
            <div
                class="w-full flex flex-col items-center justify-start xl:items-start"
            >
                <span
                    class="px-6 pt-10 lg:px-30 flex flex-col items-center lg:items-start justify-center mt-2 text-4xl font-semibold tracking-tight text-pretty text-[#1F3D2B] sm:text-5xl gap-2"
                >
                    Event Categories
                    <p
                        class="text-center lg:text-start lg:max-w-200 text-[#7B8C68] mb-12 text-lg"
                    >
                        Dive into Manila FAME’s main product categories. Each
                        section highlights carefully curated products, offering
                        buyers a quick, visual guide to the diversity and
                        quality available at the event.
                    </p>
                </span>
                <div class="my-auto">
                    <ul
                        class="grid grid-cols-1 gap-y-5 gap-x-6 items-start px-20 sm:px-10"
                    >
                        <li
                            v-for="(event, index) in eventCategories"
                            :key="index"
                            class="relative flex flex-col sm:flex-row items-start gap-4"
                            v-bind:data-aos="'flip-up'"
                            v-bind:data-aos-delay="100 * (index + 1)"
                            v-bind:data-aos-duration="500"
                        >
                            <div class="order-1 sm:ml-6 xl:ml-0">
                                <h3 class="mb-1 text-slate-900 font-semibold">
                                    <span
                                        class="mb-1 block text-lg leading-6 text-[#6B4E2E]"
                                        >{{ event.title }}</span
                                    >
                                    <p>
                                        {{ event.description }}
                                    </p>
                                </h3>
                            </div>
                            <img
                                :src="event.imageUrl"
                                alt=""
                                class="mb-6 rounded-lg bg-slate-50 w-full sm:w-100 sm:mb-0 xl:mb-6"
                            />
                        </li>
                    </ul>
                </div>
            </div>
            <div
                class="row-span-2 hidden xl:block"
                v-bind:data-aos="'zoom-in-left'"
                v-bind:data-aos-delay="100"
                v-bind:data-aos-duration="500"
            >
                <img
                    :src="eventsImageUrl"
                    class="h-280 max-w-none shadow-xl ring-1 ring-white/10"
                    alt="Product screenshot"
                />
            </div>
        </div>
        <div
            aria-hidden="true"
            class="absolute inset-x-0 top-[calc(100%-13rem)] -z-1 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
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
const eventsImageUrl = "/storage/pic2.png";
const events1Url = "/storage/event1.png";
const events2Url = "/storage/event2.png";
const events3Url = "/storage/event3.png";

const eventCategories = [
    {
        title: "Furniture & Home",
        description:
            "Unique, handcrafted furniture and décor for modern living.",
        imageUrl: events1Url,
    },
    {
        title: "Fashion & Accessories",
        description: "Trendy, artisanal fashion and stylish accessories.",
        imageUrl: events2Url,
    },
    {
        title: "Gifts & Lifestyle",
        description: "Thoughtful, sustainable gifts and lifestyle products.",
        imageUrl: events3Url,
    },
];
</script>
