<template>
  <div class="mt-2">
    <div class="flex items-center justify-between" v-for="i in ['Excellent', 'Good', 'Fair', 'Poor', 'Bad']">
      <div class="flex items-center">
        <input type="checkbox" class="form-checkbox mr-1" :name="i.toLowerCase()" :id="i.toLowerCase()" />
        <label class="ml-1 text-gray-700" :for="i.toLowerCase()">
          <div>{{ i }}</div>
        </label>
      </div>
      <div class="text-sm text-gray-700">{{ Math.ceil(Math.random() * 100) }}</div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
