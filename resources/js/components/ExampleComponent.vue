 <template>
      <!-- Notifications Menu -->
        <li class="dropdown notifications-menu nav-bar">
            <!-- Menu toggle button -->
      <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >

            <i class="fa fa-flag" aria-hidden="true" style="color:blanchedalmond"></i>     <span class="label label-warning" id="count-notification">{{ corpsenotification.length}}</span>
            </a>
            <ul class="dropdown-menu">

                    <li> <a a class="header" v-if="corpsenotification.length>0">You have {{ corpsenotification.length}} unread notifications </a></li>
                     <li >  <a class="header" v-if="corpsenotification.length==0"> You have no notifications</a> </li>
                    <!-- Inner Menu: contains the notifications -->
                  <li>
                    <ul class="menu">
                        <div class="dropdown-item" v-on:click="markAsReadx(notes)"  v-for="notes in corpsenotification"  v-bind:key="notes.id">
                         <a href="" class="body">
                             <i class="fa fa-book" aria-hidden="true"></i>  post a new corpse <b> {{ notes.created_at | myOwnTime }}</b>
                         </a>
                      </div>
                             <a class="footer"  v-on:click="markAllNewCorpseNotifyAsReadx()" v-if="corpsenotification.length > 0">Mark all as read</a>
                        </ul>
                     </li>
                 </ul>
             </li>
</template>

<script>
    export default {
          props: ['corpsenotification'],


          methods:{
              markAsReadx: function(mynotes){
                  var data={
                        not_id : mynotes.id,
                    mynotes_id :mynotes.data.newCorpse
                  };


                    axios.post("/markAsRead",data).then(response =>{
                        window.location.href="/readNewCorpseNotify/"+data.mynotes_id;
                    });

              },
                  markAllNewCorpseNotifyAsReadx:function() {
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
