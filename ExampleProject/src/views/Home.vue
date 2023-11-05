<template>
  <div>
    <div class="pt-8"></div>
    <center>
      <h1>Hello World</h1>

      <button
        type="button"
        class="btn btn-primary"
        style="color: white"
        @click="this.$router.push('/page1')"
      >
        Next
      </button>
     
    </center>
  </div>
</template>

<script>
export default {
  methods: {
    directPage() {
      this.$router.push("/page1");
    },
  },

  beforeCreate() {
    console.log("Before Create");
  },

  created() {
    console.log("Created");
  },

  beforeMount() {
    console.log("Before Mount");
  },

  mounted() {
    console.log("Mounted");
  },

  beforeUpdate() {
    console.log("Before Update");
  },
  updated() {
    console.log("Updated");
  },
};
</script>
<style lang="scss" scoped></style>
