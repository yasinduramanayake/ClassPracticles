<template>
  <div>
    <FormComponent />

    <br /><br /><br />

    <SliderComponent />
    <br />
    <br />
    <br />

    <DialogComponent />

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

import SliderComponent from "@/components/SliderComponent.vue";
import DialogComponent from "@/components/DialogComponent.vue";
export default {
  data() {
    return {
      propData: "Hay",
    };
  },
  components: {
    FormComponent,
    SliderComponent,
    DialogComponent,
    ConditionalExample,
  },
};
</script>
