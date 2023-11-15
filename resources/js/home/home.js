import axios from "axios";
export default function () {
    return {
        brand_id: Number,
        series_id: Number,
        brands: [],
        series: [],
        search_url: "cars",
        route: "cars/advanced-search",
        init() {
            if (this.search_url == "cars") {
                const car_btn = document.getElementById("cars");
                const part_btn = document.getElementById("parts");
                part_btn.classList.remove("text-btn");
                car_btn.classList.add("text-btn");
            }

            this.getBrands();
            this.getSeries();
            this.swtichUrl();
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
            await this.$watch("brand_id", (filter) => {
                this.loading = true;
                setTimeout(() => {
                    axios
                        .get(`/api/cars/series?brand_id=${this.brand_id}`)
                        .then((res) => {
                            this.series = res.data.series;
                        })
                        .catch((err) => console.log(err));
                }, 700);
            });
        },

        async swtichUrl() {
            await this.$watch("search_url", () => {
                if (this.search_url == "cars") {
                    const car_btn = document.getElementById("cars");
                    const part_btn = document.getElementById("parts");
                    part_btn.classList.remove("text-btn");
                    car_btn.classList.add("text-btn");
                    this.route = "cars/advanced-search";
                } else {
                    const part_btn = document.getElementById("parts");
                    const car_btn = document.getElementById("cars");
                    car_btn.classList.remove("text-btn");
                    part_btn.classList.add("text-btn");
                    this.route = "cars/advanced-search-parts";
                }
            });
        },
    };
}
