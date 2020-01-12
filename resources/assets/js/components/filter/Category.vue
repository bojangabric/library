<template>
  <div class="flex items-center justify-between">
    <div class="flex items-center">
      <input type="checkbox" class="form-checkbox mr-1" :name="typeName.toLowerCase()" :id="typeName.toLowerCase()" />
      <label class="ml-1 text-gray-700" :for="typeName.toLowerCase()">{{ typeName }}</label>
    </div>
    <div class="text-sm text-gray-700">{{ count }}</div>
  </div>
</template>

<script>
export default {
  props: ['typeName', 'count']
};
</script>
