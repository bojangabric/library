<template>
  <div class="w-full xl:w-1/3 sm:pb-0 pt-16 xl:pt-0">
    <div class="flex items-center pb-6">
      <div class="text-2xl lg:text-3xl font-black uppercase text-gray-800 whitespace-no-wrap">
        Top authors
      </div>
    </div>
    <div class="md:flex xl:block">
      <top-author
        class="mr-12"
        name="J.K. Rowling"
        description="British author and film producer"
        image="jk-rowling"
      ></top-author>
      <top-author
        class="mr-12"
        name="William Shakespeare"
        description="Greatest writer in the English language"
        image="shakespeare"
      ></top-author>
      <top-author name="Stephen King" description="American author of horror novels" image="stephen-king"></top-author>
    </div>
  </div>
</template>

<script>
export default {};
</script>
