import {
    createApp
} from "vue";
import {
    createPinia
} from "pinia";

import App from "./App.vue";
import router from "./router";
// Tailwindcss
import './index.css'

import Axios from 'axios'


import {
    library
} from "@fortawesome/fontawesome-svg-core";
import {
    faPhone,
    faBars,
    faSearch,
    faShoppingBag,
    faGreaterThan
} from "@fortawesome/free-solid-svg-icons";

library.add(faPhone, faBars, faSearch, faShoppingBag, faGreaterThan);

import {
    FontAwesomeIcon
} from "@fortawesome/vue-fontawesome";


const app = createApp(App);
app.config.globalProperties.$http = Axios;
// config fontawesome
app.component("font-awesome-icon", FontAwesomeIcon)

app.use(createPinia());
app.use(router);

app.mount("#app");
