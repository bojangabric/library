<template>
  <div class="mt-2">
    <div class="text-gray-700 pb-1">${{ value[0] }} - ${{ value[1] }}</div>
    <vue-slider v-model="value" :enable-cross="false" :dot-options="dotOptions"></vue-slider>
  </div>
</template>

<script>
import VueSlider from 'vue-slider-component';
import 'vue-slider-component/theme/default.css';
export default {
  components: {
    VueSlider
  },
  data: function() {
    return {
      value: [0, 100],
      dotOptions: [
        {
          tooltip: 'none'
        }
      ]
    };
  }
};
</script>
