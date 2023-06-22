<template>
  <swiper
    :slidesPerView="slidesPerView"
    :modules="modules"
    :loop="true"
    :autoplay="{
      delay: 2500,
      disableOnInteraction: false,
    }"
    class="mySwiper"
    wrapperClass="justify-content-center align-items-center"
  >
    <swiper-slide v-for="partner in items" :key="partner.id">
      <div>
        <div class="mb-3">
          <img :src="partner.image" alt="partner logo" style="height: 160px;" />
        </div>
        <!-- <div>
          <img :src="partner.image" alt="partner logo" style="height: 160px;" />
        </div> -->
      </div>
    </swiper-slide>
  </swiper>
</template>

<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper";
// Import Swiper styles
import "swiper/css";
import "swiper/css/pagination";

export default {
  props: {
    items: {
      type: Array,
      required: true,
    },
  },
  components: {
    Swiper,
    SwiperSlide,
  },
  data() {
    return {
      widthSize: "",
      slidesPerView: 6,
    };
  },
  mounted() {
    this.updateWindowWidth();
    window.addEventListener("resize", this.updateWindowWidth);
  },
  beforeDestroy() {
    window.removeEventListener("resize", this.updateWindowWidth);
  },
  methods: {
    updateWindowWidth() {
      this.widthSize = window.innerWidth;
      if (this.widthSize >= 992) this.slidesPerView = 6;
      else if (this.widthSize >= 767) this.slidesPerView = 5;
      else if (this.widthSize >= 537) this.slidesPerView = 4;
      else  if(this.widthSize >= 380) this.slidesPerView = 3;
      else this.slidesPerView = 2;
    },
  },
  setup() {
    return {
      modules: [Autoplay],
    };
  },
};
</script>

<style>
.swiper {
  width: 100%;
  height: 100%;
}

.swiper-slide {
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
}

.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
</style>
