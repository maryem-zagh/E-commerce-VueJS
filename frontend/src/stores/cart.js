import {
    defineStore
} from "pinia";

export const useCartStore = defineStore({
    id: "cart",
    state: () => ({
        cart: JSON.parse(localStorage.getItem("carts")) || []
    }),
    getters: {
        getCart: (state) => state.cart
    },
    actions: {
        fill() {
            this.cart = JSON.parse(localStorage.getItem("carts"));
        },


    }
});
