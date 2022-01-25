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

25/01/2022
events & methods
-> HTML
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<div id="app">
<button v-on:click="changeTitle">Change Title</button>
  <p>{{ title }}</p>
</div>

JS
new Vue({
	el : '#app',
  data : {
  	title : 'Hello Mimi'
  },
  methods :{
  changeTitle(){
  this.title = 'changed title';
  }
  }
});
=================
binding html
HTML
-> <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<div id="app">
<input type="text" v-on:input="cssClass =$event.target.value">
  <p v-bind:class="cssClass">Class : {{ cssClass }}</p>
</div>

JS
new Vue({
	el : '#app',
  data : {
  	cssClass : ''
  }
});

==================
langkah-langkah menginstal vue.js
1. install nodejs (periksa node -v)
2. install npm (periksa npm -v)
3. npm install -g @vue/cli
4. periksa vue --version
5. vue create vue-project
6 pilih manually select features
7. perintah npm run serve pada folder projek (untuk menjalankan projek vuejs)
8. klik url localhost:8080
=========================

methods
<template>
 <h2> Nama : {{ nama }}</h2>
 <button v-on:click="ChangeName">Change Name </button>
</template>

<script>

export default {
  name: 'App',
  data(){
    return{
 nama: "Rahmi",
    };
   
  },
  methods:{
    ChangeName(){
      this.nama = "Niko";
    }
  }
}
</script>
=====================
data binding
<template>
 <a v-bind:href="url"> Go To Rahmi</a>
</template>

<script>

export default {
  name: 'App',
  data(){
    return{
      url :"https://rahmi.com",
    };
   
  }
}
</script>
==============
two-way data binding
<template>
<input type="text" v-model="nama">
 {{nama}}
</template>

<script>

export default {
  name: 'App',
   data(){
    return{
      nama: "niko",
    };
   
  }
}
</script>
==============
conditional & looping
<template>
<div v-if="products.length">
<ul>
<li v-for="item in products" :key="item.id">
{{item.title}} - {{item.price}}
  </li>
</ul>
</div>
<div v-else>
<p> No Data Found</p>
</div>
</template>

<script>

export default {
  name: 'App',
   data(){
    return{
    
      products:[
       {id: 1, title:"Product 1", price:3000},
       {id: 2, title:"Product 2", price:4000},
       {id: 3, title:"Product 3", price:5000},
       {id: 4, title:"Product 4", price:6000},
      ]
    };
   
  }
}
</script>
=================