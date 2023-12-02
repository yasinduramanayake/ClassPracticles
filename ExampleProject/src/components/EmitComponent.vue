<template>
  <div>
    <center>
      <v-btn color="blue" elevation="12" @click="emiting()">Emiting Data</v-btn>
    </center>
  </div>
</template>
<script>
export default {
  data() {
    return {
      emitingData: "Emited!",
    };
  },
  methods: {
    emiting() {
      this.$emit("emitingData", this.emitingData);
    },
  },
};
</script>
