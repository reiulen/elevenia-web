<template>
    <section class="hero">
        <div style="
        background: url('/assets/images/hero-service.png');
        background-size: cover;
        height: 50vh;
        background-repeat: no-repeat;
      " class="d-flex align-items-center">
            <div class="overflow-auto ms-4 scrollbar-none">
                <div class="achievement d-flex align-items-start gap-5 ps-4 pe-5 pt-md-5">
                    <div class="position-relative" v-for="(item, index) in achievements" :key="index">
                        <div class="item-achievement d-inline-block text-center">
                            <div class="text-p-white font-size-20 font-weight-700">
                                {{ item.year }}
                            </div>
                            <div class="text-p-white font-size-12 font-weight-400">
                                {{ item.description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container pt-4">
        <div class="font-size-45 font-weight-700">
            About Us
        </div>
        <section class="vstack gap-md-5 gap-4 pt-5">
            <div class="row align-items-center gap-md-0 gap-3">
                <div class="col-md-4">
                    <img src="/assets/images/espn.png" class="img-fluid" alt="" style="width: 320px;" />
                </div>
                <div class="col-md-8">
                    <div class="font-size-16 font-weight-400">
                        Today, to emphasize its existence as a trading company in the market
                        and within the Salim Group, PT Elevenia Sinergi Prima Nusantara
                        (ESPN) manages the elevenia.biz and e-Nusantara businesses. It was
                        moving away from its predecessor company and present to actively
                        develop potential Indonesian commodities and embrace every business
                        opportunity from any parties with similar objectives to collaborate
                        in expanding access to the local and global market. At the same
                        time, ESPN also maintained its role in providing solution-based
                        services to support the corporation’s business performance, that’s
                        satisfying and beneficial for the stakeholders
                    </div>
                </div>
            </div>

            <div class="row align-items-center gap-md-0 gap-3">
                <div class="col-md-4">
                    <img src="/assets/images/elevenia-biz-yellow.png" class="img-fluid" alt="" style="width: 380px;" />
                </div>
                <div class="col-md-8">
                    <div class="font-size-16 font-weight-400">
                        After being acquired by Salim Group in 2017, PT XL Planet, which was
                        previously known as “elevenia”, a customer-to-customer (C2C) player
                        in the e-commerce industry, has made a revolutionary switch in its
                        business strategy by establishing a business-to-business (B2B)
                        services with the new brand of “elevenia.biz”. The initial idea to
                        build that new business stream was to provide corporations within
                        the group with a solution-based procurement process. However, in
                        responding to the demand in the market, elevenia.biz rapidly also
                        serves other corporations outside the group as its distinguished
                        clients
                    </div>
                </div>
            </div>

            <div class="row align-items-center gap-md-0 gap-3">
                <div class="col-md-4">
                    <img src="/assets/images/bg-enusantara.png" class="img-fluid" alt="" style="width: 400px;" />
                </div>
                <div class="col-md-8">
                    <div class="font-size-16 font-weight-400">
                        Later in the interactions with various clients, business partners,
                        and related government institutions, the Business Development team
                        identified another business opportunity that was feasible and
                        considerable to become a new business stream for the company, which
                        is the trade of local Indonesian commodities, such as spices (e.g.
                        example nutmeg and black pepper) and any other agricultural products
                        (e.g. coffee bean and organic rice). Thus, the company decides to
                        establish an inclusive trading ecosystem for Indonesian commodities
                        in the local and global markets to grow and strengthen the nation’s
                        economy under the brand of “e-Nusantara”. In this ecosystem,
                        themissions began with empowering the farmers to harvest the most
                        suitable products referring to market requirements and then involved
                        in sealing the commercial deal up until delivering the products to
                        the customers properly, either local or global.
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5 mb-4">
            <div class="font-size-24 font-weight-700 py-5 text-center">
                Our VMV
            </div>
            <Motto />
        </section>

        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="font-size-24 font-weight-700 py-5 mt-5 text-center">
                            Our Team
                        </div>
                        <div class="d-flex gap-md-0 gap-5 justify-content-center">
                            <div v-for="team in teams.slice(4, 8)"
                                class="teams-card d-flex gap-4 align-items-center justify-content-center" :key="team.id"
                                style="width: 100%; text-align: center; position: relative;">
                                <div class="teams-card-img">
                                    <img :src="team.path" class="img" />
                                </div>
                                <div class="card border-0 bg-p-grey-43 card-hovered"
                                    style="max-height: 150px; width: 253px;">
                                    <div class="card-body p-3">
                                        <div class="font-size-14 font-weight-500">
                                            {{ team.name }}
                                        </div>
                                        <div class="font-size-14 text-p-orange-14 font-weight-500">
                                            Presiden Direktur / CEO
                                        </div>
                                        <div class="font-size-14 font-weight-400 mt-3 text-p-orange-14">
                                            “ Let’s Join Us to be a partner “
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-3 justify-content-center mt-4">
                            <div v-for="team in teams.slice(0, 4)"
                                class="teams-card d-flex gap-4 align-items-center justify-content-center" :key="team.id"
                                style="width: 100%; text-align: center; position: relative;">
                                <div class="teams-card-img">
                                    <img :src="team.path" class="img" />
                                </div>
                                <div class="card border-0 bg-p-grey-43 card-hovered"
                                    style="max-height: 150px; width: 253px;">
                                    <div class="card-body p-3">
                                        <div class="font-size-14 font-weight-500">
                                            {{ team.name }}
                                        </div>
                                        <div class="font-size-14 text-p-orange-14 font-weight-500">
                                            Presiden Direktur / CEO
                                        </div>
                                        <div class="font-size-14 font-weight-400 mt-3 text-p-orange-14">
                                            “ Let’s Join Us to be a partner “
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="margin-top: 5rem !important;">
            <div class="container">
                <div class="text-center font-weight-700 font-size-24">
                    Our Valuable Partners
                </div>
                <div class="row justify-content-center align-items-center pt-4 pb-5 px-xl-5 g-md-5">
                    <div v-if="loaderPartner" class="row align-items-center justify-content-center">
                        <div class="col-2 g-4" v-for="n in 12">
                            <div class="px-4">
                                <div class="skeleton-box bg-p-grey-16 radius-12" style="height: 100px; width: 180px;"></div>
                            </div>
                        </div>
                    </div>
                    <Slider v-else="partners.length > 0" :items="partners" />
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import Slider from "@/components/Slider.vue";
import Motto from "@/components/Motto.vue";
export default {
    components: {
        Slider,
        Motto,
    },
    name: "Home",
    data() {
        return {
            partners: [],
            teams: [
                {
                    name: "Fernandi Mahendrasusila",
                    code: "XLP00248",
                    path:
                        "/assets/images/our-team/FERNANDI MAHENDRASUSILA - XLP00248.png",
                },
                {
                    name: "Hendra Gunawan",
                    code: "XLP00013",
                    path: "/assets/images/our-team/HENDRA GUNAWAN - XLP00013.png",
                },
                {
                    name: "Ivan Jonatan",
                    code: "XLP00014",
                    path: "/assets/images/our-team/IVAN JONATAN.png",
                },
                {
                    name: "Monika Ferolina S",
                    code: "XLP00597",
                    path: "/assets/images/our-team/Monika Ferolina S - XLP00597.png",
                },
                {
                    name: "SUGIHARTO DARMAKUSUMA",
                    code: "XLP00001",
                    path: "/assets/images/our-team/SUGIHARTO DARMAKUSUMA - XLP00001.png",
                },
                {
                    name: "TRIANITA HESTI",
                    code: "XLP00659",
                    path: "/assets/images/our-team/TRIANITA HESTI - XLP00659.png",
                },
                {
                    name: "YOGI PRATIKNO",
                    code: "XLP00008",
                    path: "/assets/images/our-team/YOGI PRATIKNO - XLP00008.png",
                },
            ],
            achievements: [],
            loaderPartner: false,
        };
    },
    mounted() {
        this.getPartner();
        this.getSejarah();
    },
    methods: {
        async getPartner() {
            this.loaderPartner = true;
            try {
                const res = await axios.get('/api/clientPartner/partner');
                this.partners = res.data.data;
            }catch(err) {
                console.log(err);
            }
            this.loaderPartner = false;
        },
        async getSejarah() {
            this.loadingSejarah = true;
            const res = await axios.get('/api/sejarah/getAll?orderBy=year|asc');
            this.achievements = res.data.data;
            this.loadingSejarah = false;
        }
    }
};
</script>
