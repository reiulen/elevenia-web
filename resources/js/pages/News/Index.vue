<template class="bg-p-white">
  <section class="hero" style="margin-top: 25px !important;">
    <div class="image-hero position-relative">
      <img src="/assets/images/bg-news.png" style="width: 100%;" />
      <div>
        <div
          class="position-absolute text-white font-weight-500 font-size-xl-30 font-size-md-28 font-size-md-18 font-size-sm-18 font-size-10"
          style="
            top: 50%;
            right: 16%;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
          "
        >
          Our <span class="font-size-xl-45">Activity</span> in <span class="font-size-xl-45">Elevenia</span>
        </div>
      </div>
    </div>
  </section>
  <section class="px-lg-5 px-3">
    <div class="font-size-48 font-weight-700 pt-5">
      News & Update
    </div>
    <section class="my-5">
      <div class="container">
        <div
          class="row justify-content-center align-items-center py-5 px-xl-5 g-md-5 gy-4"
        >
          <NewsUpdateComponent />
        </div>
        <div class="pt-5 row justify-content-start align-items-center gy-4">
          <div class="col-lg-4 col-md-6">
            <router-link
              to="/"
              class="card border-0 radius-10 text-decoration-none"
            >
              <div>
                <img
                  style="width: 100%; height: 230px;"
                  class="object-cover-center radius-10"
                  src="/assets/images/news.png"
                />
              </div>
              <div class="card-body p-4">
                <div class="font-weight-400 font-size-28">
                  Title
                </div>
                <div class="font-weight-400 font-size-14 mt-2">
                  Lorem Ipsum Biofiering semivalens. Postgram abfili. Hypergyn
                  prekemi. Tebel.
                </div>
                <div class="font-weight-400 font-size-16 text-p-blue-21 pt-2">
                  2023, April 20
                </div>
              </div>
            </router-link>
          </div>
          <div class="col-lg-4 col-md-6">
            <router-link
              to="/"
              class="card border-0 radius-10 text-decoration-none"
            >
              <div>
                <img
                  style="width: 100%; height: 230px;"
                  class="object-cover-center radius-10"
                  src="/assets/images/news.png"
                />
              </div>
              <div class="card-body p-4">
                <div class="font-weight-400 font-size-28">
                  Title
                </div>
                <div class="font-weight-400 font-size-14 mt-2">
                  Lorem Ipsum Biofiering semivalens. Postgram abfili. Hypergyn
                  prekemi. Tebel.
                </div>
                <div class="font-weight-400 font-size-16 text-p-blue-21 pt-2">
                  2023, April 20
                </div>
              </div>
            </router-link>
          </div>
          <div class="col-lg-4 col-md-6">
            <router-link
              to="/"
              class="card border-0 radius-10 text-decoration-none"
            >
              <div>
                <img
                  style="width: 100%; height: 230px;"
                  class="object-cover-center radius-10"
                  src="/assets/images/news.png"
                />
              </div>
              <div class="card-body p-4">
                <div class="font-weight-400 font-size-28">
                  Title
                </div>
                <div class="font-weight-400 font-size-14 mt-2">
                  Lorem Ipsum Biofiering semivalens. Postgram abfili. Hypergyn
                  prekemi. Tebel.
                </div>
                <div class="font-weight-400 font-size-16 text-p-blue-21 pt-2">
                  2023, April 20
                </div>
              </div>
            </router-link>
          </div>
          <div class="col-lg-4 col-md-6">
            <router-link
              to="/"
              class="card border-0 radius-10 text-decoration-none"
            >
              <div>
                <img
                  style="width: 100%; height: 230px;"
                  class="object-cover-center radius-10"
                  src="/assets/images/news.png"
                />
              </div>
              <div class="card-body p-4">
                <div class="font-weight-400 font-size-28">
                  Title
                </div>
                <div class="font-weight-400 font-size-14 mt-2">
                  Lorem Ipsum Biofiering semivalens. Postgram abfili. Hypergyn
                  prekemi. Tebel.
                </div>
                <div class="font-weight-400 font-size-16 text-p-blue-21 pt-2">
                  2023, April 20
                </div>
              </div>
            </router-link>
          </div>
          <div class="col-lg-4 col-md-6">
            <router-link
              to="/"
              class="card border-0 radius-10 text-decoration-none"
            >
              <div>
                <img
                  style="width: 100%; height: 230px;"
                  class="object-cover-center radius-10"
                  src="/assets/images/news.png"
                />
              </div>
              <div class="card-body p-4">
                <div class="font-weight-400 font-size-28">
                  Title
                </div>
                <div class="font-weight-400 font-size-14 mt-2">
                  Lorem Ipsum Biofiering semivalens. Postgram abfili. Hypergyn
                  prekemi. Tebel.
                </div>
                <div class="font-weight-400 font-size-16 text-p-blue-21 pt-2">
                  2023, April 20
                </div>
              </div>
            </router-link>
          </div>
        </div>
      </div>
    </section>
  </section>
</template>

<script>
import NewsUpdateComponent from "../../components/News/NewsUpdateComponent.vue";
import BusinessComponent from "../../components/Business/BusinessComponent.vue";

export default {
  name: "Index",
  components: {
    NewsUpdateComponent,
    BusinessComponent,
  },
};
</script>
