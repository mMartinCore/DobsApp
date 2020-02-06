    <link rel="stylesheet" href="showModal\css\normalize.min.css">
    <link rel="stylesheet" href="showModal\css\animate.min.css">
    <style>
        #btn-close-modal {
            width:100%;
            text-align: center;
            cursor:pointer;
            color:whitesmoke;
        }

    </style>

    <body>
    <div id="modal-02">
        <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
        <div  id="btn-close-modal" class="close-modal-02">
            CLOSE MODAL VIEW HERE
        </div>

        <div class="modal-content">
            <!--Your modal content goes here-->
            <div id="load_show_view">

            </div>
        </div>
    </div>

    <script src="showModal\js\jquery.min.js"></script>
    <script src="showModal\js\animatedModal.js"></script>
    <script>



        $("#demo02").animatedModal({
            animatedIn:'lightSpeedIn',
            animatedOut:'bounceOutDown',
            color:'#3498db',
            // Callbacks
            beforeOpen: function() {
               // alert("The animation was called");
            },
            afterOpen: function() {
               // alert("The animation is completed");
            },
            beforeClose: function() {
         ///alert("The animation was called");
            },
            afterClose: function() {
               //alert("The animation is completed");
            }
        });





    </script>

    </body>
