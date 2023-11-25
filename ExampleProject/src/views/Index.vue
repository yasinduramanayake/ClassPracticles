<template>
  <div>
    <SliderComponent />
    <br />
    <br />
    <br />
    <FormComponent :FormData="propData" />

    <br />
    <br />
    <br />
    <DialogComponent />
    <br />
    <br />
    <br />
    <ListComponent />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <ConditionalExample />
    <br />
    <br />
    <br />
  </div>
</template>
<script>
import FormComponent from "@/components/FormComponent.vue";
import ConditionalExample from "@/components/ConditionalExample.vue";
import ListComponent from "@/components/ListComponent.vue";
import SliderComponent from "@/components/SliderComponent.vue";
import DialogComponent from "@/components/DialogComponent.vue";
export default {
  data() {
    return {
      propData: "Hay",
    };
  },
  components: {
    ListComponent,
    FormComponent,
    SliderComponent,
    DialogComponent,
    ConditionalExample,
  },
};
</script>
