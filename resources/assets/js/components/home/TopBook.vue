<template>
  <a
    href="#!"
    class="p-4 w-full sm:w-1/2 lg:w-1/3 xl:w-1/2 flex hover:bg-gray-200 rounded-lg transition-colors ease-in duration-100"
  >
    <img class="w-24 object-cover rounded" :src="'images/books/' + image + '.jpg'" />
    <div class="ml-4">
      <div class="sm:text-xl text-2xl text-gray-800 font-medium leading-none">
        {{ title }}
      </div>
      <div class="sm:text-sm text-gray-600 mb-1">
        {{ author }}
      </div>
      <div class="flex">
        <svg
          class="h-4 w-4 text-gray-800 fill-current mr-1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
          v-for="n in 5"
        >
          <path
            d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
          />
        </svg>
      </div>
    </div>
  </a>
</template>

<script>
export default {
  props: ['title', 'author', 'image']
};
</script>
