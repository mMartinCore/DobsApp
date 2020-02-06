 <template>
<ul class="nav-bar">

        <!-- Notifications Menu -->
        <li class=" nav-item dropdown ">
            <!-- Menu toggle button -->
            <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
           
            <span class="label label-warning" id="count-notification">{{ corpsenotification.length}}</span> <span class="caret"></span>
            </a>
            <div  class="dropdown-menu" aria-labelledby="navbarDropdown">

                  <li>   <a class="header" v-if="corpsenotification.length>0">You have {{ corpsenotification.length}} unread notifications</a></li>
                       <li>
                          <a class="dropdown-item" v-on:click="markAsRead(mynotes)"  v-for="mynotes in corpsenotification"  v-bind:key="mynotes.id">
                        <i class="fa fa-book" aria-hidden="true"></i>      {{ mynotes.data['newCorpse']['parish'] }} post a new corpse <b> {{ mynotes.created_at | myOwnTime }}</b>
                      </a>
                         <a class="footer"  v-on:click="markAllNewCorpseNotifyAsRead()" v-if="corpsenotification.length > 0">Mark all as read</a>
                    </li>

                   <li> <a class="header "  v-if="corpsenotification.length==0"> You have no notifications</a></li>

            </div>
          </li>

</ul>


</template>

<script>
    export default {
          props: ['corpsenotification'],


          methods:{
              markAsRead: function(mynotes){
                  var data={
                        not_id : mynotes.id,
                    mynotes_id :mynotes.data['newCorpse']['id'],
                  };


                    axios.post("/markAsRead",data).then(response =>{
                        window.location.href="/readNewCorpseNotify/"+data.mynotes_id;
                    });

              },
                  markAllNewCorpseNotifyAsRead:function() {
                      axios.post("/markAllNewCorpseNotifyAsRead").then(response =>{
                        window.location.href="/allReadCorpseNofication/";
                    });
         }


          }
    //     mounted() {
    //     Echo.join(`users`)
    // .here((users) => {
    //     //
    // })
    // .joining((user) => {
    //     console.log(user.name);
    // })
    // .leaving((user) => {
    //     console.log(user.name);
    // });



    //     }
    }
</script>
