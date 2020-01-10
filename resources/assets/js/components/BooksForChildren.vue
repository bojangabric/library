<template>
  <div class="w-full mt-20">
    <div class="text-4xl font-black uppercase text-gray-800 mb-6">
      Books for children
    </div>
    <div
      class="grid"
      style="grid-template-columns: 300px repeat(3, 1fr);grid-template-rows: repeat(2, 200px);grid-column-gap: 20px;grid-row-gap: 20px;"
    >
      <div style="grid-area: 1 / 1 / 3 / 2;">
        <img class="w-full h-full object-fill rounded" src="images/books/harry-potter.jpg" />
      </div>
      <div style="grid-area: 1 / 2 / 2 / 3;">
        <img class="w-full h-full object-fill rounded" src="images/books/power-of-love.jpg" />
      </div>
      <div style="grid-area: 1 / 3 / 2 / 4;">
        <img class="w-full h-full object-fill rounded" src="images/books/redwall.jpg" />
      </div>
      <div style="grid-area: 1 / 4 / 2 / 5;">
        <img class="w-full h-full object-fill rounded" src="images/books/the-mysterious-lake-bandit.jpg" />
      </div>
      <div style="grid-area: 2 / 2 / 3 / 3;">
        <img class="w-full h-full object-fill rounded" src="images/books/little-red-riding-hood.jpg" />
      </div>
      <div style="grid-area: 2 / 3 / 3 / 4;">
        <img class="w-full h-full object-fill rounded" src="images/books/three-little-pigs.jpg" />
      </div>
      <div style="grid-area: 2 / 4 / 3 / 5;">
        <img class="w-full h-full object-fill rounded" src="images/books/the-last-kids-on-earth.jpg" />
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
