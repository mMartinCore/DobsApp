 <template>

        <!-- Notifications Menu -->
        <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
            <span class="label label-warning" id="count-notification">{{ corpsenotification.length}}</span>
            </a>
            <ul class="dropdown-menu">

                    <li class="header" v-if="corpsenotification.length>0">You have {{ corpsenotification.length}} notifications</li>
                     <li class="header"  v-if="corpsenotification.length==0"> You have no notifications</li>
                    <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">

                            <li  v-for="mynotes in corpsenotification"  v-bind:key="mynotes.id"><!-- start notification -->
                            <a href="#">
                                <i class="fa fa-users text-aqua"></i>       {{ mynotes.data['newCorpse']['first_name'] }}{{ mynotes.created_at |myOwnTime }}
                            </a>
                            </li>
                            <!-- end notification -->
                          </ul>
                    </li>
                   <li class="footer" v-if="corpsenotification.length > 0"><a href="#">View all</a></li>
            </ul>
          </li>



</template>

<script>
    export default {
          props: ['corpsenotification'],
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
