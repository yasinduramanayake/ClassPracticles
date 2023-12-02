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
      btn: "Sub",
    };
  },
  methods: {
    getData() {
      this.$emit("formData", this.form);
    },
  },
};
</script>
