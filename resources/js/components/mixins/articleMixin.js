// Components
// ================================================================================================
import Tag from "../../components/ui/tag.vue"

// ================================================================================================
export default {
    name: "Articles",
    components: { 'ui-tag' : Tag },
    props: {
        articles: {
            default: () => ([]),
            type: Array
        },
    },
    data() {
        return {
            isCardHover: null
        }
    },
    watch: {
        isCardHover() {
            console.log(this.isCardHover);
        }
    }
}