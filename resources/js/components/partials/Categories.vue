<template>
<div class="container">
 <div class="box-categories">
  <h2 class="text-center py-5">Seleziona una categoria</h2>        
  <div class="d-flex justify-content-center align-content-center flex-wrap">
      

      <a class="box-category text-center btn-category d-flex align-items-center justify-content-center" v-for="(category, index) in categories" :key="index" :href="'freelancerList/'+ category.name">{{category.name}}</a>   

     
    </div>
  </div>
</div>
</template>

<script>
export default {
  name: "Categories",

   data(){
    return {
      // categories: ['Support Specialist', 'Computer Programmer', 'Graphic Designer', 'Software Developer', 'Web Developer', 'Systems Analyst', 'Network Engineer', 'User Experience Designer', 'Database administrator', 'Software Engineer', 'It Security Specialist', 'Data Scientist'],

      apiUrl: 'http://127.0.0.1:8000/api/',

      category:"",

      categories:[],

      name:this.$route.params.name
    }

  },

  methods:{

     getCategory(){

      axios.get(this.apiUrl)
      .then(res =>{
        this.categories = res.data.categories;

        // let cat = this.categories.find(item => item.name);
        // this.category = cat;
       
        
        // console.log('user della chiamata',this.categories);
        console.log(res.data.categories);
        console.log(this.category);
        // return this.category

      });
    },
  },

  mounted(){
    this.getCategory()
  }
  }



</script>

<style lang="scss" scoped>

 .box-categories{
   width: 100%;
   padding: 50px 0 50px 0;
  //  height: 350px;
     .btn-category{
       border-radius: 10px;
       margin: 10px;
       text-transform: uppercase;
       min-width: 100px;
       font-size: 14px !important;
       height: 100px;
      // background-color: #5165F6;
       background-color: white;
       color: #2d5e8b;
      // color: white;
         &:hover{
            // background-color: #6b7add;
            box-shadow: 0px 1px 20px #1B3952;
            transition: 0.3s;
         }
     }

    @media (max-width: 550px) {
      .btn-category{
        background-color: white;
        color: #5165F6;
        font-size: 2.5vw !important;
        box-shadow: 0px 1px 10px rgb(255, 255, 255, 0.5);
         &:focus{
            background-color: #6b7add;
            box-shadow: 0px 1px 20px rgb(255, 255, 255, 0.5);
            transition: 0.3s;
            color: white;
         }
         &:hover{
            color: #5165F6;
            box-shadow: 0px 1px 20px rgb(255, 255, 255, 0.5);
            transition: 0.3s;
         }
      }
}
}


// .box-categories{
 
//   margin: 50px 200px;

//   .btn-category{
   
//     height: 100px;
//     margin: 5px;
//     width: calc(100% / 7);
//   }
// }

.box-categories{
  min-height: 500px;
  .btn-category{
   
    height: 100px;
    margin: 5px;
    width: calc(100% / 7);
    font-size: 1vw;
    text-transform: uppercase;
  }
  
  .cat-card{
    border-radius: 20px;
    box-shadow: 0px 10px 10px rgb(169,169,169);
    &:hover {
    a{
      color: white;
    }
    
    box-shadow: 0px 10px 10px rgb(169,169,169);
    transition: transform .3s;
    transform: scale(1.05);
    
  }
}
}


</style>