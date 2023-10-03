import "./bootstrap";
import Alpine from "alpinejs";
import advancedSearch from "./cars/advancedSearch";
window.Alpine = Alpine;

window.addEventListener("alpine:init", function () {
    Alpine.data("search", advancedSearch);
});

Alpine.start();
