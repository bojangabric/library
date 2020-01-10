<template>
  <div class="flex items-center mb-6">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6w w-6 fill-current text-gray-200">
      <circle cx="12" cy="12" r="10" />
      <path class="text-gray-800" d="M15.51 11.14a1 1 0 0 1 0 1.72l-5 3A1 1 0 0 1 9 15V9a1 1 0 0 1 1.51-.86l5 3z" />
    </svg>
    <div class="ml-2">
      <div class="uppercase tracking-wide font-semibold leading-none w-48">
        {{ title }}
      </div>
      <div class="text-gray-500 font-light">By {{ author }}</div>
    </div>
    <div class="ml-12 font-semibold text-xl">${{ price }}</div>
    <div class="leading-none text-xs ml-2 mr-6">
      Full<br />
      version
    </div>
    <a
      href="#!"
      class="sm:text-sm border bg-gray-200 text-gray-800 rounded px-4 py-2 hover:bg-gray-300 transition-colors ease-in duration-100"
    >
      Buy now
    </a>
  </div>
</template>

<script>
export default {
  props: ['title', 'author', 'price']
};
</script>
