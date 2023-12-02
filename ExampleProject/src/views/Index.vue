<template>
  <div>
    <SliderComponent />
    <br />
    <br />
    <br />
    <FormComponent @formData="getData" />
    {{ emitingForm }}
    <br />
    <br />
    <br />
    <DialogComponent />
    <br />
    <br />
    <br />
    <ListComponent />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <ConditionalExample />
    <br />
    <br />
    <br />
    <EmitComponent @emitingData="getEmitData" />

    <center>
      <span class="text-danger font-weight-bold">{{ emitedData }}</span>
    </center>

    <center>
      <v-btn @click="submit">post data </v-btn>
    </center>
    <br /><br /><br />
    <center>
      <v-btn @click="check">{{ changebuttonData }}</v-btn>
    </center>

    <center>
      <span class="text-danger font-weight-bold">{{ getAgoTime }}</span>
    </center>
  </div>
</template>
<script>
import moment from "moment";
import axios from "axios";
import FormComponent from "@/components/FormComponent.vue";
import EmitComponent from "@/components/EmitComponent.vue";
import ConditionalExample from "@/components/ConditionalExample.vue";
import ListComponent from "@/components/ListComponent.vue";
import SliderComponent from "@/components/SliderComponent.vue";
import DialogComponent from "@/components/DialogComponent.vue";
export default {
  data() {
    return {
      today: new Date("Sun Nov 26 2023 17:17:27"),
      btnName: "",
      propData: "Hay",
      emitedData: "Awaiting To Emit",
      emitingForm: {},
      myDate: new Date("Sun Nov 26 2023 11:52:09"),
      getagotime: "",
    };
  },
  components: {
    ListComponent,
    FormComponent,
    EmitComponent,
    SliderComponent,
    DialogComponent,
    ConditionalExample,
  },
  async created() {
    await this.fetchApiData();
  },

  computed: {
    changebuttonData() {
      return this.btnName.split("").reverse().join();
    },

    getAgoTime() {
      return moment(this.today).fromNow();
    },
  },
  mounted() {
    setInterval(() => {
      this.today = new Date("Sun Nov 26 2023 17:17:27");
    }, 1000);
    // setInterval(() => {
    //   this.today = "Sun Nov 26 2023 17:17:27";
    // }, 1000);
  },

  methods: {
    async submit() {
      await axios.post("https://reqres.in/api/users", this.emitingForm);
    },
    async update() {
      await axios.put("https://reqres.in/api/users{id}", this.emitingForm);
    },
    // getEmitData(data) {
    //   this.emitedData = data;
    // },
    getData(data) {
      this.emitingForm = data;
    },
    async fetchApiData() {
      const res = await axios.get("https://reqres.in/api/users");
      console.log(res.data);
    },
    check() {
      this.btnName = "Computed Data";
    },
  },
};
</script>
