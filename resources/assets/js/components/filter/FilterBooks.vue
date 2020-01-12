<template>
  <div
    :class="sidebarOpen ? 'translate-x-0 ease-out ' : '-translate-x-full ease-in'"
    class="transform transition duration-100 bg-white border self-start whitespace-no-wrap p-3 lg:rounded lg:translate-x-0 mr-4 z-30 fixed inset-y-0 left-0 w-64 lg:w-auto overflow-y-auto lg:overflow-visible lg:static lg:block"
  >
    <div class="absolute top-0 left-0 pl-2 pt-3 lg:hidden">
      <button @click="toggleSidebar" class="block text-gray-600 hover:text-gray-800">
        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
          <path
            d="M17.293 18.707a1 1 0 001.414-1.414L13.414 12l5.293-5.293a1 1 0 00-1.414-1.414L12 10.586 6.707 5.293a1 1 0 00-1.414 1.414L10.586 12l-5.293 5.293a1 1 0 101.414 1.414L12 13.414l5.293 5.293z"
          />
        </svg>
      </button>
    </div>
    <div class="mt-8 lg:mt-0">
      <div class="text-gray-800 font-medium text-xl">Filter</div>
      <div class="py-4 border-b">
        <div class="text-blue-500 flex justify-between items-center">
          <div class="font-medium">Book name</div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-6 h-6 -mt-1">
            <path d="M15.3 10.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z" />
          </svg>
        </div>
        <div><input class="form-input py-1 w-full mt-2" type="text" placeholder="Search by book name..." /></div>
      </div>
      <div class="py-4 border-b">
        <div class="text-blue-500 flex justify-between items-center">
          <div class="font-medium">Price</div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-6 h-6 -mt-1">
            <path d="M15.3 10.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z" />
          </svg>
        </div>
        <div>
          <filter-price></filter-price>
        </div>
      </div>
      <div class="py-4 border-b">
        <div class="text-blue-500 flex justify-between items-center">
          <div class="font-medium">Category</div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-6 h-6 -mt-1">
            <path d="M15.3 10.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z" />
          </svg>
        </div>
        <div>
          <filter-category class="mt-2" type-name="Comic" count="50"></filter-category>
          <filter-category type-name="Horror" count="50"></filter-category>
          <filter-category type-name="Sci-Fi" count="50"></filter-category>
          <filter-category type-name="Cookbooks" count="50"></filter-category>
        </div>
      </div>
      <div class="py-4 border-b">
        <div class="text-blue-500 flex justify-between items-center">
          <div class="font-medium">Ratings</div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-6 h-6 -mt-1">
            <path d="M15.3 10.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z" />
          </svg>
        </div>
        <div>
          <filter-ratings></filter-ratings>
        </div>
      </div>
      <div class="py-4">
        <div class="text-blue-500 flex justify-between items-center">
          <div class="font-medium">User review</div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-6 h-6 -mt-1">
            <path d="M15.3 10.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z" />
          </svg>
        </div>
        <div>
          <filter-reviews></filter-reviews>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['sidebarOpen', 'toggleSidebar']
};
</script>
