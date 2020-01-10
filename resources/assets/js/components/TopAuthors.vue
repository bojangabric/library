<template>
  <div class="w-1/3">
    <div class="flex items-center pb-6">
      <div class="text-4xl font-black uppercase text-gray-800">
        Top authors
      </div>
      <a
        href="#!"
        class="ml-4 sm:text-sm border bg-gray-200 text-gray-800 rounded px-2 py-1 mt-1 hover:bg-gray-300 transition-colors ease-in duration-100"
      >
        Show all
      </a>
    </div>
    <top-author
      name="J.K. Rowling"
      description="British author, film producer, screenwriter, and philanthropist"
      image="jk-rowling"
    ></top-author>
    <top-author
      name="William Shakespeare"
      description="Greatest writer in the English language"
      image="shakespeare"
    ></top-author>
    <top-author
      name="Stephen King"
      description="American author of horror and supernatural fiction novels"
      image="stephen-king"
    ></top-author>
  </div>
</template>

<script>
export default {};
</script>
