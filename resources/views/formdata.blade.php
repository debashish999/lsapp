<h2>Sign in</h2>

    <!-- @if($errors ->any())
    <ul>
        @foreach($errors-> all() as $err)
            <li>{{ $err }}</li>


        @endforeach
    </ul>

    @endif -->
        <form method="POST" action="formdata">
        @csrf
        <div>
        <input type="text" placeholder="Username" id="username" name='username' />
        </div>

        <span style="color: red;">@error('username'){{ $message }} @enderror</span>


        <div>
        <input type="password", placeholder="password", id = 'password' name="password" />
    </div>
            
    <span style="color: red;">@error('password'){{ $message }} @enderror</span>


    <div>
        <input type="submit" value="Login" id ='log'/>
    </div>

  
  
  
  
    <style>



body{
    background:radial-gradient(white,gray);
}
.container{
    margin-left: 30%;
    margin-top: 7%;
    width: 30%;
    background: whitesmoke;
    height: 350px;
    border-radius: 40px;
    padding-left: 2%;
    padding-top: 2%;

}
#username{
    margin: 2%;
    border-radius: 20px;
    height: 40px;
    border:none;
    width:20%;
    margin-left: 20%;
    padding-left: 8%;
}
::placeholder {
    color: grey;
    font-size: 1em;
  }

#password{
    border-radius: 20px;
    height: 40px;
    border: none;
    width: 20%;
    margin-top: 1%;
    padding-left: 6.5%;
    margin-left: 20%;
}



#log{
    width: 8%;
    border: none;
    margin: 5%;
    margin-left: 25%;
    height: 30px;
    border-radius: 30px;
    background: linear-gradient(white,rgb(157, 235, 157));

}
h2{
    margin-top:3%;
    margin-left: 25%;
    color:white;
    text-shadow: 2px 2px 4px #000000;
}

.last{
    color: lightgray;
    margin-left: 5%;
    margin-top: 5%;

}
a{
    text-decoration: none;
    
    font-weight: bold;
    color:lightgreen ;
   
}
a:hover{
    text-decoration: underline;
}



</style>