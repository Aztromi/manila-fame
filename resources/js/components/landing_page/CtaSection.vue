<template>
    <!-- Registration Call-to-Action (CTA) -->
    <section class="relative z-5 w-screen bg-[#7B8C68] py-24 sm:py-32" id="cta">
        <div class="bg-[#7B8C68]">
            <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
                <div
                    class="relative isolate overflow-hidden bg-[#ACBFA4] px-6 pt-16 after:pointer-events-none after:absolute after:inset-0 after:inset-ring after:inset-ring-white/10 sm:rounded-3xl sm:px-16 after:sm:rounded-3xl md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0"
                    v-bind:data-aos="'zoom-out'"
                    v-bind:data-aos-delay="100 * (index + 1)"
                    v-bind:data-aos-duration="500"
                >
                    <svg
                        viewBox="0 0 1024 1024"
                        class="absolute top-1/2 left-1/2 -z-10 size-256 -translate-y-1/2 mask-[radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0"
                        aria-hidden="true"
                    >
                        <circle
                            cx="512"
                            cy="512"
                            r="512"
                            fill="#C47C48"
                            fill-opacity="0.7"
                        />
                    </svg>

                    <div
                        class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left"
                    >
                        <h2
                            class="text-3xl font-semibold tracking-tight text-balance text-[#FFFDF7] sm:text-4xl"
                        >
                            Join Manila FAME Today!
                        </h2>
                        <p class="mt-6 text-lg/8 text-pretty text-gray-100">
                            Free for qualified buyers. Register now and gain
                            exclusive access to top Philippine exporters,
                            showcases, and networking events.
                        </p>
                        <div
                            class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start"
                        >
                            <a
                                href="/register"
                                class="rounded-md bg-[#1F3D2B] px-3.5 py-2.5 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-[#7B8C68] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
                            >
                                Register as a Buyer
                            </a>
                        </div>
                    </div>
                    <div class="relative mt-16 h-80 lg:mt-8">
                        <img
                            :src="heroheaderUrl"
                            class="absolute top-0 left-0 w-300 max-w-none rounded-md bg-white/5 ring-1 ring-white/10"
                            alt="Product screenshot"
                            width="1824"
                            height="1080"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
const heroheaderUrl = "/storage/pic1.png";
</script>
