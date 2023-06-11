<template>
    <swiper :slidesPerView="6" :modules="modules" :loop="true" :autoplay="{
      delay: 2500,
      disableOnInteraction: false,
    }" class="mySwiper">
        <swiper-slide v-for="partner in items" :key="partner.id">
            <img :src="partner.logo" alt="partner logo" />
        </swiper-slide>
    </swiper>
</template>
  
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Autoplay } from 'swiper';

// Import Swiper styles
import 'swiper/css';

import 'swiper/css/pagination';

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
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 20% !important;
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
  