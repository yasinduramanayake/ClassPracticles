<template>
  <div>
    <v-card :title="title">
      <FormComponent  @formData="getData" />

      <br /><br
    /></v-card>
  </div>
</template>
<script>
import FormComponent from "@/components/FormComponent.vue";
export default {
  components: {
    FormComponent,
  },
  data() {
    return {
      form: {},
    };
  },
  methods: {
    getData(data) {
      this.form = data;
      console.log(this.form.firstname);
      this.$emit("formData", this.form);
    },
  },
};
</script>
