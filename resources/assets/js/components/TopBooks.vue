<template>
  <div class="w-2/3">
    <div class="flex items-center pb-6">
      <div class="text-4xl font-black uppercase text-gray-800">
        Top books
      </div>
      <a
        href="#!"
        class="ml-4 sm:text-sm border bg-gray-200 text-gray-800 rounded px-2 py-1 mt-1 hover:bg-gray-300 transition-colors ease-in duration-100"
      >
        Show all
      </a>
    </div>
    <div class="flex flex-wrap">
      <top-book title="Game of Thrones" author="George R. R. Martin" image="got"></top-book>
      <top-book title="Six of Crows" author="Leigh Bardugo" image="six-of-crows"></top-book>
      <top-book title="Enchantment" author="Guy Kawasaki" image="enchantment"></top-book>
      <top-book title="Unravel me" author="Tahereh Mafi" image="unravel-me"></top-book>
      <top-book title="Red Queen" author="Victoria Aveyard" image="red-queen"></top-book>
      <top-book title="Wild Goose Chase" author="Mark Batterson" image="wild-goose-chase"></top-book>
    </div>
  </div>
</template>

<script>
export default {};
</script>
