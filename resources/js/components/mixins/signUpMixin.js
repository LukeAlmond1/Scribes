    // Icons
    // ============================================================================================
    import Username from "../../components/icons/username.vue"
    import Password from "../../components/icons/password.vue"
    import Email from "../../components/icons/email.vue"

    // UI
    // ============================================================================================
    import ContentBox from "../../components/ui/contentBox.vue"
    import FormField from "../../components/ui/formField.vue"

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