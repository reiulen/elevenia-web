<template>
    <section class="hero">
        <div class="image-hero position-relative">
            <img src="/assets/images/bg-header.png" style="width: 100%;" />
            <div>
                <div class="position-absolute text-white font-size-xl-21 font-size-lg-18 font-size-md-14 font-size-sm-11 font-size-6"
                    style="top: 40%; right: 5%">
                    We <b>ENGAGE</b> our business in the <br />
                    <b>modern trade of local Indonesian commodities</b><br />
                    and provide corporations with a <br />
                    <b>one-stop solutions-base procurementprocess</b>
                </div>
                <div class="position-absolute text-white font-size-xl-21 font-size-lg-18 font-size-md-14 font-size-sm-11 font-size-6"
                    style="top: 73%; right: 2%">
                    <div class="d-flex align-items-center gap-md-3 gap-1">
                        <a href="https://elevenia.biz" target="_blank">
                            <img class="img-elevenia" src="/assets/images/elevenia-white-yellow.png" />
                        </a>
                        <a class="pt-3" href="https://nusantara.elevenia.co.id" target="_blank">
                            <img class="img-nusantara" src="/assets/images/enusantara.png" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 news-section">
        <div class="container">
            <div class="text-center font-weight-700 font-size-21">
                NEWS & UPDATE
            </div>
            <div class="row justify-content-center align-items-center py-5 px-xl-5 g-md-5 gy-4">
                <NewsComponent />
            </div>
            <div class="text-center pb-5">
                <router-link class="text-primary font-weight-600 text-decoration-none font-size-18" role="button"
                    to="/news">
                    See More
                </router-link>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="text-center font-weight-700 font-size-21">
                Way We Do Business
            </div>
            <div class="row justify-content-center align-items-center py-5 px-xl-5 g-md-5 gy-4">
                <BusinessComponent :data="data" />
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="text-center font-weight-700 font-size-24">
                Our Distinguished Clients
            </div>
            <div class="d-flex justify-content-center align-items-center pt-4 pb-5 px-xl-5 g-md-5">
                <div v-if="loaderClients" class="row align-items-center justify-content-center">
                    <div class="col-2 g-4" v-for="n in 12">
                        <div class="px-4">
                            <div class="skeleton-box bg-p-grey-16 radius-12" style="height: 100px; width: 180px;"></div>
                        </div>
                    </div>
                </div>
                <Slider v-else="clients.length > 0" :items="clients" />
            </div>
        </div>
    </section>
</template>

<script>
import NewsComponent from '../../components/News/NewsComponent.vue';
import BusinessComponent from '../../components/Business/BusinessComponent.vue';
import Slider from "@/components/Slider.vue";

export default {
    name: "Home",
    components: {
        Slider,
        NewsComponent,
        BusinessComponent
    },
    data() {
        return {
            data: [
                {
                    image: "/assets/images/procure.png",
                    title: "Procure",
                    description: "We obtain the most suitable goods or services to fulfil your business needs"
                },
                {
                    image: "/assets/images/transact.png",
                    title: "Transact",
                    description: "We seal the deal referring to your purchase order"
                },
                {
                    image: "/assets/images/deliver.png",
                    title: "Deliver",
                    description: "We dispatch the products to your business-designated address"
                }
            ],
            clients: [],
            loaderClients: false
        }
    },
    mounted() {
        this.getClients();
    },
    methods: {
        async getClients() {
            this.loaderClients = true;
            try {
                const res = await axios.get('/api/clientPartner/client');
                this.clients = res.data.data;
            }catch(err) {
                console.log(err);
            }
            this.loaderClients = false;
        }
    }
};
</script>
