<template>
    <section class="hero">
        <div class="image-hero position-relative" style="margin-top: 4rem !important;">
            <img src="/assets/images/hero-product-bg.png" style="width: 100%;" />
            <div>
                <div class="position-absolute text-center text-white"
                    style="top: 50%; left: 15%; transform: translate(-50%, -50%);">
                    <div
                        class="font-weight-700 font-size-xl-40 font-size-lg-30 font-size-md-20 font-size-sm-10 font-size-8 text-p-orange-12">
                        {{ title }}
                    </div>
                </div>
                <div class="position-absolute w-100" style="top: 50%; right: -80%; transform: translate(-50%, -50%);">
                    <div class="d-flex gap-1 gap-md-4 w-100">
                        <div v-for="item in navbar"
                            class="font-weight-600 font-size-xl-20 font-size-lg-20 font-size-md-10 font-size-sm-5 font-size-8 text-p-black">
                            {{ item }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Hero",
    props: {
        title: {
            type: String,
            default: ""
        }
    },
    data() {
        return {
            navbar: ["Spices", "Palm Oil  Derivatives & Biomass", "Fishery", "Chinese Med", "Others"],
        }
    }
}
</script>