<template>
   <div class="wrapper">
        <h2 class="text-center p-2 text-white bg-primary mt-5">Mimo Page</h2>
        
        <table class="table">
            <thead>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Time</th>
                  <th scope="col">Type</th>
                  <th scope="col">Action</th>
            </thead>
            

            <tbody  v-for="transaksi in transaction" :key="transaksi.id">
                <tr>
                <th scope="row">{{ transaksi.id }}</th>
                <td>{{ transaksi.title }}</td>
                <td>{{ transaksi.amount }}</td>
                <td>{{ transaksi.time }}</td>
                <td>{{ transaksi.type }}</td>
                <td><button class="btn btn-danger btn-sm">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: 'Transaksi',
    created() {
        this.loadData();
    },
    methods: {
        loadData() {
            let url = this.url + '/api/transaction';
            this.axios.get(url).then(response => {
                this.transaction = response.data
                console.log(this.transaction);
            });
            
        }
    },
        mounted() {
            console.log('Transaksi list component mounted');
        },
          data() {
            return {
                url: document.head.querySelector('meta[name="url"]').content,
                transaction:[]
            }
        }
      
}
</script>
