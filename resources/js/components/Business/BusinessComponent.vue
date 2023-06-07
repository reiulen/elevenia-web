<template>
  <div v-for="item in data" class="col-lg-4 col-md-6">
    <div  class="card border-dark bg-transparent border-3" style="min-height: 390px;">
      <div class="card-body px-4 py-5 text-center border-3">
        <div>
          <img :src="item.image" />
        </div>
        <div class="font-weight-700 font-size-16 mt-3">
          {{ item.title }}
        </div>
        <div class="font-weight-400 font-size-12 mt-5">
          {{ item.description }}
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "BusinessComponent",
  props: ["data"],
};
</script>
