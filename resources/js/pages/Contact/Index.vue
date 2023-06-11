<template>
    <section class="hero">
        <div class="image-hero position-relative">
            <img src="/assets/images/contact-us-hero.png" style="width: 100%;" />
            <div>
                <div class="position-absolute text-white font-size-xl-21 font-size-lg-18 font-size-md-14 font-size-sm-11 font-size-6"
                    style="top: 50%; right: 20%">
                    Have any <span class="font-weight-700 font-size-md-28 font-size-10">Inquiry</span> or Need further <br />
                    <span class="font-weight-700 font-size-md-28 font-size-10">Information</span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="font-size-48 font-weight-700 pt-5">
                Contact Us
            </div>
            <div class="card mt-4 border-0"
                style="background: url(/assets/images/contact-us-bg.png);">
                <div class="card-body pb-lg-20 p-3 p-md-5">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="card bg-p-grey-43 border-0">
                                <div class="card-body">
                                    <div style="
                                            display: flex;
                                            flex-direction: column;
                                            gap: 1rem
                                        ">
                                        <div class="font-size-21 font-weight-700">
                                            Phone
                                            <div class="font-size-18 font-weight-400">
                                                02139371122
                                            </div>
                                        </div>
                                        <div class="font-size-21 font-weight-700">
                                            Email
                                            <div class="font-size-18 font-weight-400">
                                                corporate.secretary@elevenia.co.id
                                            </div>
                                        </div>
                                        <div class="font-size-21 font-weight-700">
                                            Location
                                            <div class="font-size-18 font-weight-400">
                                                Wisma 46-Kota BNI, Lantai 39, Jl. Jendral Sudirman Kav. 1
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="pt-4">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.456943154548!2d106.81749127478994!3d-6.203294893784474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5f1425fe9e1%3A0x81dd87c5b9333c76!2sPT.%20XL%20Planet!5e0!3m2!1sid!2sid!4v1686239487692!5m2!1sid!2sid"
                                    width="100%" height="450" style="border:0; border-radius: 1rem;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-p-grey-43 border-0">
                                <div class="card-body p-md-5 p-3">
                                    <form>
                                        <label>
                                            <div class="font-size-18 font-weight-400">
                                                Name
                                            </div>
                                        </label>
                                        <input type="text" class="form-control" style="
                                                        background: #FAF4E4;
                                                        border-radius: 20px;
                                                        margin-top: 5px;
                                                    " />
                                        <br />
                                        <label>
                                            <div class="font-size-18 font-weight-400">
                                                Email
                                            </div>
                                        </label>
                                        <input type="text" class="form-control" style="
                                                        background: #FAF4E4;
                                                        border-radius: 20px;
                                                        margin-top: 5px;
                                                    " />
                                        <br />

                                        <label>
                                            <div class="font-size-18 font-weight-400">
                                                Subject
                                            </div>
                                        </label>
                                        <input type="text" class="form-control" style="
                                                        background: #FAF4E4;
                                                        border-radius: 20px;
                                                        margin-top: 5px;
                                                    " />
                                        <br />

                                        <label>
                                            <div class="font-size-18 font-weight-400">
                                                Body
                                            </div>
                                        </label>
                                        <textarea rows="5" class="form-control" style="
                                                        background: #FAF4E4;
                                                        border-radius: 20px;
                                                        margin-top: 5px;
                                                    "></textarea>

                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="btn btn-p-orange-11 px-5 py-2 mt-3">
                                                <div class="font-size-14 font-weight-700 text-center">
                                                    Send
                                                </div>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "ContactIndex"
}
</script>
