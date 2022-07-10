<template>
    <main class="mt-12">
        <div class="grid grid-cols-2 ml-24 font-ProductSans">
            <div>
                <div
                    class="text-primary text-6xl font-bold tracking-wide mb-14"
                >
                    Trouvez les meilleurs projets digitals
                </div>

                <img
                    alt="Vue logo"
                    class="logo"
                    src="@/assets/intone-market.svg"
                    width="342"
                />
                <div class="mt-5 text-xl font-normal text-info">
                    Vous allez trouvez entre vos mains un nombre illimité de
                    projets, élements et stock créatifs en un seul endroit en
                    fonction de vos besoins.
                </div>
                <div class="mt-8">
                    <span class="text-secondary font-bold text-2xl">
                        Decouvrir Intone Digitals Market
                    </span>
                    <font-awesome-icon
                        icon="greater-than"
                        class="text-secondary font-bold"
                    />
                </div>
            </div>
            <div class="justify-end flex">
                <img src="@/assets/shop.png" alt="shop" />
            </div>
        </div>
    </main>
</template>
<script>
// import Products from "./shop/ProductsList.vue";

export default {
    data() {
        return {
            products: [],
            categories: [],
        };
    },
    //   components: {Products},
    created() {
        this.$http
            .get("categories")
            .then((response) => {
                this.categories = response.data;
                // console.log(this.categories);
            })
            .catch((error) => {
                // console.error(error);
            });
    },
};
</script>
