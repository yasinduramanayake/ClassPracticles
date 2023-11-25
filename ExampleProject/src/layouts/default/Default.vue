<template>
  <v-app>
    <HeaderComponent />

    <br /><br />
    <router-view />

    <br /><br />
    <br /><br />
    <br /><br />
    
    <br /><br />
    <br /><br />
    <FooterComponent/>
    
  </v-app>
</template>

<script>
import HeaderComponent from "@/components/HeaderComponent.vue";
import FooterComponent from "@/components/FooterComponent.vue";

export default {
  components: {
    HeaderComponent,
    FooterComponent,
  },
};
</script>
