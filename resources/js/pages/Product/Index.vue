<template>
    <hero title="Product" />
    <section class="container product">
        <div class="row">
            <div class="col-md-3 mt-4" v-for="item in products">
                <div class="card rounded-0 border-0" style="background: transparent;">
                    <div class="card-body p-0 position-relative">
                        <div>
                            <img :src="item.image" class="img-fluid w-100" />
                        </div>
                        <div>
                            <div class="font-size-15 font-weight-400 text-p-grey-56 mx-3">
                                Species
                            </div>
                            <div class="font-size-16 font-weight-600 text-p-black mx-3 my-2">
                                {{ item.name }}
                            </div>
                            <div class="card border-0 radius-0">
                                <div class="card-body p-1 bg-p-grey-43">
                                    <div class="font-size-14 font-weight-700 text-p-orange-13 text-center">
                                        Request Quote
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Hero from "@/components/Hero.vue";
export default {
    components: {
        Hero,
    },
    data() {
        return {
            navbar: ["Spices", "Palm Oil  Derivatives & Biomass", "Fishery", "Chinese Med", "Others"],
            products: [
                {
                    name: "Spices",
                    image: "/assets/images/product-04.png",
                },
                {
                    name: "Palm Oil Derivatives",
                    image: "/assets/images/product-05.png",
                },
                {
                    name: "Fishery",
                    image: "/assets/images/product-06.png",
                },
                {
                    name: "Chinese Med",
                    image: "/assets/images/product-07.png",
                },
                {
                    name: "Others",
                    image: "/assets/images/product-07.png",
                }
            ],
        }
    },
    name: "Product",
}
</script>