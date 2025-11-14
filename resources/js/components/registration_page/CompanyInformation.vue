<template>
    <div>
        <h2 class="text-xl font-semibold mb-4">Step 2: Company Information</h2>

        <form class="needs-validation" novalidate @submit.prevent="next">
            <div v-for="field in fields" :key="field.key" class="mb-3">
                <label :for="field.key" class="form-label">
                    {{ field.label }}
                    <span v-if="field.required" class="text-danger">*</span>
                </label>

                <!-- Input or file -->
                <template
                    v-if="field.type !== 'select' && field.type !== 'file'"
                >
                    <input
                        :type="field.type"
                        class="form-control"
                        :id="field.key"
                        v-model="localCompany[field.key]"
                        :placeholder="field.placeholder"
                        :required="field.required"
                        :minlength="field.minlength || null"
                        :maxlength="field.maxlength || null"
                        :class="{ 'is-invalid': errors[field.key] }"
                    />
                </template>

                <!-- Select dropdown for countries -->
                <select
                    v-else-if="field.type === 'select'"
                    class="form-select"
                    :id="field.key"
                    v-model="localCompany[field.key]"
                    :required="field.required"
                    :class="{ 'is-invalid': errors[field.key] }"
                >
                    <option value="" disabled>Select {{ field.label }}</option>
                    <option
                        v-for="option in countries"
                        :key="option"
                        :value="option"
                    >
                        {{ option }}
                    </option>
                </select>

                <!-- File upload -->
                <input
                    v-else-if="field.type === 'file'"
                    type="file"
                    class="form-control"
                    :id="field.key"
                    @change="handleFileUpload($event, field.key)"
                    accept=".pdf,.doc,.docx"
                    :class="{ 'is-invalid': errors[field.key] }"
                />

                <!-- Validation feedback -->
                <div class="invalid-feedback" v-if="errors[field.key]">
                    {{ errors[field.key] }}
                </div>
            </div>

            <!-- Action buttons -->
            <div class="d-flex justify-content-between mt-4">
                <button
                    type="button"
                    class="btn btn-secondary"
                    @click="$emit('back')"
                >
                    Back
                </button>
                <button type="submit" class="btn btn-primary">Next</button>
            </div>
        </form>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "CompanyInformation",
    props: ["companyData"],
    data() {
        return {
            localCompany: { ...this.companyData },
            countries: [],
            errors: {},
            fields: [
                {
                    key: "company_name",
                    label: "Company Name",
                    type: "text",
                    required: true,
                },
                {
                    key: "address_line",
                    label: "Address Line",
                    type: "text",
                    required: true,
                },
                {
                    key: "town_city",
                    label: "Town/City",
                    type: "text",
                    required: true,
                },
                {
                    key: "region_state",
                    label: "Region/State",
                    type: "text",
                    required: true,
                },
                {
                    key: "country",
                    label: "Country",
                    type: "select",
                    required: true,
                },
                {
                    key: "year_established",
                    label: "Year Established",
                    type: "number",
                    required: true,
                    placeholder: "YYYY",
                    maxlength: 4,
                },
                {
                    key: "website",
                    label: "Website",
                    type: "url",
                    required: false,
                },
                {
                    key: "company_brochure",
                    label: "Company Brochure",
                    type: "file",
                    required: false,
                },
            ],
        };
    },
    mounted() {
        this.fetchCountries();
    },
    methods: {
        async fetchCountries() {
            try {
                const response = await axios.get(
                    "http://localhost:8000/api/countries"
                );
                this.countries = response.data;
            } catch (error) {
                console.error("Failed to fetch countries:", error);
                this.countries = [];
            }
        },

        handleFileUpload(event, key) {
            const file = event.target.files[0];
            if (!file) return;

            const allowedTypes = [
                "application/pdf",
                "application/msword",
                "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
            ];
            if (!allowedTypes.includes(file.type)) {
                this.errors[key] = "File must be PDF, DOC, or DOCX";
                this.localCompany[key] = null;
                event.target.value = null;
                return;
            }

            const maxSize = 2 * 1024 * 1024; // 2MB
            if (file.size > maxSize) {
                this.errors[key] = "File must be less than 2MB";
                this.localCompany[key] = null;
                event.target.value = null;
                return;
            }

            this.errors[key] = null;
            this.localCompany[key] = file;
        },

        next() {
            this.errors = {};
            let valid = true;

            this.fields.forEach((field) => {
                const value = this.localCompany[field.key];

                // Required check
                if (field.required && (!value || value === "")) {
                    this.errors[field.key] = `${field.label} is required`;
                    valid = false;
                }

                // Year validation
                if (field.key === "year_established" && value) {
                    const currentYear = new Date().getFullYear();
                    if (
                        !/^\d{4}$/.test(value.toString()) ||
                        parseInt(value) > currentYear
                    ) {
                        this.errors[field.key] =
                            "Enter a valid year not in the future";
                        valid = false;
                    }
                }

                // Website URL validation
                if (field.key === "website" && value) {
                    try {
                        new URL(value);
                    } catch (_) {
                        this.errors[field.key] = "Website URL is invalid";
                        valid = false;
                    }
                }
            });

            if (!valid) return;

            this.$emit("next", this.localCompany);
        },
    },
};
</script>
