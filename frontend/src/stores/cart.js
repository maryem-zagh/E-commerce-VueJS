import {
    defineStore
} from "pinia";

export const useCartStore = defineStore({
    id: "cart",
    state: () => ({
        cart: JSON.parse(localStorage.getItem("carts")) || [],
        total: JSON.parse(localStorage.getItem("total")) || 0
    }),
    getters: {
        getCart: (state) => state.cart,
        getTotal: (state) => state.total
    },
    actions: {
        fill() {
            this.cart = JSON.parse(localStorage.getItem("carts"));
        },


    }
});
