import Vue from 'vue'

new Vue({
  el: '#components-AddForm',
  data: function () {
    return{
      seen: true
    }
  }
});

Vue.component('button-counter', {
  data: function () {
    return{
      counter: 0
    }
  },
  template: '<button v-on:click="counter++">Vous m\'avez cliqué {{ counter }} fois.</button>'
});

new Vue({ el: '#example-1' })

new Vue({
  el:'#AddSubFolder',
  data:{
      seen: true
  }
  });

new Vue({
  el:'#top',
  data:{
      seen: true
  }
  });

new Vue(
    {
      el: '#message',
      data: {
          message: 'Hello Vue !'
      }
  }
)

const MonComposant = {
  data() {
    return  {name: server} ;
  }
}

new Vue({
  el: '#name',
  components: {
    MonComposant
  },
})
            new Vue({
                el:'#okey',
                data:{
                    seen: true
                }
                });
            new Vue({
                el:'#oula',
                data:{
                    seen: true
                }
                });