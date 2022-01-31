export <template>
   <div class="wrapper">
        <h2 class="text-center p-2 text-white bg-primary mt-5">Post Page</h2>
          <table class="table">
              <thead>
                 <th scope="col">No</th>
                  <th scope="col">Title</th>
                  <th scope="col">Content</th>
                  <th scope="col">Action</th>  
              </thead>
              <tbody v-for="pos in post" :key="pos.id">
                  <tr>
                  <th scope="row">{{pos.id}}</th>
                  <td>{{pos.title}}</td>
                  <td>{{pos.content}}</td>
                  <td><button class="btn btn-danger btn-sm">Delete</button></td>
                  </tr>
              </tbody>
          </table>
  </div>
</template>

<script>
export default {
     name: 'Post',
     created(){
         this.loadData();
     },
     methods: {
         loadData() {
             let url = this.url + '/api/post';
             this.axios.get(url).then(response => {
                 this.post = response.data.data
                 console.log(this.post);
             });
         }
     },
     mounted()
     {
         console.log('Post List Component Mounted');
     },
     data() {
         return {
             url: document.head.querySelector('meta[name = "url"]').content,
             post :[]
         }
     }
}
</script>

