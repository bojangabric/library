<template>
  <div class="w-full sm:w-1/3 pr-2">
    <div class="rounded shadow-md overflow-hidden">
      <img
        style="height:18rem;"
        class="w-full object-fill object-center"
        :src="'images/' + image + '.jpg'"
        alt=""
      />
    </div>
  </div>
</template>

<script>
export default {
  props: ["image"]
};
</script>
