<template>
    <section class="hero">
        <div class="image-hero position-relative">
            <img src="/assets/images/hero-bg.png" style="width: 100%;" />
            <div>
                <div class="position-absolute text-center text-white font-size-xl-21 font-size-lg-18 font-size-md-25 font-size-sm-20 font-size-15"
                    style="top: 50%;
                          left: 50%;
                          transform: translate(-50%, -50%);">
                    <b>Welcome</b> <br />
                    <p>Elevenia Nusantara</p><br />
                </div>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="image-hero position-relative">
            <img src="/assets/images/product-bg.png" style="width: 100%;" />
            <div class="container">
                <div class="position-absolute text-center text-white"
                    style="top: 50%; left: 15%; transform: translate(-50%, -50%);">
                    <div class="card rounded-0" style="background: transparent; border: 2px solid white">
                        <div class="card-body">
                            <div
                                class="font-weight-700 font-size-xl-40 font-size-lg-30 font-size-md-20 font-size-sm-19 font-size-14 text-p-orange-12">
                                New <br /> Product
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-absolute" style="top: 50%; left: 60%; transform: translate(-50%, -50%);">
                    <div class="d-flex justify-content-between">
                        <div class="card rounded-0" style="background: transparent; border: 2px solid white">
                            <div class="card-body p-0 position-relative">
                                <div>
                                    <img src="/assets/images/product-01.png" style="width: 100%;" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="card rounded-0 mx-md-4 mx-2" style="background: transparent; border: 2px solid white">
                            <div class="card-body p-0 position-relative">
                                <div>
                                    <img src="/assets/images/product-02.png" style="width: 100%;" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="card rounded-0" style="background: transparent; border: 2px solid white">
                            <div class="card-body p-0 position-relative">
                                <div>
                                    <img src="/assets/images/product-03.png" style="width: 100%;" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="image-hero position-relative">
            <img src="/assets/images/enusa-bg.png" style="width: 100%;" />
        </div>
    </section>
    <section class="container category mt-5">
        <div class="font-size-28 font-weight-600 text-p-green-20 text-center">
            Category Product
        </div>
        <div class="d-flex justify-content-between mt-5">
            <div>
                <div class="card rounded-0"
                    style="background: linear-gradient(180deg, rgba(204, 198, 148, 0.6) 0%, rgba(123, 144, 111, 0.6) 48.96%, rgba(153, 169, 124, 0.6) 97.4%);">
                    <div class="card-body p-0 position-relative">
                        <div>
                            <img src="/assets/images/product-01.png" style="width: 100%;" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="card rounded-0 bg-p-green-20">
                    <div class="card-body p-0 position-relative">
                        <div class="font-size-18 font-weight-700 text-center text-p-white">
                            Species
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "Home"
};
</script>
