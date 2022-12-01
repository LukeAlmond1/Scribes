    // ============================================================================================
    export default {
            name: "PopUp",
            props: {
                data: {
                    default: () => ([]),
                    type: Array
                },
                type: {
                    default: "",
                    type: String
                },
                selection: {
                    default: "",
                    type: String
                }
            },
            methods: {
                handleSelect(opt) {
                    this.$emit(`change-${this.type}`, opt);

                    setTimeout(() => {
                        this.$emit(`close-${this.type}`);
                    }, 500);
                }
            }
    }