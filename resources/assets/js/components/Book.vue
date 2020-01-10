<template>
  <div class="w-full sm:w-1/2 xl:w-1/3 px-10">
    <div class="rounded shadow-md overflow-hidden">
      <img style="height:20rem;" class="w-full object-fill object-center" :src="'images/books/' + image + '.jpg'" alt="" />
    </div>
    <div class="flex justify-between items-center px-1">
      <div>
        <div class="sm:text-xl text-2xl text-gray-800 ">
          {{ title }}
        </div>
        <div class="sm:text-sm text-gray-700 mb-2 leading-none">
          {{ author }}
        </div>
        <div class="flex">
          <svg
            class="h-4 w-4 text-gray-900 fill-current mr-1"
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
    </div>
  </div>
</template>

<script>
export default {
  props: ['title', 'author', 'image']
};
</script>
