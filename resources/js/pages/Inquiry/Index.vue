<template>
    <hero title="Inquiry" />
    <section class="container mt-4">
        <div class="card border-1 radius-10 border-p-orange-13">
            <div class="card-body">
                <div class="font-size-20 font-weight-500 text-p-orange-13">
                    Personal & Company Information
                </div>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="position-relative mt-4">
                                <label style="top: -17px;left: 12px;" for="name"
                                    class="position-absolute px-2 bg-p-white font-size-16 font-weight-500 ">Firts Name</label>
                                <input type="text" id="name" class="form-control rounded-8 border-1 border-p-grey-56" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative mt-4">
                                <label style="top: -17px;left: 12px;" for="name"
                                    class="position-absolute px-2 bg-p-white font-size-16 font-weight-500 ">Last Name</label>
                                <input type="text" id="name" class="form-control rounded-8 border-1 border-p-grey-56" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
import Hero from "@/components/Hero.vue";
export default {
    components: {
        Hero,
    },
    name: "Inquiry"
}
</script>