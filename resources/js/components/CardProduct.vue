<template>
  <div class="grid grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-3 mb-6">
    <div class="flex bg-white rounded-md p-4" style="background-color: #ffffff" v-for="(content, index) in contents" :key="content.id">
      <div class="flex justify-center items-center bg-fill rounded-md p-8">
        <img class="w-12" :src="contents[index].image" alt="Изображение">
      </div>
      <div class="flex flex-col justify-between w-full pl-4">
        <div class="">
          <h5 class="">{{ contents[index].name }}</h5>
          <div class="font-medium text-light">{{ contents[index].price }} ₽ за {{ contents[index].number }} шт.</div>
        </div>
        <div class="flex">
          <button class="btn btn-fill">В корзину</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
const axios = require('axios');
export default {
name: "CardProduct",
  data() {
    return {
      contents: null,
    }
  },
  mounted() {
    axios
        .get('/api/products')
        .then((response) => (this.contents = response.data));
  }
}
</script>
