//Icons
// ============================================================================================
import Blog from "../icons/blog.vue"
import Account from "../icons/account.vue"
import CloseModal from "../icons/closeModal.vue"

// ============================================================================================
export default {
    components: {
        "blog-icon": Blog,
        "account-icon": Account,
        "close-modal" : CloseModal
    },
    mounted() {
        this.pathName = window.location.pathname;
    },
    data() {
        return {
            pathName: ""
        }
    }
}