<template>
    <div class="pt-10 px-5">
        <div style="overflow: auto;">
            <div class="d-flex gap-3 pt-5">
                <div class="col-md-3 position-relative" v-for="year in years" :key="year">
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
        <div class="font-size-48 font-weight-700 pt-5">
            About Us
        </div>
        <div class="row pt-4">
            <div class="col-md-9">
                <div class="card border-0"
                    style="background: linear-gradient(180deg, #D9D9D9 0%, rgba(217, 217, 217, 0) 100%); border-radius: 30px 0px 0px 30px;">
                    <div class="card-body">
                        After being acquired by Salim Group in 2017, PT XL Planet, which was previously known as “elevenia”,
                        a customer-to-customer (C2C) player in the e-commerce industry, has made a revolutionary switch in
                        its business strategy by establishing a business-to-business (B2B) services with the new brand of
                        “elevenia.biz”. The initial idea to build that new business stream was to provide corporations
                        within the group with a solution-based procurement
                        process. However, in responding to the demand in the market, elevenia.biz rapidly also serves other
                        corporations outside the group as its distinguished clients
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- img -->
                <img src="/assets/images/about-01.png" alt="" width="90%" height="90%" />
            </div>
        </div>
        <div class="row pt-2">
            <div class="col-md-3">
                <img src="/assets/images/about-01.png" alt="" width="90%" height="90%" />
            </div>
            <div class="col-md-9">
                <div class="card border-0"
                    style="background: linear-gradient(180deg, rgba(217, 217, 217, 0) 0%, #D9D9D9 100%); border-radius: 0px 30px 30px 0px;">
                    <div class="card-body">
                        After being acquired by Salim Group in 2017, PT XL Planet, which was previously known as “elevenia”,
                        a customer-to-customer (C2C) player in the e-commerce industry, has made a revolutionary switch in
                        its business strategy by establishing a business-to-business (B2B) services with the new brand of
                        “elevenia.biz”. The initial idea to build that new business stream was to provide corporations
                        within the group with a solution-based procurement
                        process. However, in responding to the demand in the market, elevenia.biz rapidly also serves other
                        corporations outside the group as its distinguished clients
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-9">
                <div class="card border-0"
                    style="background: linear-gradient(180deg, #D9D9D9 0%, rgba(217, 217, 217, 0) 100%); border-radius: 30px 0px 0px 30px;">
                    <div class="card-body">
                        After being acquired by Salim Group in 2017, PT XL Planet, which was previously known as “elevenia”,
                        a customer-to-customer (C2C) player in the e-commerce industry, has made a revolutionary switch in
                        its business strategy by establishing a business-to-business (B2B) services with the new brand of
                        “elevenia.biz”. The initial idea to build that new business stream was to provide corporations
                        within the group with a solution-based procurement
                        process. However, in responding to the demand in the market, elevenia.biz rapidly also serves other
                        corporations outside the group as its distinguished clients
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <!-- img -->
                <img src="/assets/images/about-01.png" alt="" width="90%" height="90%" />
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
