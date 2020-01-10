import Flickity from "vue-flickity";
import "./bootstrap";
window.Vue = require("vue");

Vue.component("book", require("./components/Book.vue"));
Vue.component("category", require("./components/Category.vue"));
Vue.component("audio-books", require("./components/AudioBooks.vue"));
Vue.component("audio-book", require("./components/AudioBook.vue"));
Vue.component("top-books", require("./components/TopBooks.vue"));
Vue.component("top-book", require("./components/TopBook.vue"));
Vue.component("top-authors", require("./components/TopAuthors.vue"));
Vue.component("top-author", require("./components/TopAuthor.vue"));
Vue.component(
  "books-for-children",
  require("./components/BooksForChildren.vue")
);
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
