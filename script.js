const app  = new Vue({

    el: '#app',
    

    created(){
        axios.get('http://localhost/php-ajax-dischi/server.php').then((response) => {
            this.discCollection = response.data.response;
        });
    },

    data:{

        discCollection: [],
        
    }
});
console.log('ciao')

