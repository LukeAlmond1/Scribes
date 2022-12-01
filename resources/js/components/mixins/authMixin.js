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
        name: "SignUp",
        components: {
            "username-icon": Username,
            "password-icon": Password,
            "email-icon": Email,
            "ui-content-box": ContentBox,
            "ui-form-field": FormField
        }
    }