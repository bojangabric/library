<template>
  <div class="flex justify-center">
    <filter-books :sidebarOpen="sidebarOpen" :toggleSidebar="toggleSidebar"></filter-books>
    <div class="flex flex-col lg:w-full lg:max-w-3xl xl:w-4/5">
      <div class="lg:flex justify-between items-center p-2">
        <div class="text-lg text-gray-800 font-medium">
          Showing 58 Books
        </div>
        <div class="flex flex-col sm:flex-row sm:justify-between">
          <button
            @click="sidebarOpen = true"
            class="bg-blue-500 rounded justify-center text-white py-2 px-6 flex items-center lg:hidden my-4"
          >
            <svg class="h-6 w-6 fill-current mr-2" viewBox="0 0 24 24">
              <path
                d="M3 6a1 1 0 011-1h16a1 1 0 110 2H4a1 1 0 01-1-1zM3 12a1 1 0 011-1h16a1 1 0 110 2H4a1 1 0 01-1-1zM4 17a1 1 0 100 2h7a1 1 0 100-2H4z"
              />
            </svg>
            Filter
          </button>
          <div class="flex">
            <label class="flex items-center w-full text-gray-700">
              <span class="mr-3 w-20">Sort by:</span>
              <select class="form-select py-2 w-full">
                <option>Popularity</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Highest Rating</option>
                <option>Most Reviews</option>
              </select>
            </label>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap justify-between mb-6">
        <store-book title="Red Queen" image="red-queen" price="15"></store-book>
        <store-book title="Wild Goose Chase" image="wild-goose-chase" price="17"></store-book>
        <store-book title="Unravel me" image="unravel-me" price="19"></store-book>
        <store-book title="Game of Thrones" image="got" price="20"></store-book>
        <store-book title="Red Queen" image="red-queen" price="15"></store-book>
        <store-book title="Wild Goose Chase" image="wild-goose-chase" price="17"></store-book>
        <store-book title="Unravel me" image="unravel-me" price="19"></store-book>
        <store-book title="Game of Thrones" image="got" price="20"></store-book>
        <store-book title="Wild Goose Chase" image="wild-goose-chase" price="17"></store-book>
        <store-book title="Wild Goose Chase" image="wild-goose-chase" price="17"></store-book>
        <store-book title="Unravel me" image="unravel-me" price="19"></store-book>
        <store-book title="Game of Thrones" image="got" price="20"></store-book>
      </div>
      <div class="mx-auto flex text-blue-500">
        <div class="h-10 w-10 bg-white text-gray-500 shadow flex items-center justify-center rounded mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-6 w-6">
            <path d="M13.7 15.3a1 1 0 01-1.4 1.4l-4-4a1 1 0 010-1.4l4-4a1 1 0 011.4 1.4L10.42 12l3.3 3.3z" />
          </svg>
        </div>
        <div class="h-10 w-10 bg-blue-500 text-white shadow flex items-center justify-center rounded mr-2">1</div>
        <div class="h-10 w-10 bg-white shadow flex items-center justify-center font-medium rounded mr-2">2</div>
        <div class="h-10 w-10 bg-white shadow flex items-center justify-center font-medium rounded">3</div>
        <div class="h-10 w-10 bg-white flex shadow items-center justify-center font-medium rounded ml-2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current h-6 w-6">
            <path d="M10.3 8.7a1 1 0 011.4-1.4l4 4a1 1 0 010 1.4l-4 4a1 1 0 01-1.4-1.4l3.29-3.3-3.3-3.3z" />
          </svg>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      sidebarOpen: false
    };
  },
  methods: {
    toggleSidebar() {
      this.sidebarOpen = !this.sidebarOpen;
    }
  }
};
</script>
