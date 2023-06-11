<template>
    <hero title="Inquiry" />
    <section class="container mt-4">
        <div class="card border-1 radius-10 border-p-orange-13">
            <div class="card-body">
                <div class="font-size-20 font-weight-500 text-p-orange-13">
                    Personal & Company Information
                </div>
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