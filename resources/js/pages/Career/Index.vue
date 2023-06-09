<template>
    <section class="hero">
        <div class="image-hero position-relative">
            <img src="/assets/images/career-hero.png" style="width: 100%;" />
            <div>
                <div class="position-absolute text-white font-size-xl-21 font-size-lg-18 font-size-md-14 font-size-sm-11 font-size-6"
                    style="bottom: 30%; left: 5%">
                    <b>
                        Grow your future CAREER with us!
                    </b>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="px-lg-8 px-3 pt-5">
            <div class="font-size-21 font-weight-400">
                We are open to fresh graduates who want to start developing careers and professionals with proven
                experiences in the related business who wish to increase their values and competencies in the trading
                industry.
                So why do you have to wait? Send your resume to join us!
            </div>

            <div class="card border-0 bg-p-grey-43 p-3 mt-5" @click="toggleCollapse">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="font-size-20 font-weight-400">
                            Export Sales Manager (Enusantara)
                        </div>
                        <div>
                            <img src="/assets/images/arrow-left-circle.svg" />
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="isCollapsed">
                <div class="card border-0 bg-p-orange-9 mt-2">

                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <span class="badge rounded-pill bg-p-green-17 px-5 py-2" style="border: 5px solid white">
                                Role and Responsibility
                            </span>

                        </div>
                        <div class="font-size-18\5 font-weight-600 pt-4">
                            <!-- create list 1, 2, 3 for role and resposibility -->
                            <ol>
                                <li>Responsible for the sales and marketing of the company’s products in the export market.
                                </li>
                                <li>Develop and implement sales and marketing strategies to achieve sales target.</li>
                                <li>Develop and maintain good rapport with existing and potential customers.</li>
                                <li>Provide market feedback to the management.</li>
                                <li>Prepare sales reports and forecasts.</li>
                                <li>Perform any other duties as assigned by the management.</li>
                            </ol>
                        </div>

                        <div class="d-flex justify-content-center pt-4">
                            <span class="badge rounded-pill bg-p-green-17 px-5 py-2" style="border: 5px solid white">
                                Requirement
                            </span>

                        </div>
                        <div class="font-size-18\5 font-weight-600 pt-4">
                            <!-- create list 1, 2, 3 for role and resposibility -->
                            <ol>
                                <li>Responsible for the sales and marketing of the company’s products in the export market.
                                </li>
                                <li>Develop and implement sales and marketing strategies to achieve sales target.</li>
                                <li>Develop and maintain good rapport with existing and potential customers.</li>
                                <li>Provide market feedback to the management.</li>
                                <li>Prepare sales reports and forecasts.</li>
                                <li>Perform any other duties as assigned by the management.</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center pt-4">
                Send your Application & CV directly to <a
                    href="mailto:recruitment@elevenia.co.id">recruitment@elevenia.co.id</a> with email subject :
                <br />Application for [Job Title]
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "CareerIndex",
    data() {
        return {
            isCollapsed: false
        };
    },
    methods: {
        toggleCollapse() {
            this.isCollapsed = !this.isCollapsed;
        }
    }
}
</script>

<style>
.collapse {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
}
</style>