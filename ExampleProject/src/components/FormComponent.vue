<template>
  <div class="d-flex justify-content-center pt-6">
    <v-card
      title="Example Form"
      width="700"
      elevation="20"
      image="@/assets/images/pngtree-scene-with-geometrical-forms-the-poster-model-minimal-background-render-image_452981.jpg"
    >
      <v-container>
        <v-form>
          <v-row>
            <v-col lg="6" cols="12" sm="6" md="6">
              <label class="header_color">First Name</label>
              <v-text-field
                class="pt-2"
                variant="outlined"
                v-model="form.firstname"
              ></v-text-field>
              {{ form.firstname }}
            </v-col>
            <v-col lg="6" cols="12" sm="6" md="6">
              <label class="header_color">Last Name</label>
              <v-text-field
                class="pt-2"
                v-model="form.lastname"
                variant="outlined"
              ></v-text-field>
            </v-col>
            <v-col lg="6" cols="12" sm="6" md="6">
              <label class="header_color">Address 1</label>
              <v-text-field
                class="pt-2"
                v-model="form.address1"
                variant="outlined"
              ></v-text-field>
            </v-col>
            <v-col lg="6" cols="12" sm="6" md="6">
              <label class="header_color">Address 2</label>
              <v-text-field
                class="pt-2"
                v-model="form.address2"
                variant="outlined"
              ></v-text-field>
            </v-col>
            <v-col lg="6" cols="12" sm="6" md="6">
              <v-btn @click="getData()">Submit</v-btn>
            </v-col>
          </v-row>
        </v-form>
      </v-container>
    </v-card>
  </div>
</template>
<script>
export default {
  data() {
    return {
      form: {},
      // firstname: "Yasindu",
      // lastname: "Yugantha",
      // address1: "Address 1....",
      // address2: "Address 2....",
    };
  },
  methods: {
    getData() {
      console.log(this.form);
      // console.log(this.lastname);
      // console.log(this.address1);
      // console.log(this.address2);
    },
  },
  beforeMount() {
    this.form.firstname = "yasindu";
    this.form.lastname = "Yugantha";
    this.form.address1 = "address 1";
    this.form.address2 = "address 2";
  },
  created() {
    this.form.firstname = "yasindu 1";
    this.form.lastname = "Yugantha 2";
    this.form.address1 = "address 6";
    this.form.address2 = "address 5";
  },
};
</script>
