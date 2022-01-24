24/01/2022
1. search https://vuejs.org/
2. tab editor https://jsfiddle.net/
get started vue.js
-> HTML
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<div id="app">
  <p>{{ title }}</p>
</div>

JS
new Vue({
	el : '#app',
  data : {
  	title : 'Hello Mimi'
  }
});