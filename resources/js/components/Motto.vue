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
        transition: 0.7s all ease;
      "
        :style="styleParent"
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
          transition: 0.7s all ease;
        "
        :style="styleVision"
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
           transition: 0.7s all ease;
        "
        :style="styleMission"
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
          transition: 0.7s all ease;
        "
        :style="styleValue"
      >
        Value
      </div>
    </div>
    <div class="col-md-6" v-if="this.motto == 'Value'">
      <div>
        <b>Elevenian, let’s</b>
        <span class="text-p-red"><b>ENGAGE!</b></span> <br/>
        <span
          >We are constantly <b>det</b
          ><b className="text-p-red">E</b>rmined </span
        ><br />
        <span
          >upholding <b>i</b><b className="text-p-red">N</b>teGrity in
          performing duties and</span
        ><br />
        <span
          >promoting <b>te</b><b className="text-p-red">A</b>mwork when
          collaborating to</span
        ><br />
        <span
          >generate <b>breakthrou</b><b className="text-p-red">G</b>h solutions
          and establish</span
        ><br />
        <span
          >operational <b>exc</b><b className="text-p-red">E</b>llence solutions
          and establish</span
        ><br />
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

<script>
export default {
  name: "Motto",
  data() {
    return {
      motto: null,
      classname: "row justify-content-center container",
      styleVision: '',
      styleMission: '',
      styleValue: '',
      styleParent: '',
      widthSize: '',
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
    changeMotto() {
        switch(this.motto) {
            case 'Vision' :
            if(this.widthSize < 770) {
                this.classname = "row justify-content-md-end justify-content-center align-items-center gap-5";
                this.styleVision = "transform: rotate(202deg)";
                this.styleMission = "transform: rotate(200deg)";
                this.styleValue = "transform: rotate(200deg)";
                this.styleParent = "transform: rotate(160deg)";
            }else {
                this.classname = "row justify-content-md-end justify-content-center align-items-center gap-5";
                this.styleVision = "transform: rotate(290deg)";
                this.styleMission = "transform: rotate(291deg)";
                this.styleValue = "transform: rotate(294deg)";
                this.styleParent = "transform: rotate(70deg)";
            }
            break;
            case "Mission":
            if(this.widthSize < 770) {
                this.classname = "row justify-content-md-end justify-content-center align-items-center gap-5";
                this.styleVision = "transform: rotate(90deg)";
                this.styleMission = "transform: rotate(90deg)";
                this.styleValue = "transform: rotate(90deg)";
                this.styleParent = "transform: rotate(269deg)";
            }else {
                this.classname = "row justify-content-md-end justify-content-center align-items-center gap-5";
                this.styleVision = "transform: rotate(192deg)";
                this.styleMission = "transform: rotate(189deg)";
                this.styleValue = "transform: rotate(189deg)";
                this.styleParent = "transform: rotate(170deg)";
            }
            break
            case "Value" :
            if(this.widthSize < 770) {
                this.classname = "row justify-content-md-end justify-content-center align-items-center gap-5";
                this.styleVision = "transform: rotate(329deg)";
                this.styleMission = "transform: rotate(326deg)";
                this.styleValue = "transform: rotate(330deg)";
                this.styleParent = "transform: rotate(32deg)";
            }else {
                this.classname = "row justify-content-md-end justify-content-center align-items-center gap-5";
                this.styleVision = "transform: rotate(57deg)";
                this.styleMission = "transform: rotate(58deg)";
                this.styleValue = "transform: rotate(54deg)";
                this.styleParent = "transform: rotate(304deg)";
            }
            break
        }
    },
    updateWindowWidth() {
      this.widthSize = window.innerWidth;
    }
  },
};
</script>
