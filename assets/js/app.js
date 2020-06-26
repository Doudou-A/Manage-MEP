import Vue from 'vue'

new Vue({
  el: '#AddFolder',
  data:{
      seen: true
  }
  });

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