var plus=document.getElementsByClassName('plus');
        var minus=document.getElementsByClassName('minus');
        for(i=0;i<plus.length;i++){
            plus[i].onclick=function(){
                var outer=this.parentNode;
                var inner=outer.children;
                inner[1].value++;
            }
            minus[i].onclick=function(){
                var outer=this.parentNode;
                var inner=outer.children;
                if(inner[1].value>0){
                    --inner[1].value;
                }                   
            }                   
        }   

        function Check(){
            let n1 = document.getElementById("num_iphone").value;
            let n2 = document.getElementById("num_ipad").value;
            let n3 = document.getElementById("num_airpod").value;
            let x = document.getElementById("m_username").value;
            let y = document.getElementById("m_password").value;
            let s = document.getElementById("Shipping").value;
            if (n1==0&&n2==0&&n3==0){
                alert("Please choose at least one item.")
                return false;
            }
            if (x==""||y==""){
                alert("Please enter your username or password.")
                return false;
            }  
            if (x[x.length-1]!="m"||x[x.length-2]!="o"||x[x.length-3]!="c"||x[x.length-4]!="."){
                alert("The form of email address is not true.")
                return false;
            }
            let a = "Your account number is "+ x + ", Password is " + y;
            alert(a);
        }