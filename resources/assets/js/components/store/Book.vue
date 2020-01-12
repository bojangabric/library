<template>
  <div class="flex flex-col w-1/2 md:w-1/3 xl:w-1/4 py-3">
    <a href="#!" class="rounded-lg mr-2 sm:mr-4 py-4 hover:bg-gray-200 transition-colors ease-in duration-100">
      <div class="flex flex-col">
        <div><img :src="'/images/books/' + image + '.jpg'" alt="" class="mx-auto w-32 h-48 rounded" /></div>
        <div class="text-gray-800 text-lg font-medium text-center">
          {{ title }}
        </div>
        <div class="text-gray-600 text-center">{{ price }}.00$</div>
      </div>
    </a>
  </div>
</template>

<script>
export default {
  props: ['title', 'image', 'price']
};
</script>
