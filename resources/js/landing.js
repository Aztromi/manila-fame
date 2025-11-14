import { createApp } from "vue";
import LandingPage from "./pages/LandingPage.vue";
import "../css/app.css";
import AOS from "aos";
import "aos/dist/aos.css";
const app = createApp(LandingPage);

app.mixin({
    mounted() {
        AOS.init({
            duration: 800, // animation duration in ms
            once: true, // animation happens only once
            offset: 100, // how far from the top to trigger
        });
    },
});

app.mount("#landing");
