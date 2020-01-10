<template>
  <div class="w-full">
    <div class="flex justify-between items-baseline">
      <div class="text-4xl font-black uppercase text-gray-800 mb-6">
        Popular categories
      </div>
      <div class="text-gray-200">
        <button @click="previous()" class="focus:outline-none hover:text-gray-400">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
            <circle cx="12" cy="12" r="10" />
            <path
              class="text-gray-800"
              d="M13.7 15.3a1 1 0 0 1-1.4 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 0 1 1.4 1.4L10.42 12l3.3 3.3z"
            />
          </svg>
        </button>
        <button @click="next()" class="focus:outline-none hover:text-gray-400">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
            <circle cx="12" cy="12" r="10" />
            <path
              class="text-gray-800"
              d="M10.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"
            />
          </svg>
        </button>
      </div>
    </div>
    <flickity data-aos="fade-up" ref="flickity" :options="flickityOptions">
      <category image="horror" number="90"></category>
      <category image="comic" number="90"></category>
      <category image="tech" number="90"></category>
      <category image="history" number="90"></category>
      <category image="romance" number="90"></category>
      <category image="sports" number="90"></category>
    </flickity>
  </div>
</template>

<script>
import Flickity from 'vue-flickity';

export default {
  components: {
    Flickity
  },
  data() {
    return {
      flickityOptions: {
        prevNextButtons: false,
        pageDots: false,
        wrapAround: true,
        cellAlign: 'left'
      }
    };
  },
  methods: {
    next() {
      this.$refs.flickity.next();
    },
    previous() {
      this.$refs.flickity.previous();
    }
  }
};
</script>
