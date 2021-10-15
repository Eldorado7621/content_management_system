<style>
     
     .ergebnis {
         font-size: 2rem;
         font-family: sans-serif;
         padding: 2rem 0 2rem 2rem;
         color: black;
     }
     
     .toggle {
       
         position: relative;
         display: inline-block;
         width: 3rem;
         height: 1.4rem;
     }
     
     .toggle input {
         display: none;
     }
     
     .roundbutton {
         position: absolute;
         top: 0;
         left: 0;
         bottom: 0;
         right: 0;
         width: 100%;
         background-color: #33455e;
         display: block;
         transition: all 0.3s;
         border-radius: 1.4rem;
         cursor: pointer;
     }
     
     .roundbutton:before {
         position: absolute;
         content: "";
         height: 0.8rem;
         width: 0.8rem;
         border-radius: 100%;
         display: block;
         left: 0.5rem;
         bottom: 0.5rem;
         background-color: white;
         transition: all 0.3s;
     }
     
     input:checked + .roundbutton {
         background-color: #FF6E48;
     }
     
     input:checked + .roundbutton:before  {
         transform: translate(0.8rem, 0);
     }
         </style>

<script>
    var input = document.getElementById('toggleswitch');
    var outputtext = document.getElementById('status');

    input.addEventListener('change',function(){
        if(this.checked) {
            outputtext.innerHTML = "aktiv";
        } else {
            outputtext.innerHTML = "inaktiv";
        }
    });


</script>