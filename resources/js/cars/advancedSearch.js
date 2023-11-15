import axios from "axios";
export default function () {
    return {
        filters: {
            fuel_type: [],
            gear_box: [],
            status: [],
            brand_id: Number,
            series_id: Number,
            class: Number,
            min: Number,
            max: Number,
        },
        loading: false,
        links: [],
        page: Number,
        cars: [],
        brands: [],
        series: [],

        init() {
            this.getCars();
            this.filter();
            this.getBrands();
            this.getSeries();
            this.queryParams();
            if (this.filters.brand_id !== null) {
                this.getInstantSeries();
            }
        },

        async getCars() {
            await axios
                .get("/api/cars")
                .then((res) => {
                    this.cars = res.data.cars.data;
                    this.links = res.data.cars.links;
                    this.page = 1;
                })
                .catch((err) => console.log(err));
        },

        async filter() {
            await this.$watch("filters", (filter) => {
                this.loading = true;
                setTimeout(() => {
                    axios
                        .get("/api/cars", {
                            params: {
                                fuel_type:
                                    this.filters.fuel_type.toString().length > 0
                                        ? this.filters.fuel_type.toString()
                                        : null,

                                gear_box:
                                    this.filters.gear_box.toString().length > 0
                                        ? this.filters.gear_box.toString()
                                        : null,
                                status:
                                    this.filters.status.toString().length > 0
                                        ? this.filters.status.toString()
                                        : null,
                                brand_id:
                                    this.filters.brand_id > 0
                                        ? this.filters.brand_id
                                        : null,
                                series_id:
                                    this.filters.series_id > 0
                                        ? this.filters.series_id
                                        : null,
                                class:
                                    this.filters.class > 0
                                        ? this.filters.class
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
                            this.cars = res.data.cars.data;
                            this.links = res.data.cars.links;
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
                    this.cars = res.data.cars.data;
                    this.links = res.data.cars.links;
                    const url = new URL(link);
                    this.page = url.searchParams.get("page");
                    console.log(this.page);
                })
                .catch((err) => console.log(err));
        },

        async getBrands() {
            axios
                .get(`/api/cars/brands`)
                .then((res) => {
                    this.brands = res.data.brands;
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
