<template>
    <section class="hero">
        <div class="image-hero position-relative">
            <img src="/assets/images/hero-service.png" style="width: 100%;" />
            <div>
                <div class="position-absolute px-4"
                    style="right: 2%;bottom: 10%;">
                    <div style="overflow: auto;">
                        <div class="d-flex gap-3 pt-5">
                            <div class="col-md-3 position-relative min-w-lg-80" v-for="year in years" :key="year">
                                <div
                                    class="card rounded-full radius-12 bg-p-orange-9 border-0 position-absolute z-1 -top-30 w-100">
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
            </div>
        </div>
    </section>
    <div class="px-5">
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

        <div class="font-size-25 font-weight-700 py-5 text-center">
            About Us
        </div>
        <div class="d-flex justify-content-center">
            <div style="
                        background: white;
                        padding: 8rem;
                        border-radius: 100rem;
                        width: 20%;
                        border: 1rem solid #363635;
                        position: relative;
                    ">
                <div style="
                            position: absolute;
                            background: #F2AF2D;
                            border-radius: 20rem;
                            width: 40%;
                            height: 40%;
                            font-size: 21px;
                            font-weight: 700;
                            color: white;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            top: -40px;
                            right: 30px;
                        ">
                    Vision
                </div>

                <div style="
                            position: absolute;
                            background: #EC283A;
                            border-radius: 20rem;
                            width: 40%;
                            height: 40%;
                            font-size: 21px;
                            font-weight: 700;
                            color: white;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            bottom: 75px;
                            left: -55px;
                        ">
                    Mission
                </div>

                <div style="
                            position: absolute;
                            background: #63B645;
                            border-radius: 20rem;
                            width: 40%;
                            height: 40%;
                            font-size: 21px;
                            font-weight: 700;
                            color: white;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            bottom: -31px;
                            right: 8px;
                        ">
                    Value
                </div>
            </div>
        </div>

        <div class="font-size-25 font-weight-700 py-5 text-center">
            Our Team
        </div>
        <div class="d-flex gap-3 justify-content-center">
            <div>
                <img src="/assets/images/our-team-01.png" alt="" width="80%" height="100%" />
                <div class="card border-0 bg-p-orange-9">
                    <div class="card-body p-1"></div>
                </div>
            </div>
            <div>
                <img src="/assets/images/our-team-01.png" alt="" width="80%" height="100%" />
                <div class="card border-0 bg-p-orange-9">
                    <div class="card-body p-1"></div>
                </div>
            </div>
            <div>
                <img src="/assets/images/our-team-01.png" alt="" width="80%" height="100%" />
                <div class="card border-0 bg-p-orange-9">
                    <div class="card-body p-1"></div>
                </div>
            </div>
            <div>
                <img src="/assets/images/our-team-01.png" alt="" width="80%" height="100%" />
                <div class="card border-0 bg-p-orange-9">
                    <div class="card-body p-1"></div>
                </div>
            </div>
            <div>
                <img src="/assets/images/our-team-01.png" alt="" width="80%" height="100%" />
                <div class="card border-0 bg-p-orange-9">
                    <div class="card-body p-1"></div>
                </div>
            </div>
        </div>

        <div class="font-size-25 font-weight-700 py-5 text-center">
            Our Valuable Partners
        </div>
        <div class="d-flex justify-content-center">
            <div class="d-flex justify-content-end">
                <img src="/assets/images/colaboration.png" alt="" width="80%" height="100%" />
            </div>
            <div>
                <img src="/assets/images/colaboration.png" alt="" width="80%" height="100%" />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Home",
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
