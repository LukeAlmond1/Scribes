    // Icons
    // ============================================================================================
    import Username from "../icons/username.vue"
    import Password from "../icons/password.vue"
    import Email from "../icons/email.vue"

    // UI
    // ============================================================================================
    import ContentBox from "../ui/contentBox.vue"
    import FormField from "../ui/formField.vue"

    // CSS
    // ============================================================================================
    import "../../../css/components/auth.css";

    // ============================================================================================
    export default {
        name: "authMixin",
        components: {
            "username-icon": Username,
            "password-icon": Password,
            "email-icon": Email,
            "ui-content-box": ContentBox,
            "ui-form-field": FormField
        },
        data() {
            return {
                username: "",
                email: "",
                password: "",
                confirmPassword: ""
            }
        },
        methods: {
            handleSignUp(e) {
                e.preventDefault();

                this.$inertia.post("/register", {
                    name: this.username,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.confirmPassword
                })
            },

            handleLogin(e) {
                e.preventDefault();

                console.log([this.email, this.password]);
            },

            updateForm(data) {
                this[data.key] = data.value;
            }
        }
    }