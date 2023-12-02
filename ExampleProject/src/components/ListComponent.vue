<template>
  <div>
    <center>
      <v-row>
        <v-col lg="4" v-for="item in items" :key="item.firstname">
          <v-list lines="three">
            <v-list-item
              :title="item.firstname + ' ' + item.lastname"
              :subtitle="item.gender"
            >
            </v-list-item>
            <v-btn
              elevation="20"
              @click="openDialog(item.title, item.firstname, item.lastname)"
              color="blue"
              >Send</v-btn
            >
          </v-list>
        </v-col>
      </v-row>
    </center>

    <v-dialog width="1000" v-model="dialog">
      <DialogModal @formData="getData" />
    </v-dialog>
  </div>

  {{ emitingForm }}
</template>
<script>
import DialogModal from "@/components/DialogModalComponent.vue";
import axios from "axios";
export default {
  components: {
    DialogModal,
  },
  data() {
    return {
      dialog: false,
      title: "",
      form: {},
      emitingForm: {},
      items: [
        {
          title: "Item 1",
          firstname: "Yasindu",
          lastname: "Ramanayake",
          gender: "male",
        },
        {
          title: "Item 2",
          firstname: "Darshana",
          lastname: "Last name",
          gender: "male",
        },
        {
          title: "Item 3",
          firstname: "Dhanushika",
          lastname: "Last name",
          gender: "female",
        },
        {
          title: "Item 4",
          firstname: "Sugath",
          lastname: "Mudalige",
          gender: "male",
        },
      ],
    };
  },
  async created() {
    await this.fetchData();
  },
  methods: {
    async openDialog(title, firstname, lastname) {
      this.dialog = true;
      this.title = title;

      this.form.firstname = firstname;
      this.form.lastname = lastname;
      const payload = {
        first_name: "yasindu",
        last_name: "ramanayake",
        email: "yasi123@gmail.com",
      };
      const res = await axios.post("https://reqres.in/api/users", payload);
    },
    async fetchData() {
      const res = await axios.get("https://reqres.in/api/users");
      console.log(res);
    },
  },
  getData(data) {
    this.emitingForm = data;
    console.log("hello");
  },
};
</script>
