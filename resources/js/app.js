import "./bootstrap";
import Alpine from "alpinejs";
import advancedSearch from "./cars/advancedSearch";
import advancedSearchParts from "./cars/advancedSearchParts";
import home from "./home/home";
window.Alpine = Alpine;

window.addEventListener("alpine:init", function () {
    Alpine.data("Home", home);
    Alpine.data("search", advancedSearch);
    Alpine.data("searchParts", advancedSearchParts);
});

Alpine.start();
