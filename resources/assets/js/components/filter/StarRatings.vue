<template>
  <div class="mt-2">
    <div class="flex items-center justify-between" v-for="i in [5, 4, 3, 2, 1]">
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox mr-1" :name="i + 'stars'" :id="i + 'stars'" />
        <label class="ml-1 mr-6 flex text-gray-700 items-center" :for="i + 'stars'">
          <div class="mr-1 w-12">{{ i }} stars</div>
          <svg
            class="h-5 w-5 text-yellow-500 fill-current"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            v-for="n in i"
          >
            <path
              d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
            />
          </svg>
        </label>
      </div>
      <div class="text-sm text-gray-700">{{ Math.ceil(Math.random() * 150) }}</div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
