<template>
  <div>
    <h1 class="text-center" v-if="!show">Welcome!</h1>
  </div>

  <center>
    <div v-for="array in array1" :key="array">
      {{ array }}
    </div>
  </center>
</template>
<script>
export default {
  data() {
    return {
      show: false,
      data1: 2,
      array1: [],
    };
  },
  mounted() {
    this.arraFunc();
  },
  methods: {
    arraFunc() {
      // implementation
    },
  },
};
</script>
