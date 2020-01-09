<template>
  <div class="w-1/2 mb-4 flex">
    <img class="w-24 object-cover rounded-md" src="images/it.jpg" />
    <div class="ml-2">
      <div class="sm:text-xl text-2xl text-gray-800 font-medium leading-none">
        Romeo and Juliet
      </div>
      <div class="sm:text-sm text-gray-600 mb-1">
        William Shakespeare
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
  </div>
</template>

<script>
export default {};
</script>
