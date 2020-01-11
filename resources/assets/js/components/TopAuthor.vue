<template>
  <div class="mb-12 flex w-64">
    <img class="w-24 h-24 object-cover rounded" :src="'images/authors/' + image + '.jpg'" />
    <div class="ml-2">
      <div class="text-gray-800 font-medium leading-none mb-1">
        {{ name }}
      </div>
      <div class="text-sm text-gray-500 mb-1 leading-none">
        {{ description }}
      </div>
      <a
        href="#!"
        class="sm:text-sm border bg-gray-200 text-gray-800 rounded px-2 py-1 inline-block mt-2 hover:bg-gray-300 transition-colors ease-in duration-100"
      >
        Read more
      </a>
    </div>
  </div>
</template>

<script>
export default {
  props: ['name', 'description', 'image']
};
</script>
