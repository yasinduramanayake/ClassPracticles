<template>
  <div class="d-flex justify-content-center">
    <v-btn color="blue" elevation="10" @click="openDialog()">Open Dialog</v-btn>
  </div>

  <v-dialog width="1000" v-model="dialog" persistent>
    hl
  </v-dialog>
</template>
<script>
import DialogModal from "@/components/DialogModalComponent.vue";
export default {
  data() {
    return {
      openmodal: "Open",
      data1: "",
      data2: 3,
      dialog: false,
      object1: {},
      array1: [],
    };
  },
  components: {
    DialogModal,
  },
  methods: {
   
    openDialog() {
      this.dialog = true;
    },
  },
};
</script>
