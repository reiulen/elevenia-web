<template>
  <section class="hero">
    <div class="image-hero position-relative">
      <img src="/assets/images/career-hero.png" style="width: 100%;" />
      <div>
        <div
          class="position-absolute text-white font-weight-500 font-size-xl-30 font-size-md-28 font-size-md-18 font-size-sm-18 font-size-10"
          style="
            top: 50%;
            left: 5%;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
          "
        >
          Grow your future
          <span class="font-size-xl-45">CAREER</span> with us!
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container pt-5">
      <div class="font-size-21 font-weight-400">
        We are open to fresh graduates who want to start developing careers and
        professionals with proven experiences in the related business who wish
        to increase their values and competencies in the trading industry. So
        why do you have to wait? Send your resume to join us!
      </div>
      <div class="vstack gap-4 mt-5 mb-4">
        <b-card no-body class="border-0 bg-transparent">
          <div
            class="card-body bg-p-grey-43 p-4 radius-8 accordion-career"
            block
            v-b-toggle.accordion-2
          >
            <div class="d-flex justify-content-between">
              <div class="font-size-20 font-weight-400">
                Export Sales Manager (Enusantara)
              </div>
              <div class="toggle-accordion">
                <img src="/assets/images/arrow-left-circle.svg" />
              </div>
            </div>
          </div>
          <b-collapse id="accordion-2" accordion="my-accordion" role="tabpanel">
            <b-card-body class="bg-p-orange-12 radius-8 mt-2">
              <img src="/assets/images/career-job.png" class="img-fluid" />
              <!-- <div class="d-flex justify-content-center">
                                <span class="badge rounded-pill bg-p-green-17 px-5 py-2" style="border: 5px solid white">
                                    Role and Responsibility
                                </span>

                            </div>
                            <div class="font-size-18\5 font-weight-600 pt-4">
                                <ol>
                                    <li>Responsible for the sales and marketing of the company’s products in the export
                                        market.
                                    </li>
                                    <li>Develop and implement sales and marketing strategies to achieve sales target.
                                    </li>
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
                                <ol>
                                    <li>Responsible for the sales and marketing of the company’s products in the export
                                        market.
                                    </li>
                                    <li>Develop and implement sales and marketing strategies to achieve sales target.
                                    </li>
                                    <li>Develop and maintain good rapport with existing and potential customers.</li>
                                    <li>Provide market feedback to the management.</li>
                                    <li>Prepare sales reports and forecasts.</li>
                                    <li>Perform any other duties as assigned by the management.</li>
                                </ol>
                            </div> -->
            </b-card-body>
            <div class="text-center pt-4">
              Send your Application & CV directly to
              <a
                href="mailto:recruitment@elevenia.co.id?subject=Hallo%20saya%20ingin%20melamar"
                >recruitment@elevenia.co.id</a
              >
              with email subject : <br />Application for Export Sales Manager
              (Enusantara)
            </div>
          </b-collapse>
        </b-card>
      </div>
    </div>
  </section>
</template>

<script>
import $ from "jquery";
export default {
  name: "CareerIndex",
  data() {
    return {
      isCollapsed: false,
    };
  },
  methods: {},
};
</script>
