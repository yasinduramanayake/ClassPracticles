<template>
  <div>
    <v-card :title="title">
      <FormComponent :FormData="FormData" />

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
    return {};
  },
  props: {
    title: String,
    FormData: Object,
  },

  methods: {},
};
</script>
