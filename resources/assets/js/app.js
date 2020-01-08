import Flickity from "vue-flickity";
import "./bootstrap";
window.Vue = require("vue");

Vue.component("book", require("./components/Book.vue"));
Vue.component("category", require("./components/Category.vue"));
Vue.component(
  "popular-categories",
  require("./components/PopularCategories.vue")
);

const app = new Vue({
  el: "#app",
  components: {
    Flickity
  },
  data() {
    return {
      flickityOptions: {
        prevNextButtons: true,
        pageDots: false,
        wrapAround: true
      }
    };
  }
});
