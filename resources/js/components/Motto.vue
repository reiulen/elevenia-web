<template>
  <div :class="classname">
    <div
      class="col-md-6"
      style="
        background: white;
        padding: 8rem;
        border-radius: 100rem;
        width: 20%;
        border: 1rem solid #363635;
        position: relative;
      "
    >
      <div
        role="button"
        @click="
          motto = 'Vision';
          changeMotto();
        "
        style="
          position: absolute;
          background: #f2af2d;
          border-radius: 20rem;
          width: 40%;
          height: 40%;
          font-size: 21px;
          font-weight: 700;
          color: white;
          display: flex;
          align-items: center;
          justify-content: center;
          top: -40px;
          right: 30px;

        "
      >
        Vision
      </div>

      <div
        role="button"
        @click="
          motto = 'Mission';
          changeMotto();
        "
        style="
          position: absolute;
          background: #ec283a;
          border-radius: 20rem;
          width: 40%;
          height: 40%;
          font-size: 21px;
          font-weight: 700;
          color: white;
          display: flex;
          align-items: center;
          justify-content: center;
          bottom: 75px;
          left: -55px;
        "
      >
        Mission
      </div>

      <div
        role="button"
        @click="
          motto = 'Value';
          changeMotto();
        "
        style="
          position: absolute;
          background: #63b645;
          border-radius: 20rem;
          width: 40%;
          height: 40%;
          font-size: 21px;
          font-weight: 700;
          color: white;
          display: flex;
          align-items: center;
          justify-content: center;
          bottom: -31px;
          right: 8px;
        "
      >
        Value
      </div>
    </div>
    <div  class="col-md-6" v-if="this.motto == 'Value'">
      <div>
        <div style="display: flex; gap: 10px;">
          <b>Elevenian, let’s</b>
          <div class="text-p-red"><b>ENGAGE!</b></div>
        </div>
        <div class="hstack gap-1">
          <div>We are constantly</div>
          <div class="hstack">
            <b>det</b>
            <div class="text-p-red"><b>E</b></div>
            <b>rmined</b>
          </div>
          <div>to achieve common goals by</div>
        </div>
        <div class="hstack gap-1">
          <div>upholding</div>
          <div class="hstack">
            <b>i</b>
            <div class="text-p-red"><b>N</b></div>
            <b>teGrity</b>
          </div>
          <div>in performing duties and</div>
        </div>
        <div class="hstack gap-1">
          <div>promoting</div>
          <div class="hstack">
            <b>te</b>
            <div class="text-p-red"><b>A</b></div>
            <b>mwork</b>
          </div>
          <div>when collaborating to</div>
        </div>
        <div class="hstack gap-1">
          <div>generate</div>
          <div class="hstack">
            <b>breakthrou</b>
            <div class="text-p-red"><b>G</b></div>
            <b>h</b>
          </div>
          <div>solutions and establish</div>
        </div>
        <div class="hstack gap-1">
          <div>operational</div>
          <div class="hstack">
            <b>exc</b>
            <div class="text-p-red"><b>E</b></div>
            <b>llence</b>
          </div>
          <div>solutions and establish</div>
        </div>
      </div>
    </div>
    <div class="col-md-6" v-if="this.motto == 'Mission'">
      <div class="col-md-8">
        <ol>
          <li>
            Orchestrate the supply and demand by exploring the resources and
            maximizing the value added.
          </li>
          <li>
            Build the inclusive trading ecosystem for Indonesian commodities in
            the local and global markets to grow and strengthen the nation’s
            economy.
          </li>
          <li>
            Provide a solution for corporations by establishing an effective
            &amp; transparent procurement process.
          </li>
        </ol>
      </div>
    </div>
    <div class="col-md-6" v-if="this.motto == 'Vision'">
      <div class="col-md-8">
        To lead the Indonesian trading ecosystem by providing excellent business
        solutions for local and global markets
      </div>
    </div>
  </div>
</template>

<style scoped>
.rotated {
  animation: rotateText 1s ease-in-out;
}

@keyframes rotateText {
  0% {
    transform: rotate(0);
  }
  100% {
    transform: rotate(180deg);
  }
}
</style>
<script>
export default {
  name: "Motto",
  data() {
    return {
      motto: null,
      classname: "row justify-content-center container",
    };
  },
  methods: {
    changeMotto() {
      console.log(this.motto);
      if (this.motto == "Vision") {
        this.classname =
          "row justify-content-center align-items-center container gap-5";
      } else if (this.motto == "Mission") {
        this.classname =
          "row justify-content-center align-items-center container gap-5";
      } else if (this.motto == "Value") {
        this.classname =
          "row justify-content-center align-items-center container gap-5";
      }
    },
  },
};
</script>
