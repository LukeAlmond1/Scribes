// Icons
// ================================================================================================
import Search from "../icons/search.vue"
import Filter from "../icons/filter.vue"
import Sort from "../icons/sort.vue"
import Loader from "../icons/loader.vue"

// Components
// ================================================================================================
import SortBy from "../../components/modal/popup/sortBy.vue"
import FilterBy from "../../components/modal/popup/filterBy.vue"

// UI
// ================================================================================================
import Tag from "../../components/ui/tag.vue"
import Select from "../../components/ui/select.vue"
import PopUp from "../../components/ui/popup.vue"

// ================================================================================================
export default {
    components: {
        "search-icon": Search,
        "filter-icon": Filter,
        "sort-icon": Sort,
        "loader-icon": Loader,
        "ui-tag": Tag,
        "ui-select": Select,
        "ui-popup": PopUp,
        SortBy,
        FilterBy
    },
    data() {
        return {
            articleTags: [
                {
                    tag: "⏳ Long Reads", link: ""
                },
                {
                    tag: "⌛ Short Reads", link: ""
                },
                {
                    tag: "🔥 Intense Reads", link: ""
                },
                {
                    tag: "💧 Light Reads", link: ""
                }
            ],
            filterOptions: [
                "Verified authors",
                "Views < 100",
                "Shares < 100",
                "None"
            ],
            sortOptions: [
                "Popular",
                "Least popular",
                "Upload date"
            ],
            searchTerm: "",
            openSort: false,
            selectedSortOpt: "Popular",
            openFilter: false,
            selectedFilterOpt: "None",
            isInputHovered: false
        }
    },
    methods: {
        handleSortChange(opt) {
            this.selectedSortOpt = opt;
        },
        handleFilterChange(opt) {
            if (opt === "None") {
                this.selectedFilterOpt = "Filters"
            } else {
                this.selectedFilterOpt = opt;
            }
        },
        handleMouseEnter() {
            console.log("Entering");
            this.isInputHovered = true;
        },
        handleMouseLeave() {
            console.log("Leaving");
            this.isInputHovered = false;
        }
    }
}