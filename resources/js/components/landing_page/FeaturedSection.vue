<template>
    <!-- Featured Exhibitors/Products Showcase: -->
    <section class="relative z-5 w-screen bg-[#F5EBD0]" id="featured">
        <div class="py-24 sm:py-32">
            <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
                <span
                    class="mx-auto mt-2 text-center text-4xl font-semibold tracking-tight text-balance text-[#6B4E2E] sm:text-5xl"
                >
                    Featured Exhibitors/Products Showcase
                    <p
                        class="text-center lg:text-start lg:max-w-200 text-[#C47C48] mb-12 text-lg"
                    >
                        Explore a curated selection of exhibitors showcasing the
                        best of Philippine craftsmanship. Each product reflects
                        innovation, quality, and unique design, giving buyers a
                        taste of the diverse offerings at Manila FAME. Scroll or
                        swipe to discover standout pieces and meet the makers
                        behind them.
                    </p>
                </span>
                <div
                    class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2"
                >
                    <div
                        v-for="(item, index) in featuredItems"
                        :key="index"
                        class="relative"
                        v-bind:data-aos="'zoom-in-down'"
                        v-bind:data-aos-delay="100 * (index + 1)"
                        v-bind:data-aos-duration="500"
                    >
                        <div
                            :class="`absolute inset-px rounded-lg bg-[#ACBFA4] ${item.roundedClass}`"
                        ></div>
                        <div
                            class="relative h-full flex flex-col justify-between overflow-hidden"
                        >
                            <div class="py-4 px-4">
                                <p
                                    class="text-xl font-semibold tracking-tight text-[#FFFDF7] max-lg:text-center"
                                >
                                    {{ item.title }}
                                </p>
                                <p
                                    v-if="item.exhibitor"
                                    class="max-w-lg text-sm/6 text-gray-600 max-lg:text-center"
                                >
                                    By: {{ item.exhibitor }}
                                </p>
                                <p
                                    class="max-w-lg mt-2 text-sm/6 text-gray-600 max-lg:text-center"
                                >
                                    {{ item.description }}
                                </p>
                            </div>
                            <div
                                class="mt-5 p-4 min-h-55 w-full flex items-end"
                            >
                                <img
                                    :src="item.imageUrl"
                                    class="rounded-md"
                                    alt="Product screenshot"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
import { ref } from "vue";

const featuredItems = ref([
    {
        title: "Woven to Wooden Handicrafts",
        exhibitor: "Rufa Claire Desor",
        description: `From its name alone, one anticipates a testament to fine craftsmanship of Basket and Weaves. 
    The brand showcases their mastery of manipulating handwoven materials such as seagrass, buri, rattan, abaca, and banana bark to create their products.`,
        imageUrl: "/storage/featured1.png",
        roundedClass: "lg:rounded-tl-4xl",
    },
    {
        title: "CRAFTED ELEGANCE: Embracing Modernity with Nature’s Riches",
        exhibitor: "April Rose Hina",
        description: `South Sea Veneer is renowned for their expertise in marquetry, an exquisite art form that entails adorning pieces with veneer to create intricate and ornate patterns that captivate the eye. Recently, the brand showcased its unparalleled artistry as one of the featured exhibitors in Manila FAME 2023.`,
        imageUrl: "/storage/featured2.png",
        roundedClass: "",
    },
    {
        title: "Vito Selma brings the outdoors in at his newest office studio",
        exhibitor: "Vito Selma",
        description: `Vito Selma reimagines his new office with an ephemeral take on the lightness and airiness of the outdoors whilst bringing that vibe inside. Years of experience come to the fore as this award-winning designer masters the seamless balance between evoking nature's breathing space and the utilitarian efficiency of a workplace.`,
        imageUrl: "/storage/featured3.png",
        roundedClass: "lg:rounded-tr-4xl",
    },
    {
        title: "Creating unique room designs: Personalizing your space",
        exhibitor: "Heinimex Corporation",
        description: `The key is going back to your tastes and your lifestyle, and making your spaces work for you. While aesthetics are important, it should always be paired with practicality, taking into consideration how you see yourself moving in your home so that each area is maximized.`,
        imageUrl: "/storage/featured4.png",
        roundedClass: "lg:rounded-bl-4xl",
    },
    {
        title: "Chic and Unique Finds at Manila FAME 2023",
        exhibitor: "",
        description: `As if making up for lost time, Manila FAME 2023 shows a playful, joyful side with bold designs and a diverse array of choices to suit every preference. From bags to accessories to shoes, they bear the mark of meticulous craftsmanship, each item built to last.`,
        imageUrl: "/storage/featured5.png",
        roundedClass: "",
    },
    {
        title: "A Tradition In Carving",
        exhibitor: "Chanalli",
        description: `Chanalli, with the assistance of CITEM, started exhibiting at Manila FAME eight years ago as a reseller of Filipino tribal and colonial antiques and found objects. Though the pieces on show appealed to both local collectors and foreign buyers, Chanalli’s owner realized that the pricing was too steep for the export market.`,
        imageUrl: "/storage/featured6.png",
        roundedClass: "lg:rounded-br-4xl",
    },
]);
</script>
