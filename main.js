const { createApp } = Vue

createApp({
data() {
    return {
        api:'server.php',
        data:[],
    }
},
mounted(){
    this.chiamataApi()
},
methods:{
    chiamataApi(){
        axios.get(this.api).then((res)=>{
            this.data = res.data
        })
        
    }
}
}).mount('#app')