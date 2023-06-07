<template class="bg-p-white">
    <div>
        <section style="
                                    padding-top: 18rem;
                                    padding-bottom: 10rem;
                                    background: url('/assets/images/hero-service.png') center center no-repeat;
                                ">
        </section>
    </div>
    <section class="px-5">
        <div class="font-size-48 font-weight-700 pt-5">
            News & Update
        </div>
        <section class="my-5">
        <div class="container">
            <div class="text-center font-weight-700 font-size-21">
                NEWS & UPDATE
            </div>
            <div class="row justify-content-center align-items-center py-5 px-xl-5 g-md-5 gy-4">
                <NewsUpdateComponent />
            </div>
            <div class="text-center pb-5">
                <router-link class="text-primary font-weight-600 text-decoration-none font-size-18" role="button" to="/news">
                    See More
                </router-link>
            </div>
        </div>
    </section>
    </section>
</template>

<script>
import NewsUpdateComponent from '../../components/News/NewsUpdateComponent.vue';
import BusinessComponent from '../../components/Business/BusinessComponent.vue';

export default {
    name: "Index",
    components: {
        NewsUpdateComponent,
        BusinessComponent
    },
}
</script>