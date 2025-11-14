<template>
    <div>
        <h2 class="text-xl font-semibold mb-4">Step 3: Review & Confirm</h2>

        <!-- Account Information -->
        <section class="mb-6">
            <h3 class="font-semibold mb-2">Account Information</h3>
            <div v-for="field in accountFields" :key="field.key" class="mb-2">
                <span class="font-medium">{{ field.label }}:</span>
                <span class="ml-2">{{ localData.account[field.key] }}</span>
            </div>
        </section>

        <!-- Company Information -->
        <section class="mb-6">
            <h3 class="font-semibold mb-2">Company Information</h3>
            <div v-for="field in companyFields" :key="field.key" class="mb-2">
                <span class="font-medium">{{ field.label }}:</span>
                <span class="ml-2">
                    <!-- Show file name if file uploaded -->
                    <template
                        v-if="
                            field.type === 'file' &&
                            localData.company[field.key]
                        "
                    >
                        {{ localData.company[field.key].name }}
                    </template>
                    <template v-else>
                        {{ localData.company[field.key] || "-" }}
                    </template>
                </span>
            </div>
        </section>

        <!-- Action buttons -->
        <div class="flex justify-between mt-4">
            <button
                @click="$emit('back')"
                class="bg-gray-500 text-white px-4 py-2 rounded"
            >
                Back
            </button>
            <button
                @click="submitRegistration"
                class="bg-green-600 text-white px-4 py-2 rounded"
            >
                Submit Registration
            </button>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "RegistrationSummary",
    props: ["accountData", "companyData"],
    data() {
        return {
            localData: {
                account: { ...this.accountData },
                company: { ...this.companyData },
            },
            accountFields: [
                { key: "first_name", label: "First Name" },
                { key: "last_name", label: "Last Name" },
                { key: "email_address", label: "Email Address" },
                { key: "username", label: "Username" },
                {
                    key: "type_of_participation",
                    label: "Type of Participation",
                },
            ],
            companyFields: [
                { key: "company_name", label: "Company Name", type: "text" },
                { key: "address_line", label: "Address Line", type: "text" },
                { key: "town_city", label: "Town/City", type: "text" },
                { key: "region_state", label: "Region/State", type: "text" },
                { key: "country", label: "Country", type: "select" },
                {
                    key: "year_established",
                    label: "Year Established",
                    type: "number",
                },
                { key: "website", label: "Website", type: "url" },
                {
                    key: "company_brochure",
                    label: "Company Brochure",
                    type: "file",
                },
            ],
        };
    },
    methods: {
        async submitRegistration() {
            try {
                const formData = new FormData();

                // Append account info
                for (const key in this.localData.account) {
                    formData.append(key, this.localData.account[key]);
                }

                // Append company info
                for (const key in this.localData.company) {
                    const value = this.localData.company[key];
                    formData.append(key, value);
                }

                // Axios POST request
                const response = await axios.post(
                    "http://localhost:8000/api/register",
                    formData,
                    { headers: { "Content-Type": "multipart/form-data" } }
                );

                if (response.status === 200) {
                    alert("Registration submitted successfully!");
                    this.$emit("submitted");
                }
            } catch (error) {
                if (error.response) {
                    if (error.response.status === 422) {
                        // Laravel validation errors
                        const errors = error.response.data.errors;
                        console.log("Validation errors:", errors);

                        // Example: show all errors as alerts
                        Object.keys(errors).forEach((key) => {
                            alert(`${key}: ${errors[key].join(", ")}`);
                        });
                    } else {
                        // Other server errors
                        console.error("Server error:", error.response.data);
                        alert(
                            "Server error occurred while submitting registration."
                        );
                    }
                } else {
                    // Network or other Axios errors
                    console.error(error);
                    alert("An error occurred while submitting registration.");
                }
            }
        },
    },
};
</script>
