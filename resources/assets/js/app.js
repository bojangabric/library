import Flickity from 'vue-flickity';
import './bootstrap';
window.Vue = require('vue');

Vue.component('book', require('./components/home/Book.vue'));
Vue.component('category', require('./components/home/Category.vue'));
Vue.component('audio-books', require('./components/home/AudioBooks.vue'));
Vue.component('audio-book', require('./components/home/AudioBook.vue'));
Vue.component('top-books', require('./components/home/TopBooks.vue'));
Vue.component('top-book', require('./components/home/TopBook.vue'));
Vue.component('top-authors', require('./components/home/TopAuthors.vue'));
Vue.component('top-author', require('./components/home/TopAuthor.vue'));
Vue.component('books-for-children', require('./components/home/BooksForChildren.vue'));
Vue.component('popular-categories', require('./components/home/PopularCategories.vue'));

Vue.component('store-books', require('./components/store/Books.vue'));
Vue.component('store-book', require('./components/store/Book.vue'));

Vue.component('filter-books', require('./components/filter/FilterBooks.vue'));
Vue.component('filter-category', require('./components/filter/Category.vue'));
Vue.component('filter-price', require('./components/filter/PriceSlider.vue'));
Vue.component('filter-ratings', require('./components/filter/StarRatings.vue'));
Vue.component('filter-reviews', require('./components/filter/UserReviews.vue'));

const app = new Vue({
  el: '#app',
  components: {
    Flickity
  },
  data() {
    return {
      flickityOptions: {
        prevNextButtons: true,
        pageDots: false,
        wrapAround: true
      },
      flickityLoginOptions: {
        prevNextButtons: false,
        pageDots: true,
        wrapAround: true
      }
    };
  }
});
