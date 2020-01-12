<template>
  <div class="flex items-center mb-6 justify-between">
    <div class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current text-gray-200">
        <circle cx="12" cy="12" r="10" />
        <path class="text-gray-800" d="M15.51 11.14a1 1 0 0 1 0 1.72l-5 3A1 1 0 0 1 9 15V9a1 1 0 0 1 1.51-.86l5 3z" />
      </svg>
      <div class="ml-2 w-48 audiobook-title">
        <div class="uppercase tracking-wide font-semibold leading-none">
          {{ title }}
        </div>
        <div class="text-gray-500 font-light">By {{ author }}</div>
      </div>
    </div>
    <div class="flex items-center">
      <div class="ml-4 font-semibold text-xl">${{ price }}</div>
      <div class="hidden sm:block leading-none text-xs ml-2 mr-4">
        Full<br />
        version
      </div>
      <a
        href="#!"
        class="ml-2 sm:ml-0 sm:text-sm border bg-gray-200 text-gray-800 rounded px-1 py-1 hover:bg-gray-300 transition-colors ease-in duration-100"
      >
        Buy now
      </a>
    </div>
  </div>
</template>

<script>
export default {
  props: ['title', 'author', 'price']
};
</script>
