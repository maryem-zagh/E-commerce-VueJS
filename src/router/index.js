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
            path: "/market",
            name: "/market",
            component: () => import("../views/ProductsSliderView.vue"),
        },
        {
            path: "/products",
            name: "products",
            component: () => import("../views/AllProductsView.vue"),
        },
        {
            path: "/product/:id",
            name: "product-details",
            component: () => import("../views/shop/ProductShow.vue"),
        },
        {
            path: "/design",
            name: "products-category",
            component: () => import("../views/ShopView.vue"),
        },
        {
            path: "/marketing",
            name: "Marketing-View",
            component: () => import("../views/MarketingView.vue"),
        },
        {
            path: "/devdetail",
            name: "checkout",
            component: () => import("../views/ProductDev.vue"),
        },
        {
            path: "/coding",
            name: "About",
            component: () => import("../views/ShopDev.vue"),
        },
        {
            path: "/login",
            name: "Login",
            component: () => import("../views/auth/LoginView.vue"),
        },
        {
            path: "/register",
            name: "Register",
            component: () => import("../views/auth/RegisterView.vue"),
        },
        {
            path: "/dashboard",
            name: "Dashboard",
            component: () => import("../views/admin/Dashboard.vue"),
        },
    ],
});

export default router;
