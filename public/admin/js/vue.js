





// new Vue({
//   el: '#app',

//   data: {

//     precoVenda:'',
//   },
  
//   methods: {
    
//     maskCurrency:function(field,e){
//       var input = this[field] += ( e?e.key:'');
//       var number = input.replace(/[^\d]/g, '')
//       number = (parseFloat(number) || 0)/100;
//       this[field] = 'R$ ' + number.toFixed(2).replace('.',',').replace(/\B(?=(?:\d{3})+(?!\d))/g, '.');
//     }
//   },
//   ready:function(){
//       this.maskCurrency('precoVenda');
//   }
// })