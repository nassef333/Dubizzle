import axios from "axios";
export default function () {
    return {
        filters: {
            brand_id: Number,
            series_id: Number,
            category_id: Number,
            code: "",
            part_name: "",
            min: Number,
            max: Number,
        },
        loading: false,
        links: [],
        page: Number,
        parts: [],
        brands: [],
        series: [],
        categories: [],
        part_name: "",
        success_message: "",
        message: "",
        image: {},
        success: {},
        errors: {},
        init() {
            this.getParts();
            this.filter();
            this.getBrands();
            this.getSeries();
            this.queryParams();
            if (this.filters.brand_id !== null) {
                this.getInstantSeries();
            }
            this.getCategories();
        },
        async getParts() {
            await axios
                .get("/api/cars/parts")
                .then((res) => {
                    this.parts = res.data.parts.data;

                    this.links = res.data.parts.links;
                    this.page = 1;
                })
                .catch((err) => console.log(err));
        },
        async filter() {
            await this.$watch("filters", (filter) => {
                this.loading = true;
                setTimeout(() => {
                    axios
                        .get("/api/cars/parts", {
                            params: {
                                code:
                                    this.filters.code.length > 0
                                        ? this.filters.code
                                        : null,
                                part_name:
                                    this.filters.part_name.length > 0
                                        ? this.filters.part_name
                                        : null,
                                brand_id:
                                    this.filters.brand_id > 0
                                        ? this.filters.brand_id
                                        : null,
                                series_id:
                                    this.filters.series_id > 0
                                        ? this.filters.series_id
                                        : null,
                                category_id:
                                    this.filters.category_id > 0
                                        ? this.filters.category_id
                                        : null,
                                min:
                                    this.filters.min > 0
                                        ? this.filters.min
                                        : null,
                                max:
                                    this.filters.max > 0
                                        ? this.filters.max
                                        : null,
                            },
                        })
                        .then((res) => {
                            this.parts = res.data.parts.data;

                            this.links = res.data.parts.links;
                            this.loading = false;
                        })
                        .catch((err) => console.log(err));
                }, 700);
            });
        },

        async getPage(link) {
            await axios
                .get(link)
                .then((res) => {
                    this.parts = res.data.parts.data;
                    this.links = res.data.parts.links;
                    const url = new URL(link);
                    this.page = url.searchParams.get("page");
                    console.log(this.page);
                })
                .catch((err) => console.log(err));
        },

        selectedPhoto(event) {
            this.image = event.target.files[0];
        },

        async SubmitMissingPart() {
            this.errors = null;
            const formDate = new FormData();
            formDate.append("name", this.part_name);
            formDate.append("message", this.message);
            formDate.append("cover", this.image);

            await axios
                .post("/api/missing-parts", formDate)
                .then((res) => {
                    this.success_message = res.data.message;
                    this.success = true;
                    this.image = null;
                    this.part_name = "";
                    this.message = "";
                    this.errors = "";
                })
                .catch((err) => (this.errors = err.response.data.errors));
        },

        async getBrands() {
            axios
                .get(`/api/cars/brands`)
                .then((res) => {
                    this.brands = res.data.brands;
                })
                .catch((err) => console.log(err));
        },

        async getCategories() {
            axios
                .get(`/api/cars/categories`)
                .then((res) => {
                    this.categories = res.data.categories;
                })
                .catch((err) => console.log(err));
        },

        async getSeries() {
            await this.$watch("filters.brand_id", (filter) => {
                this.loading = true;
                setTimeout(() => {
                    axios
                        .get(
                            `/api/cars/series?brand_id=${this.filters.brand_id}`
                        )
                        .then((res) => {
                            this.series = res.data.series;
                        })
                        .catch((err) => console.log(err));
                }, 700);
            });
        },

        async getInstantSeries() {
            axios
                .get(`/api/cars/series?brand_id=${this.filters.brand_id}`)
                .then((res) => {
                    this.series = res.data.series;
                })
                .catch((err) => console.log(err));
        },

        async queryParams() {
            const url = new URL(window.location.href);
            const params = new URLSearchParams(url.search);

            if (params.get("brand") !== null) {
                this.filters.brand_id = params.get("brand");
            }

            if (params.get("class") !== null) {
                this.filters.class = params.get("class");
            }

            if (params.get("series") !== null) {
                this.filters.series_id = params.get("series");
            }
        },
    };
}
