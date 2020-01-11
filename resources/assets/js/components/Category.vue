<template>
  <div class="w-1/2 sm:w-1/3 md:w-full lg:w-1/3 pr-2">
    <a href="#!" class="block rounded overflow-hidden relative">
      <img
        style="height:18rem;filter: brightness(75%);"
        class="w-full object-fill object-center"
        :src="'images/categories/' + image + '.jpg'"
        alt=""
      />
      <div class="absolute bottom-0 pl-4 pb-6">
        <div class="text-white font-bold text-xl mb-1 ml-1">{{ image.replace(/^\w/, c => c.toUpperCase()) }}</div>
        <div class="text-white py-1 px-3 rounded-full text-sm" style="background-color:rgba(255, 255, 255, 0.3);">
          {{ number }} Books
        </div>
      </div>
    </a>
  </div>
</template>

<script>
export default {
  props: ['image', 'number']
};
</script>
