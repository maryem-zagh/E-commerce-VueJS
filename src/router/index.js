import {
    createRouter,
    createWebHistory
} from "vue-router";
import HomeView from "../views/HomeView.vue";

const router = createRouter({
    history: createWebHistory(
        import.meta.env.BASE_URL),
    routes: [{
            path: "/",
            name: "home",
            component: HomeView,
        },
        {
            path: "/contact",
            name: "contact",
            component: () => import("../views/ContactView.vue"),
        },
        {
            path: "/intone-market",
            name: "intone-market",
            component: () => import("../views/ProductsSliderView.vue"),
        },
        {
            path: "/products",
            name: "products",
            component: () => import("../views/AllProductsView.vue"),
        },
        {
            path: "/product/:product",
            name: "product-details",
            component: () => import("../views/shop/ProductShow.vue"),
        },
        {
            path: "/:slug",
            name: "products-category",
            component: () => import("../views/ShopView.vue"),
        },
        {
            path: "/marketingdegital",
            name: "Marketing-View",
            component: () => import("../views/MarketingView.vue"),
        },
        {
            path: "/checkout",
            name: "checkout",
            component: () => import("../views/CheckoutView.vue"),
        },
        {
            path: "/About",
            name: "About",
            component: () => import("../views/AboutView.vue"),
        },
    ],
});

export default router;
