import "./bootstrap";
import Vue from "vue";
import ArticleLike from "./components/ArticleLike";
import ArticleTagsInput from "./components/ArticleTagsInput.vue";

const app = new Vue({
    el: "#app",
    components: {
        ArticleLike,
        ArticleTagsInput
    }
});
