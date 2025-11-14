<template>
    <div class="relative isolate px-6 lg:px-8">
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
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-3">
                        <div class="card-body">
                            <h4 class="mb-4 text-center fw-bold text-primary">
                                Registration Form
                            </h4>
                            <div class="max-w-lg mx-auto">
                                <!-- Step 1: Account Information -->
                                <AccountInformation
                                    v-if="step === 1"
                                    :formData="form"
                                    @next="goToCompany"
                                />

                                <!-- Step 2: Company Information -->
                                <CompanyInformation
                                    v-else-if="step === 2"
                                    :companyData="company"
                                    @next="goToSummary"
                                    @back="step = 1"
                                />

                                <!-- Step 3: Summary -->
                                <RegistrationSummary
                                    v-else-if="step === 3"
                                    :accountData="form"
                                    :companyData="company"
                                    @back="step = 2"
                                    @submitted="showThankYou"
                                />
                                <!-- Thank You Message -->
                                <div v-else class="text-center mt-10">
                                    <h2
                                        class="text-2xl font-semibold text-green-600"
                                    >
                                        Thank You!
                                    </h2>
                                    <p>
                                        Your registration has been successfully
                                        submitted.
                                    </p>
                                    <img
                                        :src="ThankYouGif"
                                        class="rounded-md"
                                        alt="thankyou"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            aria-hidden="true"
            class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
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
    </div>
</template>

<script>
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.bundle.min.js";
import AccountInformation from "../components/registration_page/AccountInformation.vue";
import CompanyInformation from "../components/registration_page/CompanyInformation.vue";
import RegistrationSummary from "../components/registration_page/RegistrationSummary.vue";
const ThankYouGif = "/storage/thankyou.gif";
export default {
    name: "RegistrationForm",
    components: { AccountInformation, CompanyInformation, RegistrationSummary },
    data() {
        return {
            step: 1,
            form: {
                first_name: "",
                last_name: "",
                email_address: "",
                username: "",
                password: "",
                confirm_password: "",
                type_of_participation: "",
            },
            company: {
                company_name: "",
                address_line: "",
                town_city: "",
                region_state: "",
                country: "",
                year_established: "",
                website: "",
                company_brochure: null,
            },
        };
    },
    methods: {
        // Step 1 → Step 2
        goToCompany(updatedForm) {
            this.form = updatedForm;
            this.step = 2;
        },
        // Step 2 → Step 3
        goToSummary(updatedCompany) {
            this.company = updatedCompany;
            this.step = 3;
        },
        // Step 3 → Thank You
        showThankYou() {
            this.step = 4; // Display Thank You message
        },
    },
};
</script>
