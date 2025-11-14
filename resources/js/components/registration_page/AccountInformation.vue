<template>
    <form class="needs-validation" novalidate @submit.prevent="submitForm">
        <div class="mb-3" v-for="field in fields" :key="field.key">
            <label :for="field.key" class="form-label">{{ field.label }}</label>

            <!-- Input or select -->
            <input
                v-if="field.type !== 'select'"
                :type="field.type"
                class="form-control"
                :id="field.key"
                v-model="localForm[field.key]"
                :required="field.required"
                :minlength="field.minlength || null"
                :pattern="field.pattern || null"
            />

            <select
                v-else
                class="form-select"
                :id="field.key"
                v-model="localForm[field.key]"
                :required="field.required"
            >
                <option value="" disabled>Select {{ field.label }}</option>
                <option
                    v-for="option in field.options"
                    :key="option"
                    :value="option"
                >
                    {{ option }}
                </option>
            </select>

            <!-- Bootstrap validation feedback -->
            <div class="invalid-feedback">
                Please provide a valid {{ field.label.toLowerCase() }}.
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Next</button>
    </form>
</template>

<script>
export default {
    props: ["accountData"],
    data() {
        return {
            localForm: { ...this.accountData },
            fields: [
                {
                    key: "first_name",
                    label: "First Name",
                    type: "text",
                    required: true,
                },
                {
                    key: "last_name",
                    label: "Last Name",
                    type: "text",
                    required: true,
                },
                {
                    key: "email_address",
                    label: "Email Address",
                    type: "email",
                    required: true,
                },
                {
                    key: "username",
                    label: "Username",
                    type: "text",
                    required: true,
                    pattern: "[a-zA-Z0-9]+",
                },
                {
                    key: "password",
                    label: "Password",
                    type: "password",
                    required: true,
                    minlength: 8,
                },
                {
                    key: "confirm_password",
                    label: "Confirm Password",
                    type: "password",
                    required: true,
                    minlength: 8,
                },
                {
                    key: "type_of_participation",
                    label: "Type of Participation",
                    type: "select",
                    required: true,
                    options: ["Buyer", "Exhibitor", "Visitor"],
                },
            ],
        };
    },
    methods: {
        submitForm() {
            const form = this.$el; // current form element
            if (!form.checkValidity()) {
                form.classList.add("was-validated");
                return;
            }

            // Extra password match validation
            if (this.localForm.password !== this.localForm.confirm_password) {
                alert("Passwords do not match!");
                return;
            }

            // Emit validated data
            this.$emit("next", this.localForm);
        },
    },
};
</script>
