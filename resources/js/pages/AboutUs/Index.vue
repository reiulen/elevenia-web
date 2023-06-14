<template>
    <section class="hero">
        <div style="background: url('/assets/images/hero-service.png'); height: 60vh; background-repeat: no-repeat;"
            class="d-flex align-items-center">
            <div class="overflow-auto mx-4">
                <div class="d-flex align-items-center gap-3 pt-5 pb-2 px-4">
                    <div class="col-lg-3 col-md-4 col-12 position-relative" v-for="year in years" :key="year">
                        <div class="card rounded-full radius-12 bg-p-orange-9 border-0 position-absolute z-1 -top-30 w-100">
                            <div class="card-body">
                                <div class="text-center font-size-20 font-weight-700">
                                    {{ year }}
                                </div>
                            </div>
                        </div>
                        <div class="card rounded-full radius-12 bg-p-orange-10 border-0 pt-4">
                            <div class="card-body">
                                <div class="text-center text-p-white font-size-12 font-weight-400">
                                    Establishment of B2B business, elevenia.biz, as one-stop
                                    goods and services solutions for corporate customers
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="font-size-48 font-weight-700 pt-5">
            About Us
        </div>
        <div class="d-flex gap-2 pt-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="/assets/images/espn.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <div class="font-size-16 font-weight-400">
                        e-Nusantara contributes its significant role in building up the trading ecosystem of Indonesian
                        commodities (such as spices, herbs, fishery, etc.), including the derivatives as value-added, to
                        fulfil
                        customers' demands which they have distinct requirements or standards referring to their business
                        needs
                        and even to comply with the regulations in the destination country or region. In parallel,
                        e-Nusantara
                        collaborates with any related parties, empowering the individual or group of farmers to ensure the
                        quality of acquired resources constantly at its best and well-managed.
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex gap-2 pt-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="/assets/images/logo-elevenia-1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <div class="font-size-16 font-weight-400">
                        e-Nusantara contributes its significant role in building up the trading ecosystem of Indonesian
                        commodities (such as spices, herbs, fishery, etc.), including the derivatives as value-added, to
                        fulfil
                        customers' demands which they have distinct requirements or standards referring to their business
                        needs
                        and even to comply with the regulations in the destination country or region. In parallel,
                        e-Nusantara
                        collaborates with any related parties, empowering the individual or group of farmers to ensure the
                        quality of acquired resources constantly at its best and well-managed.
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex gap-2 pt-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="/assets/images/bg-enusantara.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <div class="font-size-16 font-weight-400">
                        e-Nusantara contributes its significant role in building up the trading ecosystem of Indonesian
                        commodities (such as spices, herbs, fishery, etc.), including the derivatives as value-added, to
                        fulfil
                        customers' demands which they have distinct requirements or standards referring to their business
                        needs
                        and even to comply with the regulations in the destination country or region. In parallel,
                        e-Nusantara
                        collaborates with any related parties, empowering the individual or group of farmers to ensure the
                        quality of acquired resources constantly at its best and well-managed.
                    </div>
                </div>
            </div>
        </div>

        <div class="font-size-24 font-weight-700 py-5 text-center">
            About Us
        </div>
        <div class="d-flex justify-content-center container">
            <motto />
        </div>

        <div class="font-size-24 font-weight-700 py-5 text-center">
            Our Team
        </div>
        <!--  <section class="team-section">
            <div class="team-member">
                <img src="path_to_image" alt="Team Member Photo" class="team-photo">
                <div class="team-info">
                    <h3 class="member-name">John Doe</h3>
                    <p class="member-position">Designer</p>
                    <p class="member-team">Design Team</p>
                </div>
            </div> -->
        <!-- Tambahkan lebih banyak anggota tim di sini -->
        <!-- </section> -->

        <!-- <div class="team-section">
            <h2>Our Team</h2>
            <div class="team-container">
                <div class="team-member">
                    <img src="/assets/images/our-team/FERNANDI MAHENDRASUSILA - XLP00248.png" alt="Team Member 1">
                    <div class="member-details">
                        <h3>John Doe</h3>
                        <p>Position 1</p>
                    </div>
                </div>
                <div class="team-member">
                    <img src="/assets/images/our-team/FERNANDI MAHENDRASUSILA - XLP00248.png" alt="Team Member 2">
                    <div class="member-details">
                        <h3>Jane Smith</h3>
                        <p>Position 2</p>
                    </div>
                </div> -->
        <!-- Add more team members here -->
        <!-- </div>
        </div> -->


        <div class="d-flex gap-3 justify-content-center">
            <div v-for="team in teams.slice(0, 4)" class="teams-card" :key="team.id" style="width: 100%; text-align: center; position: relative;">
                <img :src="team.path" alt="" style="width: 70%; height: 80%;" />
                <div class="card border-0 bg-p-orange-9">
                    <div class="card-body p-1"></div>
                </div>
                <div class="card border-0 bg-p-orange-9 card-hovered d-none position-absolute" style="top: 0; right: -10rem; z-index: 99999;">
                    <div class="card-body p-3">
                        <div class="font-size-16 font-weight-400">
                            {{ team.name }}
                        </div>
                        <div class="font-size-16 font-weight-400">
                            {{ team.code }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex gap-3 justify-content-center">
            <div v-for="team in teams.slice(4, 8)" :key="team.id" style="width:80%; text-align: center;">
                <img :src="team.path" alt="" style="width: 70%; height: 80%;" />
                <div class="card border-0 bg-p-orange-9">
                    <div class="card-body p-1"></div>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-4" style="height: 70%" v-for="team in teams" :key="team.id">
                <div style="width: 100%;">
                    <img :src="team.path" alt="" style="width: 100%; height: 70%;" />
                    <div class="card border-0 bg-p-orange-9">
                        <div class="card-body p-1"></div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="card border-0 p-3 bg-p-grey-43">
                    <div class="card-body p-0">
                        <div class="font-size-16 font-weight-700">
                            Sugiharto Damakusuma
                        </div>
                        <div class="font-size-15 font-weight-600 text-p-orange-9 text-center">
                            Chief Executive Officer
                        </div>
                        <div class="font-size-13 mt-3 font-weight-600 text-p-orange-9 text-center">
                            "lets make it happen"
                        </div>
                    </div>
                </div> -->


        <section style="margin-top: 5rem !important;">
            <div class="container">
                <div class="text-center font-weight-700 font-size-24"> Our Valuable Partners </div>
                <div class="row justify-content-center align-items-center pt-4 pb-5 px-xl-5 g-md-5">
                    <slider :items="partners" />
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
        Motto
    },
    name: "Home",
    data() {
        return {
            partners: [
                { id: 1, logo: '/assets/images/client.png' },
                { id: 2, logo: '/assets/images/client.png' },
                { id: 3, logo: '/assets/images/client.png' },
                { id: 4, logo: '/assets/images/client.png' },
                { id: 5, logo: '/assets/images/client.png' },
                { id: 6, logo: '/assets/images/client.png' },
                { id: 7, logo: '/assets/images/client.png' },
                { id: 8, logo: '/assets/images/client.png' },
                { id: 9, logo: '/assets/images/client.png' },
                { id: 10, logo: '/assets/images/client.png' },
            ],
            teams: [
                {
                    name: "Fernandi Mahendrasusila",
                    code: "XLP00248",
                    path: "/assets/images/our-team/FERNANDI MAHENDRASUSILA - XLP00248.png",
                }, {
                    name: "Hendra Gunawan",
                    code: "XLP00013",
                    path: "/assets/images/our-team/HENDRA GUNAWAN - XLP00013.png",
                }, {
                    name: "Ivan Jonatan",
                    code: "XLP00014",
                    path: "/assets/images/our-team/IVAN JONATAN.png",
                }, {
                    name: "Monika Ferolina S",
                    code: "XLP00597",
                    path: "/assets/images/our-team/Monika Ferolina S - XLP00597.png",
                }, {
                    name: "SUGIHARTO DARMAKUSUMA",
                    code: "XLP00001",
                    path: "/assets/images/our-team/SUGIHARTO DARMAKUSUMA - XLP00001.png",
                }, {
                    name: "TRIANITA HESTI",
                    code: "XLP00659",
                    path: "/assets/images/our-team/TRIANITA HESTI - XLP00659.png",
                }, {
                    name: "YOGI PRATIKNO",
                    code: "XLP00008",
                    path: "/assets/images/our-team/YOGI PRATIKNO - XLP00008.png",
                }
            ]
        };
    },
    computed: {
        years() {
            const startYear = 2019;
            const endYear = 2023;
            const years = [];
            for (let year = startYear; year <= endYear; year++) {
                years.push(year);
            }
            return years;
        }
    }
};
</script>
