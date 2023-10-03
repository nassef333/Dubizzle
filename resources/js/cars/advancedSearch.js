import axios from "axios";
export default function () {
    return {
        filters: {
            fuel_type: [],
            gear_box: [],
            status: [],
            brand_id: Number,
            series_id: Number,
            min: Number,
            max: Number,
        },
        loading: false,
        links: [],
        page: Number,
        cars: [],

        init() {
            this.getCars();
            this.filter();

            console.log("Mounted");
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
    };
}
